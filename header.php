<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,300i,400,400i,500,500i,600,600i,700&amp;subset=cyrillic"
        rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap-flex.min.css" rel="stylesheet">
    </script>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
    <title>
        <?php bloginfo('name'); ?>
        <?php wp_title(); ?>
    </title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <style media="screen">
    #item_menu{
      background-color: #D3D3D3;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
      cursor: pointer;
      width: 180px;
      height: 15px;
      border-radius: 5px;
      text-align: center;
    }
    .sub_menu-item{
      cursor: pointer;
      width: 180px;
      z-index: 1000;
    }
    #item_menu:hover, #item_menu:focus{
      background-color: #A9A9A9;
    }
    #menu{
      position: relative;
      display: inline-block;
    }
    #sub_menu{
      display: none;
      position: fixed;
      z-index: 1000;
      background-color: #D3D3D3;
      min-width: 200px;
      box-shadow: 0px 0px 16px 0px rgba(0, 0, 0, 0.2);
      margin: 0;
      padding: 0;
    }
    #sub_menu .sub_menu-item{
      color: white;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    #sub_menu .sub_menu-item:hover{
      background-color: #A9A9A9;
    }
    #item_menu1{
      background-color: #D3D3D3;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
      cursor: pointer;
      width: 180px;
      border-radius: 5px;
      height: 15px;
      text-align: center;
    }
    .sub_menu-item1{
      cursor: pointer;
      width: 180px;
      z-index: 1000;
    }
    #item_menu1:hover, #item_menu1:focus{
      background-color: #A9A9A9;
    }
    #menu1{
      position: absolute;
      display: inline-block;
      left: 3.5%;
      margin-bottom: 0.7%;
      height: 15px;

    }
    #menu2{
      position: absolute;
      display: inline-block;
      left: 30%;
      margin-bottom: 0.7%;
      height: 15px;
    }
    #sub_menu1{
      display: none;
      position: fixed;
      z-index: 1000;
      background-color: #D3D3D3;
      min-width: 200px;
      box-shadow: 0px 0px 16px 0px rgba(0, 0, 0, 0.2);
      margin: 0;
      padding: 0;
    }
    #sub_menu1 .sub_menu-item1{
      color: white;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    #sub_menu1 .sub_menu-item1:hover{
      background-color: #A9A9A9;
    }

    </style>
</head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121321826-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-121321826-1');
</script>

<body <?php body_class(); ?>>

    <div id="socialbar">

        <a href="whatsapp://send?phone=4915731690555" class="has-image"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/whatsapp.png"
                width="45px"></a><br><a href="tg://resolve?domain=4915731690555" class="has-image"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/telegram.png"
                width="45px"></a><br>

        <a href="viber://add?number=4915731690555" class="has-image"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/viber.png"
                width="45px"></a><br><a href="skype:ja-realestate?chat" class="has-image"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/skype.png"
                width="45px"></a>
    </div>


    <div class="menu-container container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="close-menu">
                    <i class="fa fa-times"></i>
                </div>
            </div>
        </div>
        <div class="row flex-items-xl-center">
            <div class="col-xl-4 col-xs-12 center-logo">
                <a href="<?php echo get_site_url(); ?>"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/logo-dark.png" alt=""></a>
            </div>
        </div>
        <div class="row flex-items-xl-center">
            <div class="col-xl-8 ">
                <?php
						wp_nav_menu( array(
							'menu_class'=>'menu',
							'theme_location'=>'header_menu'
						) );
					?>
            </div>
        </div>
    </div>

    <div id="fixed-menu" class="fixed-menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-4 col-sm-2 col-xs-2">
                    <div data-id="aa8610e" class="elementor-element elementor-element-aa8610e elementor-view-default menu-burger elementor-widget elementor-widget-icon"
                        data-element_type="icon.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-icon-wrapper">
                                <div class="elementor-icon elementor-animation-shrink">
                                    <i class="fa fa-align-justify" aria-hidden="true"></i>
                                </div>
                                <span class="menu-text">
                                меню
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10 col-xs-10 rght">
                    <div class="fix-menu-items">
                        <a id="order-que" class="order-que">Задать вопрос</a>
                    </div>
                    <div class="fix-menu-items">
                        <a href="tel:+74994033290" class="phone">Тел. в Москве: +7 499 40-33-290</a>
                    </div>
                    <div class="fix-menu-items">
                        <a href="tel:+498912713430" class="phone">Тел. в Мюнхене: +49 89 127-134-30</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
