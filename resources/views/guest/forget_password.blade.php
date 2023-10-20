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

        <div class="reset">
            <div class="contents">
                <h3>Recover your password</h3>

                <p>Enter your email and we will send you instructions on how to reset your email</p>
                <form action="">
                    <div class="submit">
                        <input type="email" placeholder="Email Address">
                    </div>

                    <div class="submit">
                        <button type="submit">Send Mail</button>
                        <small>Return to <a href="login">Login</a></small>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
