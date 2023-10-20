<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Saxotrade User Dashboard</title>

        <!-- slider stylesheet -->
        <!-- slider stylesheet -->
        <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

        <!-- fonts style -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet" />

        <!-- bootstrap css starts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- bootstrap css end -->

        <!-- custom style for register page -->
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

        <!-- custom style for mobile phone -->
        <link rel="stylesheet" href="{{ asset('css/mobile.css') }}">

    </head>

    <body>

        <div class="dashboard">


            <!-- offcanvas nav bar from bootstrap -->

            <nav class="navbar navbar-dark bg-dark fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">SAXOTRADE</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">{{ Auth::user()->username }}</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="dashboard">Dashboard</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li> --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Invest
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="invest">Cryptocurrency</a></li>
                            <li><a class="dropdown-item" href="#">NFTs</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Forex</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="withdraw">Withdraw</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Exchanger</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Transactions</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Upgrade plan</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Account
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="profile">Profile</a></li>
                            <li><a class="dropdown-item" href="update_profile">Edit Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="auth/logout">Logout</a></li>
                            </ul>
                        </li>

                        </ul>
                        <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                        </form>
                    </div>
                    </div>
                </div>
                </nav>

            <!-- offcanvas nav bar from bootstrap end -->

            <div class="nav-bar">

                <div class="user-profile">
                    <h3>Saxotrade</h3>

                    <div class="name">
                        <div class="image">
                            <img src="images/user-image 01.png" alt="user-image" width="100" />
                        </div>
                        <div class="profile-name">
                            <h3>{{ Auth::user()->username }}</h3>
                            <small>@ {{ Auth::user()->username }}</small>
                        </div>
                    </div>
                </div>

                <div class="nav-menu">
                    <div class="icon">
                        <img src="images/dashboard icon.png" alt="dashboard" width="40">
                    </div>
                    <div class="menu">
                        <a href="dashboard">Dashboard</a>
                    </div>
                </div>

                <div class="nav-menu">
                    <div class="icon">
                        <img src="images/invest 01.png" alt="dashboard" width="40">
                    </div>
                    <div class="menu">
                        <a href="invest">Invest</a>
                    </div>
                </div>

                <div class="nav-menu">
                    <div class="icon">
                        <img src="images/withdraw.png" alt="dashboard" width="40">
                    </div>
                    <div class="menu">
                        <a href="withdraw">Withdraw</a>
                    </div>
                </div>

                <div class="nav-menu">
                    <div class="icon">
                        <img src="images/exchange.png" alt="dashboard" width="40">
                    </div>
                    <div class="menu">
                        <a href="exchanger.html">Exchanger</a>
                    </div>
                </div>

                <div class="nav-menu">
                    <div class="icon">
                        <img src="images/transact.png" alt="dashboard" width="40">
                    </div>
                    <div class="menu">
                        <a href="transaction.html">Transaction</a>
                    </div>
                </div>

                <div class="nav-menu">
                    <div class="icon">
                        <img src="images/transact.png" alt="dashboard" width="40">
                    </div>
                    <div class="menu">
                        <a href="change_plan.html">Upgrade Plan</a>
                    </div>
                </div>

                <div class="nav-menu">
                    <div class="icon">
                        <img src="images/user-image 01.png" alt="dashboard" width="40">
                    </div>
                    <div class="menu">
                        <a href="profile.html">Profile</a>
                    </div>
                </div>

                <div class="nav-menu">
                    <div class="icon">
                        <img src="images/user-image 01.png" alt="dashboard" width="40">
                    </div>
                    <div class="menu">
                        <a href="auth/logout">Logout</a>
                    </div>
                </div>

            </div>

            @yield('content')


        </div>


        <!-- bootstrap js bundle start -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

        <!-- bootstrap js bundle end -->
    </body>
</html>
