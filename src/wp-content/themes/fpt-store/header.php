<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <script>
    // var ajaxUrl = "<?php ///echo admin_url('admin-ajax.php')?>";
    </script>
</head>
<body <?php body_class(); ?> >
<div id="page">
    <header class="header-mobile" id="header-mobile">
        <div class="container">
            <div class="header-mobile--content-header">
                <div class="header-mobile--content-header--cont-logo"> 
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="<?php echo get_field('logo_fpt_store','option')?get_field('logo_fpt_store','option')['url']:DF_IMAGE. '/logo.png';?>" alt="<?php echo get_field('logo_fpt_store','option')?get_field('logo_fpt_store','option')['name']:"logo";?>" />
                        <div class="cont-seseasonal-img">
                            <img src="<?php echo get_field('seasonal_images_of_the_year','option')?get_field('seasonal_images_of_the_year','option')['url']:DF_IMAGE.'/seasonal-images.png';?>" alt="">
                        </div>
                    </a>
                </div>
                <div class="header-mobile--content-header--cont-menu-bar">
                    <div class="btn-bar">
                        <div class="icon-menu"></div>
                        <div class="close-icon-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="header-desktop" id="header-desktop">
        <div class="container">
            <div class="header-desktop--content-header">
                <div class="header-desktop--content-header--col-left">
                    <div class="header-desktop--content-header--col-left--cont-logo ">  
                        <a href="<?php echo get_home_url(); ?>">
                            <img src="<?php echo get_field('logo_fpt_store','option')?get_field('logo_fpt_store','option')['url']:DF_IMAGE. '/logo.png';?>" alt="<?php echo get_field('logo_fpt_store','option')?get_field('logo_fpt_store','option')['name']:"logo";?>" />
                            <div class="cont-seseasonal-img">
                                <img src="<?php echo get_field('seasonal_images_of_the_year','option')?get_field('seasonal_images_of_the_year','option')['url']:DF_IMAGE.'/seasonal-images.png';?>" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="header-desktop--content-header--col-right">
                    <div class="header-desktop--content-header--col-right--main-nav-menu">
                        <?php 
                            wp_nav_menu( 
                                array( 
                                    'theme_location' => 'Main-menu-top', 
                                    'menu_class' => 'main-nav-menu'
                                ) 
                            );?>
                    </div>
                </div>
            </div>
        </div>
    </header>


