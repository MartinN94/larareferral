@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}

                        <ul class="list-group mt-3">
                            <li class="list-group-item">Name: {{ Auth::user()->name }}</li>
                            <li class="list-group-item">Email: {{ Auth::user()->email }}</li>
                            @if (count(Auth::user()->referrals) < 5)
                            <li class="list-group-item">Referral link: {{ Auth::user()->referral_link }}</li>
                            @endif
                            <li class="list-group-item">Wallet: {{ Auth::user()->wallet ?? 0 }}</li>
                            <li class="list-group-item">Referrals: {{ count(Auth::user()->referrals) ?? 0 }}</li>
                        </ul>
                </div>
            </div>
            <br>
            <br>
            @if (Auth::user()->unreadNotifications->isNotEmpty())
            <div class="card">
                <div class="card-header" role="alert">
                    {{ __('Users created by your referral link:') }}
                </div>
                    <div class="card-body">
                        @foreach (Auth::user()->unreadNotifications as $notification)
                        <ul class="list-group mt-3">
                            <li class="list-group-item">Name: {{ $notification->data['username'] }}, Email: {{ $notification->data['user_email'] }}   <a href="{{ $notification->markAsRead() }}">Mark as read</a></li>
                        </ul>
                        @endforeach
                    </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
