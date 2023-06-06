<div class="container-xl">
    <ul class="navbar-nav ">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dasboard') }}">
                <span class="nav-link-title"> Home </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('employe') }}">
                <span class="nav-link-title"> Employe list</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('project') }}">
                <span class="nav-link-title"> Project list</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user') }}">
                <span class="nav-link-title"> User</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown"
                data-bs-auto-close="outside" role="button" aria-expanded="false">
                <span class="nav-link-title"> Maintenance </span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#" target="_blank" rel="noopener">
                    Role
                </a>
                <a class="dropdown-item" href="#">
                    Pengguna
                </a>
                <a class="dropdown-item" href="#" target="_blank" rel="noopener">
                    Klasifikasi
                </a>
                <a class="dropdown-item" href="#" target="_blank" rel="noopener">
                    Sifat Surat
                </a>
            </div>
        </li>
    </ul>
</div>
