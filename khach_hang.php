<?php
include "controllers/c_khach_hang.php";
$c_khach_hang=new C_khach_hang();
if(isset($_GET['key']))
{
    $key=$_GET['key'];
    if($key=='dat-hang')
    {
        $c_khach_hang->dang_ky();
    }
}

?>