<?php
error_reporting(0);
include("controllers/c_gio_hang.php");
$c_gio_hang=new C_gio_hang();
if(isset($_POST["btnCapnhat"]))
{
    $giohang=$c_gio_hang->layGioHang();
    //Xóa mặt hàng trong giỏ hàng

    /** @var TYPE_NAME $value */
    foreach(@$giohang as $key=> $value)
    {
        if(isset($_POST[$key]))
        {
            $c_gio_hang->xoaMatHang($key,$_POST[$key]);
        }
    }
    //cập nhật lại giỏ hàng
    $giohang=$c_gio_hang->layGioHang();
    if($giohang)
    {
        foreach($giohang as $key=>$value)
        {
            $soluong_moi=$_POST["soluong".$key];
            if($soluong_moi!=$value)
            {
                $c_gio_hang->capNhatGioHang($key,$soluong_moi,$_POST["dongia".$key]);
            }
        }
    }

}
$c_gio_hang->xem_gio_hang();
?>