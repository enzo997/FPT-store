<?php
/* Template Name: Home page */
$id = get_queried_object()->ID;
get_header();
?>
<main class="home-page">
    <section class="home-page--banner-top">
        <div class="content-image">
            <img src="<?php echo DF_IMAGE. '/banner-home.jpg';?>" alt="banner-top">
            </div>
        <div class="content-image">
            <img src="<?php echo DF_IMAGE. '/banner.png';?>" alt="banner-top">
            </div>
        <div class="content-image">
            <img src="<?php echo DF_IMAGE. '/banner-home.jpg';?>" alt="banner-top">
        </div>
        <div class="content-image">
            <img src="<?php echo DF_IMAGE. '/banner.png';?>" alt="banner-top">
        </div>
    </section>
    <section class="home-page--service">
        <div class="container">
            <h4 class="title-h4">DỊCH VỤ</h4>
            <div class="line-under"></div>
            <div class="home-page--service--cont-group">
                <?php
                    $args = array(
                        'post_type'=> 'service',
                        'orderby'    => 'date',
                        'post_status' => 'publish',
                        "posts_per_page" => 4,
                        'order'    => 'ASC',
                    );
                    $posts = get_posts($args);
                ?>
                <div class="row">
                    <?php 
                        foreach($posts as $i=> $post):
                            ?>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 col-custom">
                                    <div class="cont-box">
                                        <div class="cont-image">
                                            <a href="<?php echo get_permalink($post->ID);?>" title="<?php echo $post->post_title;?>">
                                                <img src="<?php echo get_the_post_thumbnail_url($post->ID)?get_the_post_thumbnail_url($post->ID):DF_IMAGE. '/noimage.png';?>" alt="<?php $post->post_title;?>">
                                            </a>
                                        </div>
                                        <div class="cont-title-service">
                                            <a href="<?php echo get_permalink($post->ID);?>"><?php echo $post->post_title;?></a>
                                            <p><?php echo $post->post_excerpt;?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        endforeach;
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="home-page--blog">
        <div class="container">
            <h4 class="title-h4">TIN TỨC</h4>
            <div class="line-under"></div>
            <div class="home-page--blog--cont-group">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 col-custom">
                        <div class="cont-box">
                            <div class="cont-image">
                                <a href="#"><img src="<?php echo DF_IMAGE. '/internet.jpg';?>" alt="internet"></a>
                            </div>
                            <div class="cont-text">
                                <a href="#">INTERNET</a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry Lorem Ipsum has been the industry Lorem Ipsum has been the industry</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 col-custom">
                        <div class="cont-box">
                            <div class="cont-image">
                                <a href="#"><img src="<?php echo DF_IMAGE. '/internet.jpg';?>" alt="internet"></a>
                            </div>
                            <div class="cont-text">
                                <a href="#">INTERNET</a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry, Lorem Ipsum has been the industryLorem Ipsum has been the industry</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 col-custom">
                        <div class="cont-box">
                            <div class="cont-image">
                                <a href="#"><img src="<?php echo DF_IMAGE. '/internet.jpg';?>" alt="internet"></a>
                            </div>
                            <div class="cont-text">
                                <a href="#">INTERNET</a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry Lorem Ipsum has been the industry Lorem Ipsum has been the industry Lorem Ipsum has been the industry</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-view-more">Xem thêm</div>
            </div>
        </div>
    </section>
    <section class="home-page--contact">
        <canvas  id = "snow-falling"></canvas>
        <div class="background-behind">
            <img src="<?php echo DF_IMAGE. '/background-contact.jpg';?>" alt="background-contact">
        </div>
        <div class="container">
            <h4 class="title-h4">LIÊN HỆ</h4>
            <div class="line-under"></div>
            <div class="home-page--contact--contact-form">
                <?php echo do_shortcode('[contact-form-7 id="68" title="Contact form fpt"]');?>
            </div>
        </div>
    </section>
</main>
<?php get_footer();