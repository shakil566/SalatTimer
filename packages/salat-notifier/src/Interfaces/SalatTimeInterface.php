<?php

namespace Shakil\SalatNotifier\Interfaces;

interface SalatTimeInterface
{
    public function getSalatTimes();
    public function notifyBeforeSalat();
}
