const STORAGE_KEY = 'lujandev_cookie_consent';

const getConsent = () => {
    try {
        return localStorage.getItem(STORAGE_KEY);
    } catch {
        return null;
    }
};

const saveConsent = (value) => {
    try {
        localStorage.setItem(STORAGE_KEY, value);
    } catch {
        // If storage is unavailable, the choice only applies
        // to the current page load.
    }
};

const dispatchConsentEvent = (status) => {
    window.dispatchEvent(
        new CustomEvent('lujandev:consent-updated', {
            detail: {
                status,
                analytics: status === 'accepted',
            },
        })
    );
};

const initCookieConsent = () => {
    const banner = document.getElementById('cookie-consent');

    if (!banner) {
        return;
    }

    const acceptButton = banner.querySelector('[data-cookie-accept]');
    const rejectButton = banner.querySelector('[data-cookie-reject]');
    const settingsButtons = document.querySelectorAll('[data-cookie-settings]');

    const showBanner = () => {
        banner.hidden = false;
    };

    const hideBanner = () => {
        banner.hidden = true;
    };

    const setConsent = (status) => {
        saveConsent(status);
        hideBanner();
        dispatchConsentEvent(status);
    };

    acceptButton?.addEventListener('click', () => {
        setConsent('accepted');
    });

    rejectButton?.addEventListener('click', () => {
        setConsent('rejected');
    });

    settingsButtons.forEach((button) => {
        button.addEventListener('click', () => {
            showBanner();
        });
    });

    window.LujanDevConsent = {
        get: getConsent,

        open: () => {
            showBanner();
        },
    };

    const currentConsent = getConsent();

    if (currentConsent !== 'accepted' && currentConsent !== 'rejected') {
        showBanner();
    }
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initCookieConsent);
} else {
    initCookieConsent();
}