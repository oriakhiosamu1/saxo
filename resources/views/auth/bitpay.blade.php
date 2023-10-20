@extends('layout.auth')

@section('content')


<div class="user">

    <div class="user-name">
        <h2>Invest by using BTC</h2>
    </div>

    <div class="address-card">
        <div class="address">
            <div class="logo">
                <img src="{{ asset('images/bitpay.png') }}" alt="coincloud" width="300">
            </div>

            <div class="wallet-address">
                <p>(Please note that you can only send BTC to us on this address)</p>
            </div>

            <div class="four-digit-pin">
                <div class="pin">
                    <label for="email">OUR WALLET ADDRESS:</label>
                    <input type="text" name="" id="" disabled >
                </div>
            </div>

            <div class="four-digit-pin">
                <div class="pin">
                    <label for="email">CURRENT WALLET PLAN:</label>
                    <input type="text" name="" value="BASIC" id="" disabled >
                </div>
            </div>

            <div class="confirmation">
                <button><a href="">Copy our wallet address</a></button>
            </div>
        </div>

        <div class="address">
            <form action="invest/bitcoin" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="wallet-address">
                    <h3>Proof Of Payment Verification</h3>
                </div>

                <div class="four-digit-pin">
                    <div class="pin">
                        <label for="email">(Please specify here, the amount you deposited)</label>
                        <input type="text" placeholder="How much did you deposit" name="amount" id="" >
                        <div class="error-message">
                            @error('amount')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="profile-picture">
                    <div class="pin">
                        <label class="custom-file-upload">
                            Proof Of Payment
                            <input name="proof" type="file"/>
                        </label>
                    </div>
                    <div class="error-message">
                        @error('proof')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="confirmation">
                    <button type="submit">Submit Payment Proof</button>
                </div>
            </form>

        </div>

    </div>

</div>
@endsection
