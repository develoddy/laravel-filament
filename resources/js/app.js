
console.log('✅ app.js cargado');
//debugger; // Pausa la ejecución aquí

import.meta.glob(['../imgs/**']);
import './bootstrap';

// Importa los plugins en el orden correcto
import './plugins/waypoints.min.js';
import './plugins/meanmenu.min.js';
import './plugins/counterup.js';
import './plugins/jarallax.min.js';
import './plugins/nice-select.min.js';
import './plugins/parallax-scroll.js';
import './plugins/parallax.min.js';
import './plugins/slick.min.js';
import './plugins/swiper.min.js';
//import './plugins/wow.js';

// ✅ WOW.js (importando correctamente y exponiéndolo globalmente)
import * as wowjs from 'wowjs';
window.WOW = wowjs.WOW;

// Importa los scripts vendor que no son módulos ES (y que dependen de jQuery)
import './vendor/tween-max.js';
import './vendor/magnific-popup.min.js';
import './vendor/isotope.pkgd.min.js';
import './vendor/imagesloaded.pkgd.min.js';
import './vendor/vanilla.tilt.js';
import './vendor/jquery-ui.min.js';
import './vendor/hover-reveal.js';
import './vendor/ajax-form.js';
import './vendor/js_circle-progress.min.js';

import '../scss/app.scss';
import './styles';

import './main.js';

// ✅ Asegúrate de que WOW.js se inicialice después de que el DOM esté listo
document.addEventListener('DOMContentLoaded', () => {
    new WOW().init();
});