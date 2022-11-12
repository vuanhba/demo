<div class="content-box-header">
    <h3><?php echo $tieude;?></h3>
    <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
    <div class="tab-content default-tab" id="tab1">
        <form action="#" method="post" enctype="multipart/form-data">
            <fieldset>
<!--
`ten_san_pham`, `ma_loai_cha`,
`ma_loai`, `mo_ta_tom_tat`, `mo_ta_chi_tiet`,
`don_gia`, `hinh`, `san_pham_moi`, `so_lan_xem`, `ngay_tao`
-->


                <p>
                    <label>Tên sản  phẩm</label>
                    <input class="text-input small-input kiemtra" type="text" id="ten_san_pham" name="ten_san_pham"  />
                </p>
                <p>
                    <label>Mã loại cha</label>
                    <select class="text-input small-input kiemtra" data-error="Nhập sản phẩm mới"  id="ma_loai_cha" name="ma_loai_cha"  >
                        <option value="9">Đồ nam</option>
                        <option value="15">Đồ nữ</option>

                    </select>
                </p>
                <p>
                    <label>Mã loại</label>
                    <select class="text-input small-input kiemtra" data-error="Nhập mã loại cha" id="ma_loai" name="ma_loai"  >
                        <?php foreach ($san_phams as $sp) {
                            ?>
                            <option value="<?php echo $sp->ma_loai;?>"><?php echo $sp->ten_loai;?></option>
                            <?php
                        }
                        ?>
                    </select>
                </p>
                <p>
                    <label>Nội dung tóm tắt</label>
                    <input class="text-input medium-input kiemtra" type="text" id="mo_ta_tom_tat" name="mo_ta_tom_tat"  />
                <p>
                    <label>Nội dung chi tiết</label>
                    <!--input class="text-input large-input" type="text" id="chi_tiet" name="chi_tiet" value="{$tin_tuc->chi_tiet}" /-->
                    <textarea name="mo_ta_chi_tiet" id="mo_ta_chi_tiet"  class="text-input medium-input ckeditor" ></textarea>

                </p>
                <p>
                    <label>Đơn giá</label>
                    <input class="text-input small-input kiemtra" type="text" id="don_gia" name="don_gia" />
                </p>
                <p>
                    <label>Hình tin</label>
                    <input type="file" name="f_hinh" id="hinh" />
                <div class="image-holder kiemtra" id="image-holder"></div>
                <p>
                    <label> sản  phẩm mới</label>
                    <select class="text-input small-input kiemtra" data-error="Nhập sản phẩm mới"  id="san_pham_moi" name="san_pham_moi"  >
                            <option value="1">Sản phẩm mới</option>
                             <option value="0">Sản phẩm cũ</option>

                    </select>
                </p>
                <p>
                    <label> số lần xem</label>
                    <input class="text-input small-input kiemtra" type="text" id="so_lan_xem" name="so_lan_xem" />
                </p>
                <p>
                    <label>Ngày tao</label>
                    <input class="text-input small-input ngay kiemtra" type="text" id="ngay_tao" name="ngay_tao" />
                </p>
                <p>
                    <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu();" />
                    <input class="button" type="button" value="Bỏ qua" onclick="window.location='san_pham.php'" />
                </p>
            </fieldset>
            <div class="clear"></div>
            <!-- End .clear -->

        </form>
    </div>

</div>
