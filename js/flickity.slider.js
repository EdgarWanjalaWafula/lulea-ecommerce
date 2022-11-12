var carousel = document.querySelector('.carousel');
var flkty = new Flickity(carousel, {
    imagesLoaded: true,
    percentPosition: false,
    wrapAround: true,
    autoPlay: true,
    prevNextButtons: false,
    selectedAttraction:.15,
    friction:1.6
});

var imgs = carousel.querySelectorAll('.carousel-cell img');
var docStyle = document.documentElement.style;
var transformProp = typeof docStyle.transform == 'string' ?
    'transform' : 'WebkitTransform';

flkty.on('scroll', function () {
    flkty.slides.forEach(function (slide, i) {
        var img = imgs[i];
        var x = (slide.target + flkty.x) * -1 / 3;
        img.style[transformProp] = 'translateX(' + x + 'px)';
    });
});