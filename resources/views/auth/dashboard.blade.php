@extends('layout.auth')

@section('content')
<div class="user">
    <div class="user-name">
        <h2>{{ $username }}'s Dashboard</h2>
    </div>

    {{-- start of session message --}}
    @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('message') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    {{-- end of session message --}}

    <div class="display-options">
        <div class="box">
            <div class="dormant">
                <h4>{{ $username }}-dormant</h4>
            </div>
            <div class="dollar">
                <p>{{ $user->balance }} {{ $user->paid_with }} </p>
            </div>
            <div class="btc">
                <p>0 {{ $user->payment_option }}</p>
            </div>

            <div class="balance">
                <div class="total">
                    <button>Total Balance</button>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="dormant">
                <h4>TOTAL DEPOSIT</h4>
            </div>
            <div class="dollar">
                <p>{{ $user->balance }} {{ $user->paid_with }}</p>
            </div>
            <div class="btc">
                <p>0 BTC</p>
            </div>

            <div class="balance">
                <div class="total">
                    <button>Total Deposit</button>
                </div>
            </div>
        </div>

    </div>

    <div class="display-options">
        <div class="box">
            <div class="dormant">
                <h4>PROFIT</h4>
            </div>
            <div class="dollar">
                <p>{{ $user->balance }} {{ $user->paid_with }}</p>
            </div>
            <div class="btc">
                <p>0 BTC</p>
            </div>

            <div class="balance">
                <div class="total">
                    <button>Return on Investment</button>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="dormant">
                <h4>REFERRAL</h4>
            </div>
            <div class="dollar">
                <p>$ 0</p>
            </div>
            <div class="btc">
                <p>0 BTC</p>
            </div>

            <div class="balance">
                <div class="total">
                    <button>Ref. Bonus</button>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
