<footer class="footer py-5 shadow-lg">
    <div class="container">
        <div class="row">
            <div class="col-4 ms-1">
                <img class="footerimage" src="{{asset('/favicon/journalist.png')}}" alt="logo favicon" width="100" height="100">
            </div>
            <div class="col-4" id="ul_footer">
                <h5 class="text-center text-uppercase fw-bolder">Artikel</h5>
                <ul class="list-unstyled text-small text-center text-uppercase align-middle" id="ul_top_hypers">
                    <li><a class="link-secondary" href="{{url('beranda')}}">Home</a></li>
                    {{-- <li><a class="link-secondary" href="#menu_photo">Photo</a></li> --}}
                    <li><a class="link-secondary" href="{{route('manage.home')}}">Config</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>