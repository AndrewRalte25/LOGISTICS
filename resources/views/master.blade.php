<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-com</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    

</head>
<body>
<header class="header-bar mb-3">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 sticky-top">
          <div class="container">
          <a href="/" class="navbar-brand">Event Management</a>
          <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navmenu"
          >
          <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navmenu">
              <ul class="navbar-nav ms-auto">
                
                <li class="nav-item">
                  <a href="#questions" class="nav-link">Questions</a>
                </li>
                
              
              @guest
              <li class="nav-item">
                <a href="/login" class="nav-link">Login</a>
              </li>
              <li class="nav-item">
                <a href="/register" class="nav-link">Register</a>
              </li>
          
               @else
              <li class="nav-item">
                <a href="#book" class="nav-link">Events</a>
              </li>
              <li class="nav-item">
                <a href="/logout" class="nav-link">Logout</a>
              </li>
              
              @endguest
              
             </ul>
            </div>
        </div>
    </nav>
</header>
@if (session()->has('success'))
    <div class="container container--narrow">
      <div class="alert alert-success text-center">
        {{session('success')}}
      </div>
    </div>
    @endif

    @if (session()->has('failure'))
    <div class="container container--narrow">
      <div class="alert alert-danger text-center">
        {{session('failure')}}
      </div>
    </div>
    @endif



@yield('content')


<footer class=" bg-white text-black text-center position-absolute bottom-0 end-0">
    <div class="container">
      <p class="lead">Copyright &copy; E-commerce</p>

      
    </div>
</footer>


</body>
</html>