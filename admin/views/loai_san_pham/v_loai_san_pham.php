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

                <th>Mã loại</th>
                <th>Tên loại</th>
                <th>Mô tả</th>
                <th>Mã loại cha</th>
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
            <?php foreach ($loai_san_phams as $sp) {

                ?>
                <tr>

                    <td><?php echo $sp->ma_loai;?></td>
                    <td><a href="#" title="Edit"><?php echo $sp->ten_loai;?></a></td>
                    <td><?php echo $sp->mo_ta;?></td>
                    <td><?php echo $sp->ma_loai_cha;?></td>

                    <td><!-- Icons -->
                        <a href="sua_loai_san_pham.php?ma_loai=<?php echo $sp->ma_loai?>" title="Edit">
                            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit"/>
                        </a>
                        <a href="javascript:Hoi_xoa_san_pham(<?php echo $sp->ma_loai;?>)" title="Delete">
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
