
  <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">
    @if(auth()->user()->role=='admin')

    GESTION
    @else
    Menú
    @endif
  </h6>

<ul class="navbar-nav">
  @if (auth()->user()->role=='Admin')
    
    <li class="nav-item">
      <a class="nav-link text-white active bg-gradient-primary" href="/home">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-tv-2 text-danger"></i>
        </div>
        <span class="nav-link-text ms-1">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white " href="{{url('especialidades')}}">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-briefcase-24 text-primary"></i>
        </div>
        <span class="nav-link-text ms-1">Especialidades</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white " href="/medicos">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="fas fa-stethoscope text-info"></i>
        </div>
        <span class="nav-link-text ms-1">Médicos</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white " href="/clientes">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="fas fa-bed text-warning"></i>
        </div>
        <span class="nav-link-text ms-1">Clientes</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white " href="/pets">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="fas fa-paw text-success"></i>
        </div>
        <span class="nav-link-text ms-1">Mascotas</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white " href="./pages/notifications.html">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="fas fa-hotel text-blue"></i>
        </div>
        <span class="nav-link-text ms-1">Adopcion</span>
      </a>
    </li>
    <li class="nav-item mt-3">
      <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Reportes</h6>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white " href="">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="fas fa-heartbeat text-primary"></i>
        </div>
        <span class="nav-link-text ms-1">Citas</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white " href="">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-chart-bar-32 text-blue"></i>
        </div>
        <span class="nav-link-text ms-1">Desempeño Médico</span>
      </a>
    </li>
    @elseif(auth()->user()->role=='Medico')
    <li class="nav-item">
      <a class="nav-link text-white " href="/clientes">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-calendar-grid-58 text-info"></i>
        </div>
        <span class="nav-link-text ms-1">Gestionar Horario</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white " href="/clientes">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="fas fa-clock text-success"></i>
        </div>
        <span class="nav-link-text ms-1">Mis citas</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white " href="/clientes">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="fas fa-bed text-primary"></i>
        </div>
        <span class="nav-link-text ms-1">Mis pacientes</span>
      </a>
    </li>
    @else
    <li class="nav-item">
      <a class="nav-link text-white " href="/clientes">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-calendar-grid-58 text-info"></i>
        </div>
        <span class="nav-link-text ms-1">Reservar cita</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white " href="/clientes">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="fas fa-clock text-success"></i>
        </div>
        <span class="nav-link-text ms-1">Mis citas</span>
      </a>
    </li>
    <a class="nav-link text-white " href="/pets">
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="fas fa-paw text-primary"></i>
      </div>
      <span class="nav-link-text ms-1">Mis Mascotas</span>
    </a>
    @endif

    <li class="nav-item">
      <a class="nav-link text-white " href="{{route('logout')}}"
      onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="fas fa-sign-in-alt"></i>
        </div>
        <span class="nav-link-text ms-1">Cerrar Sesion</span>
      </a>
      <form action="{{route('logout')}}" method="POST" style="display:none;" id="formLogout">@csrf</form>
    </li>
    
  </ul>