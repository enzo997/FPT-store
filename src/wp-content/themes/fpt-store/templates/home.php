<?php
/* Template Name: Home page */
$id = get_queried_object()->ID;
get_header();
?>
<main class="home-page" style="height:100vh; padding-top:120px">
    <section class="home-page--banner-top">
        <img src="<?php echo DF_IMAGE. '/banner-home.jpg';?>" alt="banner-top">
    </section>
    <section class="home-page--service">
        <h4 class="title-h4">DỊCH VỤ</h4>
        <div class="line-under"></div>
        <div class="home-page--service--cont-group">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12 col-12 col-custom">
                    <div class="cont-box">
                        <div class="cont-image"></div>
                        <div class="cont-title-service">
                        <a href="#" ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer();