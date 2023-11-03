@extends('layout.auth')

@section('content')
<div class="user">

    <div class="user-name">
        <h2>Update Profile</h2>
    </div>

    <div class="update-profile-card">
        <form action="auth/update/{{ $user->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")

            <div class="email-country">
                <div class="email">
                    <label for="email">Email Address</label>
                    <input type="text" name="email" value="{{ $user->email }}" id="">
                    <div class="error-message">
                        @error('email')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="country">
                    <label for="">Country</label>
                    <input type="text" name="country" value="{{ $user->country }}" id="">
                    <div class="error-message">
                        @error('country')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                </div>

            </div>

            <div class="account-type">
                <div class="email">
                    <label for="email">Mobile Number</label>
                    <input type="text" name="mobile_number" value="{{ $user->mobile_number }}" id="">
                    <div class="error-message">
                        @error('mobile_number')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="email">
                    <label for="email">Account Type</label>
                    <input type="text" value="Cryptocurrency crypto" name="" id="" disabled>
                    <div class="error-message">
                        @error('email')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="email">
                    <label for="email">Investment plans</label>
                    <input type="text" value="{{ $user->plans }}" name="plans" id="" disabled>
                    <div class="error-message">
                        @error('plans')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="four-digit-pin">
                <div class="pin">
                    <label for="email">PIN: (Choose a 4-Digit PIN that will be used to authorize all transactions)</label>
                    <input type="text" value="8943" name="pin" id="" >
                    <div class="error-message">
                        @error('pin')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="profile-picture">
                <div class="pin">
                    <label class="custom-file-upload">
                        Select Profile Picture
                        <input type="file" name="profile_picture" />
                    </label>
                    <div class="error-message">
                        @error('profile_picture')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="confirmation">
                <h3>Update Profile</h3>

                <p>Please confirm the <br> information you have entered <br> before submitting.</p>
                <button type="submit">Submit</button>
            </div>
        </form>

    </div>

</div>
@endsection
