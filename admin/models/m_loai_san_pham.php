<?php
include_once ("database.php");
class M_loai_san_pham extends database
{
    public function Doc_loai_san_pham($vt = -1, $limit = -1){
        $sql = "select * from loai_san_pham ";
        if ($vt >= 0 && $limit > 0) {
            $sql .= " limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();

    }
    public function Doc_loai_san_pham_theo_ma_loai($ma_loai)
    {
        $sql = "select * from loai_san_pham where ma_loai = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_loai));
    }
    public function  Them_loai_san_pham($ma_loai,$ten_loai,$mo_ta,$ma_loai_cha)
    {
        $sql ="insert into loai_san_pham values(?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($ma_loai,$ten_loai,$mo_ta,$ma_loai_cha));
    }
    public function  Sua_loai_san_pham($ma_loai,$ten_loai,$mo_ta,$ma_loai_cha)
    {
        $sql="update loai_san_pham set ten_loai=?,mo_ta=?,ma_loai_cha=?  Where ma_loai=?";
        $this->setQuery($sql);
        return $this->execute(array($ten_loai,$mo_ta,$ma_loai_cha,$ma_loai));
    }


    public function Xoa_loai_san_pham($ma_loai){

        $sql = "delete from loai_san_pham where ma_loai = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_loai));
    }
}
?>