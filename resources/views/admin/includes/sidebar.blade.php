<ul class="list-unstyled">
    <li><a href="/dashboard"><i class="fas fa-tachometer-alt"></i> Inicio</a></li>
    {{-- <li>
        <a href="#ul_leads" data-toggle="collapse">
            <i class="fas fa-envelope"></i> Leads
        </a>
        <ul id="ul_leads" class="list-unstyled collapse">
            <li><a href="#">Contacto</a></li>
        </ul>
    </li> --}}
    <li>
        <a href="/cursos">
            <i class="fas fa-graduation-cap"></i>
            Cursos
        </a>
        <a href="/novedades">
            <i class="far fa-newspaper"></i>
            Novedades
        </a>
        <a href="{{route('subscriber')}}">
            <i class="fas fa-rss"></i>
            Suscriptores
        </a>
    </li>
</ul>