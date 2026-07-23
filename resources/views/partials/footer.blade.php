<!-- Footer area start -->
<footer>
    <section class="footer__area section-space-top">
        <div class="container">
            <div class="footer__top">
                <div class="footer__logo">
                    <a href="{{ route('welcome') }}">
                        <img src="{{ Vite::asset('resources/imgs/logo/logo-white.png') }}" alt="LujanDev" class="img-fluid w-50">
                    </a>
                </div>
                <div class="footer__content">
                    <div class="theme__social">
                        <a href="https://x.com/lujandev" target="_blank" rel="noopener noreferrer" aria-label="Follow on X"><i class="icon-twiter"></i></a>
                        <a href="https://www.linkedin.com/in/lujandev/" target="_blank" rel="noopener noreferrer" aria-label="Follow on LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/lujandev/" target="_blank" rel="noopener noreferrer" aria-label="Follow on Instagram"><i class="fa-brands fa-instagram"></i></a>
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
                        <h5>LUJANDEV</h5>
                    </div>
                    <div class="footer__widget-content">
                        <p class="mb-30">
                            Building real products in public. Sharing the code, systems and lessons behind the journey.
                        </p>
                        <div class="contact__info-item style-two">
                            <ul>
                                <li>
                                    <div class="contact__info">
                                        <div class="contact__info-icon">
                                            <span><i class="icon-location"></i></span>
                                        </div>
                                        <div class="contact__info-content">
                                            <p>Location</p>
                                            <h6>Madrid, Spain</h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact__info">
                                        <div class="contact__info-icon">
                                            <span><i class="icon-envelope"></i></span>
                                        </div>
                                        <div class="contact__info-content">
                                            <p>Email</p>
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
                        <h5>Navigation</h5>
                    </div>
                    <div class="footer__links">
                        <ul>
                            <li><a href="{{ route('about') }}">About LujanDev</a></li>
                            <li><a href="{{ route('my-project') }}">What I'm Building</a></li>
                            <li><a href="https://tienda.lujandev.com" target="_blank" rel="noopener noreferrer">LujanDev Store</a></li>
                            <li><a href="{{ route('welcome') }}#homejourney">Building in Public</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__widget">
                    <div class="footer__widget-title">
                        <h5>Products</h5>
                    </div>
                    <div class="footer__links">
                        <ul>
                            <li><a href="https://tienda.lujandev.com" target="_blank" rel="noopener noreferrer">LujanDev Store</a></li>
                            <li><a href="{{ route('my-project') }}">All Products</a></li>
                            <li><a href="{{ route('my-project') }}">Experiments</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__widget">
                    <div class="footer__widget-title">
                        <h5>Connect</h5>
                    </div>
                    <div class="footer__widget-content">
                        <p class="mb-3">Follow the journey. Get updates on new products and experiments.</p>
                        <div class="theme__social d-flex gap-3 mb-3">
                            <a href="https://x.com/lujandev" target="_blank" rel="noopener noreferrer" aria-label="Follow on X"><i class="icon-twiter"></i></a>
                            <a href="https://www.linkedin.com/in/lujandev/" target="_blank" rel="noopener noreferrer" aria-label="Follow on LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/lujandev/" target="_blank" rel="noopener noreferrer" aria-label="Follow on Instagram"><i class="fa-brands fa-instagram"></i></a>
                        </div>
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
                    <p>Copyright @ 2026 <a href="{{ route('welcome') }}">Lujandev.</a> All Right Reserved</p>
                </div>
            </div>
        </div>
    </section>
</footer>
<!-- Footer area end -->