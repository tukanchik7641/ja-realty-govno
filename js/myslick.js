jQuery(function ($) {


    $('.slides').slick({
        draggable: false,
        nextArrow: '<img class="arrow-next" src="wp-content/themes/jarealty/img/next.png">',
        prevArrow: '<img class="arrow-prev" src="wp-content/themes/jarealty/img/prev.png">'
    });


    $('.project-item').on('mouseover', '.title-block', function () {
        // $(this).addClass('transition');
        $(this).parent().find('.slick-active').addClass('transition');
    });

    $('.project-item').on('mouseout', '.title-block', function () {
        $(this).parent().find('.slick-active').removeClass('transition');
    });

    titleBlock();

    $(window).resize(function () {
        titleBlock();
    });

    function titleBlock() {
        var projectItemHeigth = $('.project-item').height();

        $('.title-block').css({
            'height': projectItemHeigth + 'px'
        });

        $('.info-block').css({
            'height': projectItemHeigth + 'px'
        });

    }

    $('.title-block').click(function () {
        $('.info-block').hide();
        $(this).parent().find('.info-block').toggle();
    });

	

	
	
    $('.more-popup').click(function () {
        var formName = $(this).parent().find('.title-name').text();
        $('.form-title-popup').text(formName);
        $('.name-obj').val(formName);
    });

    // setTimeout(function () {
    //     $('.cat2').hide();
    // }, 5000);

    $('.map').appendTo('#projects');

    $('.objects').appendTo('#projects');



    $('.tab1').addClass('active');
    $('.tab2').addClass('no-active');

    $('.tab1').click(function () {
        if ($(this).hasClass('no-active')) {
            $(this).removeClass('no-active');
            $(this).addClass('active');
            $('.tab2').removeClass('.active');
            $('.tab2').addClass('no-active');
            $('.cat1').show();
            $('.cat2').hide();
            $('.cat2').css({
                'position': 'absolute'
            });
        }

    });

    $('.tab2').click(function () {
        if ($(this).hasClass('no-active')) {
            $(this).removeClass('no-active');
            $(this).addClass('active');
            $('.tab1').removeClass('active');
            $('.tab1').addClass('no-active');
            $('.cat1').hide();
            $('.cat2').show();
            $('.cat2').css({
                'position': 'relative'
            });
        }

    });







});