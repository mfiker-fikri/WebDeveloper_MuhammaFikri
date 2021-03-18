<header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #FCFAE1;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Artikel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo02">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('beranda')}}">Home</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{url('#menu_photo')}}"></a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('manage.home')}}">Config</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>