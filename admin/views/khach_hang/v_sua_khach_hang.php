
<div class="content-box-header">
    <h3><?php echo $tieude; ?></h3>
    <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
    <div class="tab-content default-tab" id="tab1">
        <!--ma_loai, ten_loai, mo_ta, hinh-->
        <!--`ten_khach_hang`, `phai`, `ngay_sinh`, `dia_chi`, `dien_thoai`, `email`, `ghi_chu`-->
        <form method="post" enctype="multipart/form-data">
            <fieldset>
                <p>
                    <label>Tên khách hàng</label>
                    <input class="text-input small-input" type="text" id="ten_khach_hang" name="ten_khach_hang" required="required"
                           value="<?php echo $khach_hang->ten_khach_hang; ?>" />
                </p>
                <p>
                    <label>Phái</label>
                    <select class="text-input small-input kiemtra"  id="phai" name="phai">


                            <option value="0"><?php

                                    echo "Nam";

                                ?></option>
                        <option value="1"><?php

                                echo "Nữ";

                            ?></option>

                        ?>
                    </select>
                </p>
                <p>
                    <label>Ngày sinh</label>
                    <input class="text-input small-input ngay" type="text" id="ngay_sinh" name="ngay_sinh" required="required"
                           value="<?php echo $khach_hang->ngay_sinh; ?>" />
                </p>
                <p>
                    <label>Địa chỉ</label>
                    <input class="text-input small-input " type="text" id="dia_chi" name="dia_chi" required="required"
                           value="<?php echo $khach_hang->dia_chi; ?>" />
                </p>
                <p>
                    <label>Điện thoại</label>
                    <input class="text-input small-input " type="text" id="dien_thoai" name="dien_thoai" required="required"
                           value="<?php echo $khach_hang->dien_thoai; ?>" />
                </p>
                <p>
                    <label>Email</label>
                    <input class="text-input small-input " type="text" id="email" name="email" required="required"
                           value="<?php echo $khach_hang->email; ?>" />
                </p>
                <p>
                    <label>Ghi chú</label>
                    <textarea class="text-input medium-input ckeditor" type="text" id="ghi_chu" name="ghi_chu">
            <?php echo $khach_hang->email; ?>
            </textarea>


                <p>
                    <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="" />
                    <input class="button" type="button" value="Bỏ qua" onclick="window.location='khach_hang.php'" />
                </p>
            </fieldset>
            <div class="clear"></div>
            <!-- End .clear -->

        </form>

    </div>
</div>