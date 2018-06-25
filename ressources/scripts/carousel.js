var btn_left = document.querySelector('.direction-left');
var btn_right = document.querySelector('.direction-right');
var imgs = document.querySelectorAll('.carousel img');
var wrap = document.querySelector('.carousel-wrap');

var counter = 0;

var wrap_width = wrap.offsetWidth;
wrap.style.width = (wrap_width * imgs.length) + 'px';

btn_left.addEventListener('click', function() {
    if (counter > 0) {
        counter--;
    } else {
        counter = imgs.length - 1;
    }

    wrap.style.marginLeft = (-wrap_width * counter) + 'px';
});

btn_right.addEventListener('click', function() {
    if (counter < imgs.length - 1) {
        counter++;
    } else {
        counter = 0;
    }

    wrap.style.marginLeft = (-wrap_width * counter) + 'px';
});
