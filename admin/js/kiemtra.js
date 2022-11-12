// JavaScript Document
// Các hàm kiểm tra và hỏi xóa
function Kiemtradulieu()
{
	var kt=document.getElementsByClassName("kiemtra");
	for(i=0;i<kt.length;i++)
	{
		if(kt.item(i).value=="")
		{
			alert(kt.item(i).getAttribute("data-error"));
			kt.item(i).focus();
			return false; 	
		}	
	}
	return true;
}

