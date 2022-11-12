<!-- mens -->

<div class="men-wear">
    <div class="container">
        <?php
        include("v_product_left.php");
        include("v_product_right.php");
        ?>


        <div class="clearfix"></div>

        <div class="single-pro">
            <?php
            if(count($san_phams) == 0)
            {
                echo "<div class='alert alert-info'>Hiện vẫn chưa có sản phẩm trong mục này. Nhấn vào <a class='thongbao' href='index.php'>đây</a> để quay lại trang chủ</div>";
            }
            else{
                for($i = 0;$i<count($san_phams);$i+=4) {
                    ?>
            <?php
            for ($j = $i; $j < $i + 4; $j++) {
                ?>
                <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item product_max">
                            <img src="public/layout/images1/<?php echo $san_phams[$j]->hinh ?>" alt=""
                                 class="pro-image-front">
                            <img src="public/layout/images1/<?php echo $san_phams[$j]->hinh ?>" alt=""
                                 class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="<?php echo Helper::Bo_dau($san_phams[$j]->ten_san_pham)?>/<?php echo $san_phams[$j]->ma_san_pham ?>.html" class="link-product-add-cart">Xem nhanh</a>
                                </div>
                            </div>

                        </div>
                        <div class="item-info-product ">
                            <h4 id="heightMax"><a href="<?php echo Helper::Bo_dau($san_phams[$j]->ten_san_pham)?>/<?php echo $san_phams[$j]->ma_san_pham ?>.html"><?php echo $san_phams[$j]->ten_san_pham;?></a></h4>
                            <div class="info-product-price">
                                <span class="item_price"><?php echo number_format($san_phams[$j]->don_gia);?> VNĐ</span>

                            </div>
                            <input type="hidden" value="<?php echo $san_phams[$j]->don_gia;?>" id="dongia<?php echo $san_phams[$j]->ma_san_pham;?>"/>
                            <input type="hidden" value="1" id="soluong<?php echo $san_phams[$j]->ma_san_pham;?>" text-align:center/>
                            <a   class="item_add single-item hvr-outline-out button2" href="javascript:void(0)" id ="<?php echo $san_phams[$j]->ma_san_pham;?>">Thêm vào giỏ hàng</a>
                        <!--    <input type="hidden" id="dongia{$mon->ma_mon}" value="{$mon->don_gia}"/>
                            <input type="text" value="1" id="soluong{$mon->ma_mon}"/>&nbsp;<a class="button-1" href="javascript:void(0)" id="{$mon->ma_mon}">Mua</a>-->
                        </div>

                    </div>

                </div>
                <?php
                if ($j == count($san_phams) - 1) {
                    break;
                }
            }
            ?>

            <div class="clearfix"></div>
            <?php
            }
            }
            ?>
        </div>
<!--        <div class="pagination-grid text-right">-->
<!--            <ul class="pagination paging">-->
<!--                <li class="active"><a href="#">--><?php //if($count>8) {echo $lst;}?><!--<span class="sr-only">(current)</span></a></li>-->
<!--            </ul>-->
<!--        </div>-->
        <div class="pagination-grid text-right">
            <ul class="pagination paging">
<!--                <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>-->
<!--                <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>-->
<!--                <li><a href="#">2</a></li>-->
<!--                <li><a href="#">3</a></li>-->
<!--                <li><a href="#">4</a></li>-->
<!--                <li><a href="#">5</a></li>-->
<!--                <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>-->
                <?php
                    if($count > 8)
                    {
                        echo $lst;
                    }
                ?>
            </ul>
        </div>
    </div>
</div>
<br>
<br>
<!-- //mens -->
<!--<script>-->
<!--    $(document).ready(function (e) {-->
<!--        $("#seach1").click(function (e) {-->
<!--            //     var valueSearch = $("#searchValue").val();-->
<!--            //   var form_data ={"valueSearch": valueSearch};-->
<!--            $.ajax({-->
<!--                type:"GET",-->
<!--                //     data: form_data,-->
<!--              //  url:"xl_tim_san_pham.php",-->
<!--                success: function(){-->
<!--                    alert("123");-->
<!--                    //    $("#kq").html(data);-->
<!--                }-->
<!--            })-->
<!--        });-->
<!--    });-->
<!--</script>-->
