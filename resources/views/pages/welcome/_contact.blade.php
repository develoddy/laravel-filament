<div id="homecontact" class="bd-contact__area theme-bg-secondary section-space p-relative fix">
        <div class="contact__shape">
            <img class="contact__shape-one" src="{{ Vite::asset('resources/imgs/shape/contact-shape-01.png') }}" alt="Decorative contact shape element">
            <img class="contact__shape-two" src="{{ Vite::asset('resources/imgs/shape/contact-shape-02.png') }}" alt="Decorative contact shape element">
        </div>
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 order-md-0 order-1 wow fadeInLeft" data-wow-delay=".3s">
                    <div class="section__title-wrapper section__title-space">
                        <span class="section__subtitle mb-15">LET'S CONNECT</span>
                        <h2 class="section__title">Questions, feedback or ideas?</h2>
                        <p class="mt-3">Building something too, or curious about one of my products? Send me a message.</p>
                    </div>
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="floating__form-content">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="floating__form-input">
                                        <input type="text" name="name" class="inputText" required="">
                                        <span class="floating-label">Name*</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="floating__form-input">
                                        <input type="email" name="email" class="inputText" required="">
                                        <span class="floating-label">Email*</span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="floating__form-input">
                                        <input type="text" name="subject" class="inputText" required="">
                                        <span class="floating-label">Subject*</span>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <div class="from__input-box">
                                        <div class="floating__form-input">
                                            <textarea name="message" class="textareaText" required=""></textarea>
                                            <span class="floating-label-two">Message*</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact__btn">
                                {{-- <a class="bd-btn w-100" href="contact.html">Send</a> --}}
                                <button type="submit" class="bd-btn w-100">Send Message</button>
                            </div>
                        </div>
                    </form>
                    <div id="contact-form-feedback" class="mt-3">
                        @if(session('success'))
                            <div class="alert alert-success mb-4">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger mb-4">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 order-md-1 order-0 wow fadeInRight" data-wow-delay=".3s">
                    <div class="contact__info-wrapper">
                        <div class="contact__brand text-center mb-5">
                            <div class="contact__logo mb-4">
                                <h2 class="display-1 fw-bold text-white mb-0">LD</h2>
                            </div>
                            <p class="text-white-50 mb-4 fs-5">Let's build, learn and share.</p>
                        </div>
                        <div class="contact__info-item">
                            <ul>
                                <li>
                                    <div class="contact__info">
                                        <div class="contact__info-icon">
                                            <span>
                                <i class="icon-location"></i>
                                </span>
                                        </div>
                                        <div class="contact__info-content">
                                            <h6><a target="_blank" rel="noopener noreferrer" href="https://www.google.com/maps">Madrid, Spain</a></h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact__info">
                                        <div class="contact__info-icon">
                                            <span>
                                <i class="icon-envelope"></i>
                                </span>
                                        </div>
                                        <div class="contact__info-content">
                                            <h6><a href="mailto:lujandev@lujandev.com">lujandev@lujandev.com</a></h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="contact__social text-center mt-4">
                            <div class="theme__social d-flex justify-content-center gap-3">
                                <a href="https://x.com/lujandev" target="_blank" rel="noopener noreferrer" class="text-white" aria-label="Follow on X"><i class="icon-twiter" style="font-size: 1.5rem;"></i></a>
                                <a href="https://www.linkedin.com/in/lujandev/" target="_blank" rel="noopener noreferrer" class="text-white" aria-label="Follow on LinkedIn"><i class="fa-brands fa-linkedin" style="font-size: 1.5rem;"></i></a>
                                <a href="https://www.instagram.com/lujandev/" target="_blank" rel="noopener noreferrer" class="text-white" aria-label="Follow on Instagram"><i class="fa-brands fa-instagram" style="font-size: 1.5rem;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>