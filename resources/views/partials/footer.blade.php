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
                        <h5>About Me</h5>
                    </div>
                    <div class="footer__widget-content">
                        <p class="mb-30">
                            I build tiny SaaS products, experiment fast, and share my journey publicly. I love turning ideas into real, usable tools.
                        </p>
                        <div class="contact__info-item style-two">
                            <ul>
                                <li>
                                    <div class="contact__info">
                                        <div class="contact__info-icon">
                                            <span><i class="icon-phone"></i></span>
                                        </div>
                                        <div class="contact__info-content">
                                            <p>Phone</p>
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
                        <h5>Lujandev</h5>
                    </div>
                    <div class="footer__links">
                        <ul>
                            <li><a href="{{ route('about') }}">About Me</a></li>
                            <li><a href="{{ route('service') }}">Services</a></li>
                            <li><a href="{{ route('my-project') }}">My Projects</a></li>
                            {{-- <li><a href="#">Blog</a></li> --}}
                            <li><a href="{{ route('contact') }}">Try Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__widget">
                    <div class="footer__widget-title">
                        <h5>Latest Posts</h5>
                    </div>
                    <div class="footer__links">
                        <ul>
                            <li><a href="#">Eddy Lujan - Full Stack Software Developer</a></li>
                            <li><a href="#">Insights on Evidenze</a></li>
                            <li><a href="#">Journey at Indra</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__widget">
                    <div class="footer__widget-title">
                        <h5>Subscribe</h5>
                    </div>
                    <div class="footer__widget-content">
                        <p>Subscribe to get updates on my experiments and MVP launches.</p>
                        <form action="#">
                            <div class="footer__input">
                                <input type="text" placeholder="Enter your email address">
                                <button class="footer__btn" type="submit"><i class="icon-plane"></i></button>
                            </div>
                        </form>
                        <p>*I won’t store your data.</p>
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