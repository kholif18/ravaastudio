<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__close">+</div>
    <div class="offcanvas__logo">
        <a href="{{ url('/') }}"><img src="img/logo.svg" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-lg-2">
                <div class="header__logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('img/logo.svg') }}" alt="Logo"></a>
                </div>
            </div>
            <div class="col-xl-8 col-lg-10">
                <nav class="header__menu">
                    <ul>
                        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                        <li class="{{ Request::is('/banner') ? 'active' : '' }}"><a href="{{ url('/banner') }}">Banner</a></li>
                        <li><a href="{{ url('/sablon') }}">Sablon</a></li>
                        <li><a href="{{ url('/content-design') }}">Content Design</a></li>
                        <li><a href="#">Undangan</a>
                            <ul class="dropdown">
                                <li><a href="{{ url('/erba') }}">Erba</a></li>
                                <li><a href="{{ url('/falah') }}">Falah</a></li>
                                <li><a href="{{ url('/kabinet') }}">Kabinet</a></li>
                                <li><a href="{{ url('/website') }}">Website</a></li>
                                <li><a href="{{ url('/img-video') }}">Img/Video</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="canvas__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->
