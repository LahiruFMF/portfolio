$(function () {

    $('#btn-scroll-left').click(function(){
        alert('a');
    });

    $('#btn-scroll-right').click(function(){
        $('html, body').animate({scrollLeft: $('.page').offset().left}, 800);
    });
});