@extends('layouts.app')

@section('title', 'Salat Timer')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">

                    <h1 class="text-center">Salat Timer is here <a href="{{ route('salat-times.index') }}" class="btn btn-primary">Setup Salat Time</a></h1>
                    <p class="text-info text-center">*This system is remind you before 10 minutes every Salat time</p>
                    <ul>
                        @foreach ($salatTimes as $salatTime)
                            <li style="font-size:16px; font-weight:600">{{ $salatTime->name }} - {{ \Carbon\Carbon::createFromFormat('H:i:s', $salatTime->time)->format('h:i A') }}</li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection