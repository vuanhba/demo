<!-- single -->
<div class="single">
    <div class="container">
        <div class="col-md-6 single-right-left animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
            <div class="grid images_3_of_2">
                <div class="flexslider">
                    <!-- FlexSlider -->
                    <script>
                        // Can also be used with $(document).ready()
                        $(window).load(function() {
                            $('.flexslider').flexslider({
                                animation: "slide",
                                controlNav: "thumbnails"
                            });
                        });
                    </script>
                    <!-- //FlexSlider-->
                    <ul class="slides">
                        <?php for($i=0;$i<4;$i++){ ?>
                        <li data-thumb="public/layout/images1/<?php echo $san_pham->hinh;?>">
                            <div class="thumb-image"> <img src="public/layout/images1/<?php echo $san_pham->hinh;?>" data-imagezoom="true" class="img-responsive"> </div>
                        </li>

                        <?php
                        }
                        ?>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 single-right-left simpleCart_shelfItem animated wow slideInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
            <h3><?php echo $san_pham->ten_san_pham?></h3>
            <p><span class="item_price"><?php echo number_format($san_pham->don_gia)?></span> VNĐ</p>
            <div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
            </div>
            <div class="description">
                <h5><?php echo $san_pham->mo_ta_tom_tat?></h5>

            </div>
            <div class="color-quality">
                <div class="color-quality-right">
                    <h5>Số lượng :</h5>

                        <input type="text" value="1" class="thaythe" id="soluong<?php echo $san_pham->ma_san_pham;?>"></input>
                </div>
            </div>
            <br>
            <div class="occasion-cart">
                <input type="hidden" value="<?php echo $san_pham->don_gia;?>" id="dongia<?php echo $san_pham->ma_san_pham;?>"/>

                <a   class="item_add single-item hvr-outline-out button2" href="javascript:void(0)" id ="<?php echo $san_pham->ma_san_pham;?>">Thêm vào giỏ hàng</a>

            </div>

        </div>
        <div class="clearfix"> </div>

        <div class="bootstrap-tab animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Mô tả</a></li>

                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active bootstrap-tab-text" id="home" aria-labelledby="home-tab">
                        <h5>Mô tả chi tiết</h5>
                        <p> <?php echo $san_pham->mo_ta_chi_tiet;?>
                            </p>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- //single -->