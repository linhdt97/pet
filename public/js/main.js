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

// ẩn/hiện giỏ hàng
$('._header .icon-cart').click(function () {
    $('._cart').show(1000);
});
$('._cart .btn-close').click(function () {
    $('._cart').hide(1000);
});

function addDotInNumber(number) {
    return (number + '').replace(/\B(?=(\d{3})+(?!\d))/g, '.');
}
function removeDotInNumber(number) {
    return (number + '').replace(/\./g, '');
}
function updateTotalPriceInCart()
{
    let totalPrice = 0;
    $('._cart table td.total span').map((i, el) => {
        let total = removeDotInNumber($(el).text());
        totalPrice += parseInt(total);
    });
    $('._cart .total-cart span').text(addDotInNumber(totalPrice) + ' vnđ');
}

// cập nhật giỏ hàng
$('._cart .icon-add').click(function () {
    let that = $(this);
    let quantity = parseInt(that.siblings('.quantity').text()) + 1;
    let price = that.parent().siblings('.price').data('value');
    that.parent().siblings('.total').children('span').text(addDotInNumber(quantity * price));
    that.siblings('.quantity').text(quantity);
    updateTotalPriceInCart();
});
$('._cart .icon-sub').click(function () {
    let that = $(this);
    let quantity = parseInt(that.siblings('.quantity').text()) - 1;
    if (quantity === 0) {
        return;
    }
    let price = that.parent().siblings('.price').data('value');
    that.parent().siblings('.total').children('span').text(addDotInNumber(quantity * price));
    that.siblings('.quantity').text(quantity);
    updateTotalPriceInCart();
});
$('._cart .btn-remove').click(function () {
    $(this).closest('tr').remove();
    updateTotalPriceInCart();
});







