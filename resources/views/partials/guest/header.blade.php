<header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            Saxotrade
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('about') }}"> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('plans') }}"> Plans </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}"> Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}"> Sign Up</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
