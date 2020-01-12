<footer class="footer" id="footer">
    <div class="cont-seseasonal-img">
        <img src="<?php echo get_field('seasonal_images_of_the_year_at_footer','option')?get_field('seasonal_images_of_the_year_at_footer','option')['url']:"";?>" alt="image-season">
    </div>
    <div class="container">
        <div class="content-footer-information wow fadeIn">
            <div class="footer--content-logo-footer">
                <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo get_field('logo_header_and_footer','option')?get_field('logo_header_and_footer','option')['url']:DF_IMAGE. '/logo.png';?>" alt="<?php echo get_field('logo_header_and_footer','option')?get_field('logo_header_and_footer','option')['name']:"logo";?>" />
                </a>
            </div>
            <?php
                $address = get_field('your_information','option')['address'];
                $number_phone_at_footer = get_field('your_information','option')['phone_number'];
                $email_at_footer = get_field('your_information','option')['email'];
                $link_facebook = get_field('your_information','option')['link_facebook'];
            if($address):?>
            <div class="footer--group-address">
                <h4 class="footer--title-h4">ĐỊA CHỈ</h4>
                <div class="footer--content-address"><?php echo $address;?></div>
            </div>
            <?php endif;
            if($number_phone_at_footer || $email_at_footer):?>
                <div class="footer--group-contact">
                    <h4 class="footer--title-h4">LIÊN HỆ</h4>
                    <?php if($number_phone_at_footer):?>
                        <div class="footer--content-number-phone">
                            <a href="tel:+<?php $delete = array(' ','(',')','+','-');
                                            echo str_replace($delete,'',$number_phone_at_footer);?>">
                                <?php echo $number_phone_at_footer; ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <?php if($email_at_footer):?>
                        <div class="footer--content-email">
                            <a href="mailto:<?php echo $email_at_footer; ?>"><?php echo $email_at_footer; ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif;
            if($link_facebook):?>
                <div class="footer--group-follow-us">
                    <h4 class="footer--title-h4">
                        <a href="<?php echo  $link_facebook;?>" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a><span style="margin-left: 6px">FANPAGE</span>
                    </h4>
                    <div class="content-icon-facebook">
                        <a href="<?php echo  $link_facebook;?>" target="_blank">
                            <?php echo  $link_facebook;?>
                        </a>
                    </div>
                </div>
            <?php endif;?>
        </div>
        <div class="content-main-footer">
            Copyright © 2020 FPT STORE
        </div>
    </div>
    <div class="button-bottom-scroll">
        <div class="container">
            <div class="btn-scroll-top"><i class="fa fas fa-chevron-right"></i></div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</div>
</body>
</html>