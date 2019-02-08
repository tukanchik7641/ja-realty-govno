<?php get_header();

//Template Name: page home

?>
<?php
$output = '';
?>


<main class="main">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>

    <div class="objects">
        <div class="tabs">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="tab tab1" style="background: url(<?php the_field( 'tab1_bg' ); ?>);">
                            <div class="tab-cover">
                                <?php the_field( 'tab1' ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="tab tab2" style="background: url(<?php the_field( 'tab2_bg' ); ?>);">
                            <div class="tab-cover">
                                <?php the_field( 'tab2' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form class="search" style="width: 100%; height: 4%; padding: 0 0 1.7% 0">
            <input type="search" name="content_search" placeholder="Поиск..." class="content_search" style="border-width: 2px; height:40px; border-color: #cacaca; color: #b9b9b9; font-size: 16px;">
            <input type="text" name="price_start" style="border-width: 1px; margin-left: 3%; height:35px; border-color: #cacaca; color: #b9b9b9; font-size: 14px; width: 7%;" placeholder="Цена от">
            <img src="wp-content/themes/jarealty/img/sasd.png" style="width: 3%; height: 1.5%; padding-left: 0.5%;padding-right: 0.5%;">
            <input type="text" name="price_end" style="border-width: 1px; height:35px; border-color: #cacaca; color: #b9b9b9; font-size: 14px; width: 7%;" placeholder="Цена до">
            <input type="text" name="plo_start" style="border-width: 1px; margin-left: 3%; height:35px; border-color: #cacaca; color: #b9b9b9; font-size: 14px; width: 9%;" placeholder="Площадь от">
            <img src="wp-content/themes/jarealty/img/sasd.png" style="width: 3%; height: 1.5%; padding-left: 0.5%;padding-right: 0.5%;">
            <input type="text" name="plo_end" style="border-width: 1px; height:35px; border-color: #cacaca; color: #b9b9b9; font-size: 14px; width: 9%;" placeholder="Площадь до">
            <input type="submit" value="Отправить">
            
        </form>
        
        <?php
        
if (isset($_POST['content_search'])) {
    $searchq = $_POST['content_search'];
    $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

    $query = mysql_query("SEL. * FROM membersWhere firstname like '%$searchq%' OR lastname '%$searchq%' ") or die("Не найдено !");
    $count = mysql_num_rows($query);
    if ($count == 0) {
        $output = 'Не было результатов поиска !';

    }
    else{
        while($row = mysql_fetch_array($query)){
            $title = get_sub_field('title');
            $price = get_sub_field('price');
            $plo = get_sub_field('square');

            $output .= '<div> '.$title.''.$price.'</div>';
        }
    }
}


        
        
        
        print("$output"); ?>


        <div class="container-fluid cats">
            <div class="container-fluid cat1">
                <div class="row flex-items-xl-center">

                    <?php if( have_rows('objects') ): ?>

                    <?php while( have_rows('objects') ): the_row(); ?>

                    <?php        // vars
$title = get_sub_field('title');
$rayon = get_sub_field('rayon');
$description = get_sub_field('description');
$square = get_sub_field('square');
$price = get_sub_field('price');
$class = get_sub_field('class');

?>



        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12 " >
                        <div class="project-item <?php echo $class; ?>" style="height: 535px;">
                            <div class="title-block">
                                <div class="lines">
                                    <div class="name">
                                        <?php echo $title; ?>
                                    </div>
                                    <div class="rayon">
                                        <?php echo $rayon; ?>
                                    </div>
                                </div>

                            </div>
                            <div class="slides">
                                <?php if( have_rows('photos') ): ?>

                                <?php while( have_rows('photos') ): the_row(); ?>

                                <?php
$photo = get_sub_field('photo');
?>
                                <img class="img-fluid slide-img" src="<?php echo $photo; ?>" alt="">
                                <?php endwhile; ?>

                                <?php endif; ?>
                            </div>


                                <div class="info-block">
                                <div class="title" style="text-align: center;">
                                    <div class="title-name">
                                        <?php echo $title; ?>
                                    </div>
                                    <div class="title-rayon">
                                        <?php echo $rayon; ?>
                                    </div>
                                </div>

                                <div class="plo">
                                    <?php echo $square; ?>
                                </div>
                                <div class="price">
                                    <?php echo $price; ?>
                                </div>
                                <a id="more-popup" class="more more-popup">Подробнее</a>
                            </div>

                            <p></p>
                        </div>

                    </div>

                    <?php endwhile; ?>

                    <?php endif; ?>


                </div>
            </div>
            <div class="container-fluid cat2">
                <div class="row flex-items-xl-center">


                    <?php if( have_rows('objects_2') ): ?>

                    <?php while( have_rows('objects_2') ): the_row(); ?>

                    <?php        // vars
                    $title_2 = get_sub_field('title_2');
                    $rayon_2 = get_sub_field('rayon_2');
                    $description_2 = get_sub_field('description_2');
                    $square_2 = get_sub_field('square_2');
                    $price_2 = get_sub_field('price_2');
                    $class_2 = get_sub_field('class_2');

                ?>



                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="project-item <?php echo $class_2; ?>">
                            <div class="info-block">
                                <div class="title">
                                    <div class="title-name">
                                        <?php echo $title_2; ?>
                                    </div>
                                    <div class="title-rayon">
                                        <?php echo $rayon_2; ?>
                                    </div>
                                </div>
                                <div class="info">
                                    <?php echo $description_2; ?>
                                </div>
                                <div class="plo">
                                    <?php echo $square_2; ?>
                                </div>
                                <div class="price">
                                    <?php echo $price_2; ?>
                                </div>
                                <a id="more-popup" class="more more-popup">Подробнее</a>
                            </div>
                            <div class="title-block">
                                <div class="lines">
                                    <div class="name">
                                        <?php echo $title_2; ?>
                                    </div>
                                    <div class="rayon">
                                        <?php echo $rayon_2; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="slides">
                                <?php if( have_rows('photos_2') ): ?>

                                <?php while( have_rows('photos_2') ): the_row(); ?>

                                <?php
                                $photo_2 = get_sub_field('photo_2');
                            ?>
                                <img class="img-fluid slide-img" src="<?php echo $photo_2; ?>" alt="">
                                <?php endwhile; ?>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; ?>

                    <?php endif; ?>

                </div>
            </div>
        </div>




    </div>

   <div class="map">
   <?php the_field( 'map' ); ?>
   </div>
<script src="script.js"></script>
</main>

<?php get_footer(); ?>
