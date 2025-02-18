<!-- Header area start -->
<header>
    <div id="header-sticky" class="header__area header-transparent is-border-bottom">
        <div class="container">
            <div class="mega__menu-wrapper p-relative">
                <div class="header__main">
                    <div class="header__left">
                        <div class="header__logo">
                            <a href="">
                                {{-- <img class="logo__white" src="{{ Vite::asset('resources/imgs/logo/logo.svg') }}" alt="logo not found"> --}}
                                <img class="logo__white" src="{{ Vite::asset('resources/imgs/logo/logo-white.png') }}" alt="Lujandev" title="Lujandev"> 
                            </a>
                        </div>
                    </div>
                    <div class="header__middle">
                        <div class="mean__menu-wrapper d-none d-md-block">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul class="onepage-menu">
                                        <li><a href="">Inicio</a></li>
                                        <li><a href="">Sobre mí</a></li>
                                        <li><a href="">Servicios</a></li>
                                        <li><a href="">Portfolio</a></li>
                                        <li><a href="">Blog</a>
                                        <li><a href="">Contacto</a></li>
                                        <li class="nav-item dropdown">
                                            @auth
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>
                                            @endauth
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    {{ __('Salir') }}
                                                </a>
                                                <form id="logout-form" action="" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- for wp -->
                                <div class="header__hamburger ml-20 d-none">
                                    <button type="button" class="hamburger-btn offcanvas-open-btn">
                                        <span>01</span>
                                        <span>01</span>
                                        <span>01</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header__right">
                        <div class="header__action d-flex align-items-center">
                            <div class="header__btn-wrap d-none d-sm-inline-flex d-inline-flex align-items-center gap-5">
                                <a class="bd-btn is-btn-anim bordered-blue" href="">
                                    <span class="bd-btn-inner"><span class="bd-btn-normal">Contáctame</span>
                                    <span class="bd-btn-hover">Contáctame</span>
                                    <i class="contentHidden"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="header__hamburger ml-20 d-lg-none">
                                <div class="sidebar__toggle">
                                    <a class="bar-icon" href="javascript:void(0)">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            <!-- for wp -->
                            <div class="header__hamburger ml-20 d-none">
                                <button type="button" class="hamburger-btn offcanvas-open-btn">
                                    <span>01</span>
                                    <span>01</span>
                                    <span>01</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header area end -->