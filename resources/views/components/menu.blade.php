<div>
    <ul class="navbar navbar-dark bg-dark navbar-nav flex align-items-center menu">
        <li class="nav-item">
            <a class="nav-link" href='{{ url("/") }}'>Home</a>
         </li>
         <li class="nav-item menu">
            <a class="nav-link" href='{{ url("/programacion") }}'>Programación</a>
        </li>
         <li class="nav-item menu">
            <a class="nav-link" href='{{ url("/biblioteca") }}'>Biblioteca</a>
        </li>
        <li class="nav-item menu">
            <a class="nav-link" href='{{ url("/enlaces") }}'>Enlaces</a>
        </li>
        <li class="nav-item menu">
            <a class="nav-link" href="{{ url("/teclado") }}">Piano</a>
        </li>
        <li class="nav-item menu">
            <a class="nav-link" href="{{ route("agenda.index") }}">Agenda</a>
        </li>
    </ul>
</div>
