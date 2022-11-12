<?php
require_once ("database.php");
class M_loai_san_pham extends database{
    public function Doc_ma_loai_san_pham($ma_loai_cha=0)
    {
        $sql= "select ma_loai,ten_loai from loai_san_pham where ma_loai_cha=?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($ma_loai_cha));
    }
}
?>