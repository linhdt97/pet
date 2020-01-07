$('._header .fa-search').click(function () {
    let that = $(this);
    if (that.attr('class').match(/active/i)) {
        that.closest('form').submit();
    } else {
        that.addClass('active')
            .siblings('input').css('display', 'block').css('width', 'calc(100% - 25px)');
    }
});