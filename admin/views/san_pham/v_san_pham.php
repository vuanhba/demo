<div class="content-box-header">
    <h3><?php echo $tieude;?></h3>
    <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
    <div class="tab-content default-tab" id="tab1">
        <table>
            <thead>
            <tr>

                <th>Tên sản phẩm</th>

                <th>Mã loại</th>
                <th>Đơn giá</th>
                <th>Hình</th>
                <th>Sản phẩm mới</th>
                <th>Số lần xem</th>
                <th>Ngày tạo</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <td colspan="6">
                    <div class="pagination div_trang"><?php if ($count>8)
                    {echo $lst;}
                    ?> </div>
                    <div class="clear"></div></td>
            </tr>
            </tfoot>
            <tbody>
            <?php foreach ($san_phams as $sp)
            {
            ?>

                <tr>


                    <td><a href="sua_san_pham.php?ma_san_pham=<?php echo $sp->ma_san_pham;?>" title="Edit"><?php echo $sp->ten_san_pham;?></a></td>

                    <td><?php echo $sp->ma_loai;?></td>

                    <td><?php echo number_format($sp->don_gia);?> VNĐ</td>
                    <td><img src="..\public\layout\images1\<?php echo $sp->hinh;?>" width="80px"/></td>
                    <td><?php echo $sp->san_pham_moi;?></td>
                    <td><?php echo $sp->so_lan_xem;?></td>
                    <td><?php echo $sp->ngay_tao;?></td>
                    <td><!-- Icons -->
                        <a href="sua_san_pham.php?ma_san_pham=<?php echo $sp->ma_san_pham;?>" title="Edit">
                            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit"/>
                        </a>
                        <a href="javascript:xoa_san_pham(<?php echo $sp->ma_san_pham;?>)" title="Delete">
                            <img src="public/layout/resources/images/icons/cross.png" alt="Delete"/>
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>

    </div>

</div>
