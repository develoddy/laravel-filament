const measurementId = import.meta.env.VITE_GA4_MEASUREMENT_ID;
const analyticsEnabled = import.meta.env.VITE_GA4_ENABLED === 'true';

let analyticsLoaded = false;

const getDisableKey = () => `ga-disable-${measurementId}`;

const enableAnalytics = () => {
    if (!analyticsEnabled || !measurementId) {
        return;
    }

    // Permite volver a activar Analytics si anteriormente fue rechazado.
    window[getDisableKey()] = false;

    // Evita cargar gtag.js más de una vez.
    if (analyticsLoaded) {
        return;
    }

    analyticsLoaded = true;

    window.dataLayer = window.dataLayer || [];

    window.gtag = function () {
        window.dataLayer.push(arguments);
    };

    window.gtag('js', new Date());
    window.gtag('config', measurementId);

    const script = document.createElement('script');

    script.async = true;
    script.src = `https://www.googletagmanager.com/gtag/js?id=${encodeURIComponent(measurementId)}`;

    document.head.appendChild(script);
};

const deleteAnalyticsCookies = () => {
    const cookies = document.cookie.split(';');

    cookies.forEach((cookie) => {
        const cookieName = cookie.split('=')[0].trim();

        if (cookieName !== '_ga' && !cookieName.startsWith('_ga_')) {
            return;
        }

        // Cookie creada para el host actual.
        document.cookie = `${cookieName}=; Max-Age=0; path=/; SameSite=Lax`;

        // Cookie creada para el dominio raíz.
        document.cookie = `${cookieName}=; Max-Age=0; path=/; domain=.${window.location.hostname}; SameSite=Lax`;
    });
};

const disableAnalytics = () => {
    if (!measurementId) {
        return;
    }

    window[getDisableKey()] = true;
    deleteAnalyticsCookies();
};

const initAnalytics = () => {
    if (!analyticsEnabled || !measurementId) {
        return;
    }

    const consent = window.LujanDevConsent?.get();

    if (consent === 'accepted') {
        enableAnalytics();
    } else {
        disableAnalytics();
    }

    window.addEventListener('lujandev:consent-updated', (event) => {
        if (event.detail?.analytics === true) {
            enableAnalytics();
            return;
        }

        disableAnalytics();
    });
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initAnalytics);
} else {
    initAnalytics();
}