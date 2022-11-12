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
/*
<input type="file" name="hinh" id="hinh" />
<div class="image-holder" id="image-holder"></div>
*/

