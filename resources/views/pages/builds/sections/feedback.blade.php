<!-- portfolio comment form area start -->
    <section class="portfolio-comment-form__area section-space theme-bg-secondary">
        <div class="container">
            <div class="row">
                
                <div class="col-12">
                    <div class="postbox__comment-form">
                        <h4 class="postbox__comment-form-title">Share Your Feedback 💡</h4>
                        <p>
                            @if($isExperiment)
                                I'd love to hear your thoughts. What do you think about this experiment? Any suggestions?
                            @else
                                I'd love to hear your thoughts. What do you think about this product? Any suggestions?
                            @endif
                        </p>
                        <form action="{{ route('contact.send') }}" method="POST" id="contact-form">
                            @csrf

                            {{-- El asunto se genera automáticamente según el experimento/producto --}}
                            <input
                                type="hidden"
                                name="subject"
                                value="Feedback — {{ $detail->title ?? $portfolio->titulo }}"
                            >

                            <div class="row">

                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="postbox__comment-input">
                                        <input
                                            type="text"
                                            name="name"
                                            value="{{ old('name') }}"
                                            placeholder="Your Name*"
                                            autocomplete="name"
                                            required
                                        >
                                    </div>
                                </div>

                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="postbox__comment-input">
                                        <input
                                            type="email"
                                            name="email"
                                            value="{{ old('email') }}"
                                            placeholder="Your Email*"
                                            autocomplete="email"
                                            required
                                        >
                                    </div>
                                </div>

                                <div class="col-xxl-12">
                                    <div class="postbox__comment-input">
                                        <textarea
                                            name="message"
                                            placeholder="Your feedback, questions, or ideas..."
                                            required
                                        >{{ old('message') }}</textarea>
                                    </div>
                                </div>

                            </div>

                            @include('components._form-security')

                            <div class="postbox__comment-form-btn">
                                <button type="submit" class="bd-btn">
                                    Send Feedback
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
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
        </div>
    </section>
<!-- portfolio comment form area end -->