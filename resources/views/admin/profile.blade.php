@extends('layout.admin')

@section('content')

<div class="user">

    <!-- user profile page design starts here -->

    <div class="admin-user-page-div">
      <div class="user-image-div">
          {{ $user->username }}
          <div class="small">
              <small>@ {{ $user->email }}</small>
          </div>

          <div class="image-position">
            <img src="{{ $user->profile_picture ? asset('storage/'.$user->profile_picture) : asset('images/user-image 01.png') }}" alt="Profile picture" width="100">

          </div>

          <div class="user-account-type">
              {{ $user->account_type }}
          </div>

          <small><span>Member since:</span>{{ $user->created_at }}</small>
      </div>

      <div class="user-information-div">
          User Profile

          <div class="user-information-input-div">
              <div class="user-name-input">
                  <label for="name">Full name</label>
                  <input type="text" name="name" value="{{ $user->name }}" id="" disabled>
              </div>

              <div class="user-name-input">
                  <label for="name">Country</label>
                  <input type="text" value="{{ $user->country }}" name="name" id="" disabled>
              </div>
          </div>

          <div class="user-information-input-div">
              <div class="user-name-input">
                  <label for="name">Mobile Number</label>
                  <input type="text" value="{{ $user->mobile_number }}" name="name" id="" disabled>
              </div>

              <div class="user-name-input">
                  <label for="name">Plan</label>
                  <input type="text" value="{{ $user->plans }}" name="name" id="" disabled>
              </div>
          </div>

          <div class="user-information-input-div">
              <div class="user-name-input">
                  <label for="name">Payment Option</label>
                  <input type="text" value="{{ $user->payment_option }}" name="name" id="" disabled>
              </div>

              <div class="user-name-input">
                  <label for="name">Pin</label>
                  <input type="text" value="{{ $user->pin }}" name="name" id="" disabled>
              </div>
          </div>

          <div class="user-information-input-div">
              <div class="user-name-input">
                  <label for="name">Email address</label>
                  <input type="text" value="{{ $user->email }}" name="name" id="" disabled>
              </div>

              <div class="user-name-input">
                  <label for="name">Referral link</label>
                  <input type="text" value="{{ $user->referral_link }}" name="name" id="" disabled>
              </div>
          </div>

          <div class="update-user-balances">
              <a href="/balance/{{$user->id}}">View User Balance</a>
          </div>
      </div>
    </div>


  </div>

@endsection
