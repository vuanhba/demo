<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
    <?php
    foreach($bc_san_phams as $sp)
    {
    ?>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item product_max">
                                    <img src="public/layout/images1/<?php echo $sp->hinh; ?>" alt="" class="pro-image-front">
                                    <img src="public/layout/images1/<?php echo $sp->hinh; ?>" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.php?ma_san_pham=<?php echo $sp->ma_san_pham?>" class="link-product-add-cart">Xem nhanh</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">Bán Chạy</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4 id="heightMax"><a href="single.php?ma_san_pham=<?php echo $sp->ma_san_pham?>"><?php echo $sp->ten_san_pham; ?></a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price"><?php echo number_format($sp->don_gia); ?> VNĐ</span>
                                    </div>
                                    <input type="hidden" value="<?php echo $sp->don_gia;?>" id="dongia<?php echo $sp->ma_san_pham;?>"/>
                                    <input type="hidden" value="1" id="soluong<?php echo $sp->ma_san_pham;?>" text-align:center/>
                                    <a   class="item_add single-item hvr-outline-out button2" href="javascript:void(0)" id ="<?php echo $sp->ma_san_pham;?>">Thêm vào giỏ hàng</a>

                                </div>
                            </div>
                        </div>
        <?php
    }
    ?>

                        <div class="clearfix"></div>
                    </div>