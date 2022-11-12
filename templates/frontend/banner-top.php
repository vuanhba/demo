<!-- banner -->
<?php
@session_start();
require_once ("libs/Helper.php");
$san_pham_cha = Helper::loadMenu();
?>
<div class="ban-top">
    <div class="container">
        <div class="top_nav_left">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list">
                            <li class="active menu__item menu__item--current"><a class="menu__link" href="trang-chu.html">Trang chủ<span class="sr-only">(current)</span></a></li>
                            <?php
                            foreach ($san_pham_cha as $cha) {
                                ?>
                                <li class="dropdown menu__item">
                                    <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false"><?php echo $cha->ten_loai?><span class="caret"></span></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="row">
                                            <div class="col-sm-6 multi-gd-img1 multi-gd-text ">
                                                <?php if($cha->ma_loai==9) { ?>
                                                    <a href="product.php"><img src="public/layout/images/woo1.jpg"
                                                                               alt=" "/></a>
                                                    <?php
                                                }
                                                else if($cha->ma_loai==15) {
                                                    ?>
                                                    <a href="product.php"><img src="public/layout/images/woo.jpg"
                                                                               alt=" "/></a>
                                                    <?php
                                                }
                                                ?>

                                            </div>
                                            <?php
                                            $san_pham_con = Helper::loadMenu($cha->ma_loai);

                                            for ($j = 0; $j < count($san_pham_con); $j += 2) {
                                                ?>
                                                <div class="col-sm-3 multi-gd-img">

                                                    <ul class="multi-column-dropdown">
                                                        <?php
                                                        for ($i = $j; $i < $j + 2; $i++) {
                                                            ?>
                                                            <li><a href="<?php echo $san_pham_con[$i]->ma_loai;?>/san-pham.html"><?php echo $san_pham_con[$i]->ten_loai?></a></li>
                                                            <?php
                                                            if ($i == count($san_pham_con) - 1) {
                                                                break;
                                                            }
                                                        }
                                                        ?>
                                                    </ul>

                                                </div>
                                                <?php
                                            }
                                            ?>

                                            <div class="clearfix"></div>
                                        </div>
                                    </ul>
                                </li>
                                <?php
                            }
                            ?>

                            <li class="menu__item"><a class="menu__link" href="tim-kiem.html">Tìm kiếm</a></li>
                            <li class="menu__item"><a class="menu__link" href="lien-he.html" >Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="top_nav_right">
            <div class="cart box_1">
                <a href="checkout.php">
                    <h3> <div class="total">
                            <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
                            <span><?php if(isset($_SESSION['thanh_tien'])) echo number_format($_SESSION['thanh_tien']); else 0; ?></span> (<span id="simpleCart_quantity"><?php if(isset($_SESSION['so_luong'])) echo $_SESSION['so_luong']; else 0; ?></span> món hàng)</div>

                    </h3>
                </a>
                <p><a href="javascript:;" class="simpleCart_empty">Giỏ Hàng</a></p>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //banner-top -->