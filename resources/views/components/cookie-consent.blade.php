<div
    id="cookie-consent"
    class="cookie-consent"
    role="dialog"
    aria-modal="false"
    aria-labelledby="cookie-consent-title"
    aria-describedby="cookie-consent-description"
    hidden
>
    <div class="cookie-consent__inner">

        <div class="cookie-consent__content">
            <span class="cookie-consent__eyebrow">Privacy</span>

            <h5 id="cookie-consent-title">
                Your privacy choices
            </h5>

            <p id="cookie-consent-description">
                We use essential technologies to keep LujanDev working.
                With your permission, we also use analytics to understand
                how the site is used.
            </p>

            <a
                href="{{ route('legal.cookies') }}"
                class="cookie-consent__link"
            >
                Read our Cookie Policy
            </a>
        </div>

        <div class="cookie-consent__actions">
            <button
                type="button"
                class="cookie-consent__button cookie-consent__button--secondary"
                data-cookie-reject
            >
                Reject
            </button>

            <button
                type="button"
                class="cookie-consent__button cookie-consent__button--primary"
                data-cookie-accept
            >
                Accept
            </button>
        </div>

    </div>
</div>