<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="/">
              <img src="/assests/Logo.png" alt="Logo" width="40" class="d-inline-block align-text-top">
              Online-Booking
          </a>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Cate">Departments</a>
            </li>
          </ul>

          <div class="d-flex">
              @auth
              <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="btn btn-danger">Logout</button>
              </form>
              @endauth

              @guest
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="/login">Login</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="/register">Register</a>
                  </li>
              </ul>
              @endguest
          </div>
        </div>
      </div>
  </nav>
</header>