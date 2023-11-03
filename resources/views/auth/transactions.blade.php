@extends('layout.auth')

@section('content')
<div class="user">
    <div class="user-name">
        <h2>Transactions</h2>
    </div>

    <div class="display-options">
        <div class="box">
            <div class="dormant">
                <h4>Hiroshima-dormant</h4>
            </div>
            <div class="dollar">
                <p>$ 0</p>
            </div>
            <div class="btc">
                <p>0 BTC</p>
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
                <p>$ 0</p>
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
                <p>$ 0</p>
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
