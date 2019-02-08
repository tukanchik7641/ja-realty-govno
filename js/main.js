$(document).ready(function () {

    mainJS();

    $(window).resize(function () {
        mainJS();
    });


    function mainJS() {
        var menuHeight = $(window).height();



        $('.menu-container').css('height', menuHeight);

        $('.menu-container').css('top', '-' + menuHeight + 'px');

        



        $('.menu-burger').find('i').click(function () {
            $('.menu-container').show();
            $('.menu-container').animate({
                'top': 0
            }, 400);

        });

        $('.close-menu').find('i').click(function () {
            $('.menu-container').animate({
                'top': '-' + menuHeight + 'px'
            }, 400);

            

        });

        $('.menu-item').click(function(){
            $('.menu-container').animate({
                'top': '-' + menuHeight + 'px'
            }, 400);
        });

        $('.close-menu').find('i').mouseover(function () {
            $('.close-menu').find('i').animate({
                borderSpacing: 90
            }, {
                step: function (now, fx) {
                    $(this).css('transform', 'rotate(' + now + 'deg)');
                },
                duration: 'slow'
            }, 'linear');
        });

        $('.close-menu').find('i').mouseout(function () {
            $('.close-menu').find('i').animate({
                borderSpacing: 0
            }, {
                step: function (now, fx) {
                    $(this).css('transform', 'rotate(' + now + 'deg)');
                },
                duration: 'slow'
            }, 'linear');
        });

        var menuFixedHeight = $('.fixed-menu').height();

        $('#fixed-menu').css('top', '-' + menuFixedHeight + 'px');

        $('.fixed-menu').show();

        $(window).scroll(function () {
            if ($(window).scrollTop() >= 100) {
                $('#fixed-menu').css({
                    'top': 0,
                    'position': 'fixed'
                })
            } else {
                $('#fixed-menu').css({
                    'top': '-' + menuFixedHeight + 'px',
                    'position': 'fixed'
                })  
            }
        });

    }

});