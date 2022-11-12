<?php
require_once ("database.php");
class M_san_pham extends database
{
    public function lay_san_pham_cho_gio_hang($chuoi)
    {
        $query = "select * from  san_pham where  ma_san_pham in ($chuoi)";
        $this->setQuery($query);
        return $this->loadAllRows();
    }

    public function Tim_san_pham($gtTim)
    {
        $sql = "select * from san_pham WHERE ten_san_pham like '%$gtTim%'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function Tim_san_pham_theo_don_gia($gtDau, $gtCuoi){
        $sql = "SELECT * FROM san_pham WHERE don_gia >= $gtDau AND don_gia <= $gtCuoi";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function Doc_san_pham($vt = -1, $limit = -1)
    {
        $sql = "select * from san_pham";
        if ($vt >= 0 && $limit > 0) {
            $sql .= " limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function Doc_san_pham_theo_ma_loai($ma_loai, $vt = -1, $limit = -1)
    {
        $sql = "select * from san_pham where ma_loai = ?";
        if ($vt >= 0 && $limit > 0) {
            $sql .= " limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows(array($ma_loai));
    }

    public function Doc_san_pham_theo_ma_san_pham($ma_san_pham)
    {
        $sql = "select*from san_pham where ma_san_pham  = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_san_pham));
    }

    public function Doc_san_pham_moi_nhat($vt = -1, $limit = -1)
    {
        $sql = "select*from san_pham order by ma_san_pham desc";
        if ($vt >= 0 && $limit > 0) {
            $sql .= " limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public  function  Doc_san_pham_ban_chay_nhat($vt = -1,$limit = -1)
    {
        $sql = "select * from san_pham, (SELECT ma_san_pham , sum(so_luong) as 'Tong' from ct_hoa_don GROUP By ma_san_pham order by Tong desc limit 0, 8) as CT WHERE CT.ma_san_pham = san_pham.ma_san_pham";
        if ($vt >= 0 && $limit > 0) {
            $sql .= " limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

}
?>