@auth
<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <img src="{{ asset("img/bank.svg") }}" width="40" height="32">
        <span class="fs-4">Banco</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route("inicio") }}" class="nav-link {{ (request()->is('inicio*')) ? 'active' : '' }}" aria-current="page">
                <i class="fas fa-home"></i>
                Inicio
            </a>
        </li>
        <li>
            <a href="{{ route("transferencias") }}" class="nav-link {{ (request()->is('transferencias*')) ? 'active' : '' }} text-white">
                <i class="fas fa-exchange-alt"></i>
                Transferencias
            </a>
        </li>
        <li>
            <a href="{{ route("cuentas") }}" class="nav-link {{ (request()->is('cuentas*')) ? 'active' : '' }} text-white">
                <i class="fas fa-file-invoice-dollar"></i>
                Cuentas
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset('img/user.svg') }}" alt="Usuario" width="32" height="32" class="rounded-circle me-2">
            <strong>{{ Auth::user()->name }}</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" style="">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="return confirm('Desea cerrar la sesión?');">
                    {{ __('Log Out') }}
                </a>
            </li>
        </ul>
    </div>
</div>
@endauth
