/* ------------------------------------------------------------- */
/* INIT
/* ------------------------------------------------------------- */

let docCol, window_width, window_height, scroll_y;

$(window).ready(function() {
    'use strict';
    domElements();
    AOS.init({
        once: true,
    });
});

$(window).resize(function() {
    'use strict';
    domElements();
});

$(window).scroll(function() {
    'use strict';
    domElements();
});

/* ------------------------------------------------------------- */
/* DOM
/* ------------------------------------------------------------- */

function domElements() {
    'use strict'
    scroll_y = $(window).scrollTop();
    window_width = $(window).outerWidth(true);
    window_height = $(window).outerHeight(true);
    docCol = window_width / 16;
    var html = document.querySelector('html');
    html.style.setProperty('--col', docCol + 'px');
    html.style.setProperty('--vh', window_height + 'px');
    var document_height = $(document).outerHeight(true);
    var perc = scroll_y / (document_height - window_height) * 100;
    $('div.scrollbar div.bar div.scroll').css({
        'top': perc + '%'
    });
}

/* ------------------------------------------------------ */
/* SCROLL TO
/* ------------------------------------------------------ */
function scrollToElement(element, speed, gap) {
    'use strict';
    if (!element) {
        return;
    }
    if (!speed) {
        speed = 500;
    }
    if (!gap) {
        gap = 0;
    }
    $('html,body').stop().animate({
        scrollTop: $(element).offset().top + gap
    }, speed, 'swing');
}
