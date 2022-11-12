// JavaScript Document
function kiem_tra_tin_tuc()
{
	var ten_san_pham=document.getElementById("ten_san_pham");
	if(ten_san_pham.value=="")
	{
		alert("Nhập san pham");
		ten_san_pham.focus();
		return false;	
	}
	return true;
	
}
