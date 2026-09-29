{{-- Honeypot anti-spam --}}
<div
    aria-hidden="true"
    style="position:absolute; left:-9999px; width:1px; height:1px; overflow:hidden;"
>
    <label for="website">Website</label>

    <input
        type="text"
        name="website"
        id="website"
        value=""
        tabindex="-1"
        autocomplete="off"
    >
</div>

{{-- Cloudflare Turnstile --}}
<div class="mb-4">
    <div
        class="cf-turnstile"
        data-sitekey="{{ config('services.turnstile.site_key') }}"
        data-theme="dark"
    ></div>
</div>

{{-- Load Turnstile only once per page --}}
@once
    <script
        src="https://challenges.cloudflare.com/turnstile/v0/api.js"
        async
        defer
    ></script>
@endonce