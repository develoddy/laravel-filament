{{-- ============================================================
        CASE STUDY
    ============================================================ --}}
    @if(!empty($detail->description))

        <section class="project-case-study section-space-bottom">

            <div class="container">

                <div class="project-case-study__wrapper">

                    <div class="project-case-study__label">
                        {{ $isExperiment ? 'CASE STUDY' : 'BUILD DETAILS' }}
                    </div>

                    <article class="project-case-study__content">
                        {!! $detail->description !!}
                    </article>

                </div>

            </div>

        </section>

    @endif