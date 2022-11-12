<?php
require_once ("database.php");
class M_lien_he extends database{
    public function Them_lien_he($name,$email,$content)
    {
        $sql = "insert into lien_he VALUE (?,?,?,?,?,?)";
        $this->setQuery($sql);
        $param = array(NULL,$name, $email,$content,date("Y-m-d"),0);
        return $this->execute($param);
    }
}
?>