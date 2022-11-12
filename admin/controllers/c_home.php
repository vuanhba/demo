<?php
class C_home
{
    public function Hien_thi_bieu_do_thong_ke()
    {
        // Model
        include_once("models/m_hoa_don.php");
        $m_hoa_don=new M_hoa_don();
        $hoa_don=$m_hoa_don->Thong_ke_hoa_don();
        $thang=array();
        $tong=array();
        foreach($hoa_don as $hd)
        {
            $thang[]=$hd->ThangNam;
            $tong[]=(float)$hd->tong;
        }

        $arr=array(
            "labels"=>$thang,
            "datasets"=>array(
                array(
                    "label"=>"Doanh thu theo tháng năm ",
                    "borderColor"=>"#F00",
                    "backgroundColor"=>"#FF9",
                    "fillColor"=>"rgba(172,194,132,0.4)",
                    "strokeColor"=>"#ACC26D",
                    "pointBorderColor"=>"#0C0",
                    "pointStrokeColor"=>"#9DB86D",
                    "pointBorderWidth" => 1,
                    "pointHoverRadius"=>5,
                    "pointHoverBorderWidth"=>3,
                    "pointRadius"=>5,
                    "pointHitRadius"=>10,
                    "data"=>$tong
                )
            )
        );
        $strJSON=json_encode($arr);
        // View

        $view = "views/home/v_chart.php";
        $title = "Quản lý Shop_smart|Thống kê doanh thu";
        include('templates/layout.php');

    }
}
?>