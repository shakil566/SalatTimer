<?php

namespace Shakil\SalatNotifier;

use Shakil\SalatNotifier\Interfaces\SalatTimeInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class SalatTime implements SalatTimeInterface
{
    public function getSalatTimes()
    {
        return DB::table('salat_times')->where('status', '1')->get(); //only active prayer time
    }

    public function notifyBeforeSalat()
    {
        $salatTimes = $this->getSalatTimes();
        $webhookUrl = config('salat-notifier.slack_webhook_url');

        foreach ($salatTimes as $time) {
            $timeBefore = \Carbon\Carbon::parse($time->time)->subMinutes(10);
            info('Salat:  '.$time->name.' at '.$time->time); //check in laravel log

            //here check time before 10mn from prayer time
            if (now()->between($timeBefore, \Carbon\Carbon::parse($time->time))) {
                info('Remider:  '.$time->name.' at '.$time->time); //check in laravel log
                
                //send message to slack api webhooks
                Http::post($webhookUrl, [
                    'text' => "Reminder: {$time->name} prayer is in 10 minutes. Please ready for prayer!"
                ]);
            }
        }
    }
}
