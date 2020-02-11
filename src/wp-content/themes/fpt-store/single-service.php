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
    <main class="single-service" id="single-service" style="padding-top:120px" data-slug = "<?php echo $slug; ?>">
    <?php
        if($slug == 'goi-dich-vu-internet'){
            ?>
            <div class="cate-internet">
                <div class="container">
                    <h1 class="title-h1">GÓI CƯỚC DỊCH VỤ INTERNET</h1>
                    <div class="line-under"></div>
                    <div class="internet-content">
                        <div class="row">
                            <?php
                            $group_service = get_field('group_service',$id);
                            // var_dump($group_service);
                                foreach($group_service as $item){
                                    $content_box = $item['content_box'];
                                    $name_service = $content_box['name_service'];
                                    $price = $content_box['price'];
                                    $speed_bandwidth = $content_box['speed_bandwidth'];
                                    ?>
                                        <div class="col-lg-3 col-md-4 col-custom">
                                            <div class="name-service"><?php echo $name_service; ?></div>
                                            <div class="bandwidth"><?php echo $price;?></div>
                                            <div class="group-description">
                                                <?php
                                                $description_service = $content_box['description_group'];
                                                    if($description_service){
                                                        foreach($description_service as $key){
                                                            $content_group = $key['content_group'];
                                                            $icon = $content_group['icon']?$content_group['icon']['url']:DF_IMAGE. '/noimage.png';
                                                            $description = $content_group['description'];
                                                            ?>
                                                                <div class="description-content">
                                                                    <div class="col-left">
                                                                        <img src="<?php echo $icon; ?>" alt="icon">
                                                                    </div>
                                                                    <div class="col-right">
                                                                        <?php echo $description; ?>
                                                                    </div>
                                                                </div>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </div>
                                            <div class="VAT">
                                                <p>
                                                    Mức giá trên đã bao gồm VAT. Giá này sẽ thay đổi theo khu vực, theo từng thời điểm, chưa bao gồm tiền thuê thiết bị đầu cuối, phí thu tiền dịch vụ tại nhà và các dịch vụ gia tăng đi kèm khác
                                                </p>
                                            </div>
                                        </div>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
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