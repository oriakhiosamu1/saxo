<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Password Reset</title>
          <!-- fonts style -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/password.css') }}">
    </head>

    <body>
        <div class="cancel-link">
            <a href="login">Cancel</a>
        </div>

            {{-- start of session message --}}
            @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('message') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            {{-- end of session message --}}

        <div class="reset">
            <div class="contents">
                <h3>Reset your password</h3>

                <p>Strong password includes numbers, letters, and punctuation marks</p>
                <form action="reset/{{ $user }}" method="POST">
                    @csrf

                    <div class="submit">
                        <input type="password" name="password" placeholder="Enter New Password" value="{{ old('password') }}">
                        <div class="error-message">
                            @error('password')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="submit">
                        <input type="password" name="password_confirmation" placeholder="Confirm New Password" value="{{ old('password_confirmation') }}">
                        <div class="error-message">
                            @error('password_confirmation')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="submit">
                        <button type="submit">Update</button>
                        <small>Return to <a href="login.html">Login</a></small>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
