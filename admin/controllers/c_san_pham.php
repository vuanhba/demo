<?php

include ("models/m_san_pham.php");
include ("models/m_loai_san_pham.php");
class C_san_pham
{
    function Hien_thi_san_pham()
    {
// Models
        $m_san_pham = new M_san_pham();
        $san_phams = $m_san_pham->Doc_san_pham();
        $count=count($san_phams);
        // Phân trang
        include("lib/Pager.php");
        $p=new Pager();
        $limit=8;
        $count=count($san_phams);
        $pages=$p->findPages($count,$limit);
        $vt=$p->findStart($limit);
        $curpage=$_GET["page"];
        $lst=$p->pageList($curpage,$pages);
        $san_phams = $m_san_pham->Doc_san_pham($vt,$limit);
        $view = 'views/san_pham/v_san_pham.php';
        $title = "Quản lí Shop_smart";
        $tieude = "Sản phẩm";
        include('templates/layout.php');
// View
    }
    function Sua_san_pham()
    {
        // Models
        if(isset($_GET["ma_san_pham"]))
        {
            $ma_san_pham=$_GET["ma_san_pham"];
            $m1_san_pham = new M_loai_san_pham();
            $san_phams = $m1_san_pham->Doc_loai_san_pham();
            $m_san_pham=new M_san_pham();
            $san_pham  =$m_san_pham->Doc_loai_san_pham_theo_ma_san_pham($ma_san_pham);
            // Cập nhật
            if(isset($_POST["btnCapnhat"]))
            {
                /*`ten_san_pham`, `ma_loai_cha`,
`ma_loai`, `mo_ta_tom_tat`, `mo_ta_chi_tiet`, `don_gia`,
`hinh`, `san_pham_moi`, `so_lan_xem`, `ngay_tao`       */
                $ten_san_pham = $_POST["ten_san_pham"];
                $ma_loai_cha = $_POST["ma_loai_cha"];
                $ma_loai = $_POST["ma_loai"];
                $mo_ta_tom_tat = $_POST["mo_ta_tom_tat"];
                $mo_ta_chi_tiet = $_POST["mo_ta_chi_tiet"];
                $don_gia = $_POST["don_gia"];
                $hinh=$_FILES["f_hinh"]["error"]==0?$_FILES["f_hinh"]["name"]:$san_pham->hinh;
                $san_pham_moi=$_POST["san_pham_moi"];
                $so_lan_xem = $_POST["so_lan_xem"];
                $ngay_tao = $_POST["ngay_tao"];

                $m_san_pham=new M_san_pham();

                $kq=$m_san_pham->Sua_san_pham($ma_san_pham,$ten_san_pham,$ma_loai_cha,$ma_loai,$mo_ta_tom_tat,$mo_ta_chi_tiet,$don_gia,$hinh,$san_pham_moi,$so_lan_xem,$ngay_tao);
                if($kq)
                {
                    if($_FILES["f_hinh"]["error"]==0)
                    {
                        move_uploaded_file($_FILES["f_hinh"]["tmp_name"],"../public/layout/images1/$hinh");
                    }

                    echo "<script>alert('Cập nhật thành công');window.location='san_pham.php'</script>";

                }
                else
                {
                    echo "<script>alert('Cập nhật không thành công')</script>";
                }

            }
            // End Cập nhật



            // View
            $view = 'views/san_pham/v_sua_san_pham.php';
            $title = "Shop quần áo";
            $tieude = "Sản phẩm";
            include('templates/layout.php');
        }


    }
    function Them_san_pham()
    {
        // Models
        //ma_tin_tuc`, `tieu_de`, `tom_tat`, `chi_tiet`, `hinh`, `tac_gia`, `ngay_dang`, `ngay_gui`, `so_luot_xem`
        $m1_san_pham = new M_loai_san_pham();
        $san_phams = $m1_san_pham->Doc_loai_san_pham();
        if(isset($_POST["btnCapnhat"]))
        {
            $ma_san_pham = NULL;
            $ten_san_pham = $_POST["ten_san_pham"];
            $ma_loai_cha = $_POST["ma_loai_cha"];
            $ma_loai = $_POST["ma_loai"];
            $mo_ta_tom_tat = $_POST["mo_ta_tom_tat"];
            $mo_ta_chi_tiet = $_POST["mo_ta_chi_tiet"];
            $don_gia = $_POST["don_gia"];
            $hinh=$_FILES["f_hinh"]["error"]==0?$_FILES["f_hinh"]["name"]:"";
            $san_pham_moi=$_POST["san_pham_moi"];
            $so_lan_xem = $_POST["so_lan_xem"];
            $ngay = date_create($_POST["ngay_tao"]);
            $ngay_tao = date_format($ngay, "Y-m-d");
            $m_san_pham=new M_san_pham();

            $kq=$m_san_pham->Them_san_pham($ma_san_pham,$ten_san_pham,$ma_loai_cha,$ma_loai,$mo_ta_tom_tat,$mo_ta_chi_tiet,$don_gia,$hinh,$san_pham_moi,$so_lan_xem,$ngay_tao);

            if($kq)
            {
                if($hinh!="")
                {
                    move_uploaded_file($_FILES["f_hinh"]["tmp_name"],"../public/layout/images1/$hinh");
                }
                echo "<script>alert('Thêm thành công');window.location='san_pham.php'</script>";
            }
            else
            {
                echo "<script>alert('Thêm không thành công')</script>";
            }

        }

        // View
        $view = 'views/san_pham/v_them_san_pham.php';
        $title = "Shop quần áo";
        $tieude = "Sản phẩm";
        include('templates/layout.php');

    }
    function Xoa_san_pham()
    {
        // Models
        if(isset($_GET["ma_san_pham"]))
        {
            $ma_san_pham=$_GET["ma_san_pham"];
            $m_san_pham=new M_san_pham();
            $kq = $m_san_pham->Xoa_san_pham($ma_san_pham);
            if($kq)
            {
                echo "<script>alert('Xóa thành công');window.location='san_pham.php'</script>";
            }

        }


    }


}
?>