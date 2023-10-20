@extends('layout.auth')

@section('content')
<div class="user">

    <div class="user-name">
        <h2>Saxotrade - Funds Withdrawal</h2>
    </div>

    <div class="update-profile-card">
        <form action="">

            <div class="balance-heading">
                <h3>Total Balance: <a href="">$0</a></h3>
            </div>
            <div class="email-country">
                <div class="email">
                    <label for="email">Amount: (input the amount you want to withdraw)</label>
                    <input type="text" name="" id="">
                </div>

                <div class="country">
                    <label for="">Current Wallet Plan</label>
                    <input type="text" value="Basic" name="" id="" disabled>
                </div>

            </div>

            <div class="four-digit-pin">
                <div class="pin">
                    <label for="email">Bank Name</label>
                    <input type="text" name="" id="" >
                </div>
            </div>

            <div class="four-digit-pin">
                <div class="pin">
                    <label for="email">Bank Account Number</label>
                    <input type="text" name="" id="" >
                </div>
            </div>

            <div class="four-digit-pin">
                <div class="pin">
                    <label for="email">Account Name</label>
                    <input type="text" name="" id="" >
                </div>
            </div>

            <div class="confirmation">
                <!-- <h3>Update Profile</h3> -->

                <p>Please confirm the <br> information you have entered <br> before submitting.</p>
                <button type="submit">Request Withdraw</button>
            </div>

            <div class="assurance">
                <small>We will make haste to get back to you</small>
            </div>

        </form>

    </div>

</div>
@endsection
