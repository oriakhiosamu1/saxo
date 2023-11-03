@extends('layout.auth')

@section('content')
<div class="user">

    <div class="user-name">
        <h2>Saxotrade - Wallet Plan Upgrade</h2>
    </div>

        {{-- start of session message --}}
        @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('message') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        {{-- end of session message --}}

    <div class="update-profile-card">
        <form action="auth/upgrade/{{ $id }}" method="POST">
            @csrf

            <div class="balance-heading">
                <h3>Total Balance: <a href="">$0</a></h3>
            </div>

            <div class="four-digit-pin">
                <div class="pin">
                    <label for="plan">Input Wallet Plan You want to migrate To</label>
                    <input type="text" name="plan" value="{{ old('plan') }}" id="" >
                    <div class="error-message">
                        @error('plan')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="four-digit-pin">
                <div class="pin">
                    <label for="previous_plan">Previous Wallet Plan</label>
                    <input type="text" name="previous_plan" value="{{ $plan }}" id="" disabled >
                </div>
            </div>

            <div class="four-digit-pin">
                <div class="pin">
                    <label for="type">Input Account Type you want to migrate to</label>
                    <input type="text" name="type" value="{{ old('type') }}" id="" >
                    <div class="error-message">
                        @error('type')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="four-digit-pin">
                <div class="pin">
                    <label for="previous_type">Previous Account type</label>
                    <input type="text" name="previous_type" value="{{ $type }}" id="" disabled >
                </div>
            </div>

            <div class="confirmation">
                <!-- <h3>Update Profile</h3> -->

                <p>Please confirm the <br> information you have entered <br> before submitting.</p>
                <button type="submit">Request Upgrade</button>
            </div>

            <div class="assurance">
                <small>We will make haste to get back to you</small>
            </div>

        </form>

    </div>

</div>
@endsection
