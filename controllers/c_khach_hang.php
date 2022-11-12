<?php
class C_khach_hang
{
    public function __construct()
    {

        include_once('models/m_khach_hang.php');
    }

    public function dang_ky()
    {
        if(isset($_POST['submit']))
        {
            $ten_khach_hang=$_POST['ten_khach_hang'];
            $phai =$_POST['phai'];
            $ngay = date_create($_POST["ngay_sinh"]);
            $ngay_sinh = date_format($ngay, "Y-m-d");

            $dia_chi=$_POST['dia_chi'];
            $dien_thoai=$_POST['dien_thoai'];
            $email=$_POST['email'];

            $ghi_chu=$_POST['ghi_chu'];
            $m_khach_hang=new M_khach_hang();
            $ma_khach_hang= $m_khach_hang->themKhachHang($ten_khach_hang, $phai,$ngay_sinh, $dia_chi, $dien_thoai,$email, $ghi_chu);
       
            if($ma_khach_hang>0)
            {
                $ngay_hd = date('Y-m-d');
                $tri_gia=0;
                //$tien_dat_coc=$_POST['tien_dat_coc'];
                $httt=$_POST['httt'];

                $hoa_don=$m_khach_hang->themHoaDon($ngay_hd,$ma_khach_hang,$tri_gia,$httt);
                if($hoa_don>0)
                {
                    include_once('controllers/c_gio_hang.php');
                    $c_gio_hang=new c_gio_hang();
                    $gio_hang=$c_gio_hang->layGioHang();

                    foreach($gio_hang as $key=>$value)
                    {


                        if(substr($key,0,1)=='t')
                            $m_khach_hang->themChiTietHoaDon($hoa_don,substr($key,1,strlen($key)-1),$value,0);
                        else
                            $m_khach_hang->themChiTietHoaDon($hoa_don,$key,$value,0);
                    }


                    $m_khach_hang->capNhatDonGia_sp($hoa_don);

                    $m_khach_hang->capNhatTongTien($hoa_don);
                    $c_gio_hang->xoaGioHang();
                    //In hoa đơn
                    $view="views/khach_hang/v_in_hoa_don.php";

                    $banner = "HoaDon";
                    include('templates/frontend/khach_hang/layout.php');
                }
            }
        }
        else
        {
            $view='views/khach_hang/v_them_khach_hang.php';
            $banner = "HoaDon";
            include('templates/frontend/khach_hang/layout.php');
        }
    }
}