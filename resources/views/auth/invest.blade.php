@extends('layout.auth')

@section('content')
<div class="user">

    <div class="user-name">
        <h2>Choose a Deposit - Payment Methods</h2>
    </div>

    <div class="card">

        <div class="coincloud">

            <div class="logo">
                <img src="{{ asset('images/coincloud.webp') }}" alt="coincloud" width="300">
            </div>

            <div class="details">
                <p><a href="coincloud">Make Payment Using USDT Directly From Coincloud</a></p>
            </div>

            <div class="short">
                <small><a href="coincloud">Most Popular</a></small>
                <small>Fastest, secured and flexible</small>
            </div>

        </div>

        <div class="coincloud">
            <div class="logo">
                <img src="{{ asset('images/bitpay.png') }}" alt="coincloud" width="300">
            </div>

            <div class="details">
                <p><a href="bitpay">Make Payment Using Bitcoin</a></p>
            </div>

            <div class="short">
                <small><a href="bitpay">Fast</a></small>
                <small>Secured</small>
            </div>
        </div>

    </div>

    <div class="card">

        <div class="coincloud">

            <div class="logo">
                <img src="{{ asset('images/dogecoin.png') }}" alt="coincloud" width="300">
            </div>

            <div class="details">
                <p><a href="dogecoin">Make Payment Using Dogecoin</a></p>
            </div>

            <div class="short">
                <small><a href="dogecoin">Popular</a></small>
                <small>Fast and flexible</small>
            </div>

        </div>

        <div class="coincloud">
            <div class="logo">
                <img src="{{ asset('images/Ethereum-Logo.png') }}" alt="coincloud" width="300">
            </div>

            <div class="details">
                <p><a href="ethereum">Make Payment Using Ethereum</a></p>
            </div>

            <div class="short">
                <small><a href="ethereum">Fast</a></small>
                <small>Secured, reliable</small>
            </div>
        </div>

    </div>

</div>
@endsection
