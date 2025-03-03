<!-- Footer area start -->
<footer>
    <section class="footer__area section-space-top">
        <div class="container">
            <div class="footer__top">
                <div class="footer__logo">
                    <a href="index.html">
                        <img src="{{ Vite::asset('resources/imgs/logo/logo-white.png') }}" alt="lujandev" class="img-fluid w-25">
                    </a>
                </div>
                <div class="footer__content">
                    <div class="theme__social">
                        {{-- <a href="#"><i class="fa-brands fa-facebook-f"></i></a> --}}
                        <a href="https://x.com/lujandev" target="blank"><i class="icon-twiter"></i></a>
                        <a href="https://www.linkedin.com/in/lujandev/" target="blank"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/lujandev/" target="blank"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <!-- Section divider -->
            <div class="section__divider">
                <hr>
            </div>
            <div class="footer__bottom">
                <div class="footer__widget">
                    <div class="footer__widget-title">
                        <h5>Sobre mí</h5>
                    </div>
                    <div class="footer__widget-content">
                        <p class="mb-30">
                            Mi pasión es crear experiencias digitales impresionantes y funcionales. Desde sitios web elegantes hasta aplicaciones dinámicas, estoy aquí para convertir tus ideas en realidad.
                        </p>
                        <div class="contact__info-item style-two">
                            <ul>
                                <li>
                                    <div class="contact__info">
                                        <div class="contact__info-icon">
                                            <span><i class="icon-phone"></i></span>
                                        </div>
                                        <div class="contact__info-content">
                                            <p>Teléfono</p>
                                            <h6><a href="tel:+034605974436">+034 605 97 44 36</a></h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact__info">
                                        <div class="contact__info-icon">
                                            <span><i class="icon-envelope"></i></span>
                                        </div>
                                        <div class="contact__info-content">
                                            <p>Correo electrónico</p>
                                            <h6><a href="mailto:lujandev@lujandev.com">lujandev@lujandev.com</a></h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer__widget">
                    <div class="footer__widget-title">
                        <h5>Lujandev</h5>
                    </div>
                    <div class="footer__links">
                        <ul>
                            <li><a href="{{ route('about') }}">Sobre mí</a></li>
                            <li><a href="{{ route('service') }}">Servicios</a></li>
                            <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="{{ route('contact') }}">Contacto</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__widget">
                    <div class="footer__widget-title">
                        <h5>Últimos Post</h5>
                    </div>
                    <div class="footer__links">
                        <ul>
                            <li><a href="personal-portfolio.html">Eddy Lujan - Full Stack Software Developer</a></li>
                            <li><a href="minimal-portfolio-agency.html">La compañia sobre Indra</a></li>
                            <li><a href="creative-agency.html">La compañia sobre Evidenze</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__widget">
                    <div class="footer__widget-title">
                        <h5>Suscríbase ahora</h5>
                    </div>
                    <div class="footer__widget-content">
                        <p>Suscríbase para recibir mis últimas noticias</p>
                        <form action="#">
                            <div class="footer__input">
                                <input type="text" placeholder="Introduzca su correo electónico">
                                <button class="footer__btn" type="submit"><i class="icon-plane"></i></button>
                            </div>
                        </form>
                        <p>*No voy a guardar tus datos.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section divider -->
        <div class="section__divider">
            <hr>
        </div>
        <div class="footer__copyright style-two">
            <div class="container">
                <div class="footer__copyright">
                    <p>Copyright @ 2025 <a href="#">Lujandev.</a> All Right Reserved</p>
                </div>
            </div>
        </div>
    </section>
</footer>
<!-- Footer area end -->