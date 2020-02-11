<!-- THEME CATEGORIES INTERNET -->
<div class="cate-internet">
    <div class="container">
        <h1 class="title-h1">GÓI CƯỚC DỊCH VỤ INTERNET</h1>
        <div class="line-under"></div>
        <div class="internet-content">
            <div class="row">
                <?php
                $group_service = get_field('group_service',$id);
                    foreach($group_service as $i=>$item){
                        $i++;
                        $content_box = $item['content_box'];
                        $name_service = $content_box['name_service'];
                        $price = $content_box['price'];
                        $speed_bandwidth = $content_box['speed_bandwidth'];
                        $button_register = $content_box['button_register'];
                        ?>
                            <div class="col-custom element-<?php echo $i?>">
                                <div class="name-service"><?php echo $name_service; ?></div>
                                <div class="infor-group">
                                    <div class="price"><?php echo $price;?></div>
                                    <div class="VND"> VNĐ/ Tháng</div>
                                    <div class="bandwidth"><?php echo $speed_bandwidth;?><span>Mbps</span></div>
                                </div>
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
                                <div class="btn-resigter">
                                    <a  href= "<?php echo $button_register;?>" target ="_blank">Đăng ký ngay</a>
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>