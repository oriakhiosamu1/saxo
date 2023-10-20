@extends('layout.auth')

@section('content')
<div class="user">

    <div class="user-name">
        <h2>Choose a Withdrawal - Methods</h2>
    </div>

    <div class="card">

        <div class="coincloud">

            <div class="logo">
                <img src="{{ asset('images/Bitcoin-Logo.png') }}" alt="coincloud" width="300">
            </div>

            <div class="details">
                <p><a href="withdraw_method">Withdraw using Bitcoin</a></p>
            </div>

            <div class="short">
                <small><a href="withdraw_method">Most Popular</a></small>
                <small>Fastest, secured and flexible</small>
            </div>

        </div>

        <div class="coincloud">
            <div class="logo">
                <img src="{{ asset('images/Ethereum-Logo.png') }}" alt="coincloud" width="300">
            </div>

            <div class="details">
                <p><a href="withdraw_method">Withdraw using Ethereum</a></p>
            </div>

            <div class="short">
                <small><a href="withdraw_method">Fast</a></small>
                <small>Secured</small>
            </div>
        </div>

    </div>

    <div class="card">

        <div class="coincloud">

            <div class="logo">
                <img src="{{ asset('images/paypal-logo.png') }}" alt="coincloud" width="300">
            </div>

            <div class="details">
                <p><a href="">Withdraw using Paypal</a></p>
            </div>

            <div class="short">
                <small><a href="">Most Popular</a></small>
                <small>Fastest, secured and flexible</small>
            </div>

        </div>

        <div class="coincloud">
            <div class="logo">
                <img src="{{ asset('images/bank-logo_6020dbd0d1652.png') }}" alt="coincloud" width="300">
            </div>

            <div class="details">
                <p><a href="bank_withdraw">Withdraw using Bank</a></p>
            </div>

            <div class="short">
                <small><a href="bank_withdraw">Fast</a></small>
                <small>Secured</small>
            </div>
        </div>

    </div>

</div>
@endsection
