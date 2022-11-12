<?php
class C_contact
{
    public function Hien_thi()
    {
        // Models
        $kq = "";
        if(isset($_POST["submit"]))
        {
            include("models/m_lien_he.php");
            $m_lien_he=new M_lien_he();
            // ma_lien_he, ho_ten, email, noi_dung, ngay_gui, trang_thai
            $name = $_POST["name"];
            $email = $_POST["email"];
            $content = $_POST["content"];
            $kq = $m_lien_he->Them_lien_he($name, $email,$content);
            if($kq)
            {
                //Gửi mail
                require_once("libs/Helper.php");
                $tieu_de = "Liên hệ";
                $noi_dung_mail = "<b>Từ: </b>$name<p/><b>Email:</b>$email<p/>$content";
                $kq=Helper::Gui_mail_lien_he($tieu_de,$noi_dung_mail);
                if($kq)
                {
                    echo "<script>alert('Cám ơn. Quí khách đã gởi liên hệ')</script>";
                }
            }
            else
            {
                echo "<script>alert('Đã có lỗi khi gởi liên hệ')</script>";
            }
        }
        // Views
        $view = 'views/contact/v_contact.php';
        $banner = "Liên hệ";
        include('templates/frontend/single/layout.php');

    }

}
?>