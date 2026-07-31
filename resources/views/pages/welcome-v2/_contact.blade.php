<!-- contact area start -->
<section
    id="homecontact"
    class="bd-contact__area theme-bg-secondary section-space p-relative fix"
>
    <div class="contact__shape">
        <img
            class="contact__shape-one"
            src="{{ Vite::asset('resources/imgs/shape/contact-shape-01.png') }}"
            alt=""
            aria-hidden="true"
        >

        <img
            class="contact__shape-two"
            src="{{ Vite::asset('resources/imgs/shape/contact-shape-02.png') }}"
            alt=""
            aria-hidden="true"
        >
    </div>

    <div class="container">
        <div class="row g-5 align-items-center">

            <!-- Formulario -->
            <div
                class="col-xl-6 col-lg-6 col-md-6 order-md-0 order-1 wow fadeInLeft"
                data-wow-delay=".3s"
            >
                <div class="section__title-wrapper section__title-space">

                    <span class="section__subtitle mb-15">
                        HABLEMOS
                    </span>

                    <h2 class="section__title">
                        ¿Tienes una idea que quieres convertir en producto?
                    </h2>

                    <p class="mt-3">
                        Puedo ayudarte a desarrollar, integrar o mejorar un producto
                        digital: backend, pagos, automatizaciones e integraciones.
                    </p>

                </div>

                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf

                    <div class="floating__form-content">
                        <div class="row g-4">

                            <div class="col-12">
                                <div class="floating__form-input">

                                    <input
                                        type="text"
                                        id="contact-name"
                                        name="name"
                                        class="inputText"
                                        value="{{ old('name') }}"
                                        autocomplete="name"
                                        required
                                    >

                                    <label
                                        for="contact-name"
                                        class="floating-label"
                                    >
                                        Nombre*
                                    </label>

                                </div>
                            </div>

                            <div class="col-12">
                                <div class="floating__form-input">

                                    <input
                                        type="email"
                                        id="contact-email"
                                        name="email"
                                        class="inputText"
                                        value="{{ old('email') }}"
                                        autocomplete="email"
                                        required
                                    >

                                    <label
                                        for="contact-email"
                                        class="floating-label"
                                    >
                                        Email*
                                    </label>

                                </div>
                            </div>

                            <div class="col-12">
                                <div class="floating__form-input">

                                    <input
                                        type="text"
                                        id="contact-subject"
                                        name="subject"
                                        class="inputText"
                                        value="{{ old('subject') }}"
                                        required
                                    >

                                    <label
                                        for="contact-subject"
                                        class="floating-label"
                                    >
                                        Asunto*
                                    </label>

                                </div>
                            </div>

                            <div class="col-12">
                                <div class="from__input-box">
                                    <div class="floating__form-input">

                                        <textarea
                                            id="contact-message"
                                            name="message"
                                            class="textareaText"
                                            required
                                        >{{ old('message') }}</textarea>

                                        <label
                                            for="contact-message"
                                            class="floating-label-two"
                                        >
                                            Cuéntame qué estás construyendo*
                                        </label>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="contact__btn">
                            <button
                                type="submit"
                                class="bd-btn w-100"
                            >
                                Enviar mensaje
                            </button>
                        </div>

                    </div>
                </form>

                <div id="contact-form-feedback" class="mt-3">

                    @if (session('success'))
                        <div
                            class="alert alert-success mb-4"
                            role="status"
                        >
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div
                            class="alert alert-danger mb-4"
                            role="alert"
                        >
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </div>
            </div>

            <!-- Información -->
            <div
                class="col-xl-6 col-lg-6 col-md-6 order-md-1 order-0 wow fadeInRight"
                data-wow-delay=".3s"
            >
                <div class="contact__info-wrapper">

                    <div class="contact__brand text-center mb-5">

                        <div class="contact__logo mb-4">
                            <img src="{{ Vite::asset('resources/imgs/logo/logo-white-v2.png') }}" alt="LujanDev Logo" class="mb-4">
                            {{-- <h2 class="display-1 fw-bold text-white mb-0">
                                LD
                            </h2> --}}
                        </div>

                        <h4 class="text-white mb-3">
                            Construyamos algo real.
                        </h4>

                        <p class="text-white-50 mb-4 fs-5">
                            Disponible para proyectos, colaboraciones y
                            conversaciones sobre software y producto.
                        </p>

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
                                        <h6>
                                            Madrid, España
                                        </h6>
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
                                        <h6>
                                            <a href="mailto:lujandev@lujandev.com">
                                                lujandev@lujandev.com
                                            </a>
                                        </h6>
                                    </div>

                                </div>
                            </li>

                        </ul>
                    </div>

                    <div class="contact__social text-center mt-4">
                        <div class="theme__social d-flex justify-content-center gap-3">

                            <a
                                href="https://x.com/lujandev"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="text-white"
                                aria-label="Ver perfil de LujanDev en X"
                            >
                                <i
                                    class="icon-twiter"
                                    style="font-size: 1.5rem;"
                                ></i>
                            </a>

                            <a
                                href="https://www.linkedin.com/in/lujandev/"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="text-white"
                                aria-label="Ver perfil de LujanDev en LinkedIn"
                            >
                                <i
                                    class="fa-brands fa-linkedin"
                                    style="font-size: 1.5rem;"
                                ></i>
                            </a>

                            <a
                                href="https://www.instagram.com/lujandev/"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="text-white"
                                aria-label="Ver perfil de LujanDev en Instagram"
                            >
                                <i
                                    class="fa-brands fa-instagram"
                                    style="font-size: 1.5rem;"
                                ></i>
                            </a>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- contact area end -->