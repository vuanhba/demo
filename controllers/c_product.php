<?php
@session_start();
class C_product{
    public  function  Tim_kiem_san_pham(){
        include ("models/m_san_pham.php");
        $m_san_pham = new M_san_pham();
        $san_phams = $m_san_pham->Doc_san_pham();
        $str="'";
        foreach($san_phams as $sp)
        {
            $str.=$sp->ten_san_pham. "','";
        }
        $str=substr($str,0,strlen($str)-2);
        $view = 'views/product/v_product.php';
        $banner = "Sản phẩm";
        include('templates/frontend/mens/layout.php');
    }
    public function Hien_thi(){
        include ("models/m_san_pham.php");
        $m_san_pham = new M_san_pham();
        $san_phams = $m_san_pham->Doc_san_pham();
        $ma_loai = $san_phams[0]->ma_loai;
        if(isset($_GET['ma_loai']))
        {
            $ma_loai = $_GET['ma_loai'];
        }
        $san_phams = $m_san_pham->Doc_san_pham_theo_ma_loai($ma_loai);
          $count=count($san_phams);
          // Phân trang
        include("libs/Pager.php");
          $p=new pager();
          $limit=8;
          $count=count($san_phams);
          $pages=$p->findPages($count,$limit);
          $vt=$p->findStart($limit);
          $curpage=$_GET["page"];
          $lst=$p->pageList($curpage,$pages);
          $san_phams=$m_san_pham->Doc_san_pham_theo_ma_loai($ma_loai,$vt,$limit);
        $view = 'views/product/v_product.php';
        $banner = "Sản phẩm";
        include('templates/frontend/mens/layout.php');
    }
    public  function Hien_thi_chi_tiet_san_pham()
    {
        include ("models/m_san_pham.php");
        $m_san_pham = new M_san_pham();
        $san_phams = $m_san_pham->Doc_san_pham();
        $ma_san_pham = $san_phams[0]->ma_san_pham;
        if(isset($_GET["ma_san_pham"]))
        {
            $ma_san_pham = $_GET["ma_san_pham"];
        }
        $san_pham = $m_san_pham ->Doc_san_pham_theo_ma_san_pham($ma_san_pham);
        $view = 'views/single/v_single.php';
        $banner = "Single";
        include('templates/frontend/single/layout.php');
    }
    public function Hien_thi_trang_chu()
    {
        include ("models/m_san_pham.php");
        $m_san_pham = new M_san_pham();
        $new_san_phams = $m_san_pham->Doc_san_pham_moi_nhat(0, 8);

        $bc_san_phams = $m_san_pham->Doc_san_pham_ban_chay_nhat(0, 8);
        $view = 'views/home/v_home.php';
        include('templates/frontend/layout.php');
    }
//    public  function Hien_thi_san_pham_ban_chay_nhat()
//    {
//        include ("models/m_san_pham.php");
//        $m_san_pham = new M_san_pham();
//        $bc_san_phams = $m_san_pham->Doc_san_pham_ban_chay_nhat(0, 8);
//
//        $view = 'views/home/v_bestseller_product.php';
//        include('templates/frontend/layout.php');
//    }
}

?>