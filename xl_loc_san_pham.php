<?php
/**
 * Created by PhpStorm.
 * User: ThangHoang
 * Date: 8/29/2017
 * Time: 6:35 PM
 */
$gtDau =  $_POST['leftPrice'];
$gtCuoi =  $_POST['rightPrice'];
include("models/m_san_pham.php");
$m_san_pham=new M_san_pham();
$san_phams=$m_san_pham->Tim_san_pham_theo_don_gia($gtDau,$gtCuoi);
?>
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
                        <img src="public/layout/images/<?php echo $san_phams[$j]->hinh ?>" alt=""
                             class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.php?ma_san_pham=<?php  echo $san_phams[$j]->ma_san_pham;?>" class="link-product-add-cart">Xem nhanh</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>
                    </div>
                    <div class="item-info-product ">
                        <h4 id="heightMax"><a href="single.php?ma_san_pham=<?php echo $san_phams[$j]->ma_san_pham; ?>"><?php echo $san_phams[$j]->ten_san_pham;?></a></h4>
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

