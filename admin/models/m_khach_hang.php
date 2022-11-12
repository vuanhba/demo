<?php
include_once ("database.php");
class M_khach_hang extends database
{
    public function Doc_khach_hang($vt = -1, $limit = -1){
        $sql = "select * from khach_hang ";
        if ($vt >= 0 && $limit > 0) {
            $sql .= " limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();

    }
    public function Doc_loai_khach_hang_theo_ma($ma_khach_hang)
    {
        $sql = "select * from khach_hang where ma_khach_hang = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_khach_hang));
    }

    /*`ma_khach_hang`, `ten_khach_hang`, `phai`, `ngay_sinh`, `dia_chi`, `dien_thoai`, `email`, `ghi_chu`*/
    public function  Sua_khach_hang($ma_khach_hang,$ten_khach_hang,$phai,$ngay_sinh,$dia_chi,$dien_thoai,$email,$ghi_chu)
    {
        $sql="update khach_hang set ten_khach_hang=?,phai=?,ngay_sinh=?,dia_chi=?,dien_thoai=?,email=?,ghi_chu=?  Where ma_khach_hang=?";
        $this->setQuery($sql);
        return $this->execute(array($ten_khach_hang,$phai,$ngay_sinh,$dia_chi,$dien_thoai,$email,$ghi_chu,$ma_khach_hang));
    }


    public function Xoa_khach_hang($ma_khach_hang){

        $sql = "delete from khach_hang where ma_khach_hang = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_khach_hang));
    }
}
?>