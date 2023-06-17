<h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">
    @if (auth()->user()->role == 'admin')
        GESTION
    @else
        Menú
    @endif
</h6>
<style>
    #dash {
        color: inherit;
        text-decoration: none;
    }

    #dash {
        background:
            linear-gradient(to right,
                rgba(128, 64, 245, 1),
                rgba(100, 200, 200, 1)),
            linear-gradient(to right,
                rgba(255, 0, 0, 1),
                rgba(255, 0, 180, 1),
                rgba(0, 100, 200, 1));
        background-size: 100% 3px, 0 3px;
        background-position: 100% 100%, 0 100%;
        background-repeat: no-repeat;
        transition: background-size 400ms;
    }

    #dash:hover {
        background-size: 0 3px, 100% 3px;
    }
</style>
<ul class="navbar-nav">

    @include('includes.panel.menu.' .auth()->user()->role)

    <li class="nav-item">
        <a class="nav-link text-white " href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-sign-in-alt"></i>
            </div>
            <span class="nav-link-text ms-1">Cerrar Sesion</span>
        </a>
        <form action="{{ route('logout') }}" method="POST" style="display:none;" id="formLogout">@csrf</form>
    </li>

</ul>
