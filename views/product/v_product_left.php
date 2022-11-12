<?php
require_once ("libs/Helper.php");
$san_pham_cha= Helper::loadMenu();
?>
<div class="col-md-4 products-left">
    <div class="filter-price">
        <h3>Lọc theo giá</h3>
        <ul class="dropdown-menu6">
            <li>
                <div id="slider-range" class="gia"></div>
                <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
            </li>
        </ul>
        <!---->
        <script type='text/javascript'>//<![CDATA[
            $(window).load(function(){
                $( "#slider-range" ).slider({
                    range: true,
                    min: 0,
                    max: 3000000,
                    values: [ 1000000, 2000000 ],
                    slide: function( event, ui ) {  $( "#amount" ).val(ui.values[ 0 ] + " - " + ui.values[ 1 ] );
                    }
                });
                $( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) + " - " + $( "#slider-range" ).slider( "values", 1 ) );

            });//]


        </script>
        <script type="text/javascript" src="public/layout/js/jquery-ui.js"></script>
        <!---->
    </div>
    <div class="css-treeview">
        <h4>DANH MỤC</h4>
        <ul class="tree-list-pad">
            <?php
            foreach ($san_pham_cha as $cha) {
                ?>
                <li><input type="checkbox" checked="checked" id="item-0"/><label for="item-0"><span></span><?php echo $cha->ten_loai;?></label>
                    <ul>
                        <?php
                        $san_pham_con = Helper::loadMenu($cha->ma_loai);
                        foreach ($san_pham_con as $con) {
                            ?>
                            <li><input type="checkbox" id="item-0-0"/><label for="item-0-0"><?php echo $con->ten_loai;?></label>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>

    <div class="clearfix"></div>

</div>
