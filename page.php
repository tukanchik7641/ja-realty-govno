<?php get_header(); ?>

    <div class="fixed-menu no-fixed">
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

<main class="main">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>