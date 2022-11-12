<?php
include("database.php");
class M_user extends database
{
    function Doc_user()
    {
        $sql="select * from nguoi_dung";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function Doc_Table()
    {
        $sql="SHOW TABLES FROM jean_thoi_trang";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function Doc_user_theo_tenDn_pass($ten,$mk)
    {
        $sql="select * from nguoi_dung where ten_dang_nhap=? and mat_khau=?";
        $this->setQuery($sql);
        return $this->loadRow(array($ten,md5($mk)));
    }
}
?>