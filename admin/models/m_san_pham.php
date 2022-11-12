<?php
include_once ("database.php");
class M_san_pham extends database
{
    public function Doc_san_pham($vt = -1, $limit = -1){
        $sql = "select * from san_pham ";
        if ($vt >= 0 && $limit > 0) {
            $sql .= " limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();

    }
    public function Doc_loai_san_pham_theo_ma_san_pham($ma_san_pham)
    {
        $sql = "select * from san_pham where ma_san_pham = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_san_pham));
    }
/*`ma_san_pham`, `ten_san_pham`, `ma_loai_cha`, `ma_loai`, `mo_ta_tom_tat`, `mo_ta_chi_tiet`, `don_gia`, `hinh`, `san_pham_moi`, `so_lan_xem`, `ngay_tao`*/
    public function  Them_san_pham($ma_san_pham,$ten_san_pham,$ma_loai_cha,$ma_loai,$mo_ta_tom_tat,$mo_ta_chi_tiet,$don_gia,$hinh,$san_pham_moi,$so_lan_xem,$ngay_tao)
    {
        $sql ="insert into san_pham values(?,?,?,?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array("NULL",$ten_san_pham,$ma_loai_cha,$ma_loai,$mo_ta_tom_tat,$mo_ta_chi_tiet,$don_gia,$hinh,$san_pham_moi,$so_lan_xem,$ngay_tao));
    }
    public function  Sua_san_pham($ma_san_pham,$ten_san_pham,$ma_loai_cha,$ma_loai,$mo_ta_tom_tat,$mo_ta_chi_tiet,$don_gia,$hinh,$san_pham_moi,$so_lan_xem,$ngay_tao)
    {
        $sql="update san_pham set ten_san_pham = ?,ma_loai_cha=?,ma_loai=?,mo_ta_tom_tat=?,mo_ta_chi_tiet=?,don_gia=?,hinh=?,san_pham_moi=?,so_lan_xem=?,ngay_tao=?  Where ma_san_pham=?";
        $this->setQuery($sql);
        return $this->execute(array($ten_san_pham,$ma_loai_cha,$ma_loai,$mo_ta_tom_tat,$mo_ta_chi_tiet,$don_gia,$hinh,$san_pham_moi,$so_lan_xem,$ngay_tao,$ma_san_pham));
    }
    public function Xoa_san_pham($ma_san_pham){

        $sql = "delete from san_pham where ma_san_pham = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_san_pham));
    }
}
?>