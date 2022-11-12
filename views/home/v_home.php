<!-- product-nav -->

<div class="product-easy">
    <div class="container">

        <script src="public/layout/js/easyResponsiveTabs.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#horizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion
                    width: 'auto', //auto or any width like 600px
                    fit: true   // 100% fit in a container
                });
            });

        </script>
        <div class="sap_tabs">
            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Sản phẩm mới</span></li>
                    <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Sản phẩm bán chạy</span></li>
                </ul>
                <div class="resp-tabs-container">
                <?php
                    include('v_new_product.php');
                    include('v_bestseller_product.php');
                    //include('v_recent_view_product.php');
                ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //product-nav -->