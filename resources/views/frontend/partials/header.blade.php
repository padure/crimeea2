<header class="header-area">
    <div class="container">
        <div class="row d_flex">
            <div class=" col-md-3 col-sm-3">
                <div class="logo">
                    <a href="{{ route('home.index') }}">
                        SAUNA <span class="color-site">Crimeea</span>
                    </a>
                </div>
            </div>
            <div class="col-md-9 col-sm-9">
                <div class="navbar-area">
                    <nav class="site-navbar">
                        <ul>
                            <li><a class="active" href="{{ route('home.index') }}">Acasă</a></li>
                            <li><a href="{{ route('about.index') }}">Despre</a></li>
                            <li><a href="{{ route('service.index') }}">Servicii</a></li>
                            <li><a href="{{ route('prices.index') }}">Prețuri</a></li>
                            <li><a href="{{ route('gallery.index') }}">Galerie</a></li>
                            <li><a href="{{ route('contacts.index') }}">Contacte</a></li>
                        </ul>
                        <button class="nav-toggler">
                            <span></span>
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
