@extends('layouts.app')

@section('title', 'Privacy Policy | LujanDev')

@section('content')

    <!-- breadcrumb area start -->
    <section class="breadcrumb__area p-relative style-two is-breadcrumb-space">
        <div
            class="breadcrumb__thumb-bg include-bg bg__thumb-position"
            data-background="{{ Vite::asset('resources/imgs/breadcrumb/breadcrumb-bg-12.png') }}"
        ></div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10">
                    <div class="breadcrumb__content-wrapper p-relative z-index-1">
                        <div class="breadcrumb__title-wrapper text-center">
                            <h1 class="breadcrumb__title mb-25">Privacy Policy</h1>

                            <p>
                                Information about how personal data is processed on LujanDev.
                            </p>
                        </div>

                        <div class="breadcrumb__menu text-center">
                            <nav>
                                <ul>
                                    <li>
                                        <span>
                                            <a href="{{ route('home') }}">Home</a>
                                        </span>
                                    </li>
                                    <li>
                                        <span>Privacy Policy</span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- privacy content start -->
    <section class="section-space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10">

                    <div class="mb-50">
                        <h3 class="mb-20">1. Data controller</h3>

                        <p>
                            The controller responsible for personal data processed through
                            this website is:
                        </p>

                        <ul>
                            <li><strong>Owner:</strong> [FULL LEGAL NAME]</li>
                            <li><strong>Project:</strong> LujanDev</li>
                            <li><strong>Tax ID:</strong> [NIF]</li>
                            <li><strong>Address:</strong> [ADDRESS]</li>
                            <li>
                                <strong>Email:</strong>
                                <a href="mailto:lujandev@lujandev.com">
                                    lujandev@lujandev.com
                                </a>
                            </li>
                            <li><strong>Website:</strong> lujandev.com</li>
                        </ul>
                    </div>

                    <div class="mb-50">
                        <h3 class="mb-20">2. Personal data we collect</h3>

                        <p>
                            When you use the LujanDev contact form, the following information
                            may be collected:
                        </p>

                        <ul>
                            <li>Name.</li>
                            <li>Email address.</li>
                            <li>Subject of the enquiry.</li>
                            <li>Content of the message.</li>
                        </ul>

                        <p>
                            The contact form also uses Cloudflare Turnstile to help protect
                            the website against spam, bots and malicious automated activity.
                            Technical signals necessary to perform this security verification
                            may therefore also be processed.
                        </p>

                        <p>
                            If the user consents to analytics, LujanDev also uses
                            <strong>Google Analytics 4 (GA4)</strong> to collect information
                            about the use of the website.
                        </p>

                        <p>
                            This may include information such as page views, interactions,
                            session information, traffic sources, approximate geographic
                            location and information about the browser and device used to
                            access the website.
                        </p>

                        <p>
                            Google Analytics also uses identifiers stored in first-party
                            cookies to distinguish users and sessions. Analytics is not
                            activated unless the user has accepted analytics technologies.
                        </p>
                    </div>

                    <div class="mb-50">
                        <h3 class="mb-20">3. Purpose of processing</h3>

                        <p>
                            Personal data submitted through the contact form is processed
                            in order to receive, manage and respond to enquiries, messages,
                            feedback or requests sent to LujanDev.
                        </p>

                        <p>
                            Information submitted through the contact form is not used,
                            solely as a result of contacting LujanDev, to subscribe users
                            to newsletters or unsolicited marketing communications.
                        </p>

                        <p>
                            Where the user has consented to analytics, usage information is
                            processed to measure website traffic and interactions, understand
                            how visitors use LujanDev and improve the website, its content,
                            experiments and user experience.
                        </p>
                    </div>

                    <div class="mb-50">
                        <h3 class="mb-20">4. Legal basis</h3>

                        <p>
                            Personal data submitted through the contact form is processed
                            in order to manage and respond to a communication initiated
                            by the person contacting LujanDev.
                        </p>

                        <p>
                            Depending on the nature of the enquiry, processing may be
                            necessary to take steps at the request of the data subject
                            before entering into a contract, or may be based on the
                            legitimate interest in receiving, managing and responding
                            to communications addressed to the website owner.
                        </p>

                        <p>
                            Technical information used to protect the contact form against
                            spam, bots and abuse is processed on the basis of the legitimate
                            interest in maintaining the security and integrity of the website.
                        </p>

                        <p>
                            The use of Google Analytics is based on the user's consent.
                            Analytics is not activated before consent is given, and consent
                            can be changed or withdrawn at any time through
                            <strong>Cookie Settings</strong> in the website footer.
                        </p>
                    </div>

                    <div class="mb-50">
                        <h3 class="mb-20">5. Data retention</h3>

                        <p>
                            Personal data associated with enquiries will be retained for
                            as long as necessary to manage and respond to the communication.
                        </p>

                        <p>
                            Where necessary, certain information may subsequently be retained
                            for the period required to comply with applicable legal obligations
                            or to address possible liabilities arising from the processing.
                        </p>

                        <p>
                            When personal data is no longer required for these purposes,
                            it will be deleted or, where applicable, appropriately restricted
                            for the legally required period.
                        </p>

                        <p>
                            For Google Analytics, LujanDev currently configures event-level
                            data retention for 2 months and user-level data retention for
                            14 months. The user-level retention period is not reset when new
                            activity occurs.
                        </p>

                        <p>
                            These retention settings apply to the user-level and event-level
                            data covered by Google Analytics retention controls. Standard
                            aggregated Analytics reports may be retained separately in
                            accordance with Google's technical operation of the service.
                        </p>
                    </div>

                    <div class="mb-50">
                        <h3 class="mb-20">6. Service providers and recipients</h3>

                        <p>
                            Personal data is not sold to third parties.
                        </p>

                        <p>
                            Technical service providers may process information where
                            necessary to provide services such as website hosting, email,
                            security and infrastructure required for the operation of
                            LujanDev.
                        </p>

                        <p>
                            In particular, LujanDev uses <strong>Cloudflare Turnstile</strong>
                            to protect the contact form against bots and malicious automated
                            activity.
                        </p>

                        <p>
                            Where analytics consent has been provided, LujanDev also uses
                            <strong>Google Analytics 4</strong>, provided by Google, to measure
                            website usage and interactions. Google may process information
                            collected through Analytics in order to provide this service.
                        </p>
                    </div>

                    <div class="mb-50">
                        <h3 class="mb-20">7. Cloudflare Turnstile</h3>

                        <p>
                            The contact form uses Cloudflare Turnstile as a security and
                            anti-spam mechanism.
                        </p>

                        <p>
                            When Turnstile is used, Cloudflare may process technical signals
                            such as the visitor's IP address, browser and user-agent
                            information, TLS-related signals and information associated
                            with the website in order to distinguish legitimate visitors
                            from automated traffic.
                        </p>

                        <p>
                            These security checks help protect LujanDev against bots,
                            spam and other abusive or malicious activity.
                        </p>

                        <p>
                            Cloudflare is a global service provider and processing may
                            involve international transfers of personal data. Where
                            applicable, such transfers are subject to the safeguards
                            required by data protection law.
                        </p>
                    </div>

                    <div class="mb-50">
                        <h3 class="mb-20">8. Google Analytics</h3>

                        <p>
                            LujanDev uses Google Analytics 4 only when the user has
                            consented to analytics technologies.
                        </p>

                        <p>
                            Google Analytics processes information about website usage
                            in order to generate statistics and reports that help LujanDev
                            understand traffic, interactions and how the website is used.
                        </p>

                        <p>
                            Google Analytics may use first-party cookies such as
                            <strong>_ga</strong> and
                            <strong>_ga_&lt;container-id&gt;</strong> for analytics purposes.
                        </p>

                        <p>
                            In Google Analytics 4, IP addresses may be used during data
                            collection to derive approximate location information and are
                            discarded before being logged by Google Analytics.
                        </p>

                        <p>
                            Processing by Google may involve international data transfers.
                            Where applicable, such transfers are subject to the safeguards
                            required by applicable data protection law.
                        </p>

                        <p>
                            Users can withdraw analytics consent at any time through
                            <strong>Cookie Settings</strong> in the website footer.
                            Further information is available in the
                            <a href="{{ route('legal.cookies') }}">
                                Cookie Policy
                            </a>.
                        </p>
                    </div>

                    <div class="mb-50">
                        <h3 class="mb-20">9. Data protection rights</h3>

                        <p>
                            Where applicable, you may exercise your rights of access,
                            rectification, erasure, restriction of processing, objection
                            and data portability.
                        </p>

                        <p>
                            To exercise your rights, you can contact:
                            <a href="mailto:lujandev@lujandev.com">
                                lujandev@lujandev.com
                            </a>.
                        </p>

                        <p>
                            The request should provide sufficient information to identify
                            the person making the request and the right they wish to exercise.
                        </p>

                        <p>
                            You also have the right to lodge a complaint with the
                            <strong>Spanish Data Protection Agency (AEPD)</strong> if you
                            believe that the processing of your personal data does not
                            comply with applicable data protection law.
                        </p>
                    </div>

                    <div class="mb-50">
                        <h3 class="mb-20">10. Data security</h3>

                        <p>
                            Reasonable technical and organisational measures are applied
                            to protect personal data against accidental loss, misuse,
                            unauthorised access, alteration or disclosure.
                        </p>

                        <p>
                            However, no system connected to the Internet can guarantee
                            absolute security.
                        </p>
                    </div>

                    <div class="mb-50">
                        <h3 class="mb-20">11. Changes to this Privacy Policy</h3>

                        <p>
                            This Privacy Policy may be updated when the website, its
                            services or the way personal data is processed changes.
                        </p>

                        <p>
                            The date shown below indicates the latest revision of this
                            policy.
                        </p>
                    </div>

                    <div>
                        <p>
                            <small>Last updated: October 2026.</small>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- privacy content end -->

@endsection