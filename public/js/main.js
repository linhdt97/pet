$('._header .search-container label').click(function () {
    let that = $(this);
    if (that.attr('class').match(/active/i)) {
        that.closest('form').submit();
    } else {
        that.addClass('active')
            .children().attr('class', 'icon-search-after');
        that.siblings('input').css('display', 'block').css('width', 'calc(100% - 25px)');
    }
});

$('._products .product-item i').click(function () {
    let that = $(this);
    if (that.attr('class').match(/icon-heart/i)) {
        let classIcon = 'icon ' + (that.attr('class').match(/icon-heart-checked/i) ? 'icon-heart' : 'icon-heart-checked');
        that.attr('class', classIcon);
    }
    if (that.attr('class').match(/icon-cart/i)) {
        let domCountProducts = $('._header .cart span');
        domCountProducts.text(parseInt(domCountProducts.text()) + 1);
    }
});

let $witchSlides = $('._banner .switch span');
let $imgSlides = $('._banner img');
var currentIndex = 0;

setInterval(function () {
    currentIndex++;
    if (currentIndex >= $imgSlides.length) {
        currentIndex = 0;
    }
    changeSlide(currentIndex);
}, 5000);

$witchSlides.click(function () {
    let index = parseInt($(this).data('id')) - 1;
    if (index === currentIndex) {
        return;
    }
    changeSlide(index);
});

function changeSlide(index) {
    $witchSlides.map((i, el) => {(i === index) ? $(el).addClass('active') : $(el).removeClass('active')});
    $imgSlides.hide();
    $('.slide-' + (index + 1)).fadeIn(1000);
    currentIndex = index;
}



