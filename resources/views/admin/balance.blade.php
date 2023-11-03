@extends('layout.admin')

@section('content')

<div class="user">

    {{-- start of session message --}}
    @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('message') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    {{-- end of session message --}}

    <!-- user profile page design starts here -->

    <div class="admin-user-page-div">
      <div class="user-image-div">
          Hiroshima
          <div class="small">
              <small>@username</small>
          </div>

          <div class="image-position">
              <img src="../images/user-image 01.png" alt="" width="100">
          </div>

          <div class="user-account-type">
              Cryptocurency trading
          </div>

          <small><span>Member since:</span> 29 september 2023</small>
      </div>

      <div class="user-information-div">
          User Transaction History

          <form action="/admin_update_balance/{{ $user->id }}" method="POST">
            @csrf
              <div class="user-information-input-div">
                  <div class="user-name-input">
                      <label for="name">Paid Using</label>
                      <input type="text" name="name" id="" value="{{ $user->paid_with }}" disabled>
                  </div>

                  <div class="user-name-input">
                      <label for="name">Account type</label>
                      <input type="text" name="name" value="{{ $user->account_type }}" id="" disabled>
                  </div>
              </div>

              <div class="user-information-input-div">
                  <div class="user-name-input">
                      <label for="name">Previous Balance</label>
                      <input type="text" name="name" id="" value="{{ $user->balance }}" disabled>
                  </div>

                  <div class="user-name-input">
                      <label for="name">New Balance</label>
                      <input type="text" name="balance" id="" value="{{ old('balance') }}">
                  </div>
              </div>

              <div class="user-information-input-div">
                  <div class="user-name-input">
                      <label for="name">Total Deposit</label>
                      <input type="text" name="" id="" value="{{ $user->deposit }}" disabled>
                  </div>

                  <div class="user-name-input">
                      <label for="name">Profit Added for Deposit</label>
                      <input type="text" name="deposit" id="" value="{{ old('deposit') }}">
                  </div>
              </div>

              <div class="user-information-input-div">
                  <div class="user-name-input">
                      <label for="name">Referral Bonus</label>
                      <input type="text" name="" id="" value="{{ $user->ref_bonus }}" disabled>
                  </div>

                  <div class="user-name-input">
                      <label for="name">Profit Added for referral</label>
                      <input type="text" name="ref_bonus" id="" value="{{ old('ref_bonus') }}">
                  </div>
              </div>

              <div class="user-information-input-div">
                  <div class="user-name-input">
                      <label for="name">Return on Investment</label>
                      <input type="text" name="name" value="{{ $user->profit }}" id="" disabled>
                  </div>

                  <div class="user-name-input">
                      <label for="name">Profit Added on return</label>
                      <input type="text" name="profit" id="" value="{{ old('profit') }}">
                  </div>
              </div>

              <div class="update-user-balances-submit">
                  <button type="submit">Update User Balance</button>
              </div>
          </form>
      </div>
    </div>


  </div>

@endsection
