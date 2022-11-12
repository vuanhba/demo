<div class="content-box-header">
    <h3><?php echo $tieude;?></h3>
    <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
    <div class="tab-content default-tab" id="tab1">
        <form method="post" enctype="multipart/form-data">
        <table>
            <thead>
            <tr>
                <th>Số hóa đơn</th>
                <th>Tên khách hàng</th>
                <th>Ngày hóa đơn </th>
                <th>Trị giá</th>
                <th>Tình trạng</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <td colspan="6">
                    <div class="pagination"> <?php if ($count>8)
                        {echo $lst;}
                        ?>  </div>
                    <div class="clear"></div></td>
            </tr>
            </tfoot>
            <tbody>
            <?php foreach ($khhds as $kh) {

                ?>
                <tr>

                    <td><?php echo $kh->so_hoa_don; ?>
                        <a href="chi_tiet_hoa_don.php?so_hoa_don=<?php echo $kh->so_hoa_don ?>" title="Xem chi tiết hóa đơn">
                            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
                        </a>
                    <input type="hidden" value="<?php echo $kh->so_hoa_don ?>" name="so_hoa_don[]" />

                    </td>
                    <td><?php echo $kh->ten_khach_hang;?></td>
                    <td><?php echo $kh->ngay_hd;?></td>
                    <td><?php echo $kh->tri_gia;?></td>

                    <td>  <select name="ds[]">
                            <option value="1" <?php echo($kh->tinh_trang==1)?"selected":"" ?> >Chưa thanh toán</option>
                            <option value="0" <?php echo($kh->tinh_trang==0)?"selected":"" ?>>Đã thanh toán</option>

                        </select>  </td>

                </tr>
                <?php

            }
            ?>

            </tbody>
        </table>
        <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='khach_hang.php'" />
        </p>
        </form>
    </div>

</div>
