
<div class="content-box-header">
    <h3><?php echo $tieude ?></h3>
    <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
    <div class="tab-content default-tab" id="tab1">
        <!--ma_loai, ten_loai, mo_ta, hinh-->
        <form method="post" enctype="multipart/form-data">
            <fieldset>
                <p>
                    <label>Mã loại sản phẩm</label>
                    <input class="text-input small-input kiemtra" data-error="Nhập mã loại" type="text" id="ma_loai" name="ma_loai"  />
                </p>
                <p>
                    <label>Tên loại sản phẩm</label>
                    <input class="text-input small-input kiemtra" data-error="Nhập tên loại" type="text" id="ten_loai" name="ten_loai"  />
                </p>
                <p>
                    <label>Mô tả</label>
                    <textarea class="text-input medium-input ckeditor" type="text" id="mo_ta" name="mo_ta"></textarea>

                <p>
                    <label>Mã loại cha</label>
                    <select class="text-input small-input kiemtra" data-error="Nhập mã loại cha" id="ma_loai_cha" name="ma_loai_cha"  >
                        <?php foreach ($loai_san_phams as $sp) {
                            ?>
                            <option value="<?php echo $sp->ma_loai;?>"><?php echo $sp->ten_loai;?></option>
                            <?php
                        }
                        ?>
                    </select>
                </p>
                <p>
                    <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
                    <input class="button" type="button" value="Bỏ qua" onclick="window.location='loai_san_pham.php'" />
                </p>
            </fieldset>
            <div class="clear"></div>
            <!-- End .clear -->

        </form>

    </div>

</div>