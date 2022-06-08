// Import scripts
import {Fancybox} from '@fancyapps/ui'; // eslint-disable-line
import './vendor/slick.min';

// Styles
import '../sass/main.scss';

// Import asset images
import './images';

// Import javascript
// import debounce from './helpers/debounce';

import siteMenu from './partials/siteMenu';

import slickSettings from './partials/slickSettings';

jQuery(document).ready(function () {
    siteMenu(jQuery);

    slickSettings(jQuery);

});

var bar = document.querySelector(".fa-bars");

var list = document.querySelector(".list");

bar.addEventListener("click", active);

function active() {
    if (window.innerWidth < 768) list.classList.toggle("active");
}

window.addEventListener("resize", activeRemove);

function activeRemove() {
    if (window.innerWidth > 768) {
        list.classList.remove("active");
    }
}