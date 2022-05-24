<li class="menu-header">DASHBOARD</li>
<li class="side-menus {{ Request::is('dashboard') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
@if (Auth::user()->rol == 1 || Auth::user()->rol == 2 || Auth::user()->rol == 3)
    <li class="menu-header">CONFIGURACIÓN</li>
    <li class="side-menus">
    <li class="{{ Request::is('usuario') ? 'active' : '' }}">
        <a class="nav-link" href="/usuario">
            <i class=" fas fa-users"></i><span>Usuarios</span>
        </a>
    </li>
    <li class="{{ Request::is('rol') ? 'active' : '' }}">
        <a class="nav-link {{ Request::is('rol') ? 'active' : '' }}" href="/rol">
            <i class="fas fa-key"></i><span>Roles</span>
        </a>
    </li>
    <li class="{{ Request::is('empresa') ? 'active' : '' }}">
        <a class="nav-link" href="/empresa">
            <i class="fas fa-landmark"></i><span>Empresas</span>
        </a>
    </li>
    <li class="{{ Request::is('encuesta') ? 'active' : '' }}">
        <a class="nav-link" href="/encuesta">
            <i class="fab fa-wpforms"></i><span>Aplicativo encuesta</span>
        </a>
    </li>
    </li>
    <li class="menu-header">DIAGNÓSTICOS</li>
    <li class="dropdown">
        <a href="" class="nav-link has-dropdown" data-toggle="dropdown"><i
                class="fas fa-columns"></i><span>Diagnostico</span></a>
        <ul class="dropdown-menu">
            <li>
                <a class="nav-link" href="/diagnostico/fase1">Diagnostico fase I</a>
            </li>
            <li>
                <a class="nav-link" href="/diagnostico/individual">Análisis individual</a>
            </li>
            <li>
                <a class="nav-link" href="/diagnostico/mdofa">Matriz DOFA</a>
            </li>
            <li>
                <a class="nav-link" href="/diagnostico/planaccion">Plan de acción</a>
            </li>
        </ul>
    </li>
    <li class="menu-header">RESULTADOS GRAFICOS</li>
    <li class="dropdown">
        <a href="" class="nav-link has-dropdown" data-toggle="dropdown"><i
                class="fas fa-project-diagram"></i><span>Resultados encuesta</span></a>
        <ul class="dropdown-menu">
            <li>
                <a class="nav-link" href="/grafico">Graficos</a>
            </li>
        </ul>
    </li>
@elseif(Auth::user()->rol == 4 || Auth::user()->rol == 5)
    <li class="menu-header">DIAGNÓSTICOS</li>
    <li class="dropdown">
        <a href="" class="nav-link has-dropdown" data-toggle="dropdown"><i
                class="fas fa-columns"></i><span>Diagnostico</span></a>
        <ul class="dropdown-menu">
            <li>
                <a class="nav-link" href="/diagnostico/fase1">Diagnostico fase I</a>
            </li>
            <li>
                <a class="nav-link" href="/diagnostico/individual">Análisis individual</a>
            </li>
            <li>
                <a class="nav-link" href="/diagnostico/mdofa">Matriz DOFA</a>
            </li>
            <li>
                <a class="nav-link" href="/diagnostico/planaccion">Plan de acción</a>
            </li>
        </ul>
    </li>
    <li class="menu-header">RESULTADOS GRAFICOS</li>
    <li class="dropdown">
        <a href="" class="nav-link has-dropdown" data-toggle="dropdown"><i
                class="fas fa-project-diagram"></i><span>Resultados encuesta</span></a>
        <ul class="dropdown-menu">
            <li>
                <a class="nav-link" href="/grafico">Graficos</a>
            </li>
        </ul>
    </li>
@endif
