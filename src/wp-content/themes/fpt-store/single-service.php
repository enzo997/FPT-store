<?php
get_header();
$post = get_queried_object();
$id = get_queried_object()->ID;
$data_slug =  get_the_terms($id, 'categories-service');
$slug = $data_slug[0]->slug
?>
    <style>
        .header-desktop--content-header--col-right--main-nav-menu ul .menu-item-34 a{
            color:#f06e28;
        }
    </style>
    <main class="single-service" id="singl-service" style="height:100vh; padding-top:120px" data-slug = "<?php echo $slug; ?>">
    <?php
        if($slug == 'goi-dich-vu-internet'){
            ?>
            
            <?php
        }
        elseif($slug == 'goi-dich-vu-truyen-hinh'){
            ?>
                <h1 class="">TRUYEN HINH</h1>
            <?php
        }
        elseif($slug == 'fpt-play-box'){
            ?>
                <h1 class="">FPT PLAY BOX</h1>
            <?php
        }
        else{
            ?>
                <h1 class="">CAMERA GIAM SAT</h1>
            <?php
        }
    ?>
    </main>
<?php
get_footer();