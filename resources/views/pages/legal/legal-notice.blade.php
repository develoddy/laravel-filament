@extends('layouts.app')

@section('title', 'Legal Notice | LujanDev')

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
                            <h1 class="breadcrumb__title mb-25">Legal Notice</h1>

                            <p>
                                Legal information about LujanDev and the terms of use of this website.
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
                                        <span>Legal Notice</span>
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

    <!-- legal content start -->
    <section class="section-space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10">

                    <div class="mb-50">
                        <h3 class="mb-20">1. Website owner</h3>

                        <p>
                            This website, available at <strong>lujandev.com</strong>,
                            is the website of the personal project <strong>LujanDev</strong>.
                        </p>

                        <p>
                            LujanDev is a personal space focused on software development,
                            building and experimenting with digital products, and sharing
                            part of the building and learning process in public.
                        </p>

                        <ul>
                            <li><strong>Owner:</strong> [FULL LEGAL NAME]</li>
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
                        <h3 class="mb-20">2. Purpose of the website</h3>

                        <p>
                            LujanDev is used to showcase projects, experiments,
                            digital products, development processes and content related
                            to technology, software and product building.
                        </p>

                        <p>
                            The content published on this website is primarily intended
                            to provide information, document the building process and
                            present projects developed under LujanDev.
                        </p>
                    </div>

                    <div class="mb-50">
                        <h3 class="mb-20">3. Terms of use</h3>

                        <p>
                            Accessing and browsing this website implies acceptance of
                            these terms of use.
                        </p>

                        <p>
                            Users agree to use the website lawfully and not to carry out
                            activities that may damage, overload, disrupt or prevent its
                            normal operation.
                        </p>
                    </div>

                    <div class="mb-50">
                        <h3 class="mb-20">4. Intellectual and industrial property</h3>

                        <p>
                            Unless otherwise stated, original content published on
                            LujanDev, including texts, designs, graphic elements,
                            proprietary code, photographs and other materials created
                            specifically for the project, belongs to the website owner
                            or is used with the appropriate authorization or licence.
                        </p>

                        <p>
                            Third-party trademarks, logos, technologies, libraries and
                            other third-party content that may appear on this website
                            belong to their respective owners.
                        </p>

                        <p>
                            Reproduction, distribution or exploitation of original
                            LujanDev content beyond what is permitted by applicable law
                            is not authorized without the corresponding permission.
                        </p>
                    </div>

                    <div class="mb-50">
                        <h3 class="mb-20">5. External links</h3>

                        <p>
                            This website may contain links to websites, platforms,
                            tools or services managed by third parties.
                        </p>

                        <p>
                            LujanDev does not necessarily control these external
                            websites and is not responsible for their content,
                            availability, policies or practices. Access to third-party
                            websites is carried out at the user's own responsibility.
                        </p>
                    </div>

                    <div class="mb-50">
                        <h3 class="mb-20">6. Liability</h3>

                        <p>
                            Reasonable efforts are made to keep the information published
                            on this website accurate and up to date. However, the absence
                            of errors, service interruptions or outdated information
                            cannot be guaranteed.
                        </p>

                        <p>
                            Content related to development, technology, experiments
                            and products may reflect ongoing processes and learnings
                            that can evolve over time.
                        </p>
                    </div>

                    <div class="mb-50">
                        <h3 class="mb-20">7. Applicable law</h3>

                        <p>
                            This website is governed by the applicable laws of Spain.
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
    <!-- legal content end -->

@endsection