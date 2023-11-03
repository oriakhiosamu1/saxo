@extends('layout.auth')

@section('content')
<div class="user">

    <div class="user-name">
        <h2>Invest by using USDT</h2>
    </div>

        {{-- start of session message --}}
        @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('message') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        {{-- end of session message --}}

    <div class="address-card">
        <div class="address">
            <div class="logo">
                <img src="images/coincloud.webp" alt="coincloud" width="300">
            </div>

            <div class="wallet-address">
                <p>(Please note that you can only send USDT to us on this address)</p>
            </div>

            <div class="four-digit-pin">
                <div class="pin">
                    <label for="email">OUR WALLET ADDRESS:</label>
                    <input type="text" name="" id="textToCopy" disabled >
                </div>
            </div>

            <div class="four-digit-pin">
                <div class="pin">
                    <label for="email">CURRENT WALLET PLAN:</label>
                    <input type="text" name="" value="BASIC" id="" disabled >
                </div>
            </div>

            <div class="confirmation">
                <button id="copyButton">Copy our wallet address</button>
            </div>
        </div>

        <div class="address">
            <form action="invest/coincloud/{{ Auth::id() }}" method="POST" enctype="multipart/form-data" >
                @csrf

                <div class="wallet-address">
                    <h3>Proof Of Payment Verification</h3>
                </div>

                <div class="four-digit-pin">
                    <div class="pin">
                        <label for="amount">(Please specify here, the amount you deposited)</label>
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
