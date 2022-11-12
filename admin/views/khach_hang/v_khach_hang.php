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
                <th>Tên khách hàng</th>
                <th>Phái</th>
                <th>Ngày sinh</th>
                <th>Địa chỉ</th>
                <th>Điện thoại</th>
                <th>Email</th>
                <th>Ghi chú</th>
                <th>&nbsp;</th>
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
            <?php foreach ($khach_hangs as $kh) {

                ?>
                <tr>

                    <td><a href="#" title="Edit"><?php echo $kh->ten_khach_hang;?></a></td>
                    <td><?php if($kh->phai==0)
                        {
                            echo "Nam";
                        }
                        else
                        {
                            echo "Nữ";
                        }
                        ?></td>
                    <td><?php echo $kh->ngay_sinh;?></td>
                    <td><?php echo $kh->dia_chi;?></td>
                    <td><?php echo $kh->dien_thoai;?></td>
                    <td><?php echo $kh->email;?></td>
                    <td><?php echo $kh->ghi_chu;?></td>

                    <td><!-- Icons -->
                        <a href="sua_khach_hang.php?ma_khach_hang=<?php echo $kh->ma_khach_hang;?>" title="Edit">
                            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit"/>
                        </a>
                        <a href="javascript:xoa_khach_hang(<?php echo $kh->ma_khach_hang;?>)" title="Delete">
                            <img src="public/layout/resources/images/icons/cross.png" alt="Delete"/>
                        </a>
                    </td>
                </tr>
                <?php

            }
            ?>
            </tbody>
        </table>
        </form>
    </div>

</div>
