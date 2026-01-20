<div id="homecontact" class="bd-contact__area theme-bg-secondary section-space p-relative fix">
        <div class="contact__shape">
            <img class="contact__shape-one" src="{{ Vite::asset('resources/imgs/shape/contact-shape-01.png') }}" alt="LujanDev">
            <img class="contact__shape-two" src="{{ Vite::asset('resources/imgs/shape/contact-shape-02.png') }}" alt="LujanDev">
        </div>
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 order-md-0 order-1 wow fadeInLeft" data-wow-delay=".3s">
                    <div class="section__title-wrapper section__title-space">
                        <span class="section__subtitle mb-15">GET IN TOUCH 📬</span>
                        <h2 class="section__title">Let's Connect & Share Feedback</h2>
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
                                        <span class="floating-label">Subject</span>
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
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 order-md-1 order-0 wow fadeInRight" data-wow-delay=".3s">
                    <div class="contact__info-wrapper">
                        <div class="contact__thumb">
                            <img src="{{ Vite::asset('resources/imgs/contact/contact-01.png') }}" alt="img not found">
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
                                            <h6><a target="_blank" href="https://www.google.com/maps"> Paseo de la chopera 76, Madrid Spain</a></h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact__info">
                                        <div class="contact__info-icon">
                                            <span>
                                <i class="icon-phone"></i>
                                </span>
                                        </div>
                                        <div class="contact__info-content">
                                            <h6><a href="tel:+13322078097">+34 605 974 436</a></h6>
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
                                            <h6><a href="mailto:me@portlu.com">lujandev@lujandev.com</a></h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>