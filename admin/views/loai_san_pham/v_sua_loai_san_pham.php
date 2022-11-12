<div class="content-box-header">
    <h3><?php echo $tieude; ?></h3>
    <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
    <div class="tab-content default-tab" id="tab1">
        <!--ma_loai, ten_loai, mo_ta, hinh-->
        <form method="post" enctype="multipart/form-data">
            <fieldset>
                <p>
                    <label>Tên loại món</label>
                    <input class="text-input small-input" type="text" id="ten_loai" name="ten_loai" required="required"
                           value="<?php echo $loai_san_pham->ten_loai; ?>" />
                </p>
                <p>
                    <label>Mô tả</label>
                    <textarea class="text-input medium-input ckeditor" type="text" id="mo_ta" name="mo_ta">
            <?php echo $loai_san_pham->mo_ta; ?>
            </textarea>

                <p>
                    <label>Mã loại cha</label>
                    <input class="text-input small-input" type="text" id="ma_loai_cha" name="ma_loai_cha" required="required"
                           value="<?php echo $loai_san_pham->ma_loai_cha; ?>" />
                </p>
                <p>
                    <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="" />
                    <input class="button" type="button" value="Bỏ qua" onclick="window.location='loai_san_pham.php'" />
                </p>
            </fieldset>
            <div class="clear"></div>
            <!-- End .clear -->

        </form>

    </div>
</div>