// JavaScript Document
$(document).ready(function() {
    // Hiển thị hình khi upload
	$("#hinh").on('change', function () {

		if (typeof (FileReader) != "undefined") {
	
			var image_holder = $("#image-holder");
			image_holder.empty();
	
			var reader = new FileReader();
			reader.onload = function (e) {
				$("<img />", {
					"src": e.target.result,
					"class": "thumb-image"
				}).appendTo(image_holder);
	
			}
			image_holder.show();
			reader.readAsDataURL($(this)[0].files[0]);
		} else {
			alert("This browser does not support FileReader.");
		}
	});// end Hiển thị hình khi upload

	// Ngày
	$( ".ngay" ).datepicker();
	
	
}); // end ready

function Hoi_xoa_san_pham(ma_loai)
{
	if(confirm("Bạn có muốn xóa loại sản phẩm"))
	{
		window.location='xoa_loai_san_pham.php?ma_loai=' + ma_loai
	}	
}




function Kiemtradulieu()
{
	var kt=document.getElementsByClassName("kiemtra");
	for(i=0;i<kt.length;i++)
	{
		if(kt.item(i).value=="")
		{
			//alert(kt.item(i).getAttribute("data-error"));
			kt.item(i).style.borderColor="#F00";
			kt.item(i).focus();
			return false; 	
		}
		else
		{
			kt.item(i).style.borderColor="#d5d5d5";
		}	
	}
	return true;
}
