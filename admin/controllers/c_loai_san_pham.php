<?php

include ("models/m_loai_san_pham.php");
class C_loai_san_pham
{
    function Hien_thi_loai_san_pham()
    {
// Models
        $m_loai_san_pham = new M_loai_san_pham();
        $loai_san_phams = $m_loai_san_pham->Doc_loai_san_pham();
        $count=count($loai_san_phams);
        // Phân trang
        include("lib/Pager.php");
        $p=new Pager();
        $limit=8;
        $count=count($loai_san_phams);
        $pages=$p->findPages($count,$limit);
        $vt=$p->findStart($limit);
        $curpage=$_GET["page"];
        $lst=$p->pageList($curpage,$pages);
        $loai_san_phams = $m_loai_san_pham->Doc_loai_san_pham($vt,$limit);
        $view = 'views/loai_san_pham/v_loai_san_pham.php';
        $title = "Quản lí shop_smart";
        $tieude = "Loại sản phẩm";
        include('templates/layout.php');
// View
    }
    function Them_loai_san_pham()
    {
        // Models
        $m_loai_san_pham =new M_loai_san_pham();
        $loai_san_phams = $m_loai_san_pham->Doc_loai_san_pham();
        // <!--ma_loai, ten_loai, mo_ta, hinh-->
        if(isset($_POST["btnCapnhat"]))
        {
            $ma_loai = $_POST["ma_loai"];
            $ten_loai=$_POST["ten_loai"];
            $mo_ta=$_POST["mo_ta"];
            $ma_loai_cha = $_POST["ma_loai_cha"];



            print_r($loai_san_phams);
            foreach ($loai_san_phams as $sp)
            {
                if($ma_loai == $sp->ma_loai)
                {
                    echo "<script>alert('Mã loại bị trùng thêm không thành công');window.location='them_loai_san_pham.php'</script>";
                    return;
                }
            }
            $kq=$m_loai_san_pham->Them_loai_san_pham($ma_loai,$ten_loai,$mo_ta,$ma_loai_cha);
            if($kq)
            {

                echo "<script>alert('Thêm thành công');window.location='loai_san_pham.php'</script>";

            }
            else
            {
                echo "<script>alert('Thêm không thành công')</script>";
            }

        }

        // View
        $view = 'views/loai_san_pham/v_them_loai_san_pham.php';
        $title = "Quản trị shop_smart";
        $tieude = "Thêm loại sản phẩm";
        include('templates/layout.php');

    }
    function Sua_loai_san_pham()
    {
        // Models
        if(isset($_GET["ma_loai"]))
        {
            $ma_loai=$_GET["ma_loai"];
            $m_loai_san_pham=new M_loai_san_pham();
            $loai_san_pham =$m_loai_san_pham->Doc_loai_san_pham_theo_ma_loai($ma_loai);
            // Cập nhật
            if(isset($_POST["btnCapnhat"]))
            {
                $ten_loai=$_POST["ten_loai"];
                $mo_ta=$_POST["mo_ta"];
                $ma_loai_cha  = $_POST["ma_loai_cha"];

                $m_loai_san_pham=new M_loai_san_pham();

                $kq = $m_loai_san_pham->Sua_loai_san_pham($ma_loai,$ten_loai, $mo_ta,$ma_loai_cha);
                if($kq)
                {
                    echo "<script>alert('Cập nhật thành công');window.location='loai_san_pham.php'</script>";
                }
                else
                {
                    echo "<script>alert('Cập nhật không thành công')</script>";
                }

            }
            // End Cập nhật



            // View
            $view = 'views/loai_san_pham/v_sua_loai_san_pham.php';
            $title = "Quản trị Shop Smart";
            $tieude = "Sửa loại sản phẩm";
            include('templates/layout.php');
        }


    }
    function  Xoa_loai_san_pham()
    {
        if(isset($_GET["ma_loai"]))
        {
            $ma_loai = $_GET["ma_loai"];
            $m_loai_san_pham = new M_loai_san_pham();
            $kq = $m_loai_san_pham->Xoa_loai_san_pham($ma_loai);
            if($kq)
            {
                echo "<script>alert('Xóa thành công');window.location='loai_san_pham.php'</script>";
                
            }
        }
    }
}
?>