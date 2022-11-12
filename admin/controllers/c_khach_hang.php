<?php

include ("models/m_khach_hang.php");
class C_khach_hang
{
    function Hien_thi_khach_hang()
    {
// Models
        $m_khach_hang = new M_khach_hang();
        $khach_hangs = $m_khach_hang->Doc_khach_hang();
        $count=count($khach_hangs);
        // Phân trang
        include("lib/Pager.php");
        $p=new Pager();
        $limit=8;
        $count=count($khach_hangs);
        $pages=$p->findPages($count,$limit);
        $vt=$p->findStart($limit);
        $curpage=$_GET["page"];
        $lst=$p->pageList($curpage,$pages);
        $khach_hangs = $m_khach_hang->Doc_khach_hang($vt,$limit);
        $view = 'views/khach_hang/v_khach_hang.php';
        $title = "Quản trị shop_smart|khách hàng";
        $tieude = "Khách hàng";
        include('templates/layout.php');
// View
    }

    function Sua_khach_hang()
    {
        // Models
        if(isset($_GET["ma_khach_hang"]))
        {
            $ma_khach_hang=$_GET["ma_khach_hang"];
            $m_khach_hang = new M_khach_hang();
            $khach_hang =$m_khach_hang->Doc_loai_khach_hang_theo_ma($ma_khach_hang);

            if(isset($_POST["btnCapnhat"]))
            {

                $ten_khach_hang = $_POST["ten_khach_hang"];
                $phai  = $_POST["phai"];
                $ngay = date_create($_POST["ngay_sinh"]);
                $ngay_sinh = date_format($ngay, "Y-m-d");

                $dia_chi =  $_POST["dia_chi"];
                $dien_thoai =  $_POST["dien_thoai"];
                $email =  $_POST["email"];
                $ghi_chu =  $_POST["ghi_chu"];

                $kq = $m_khach_hang->Sua_khach_hang($ma_khach_hang,$ten_khach_hang,$phai,$ngay_sinh,$dia_chi,$dien_thoai,$email,$ghi_chu);
                if($kq)
                {
                    echo "<script>alert('Cập nhật thành công');window.location='khach_hang.php'</script>";
                }
                else
                {
                    echo "<script>alert('Cập nhật không thành công')</script>";
                }

            }
            // End Cập nhật

            $view = 'views/khach_hang/v_sua_khach_hang.php';
            $title = "Shop quần áo";
            $tieude = "con cac";
            include('templates/layout.php');
        }


    }
    function  Xoa_khach_hang()
    {
        if(isset($_GET["ma_khach_hang"]))
        {
            $ma_khach_hang = $_GET["ma_khach_hang"];
            $m_khach_hang = new M_khach_hang();
            $kq = $m_khach_hang->Xoa_khach_hang($ma_khach_hang);
            if($kq)
            {
                echo "<script>alert('Xóa thành công');window.location='khach_hang.php'</script>";
                
            }
        }
    }
}
?>