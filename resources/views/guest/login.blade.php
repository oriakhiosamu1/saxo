@extends('layout.master')

@section('saxotrade')

    <!-- register form section -->
    <div class="register-box">
        <div class="form">
            <form action="auth/login", method="POST">
                @csrf
                <div class="heading">
                    <h3>Login To Account</h3>
                </div>

                <div class="form-input">
                  <input type="text" name="username" placeholder="Username" id="">
                  <div class="error-message">
                    @error('username')
                        <small>{{ $message }}</small>
                    @enderror
                  </div>
                </div>

                <div class="form-input">
                    <input type="password" name="password" placeholder="Password" id="">
                    <div class="error-message">
                        @error('password')
                            <small>{{ $message }}</small>
                        @enderror
                      </div>
                </div>

                <div class="form-input">
                  <small><a href="password">Forget Password?</a></small>
                </div>

                <div class="submit">
                    <button type="submit">LOG IN TO ACCOUNT</button>
                </div>
            </form>

            <div class="already-have">
                <small>Don't have an <span><a href="{{ route('register') }}">account?</a></span></small>
            </div>
        </div>
    </div>
    <!-- end of register form section -->


@endsection
