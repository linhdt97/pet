function addDotInNumber(number) {
    return (number + '').replace(/\B(?=(\d{3})+(?!\d))/g, '.');
}
function removeDotInNumber(number) {
    return (number + '').replace(/\./g, '');
}
var cart = new Cart();
cart.init();

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
    // thích sản phẩm
    if (that.attr('class').match(/icon-heart/i)) {
        let classIcon = 'icon ' + (that.attr('class').match(/icon-heart-checked/i) ? 'icon-heart' : 'icon-heart-checked');
        that.attr('class', classIcon);
    }
    // thêm sản phẩm vào giỏ hàng
    if (that.attr('class').match(/icon-cart/i)) {
        cart.push(that.closest('.product-item'));
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
    cart.renderProducts();
    $('._cart').show(300);
});
$('.btn-close').click(function () {
    $('._cart, ._notification').hide(300);
});

function updateTotalPriceInCart()
{
    let totalPrice = 0;
    $('table td.total span').map((i, el) => {
        let total = removeDotInNumber($(el).text());
        totalPrice += parseInt(total);
    });
    $('.total-cart span').text(addDotInNumber(totalPrice) + ' vnđ');
    if ($('._checkout .options h3>span').length) {
        $('.options h3>span').text(addDotInNumber(totalPrice >= 30000 ? totalPrice - 30000 : 0));
    }
}

// cập nhật giỏ hàng
$(document).on('click', '._cart .icon, ._checkout .icon', function () {
    let that = $(this);
    let quantity = parseInt(that.siblings('.quantity').text());
    let classList = that.attr('class');
    classList.match(/icon-add/i) ? quantity++ : quantity--;
    if (quantity === 0) {
        return;
    }
    let name = that.closest('tr').find('.name').text();
    cart.update(name, quantity);
    let price = that.parent().siblings('.price').data('value');
    that.parent().siblings('.total').children('span').text(addDotInNumber(quantity * price));
    that.siblings('.quantity').text(quantity);
    updateTotalPriceInCart();
});
$(document).on('click', '.btn-remove', function () {
    let domTr = $(this).closest('tr');
    let name = domTr.find('.name').text();
    cart.delete(name);
    domTr.remove();
    updateTotalPriceInCart();
});
// thanh toán, xóa sản phẩm trong giỏ hàng
$('.btn-checkout').click(function () {
    localStorage.removeItem('products');
    localStorage.setItem('checkout-success', '1');
    window.location.href = 'trang-chu.html';
});
// hiển thị modal thanh toán thành công ở trang chủ nếu có
let statusCheckout = localStorage.getItem('checkout-success');
if (parseInt(statusCheckout) === 1) {
    $('._notification').show(300);
    localStorage.removeItem('checkout-success');
}







