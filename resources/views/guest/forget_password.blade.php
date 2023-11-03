<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Password Reset</title>
          <!-- fonts style -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet" />
        <!-- bootstrap css starts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- bootstrap css end -->
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
                <h3>Recover your password</h3>

                <p>Enter your email and we will send you instructions on how to reset your email</p>
                <form action="forget" method="POST">
                    @csrf

                    <div class="submit">
                        <input type="email" name="email" placeholder="Email Address">
                        <div class="error-message">
                            @error('email')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="submit">
                        <button type="submit">Send Mail</button>
                        <small>Return to <a href="login">Login</a></small>
                    </div>
                </form>
            </div>
        </div>

            <!-- bootstrap js bundle start -->

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

            <!-- bootstrap js bundle end -->
    </body>
</html>
