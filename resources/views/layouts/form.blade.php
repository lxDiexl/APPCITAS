<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <title>
    {{ config('app.name')}} | @yield('title')
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{asset('css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('css/material-dashboard.css?v=3.0.0')}}" rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
          <div class="container-fluid ps-2 pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{ url('/')}}">
              Social Pet's
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                  <li class="nav-item">
                      <a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
                          href="/#acercade">
                          <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                          Acerca de
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link me-2" href="/#servicios">
                          <i class="fas fa-hand-holding-medical opacity-6 text-dark me-1"></i>
                          Servicios
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link me-2" href="/#especialidades">
                          <i class="fas fa-user-md opacity-6 text-dark me-1"></i>
                          Especialidades
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link me-2" href="/#redes">
                          <i class="fas fa-bone opacity-6 text-dark me-1"></i>
                          Nuestras redes
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link me-2" href="/#contacto">

                          <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                          Contacto
                      </a>
                  </li>
              </ul>
              {{-- <ul class="navbar-nav d-lg-block d-none">
                  <li class="nav-item">
                      <a href="https://www.creative-tim.com/product/material-dashboard"
                          class="btn btn-sm mb-0 me-1 bg-gradient-dark">Acceder</a>
                  </li>
              </ul>
              <ul class="navbar-nav d-lg-block d-none">
                  <li class="nav-item">
                      <a href="https://www.creative-tim.com/product/material-dashboard"
                          class="btn btn-sm mb-0 me-1 bg-gradient-dark">Registrarse</a>
                  </li>
              </ul> --}}
              @if (Route::has('login'))

                  @auth
                      <a href="{{ url('/home') }}" class="btn btn-sm mb-0 me-1 bg-gradient-dark">Home</a>
                  @else
                      <a href="{{ route('login') }}" class="btn btn-sm mb-0 me-1 bg-gradient-dark" style="background: #3D413E;">Login</a>

                      @if (Route::has('register'))
                          {{-- <a href="{{ route('register') }}"
                              class="btn btn-sm mb-0 me-1 bg-gradient-dark">Registrarse</a> --}}
                      @endif
                  @endauth

              @endif
          </div>

          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
@yield('content')
  <!--   Core JS Files   -->
  <script src="{{asset('js/core/popper.min.js')}}"></script>
  <script src="{{asset('js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('js/material-dashboard.min.js?v=3.0.0')}}"></script>
</body>

</html>
