@extends('layout.auth')

@section('content')
<div class="user">

    <div class="user-name">
        <h2>Profile</h2>
    </div>

    {{-- start of session message --}}
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('message') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    {{-- end of session message --}}

    <div class="card">

        <div class="coincloud">

            <div class="profile-logo">
                <img src="{{ $user->profile_picture ? asset('storage/'.$user->profile_picture) : asset('images/user-image 01.png') }}" alt="coincloud" width="200">
            </div>

            <div class="name-and-link">
                <h3>{{ $user->name }}</h3>
                <a href="update_profile" class="edit-profile">Edit Profile</a>
            </div>

            <div class="fact">
                <p>It is a long established fact that Cryptocurrency trading and investment is made easy, safe and secured with <strong>Saxotrade Investment Company</strong></p>
            </div>

        </div>

        <div class="coincloud">
            <div class="email-balance-country">
                <div class="content">
                    <small>Email address</small>
                    <div class="value">
                        <strong>{{ $user->email }}</strong>
                    </div>
                </div>

                <div class="content">
                    <small>Current balance</small>
                    <div class="value">
                        <strong>0 USD</strong>
                    </div>
                </div>

                <div class="content">
                    <small>Country</small>
                    <div class="value">
                        <strong>{{ $user->country }}</strong>
                    </div>
                </div>
            </div>

            <div class="email-balance-country">
                <div class="content">
                    <small>Mobile number</small>
                    <div class="value">
                        <strong>{{ $user->mobile_number }}</strong>
                    </div>
                </div>

                <div class="content">
                    <small>Acount Type</small>
                    <div class="value">
                        <strong>Cryptocurrency Crypto trading</strong>
                    </div>
                </div>

                <div class="content">
                    <small>Investment Plans</small>
                    <div class="value">
                        <strong>{{ $user->plans }}</strong>
                    </div>
                </div>

                <div class="content">
                    <small>Your referral link</small>
                    <div class="value">
                        <strong>https://bittradex.com/referral.php?ref=Hiroshima</strong>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection
