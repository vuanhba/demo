<!-- contact -->
<div class="contact">
    <div class="container">
        <div class="contact-grids">
            <div class="col-md-4 contact-grid text-center animated wow slideInLeft" data-wow-delay=".5s">
                <div class="contact-grid1">
                    <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
                    <h4>Địa chỉ</h4>
                    <p>52B Nguyễn Thái Sơn,phường 3,Quận Gò Vấp <span>Thành Phố Hồ Chí Minh.</span></p>
                </div>
            </div>
            <div class="col-md-4 contact-grid text-center animated wow slideInUp" data-wow-delay=".5s">
                <div class="contact-grid2">
                    <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
                    <h4>Gọi chúng tôi</h4>
                    <p>094 806 1238<span>0126 758 3308</span></p>
                </div>
            </div>
            <div class="col-md-4 contact-grid text-center animated wow slideInRight" data-wow-delay=".5s">
                <div class="contact-grid3">
                    <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                    <h4>Email</h4>
                    <p><a href="mailto:info@example.com">thanghoang064@gmail.com</a><span><a href="mailto:info@example.com">nguyenvohoangduy1996@gmail.com</a></span></p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="map wow fadeInDown animated" data-wow-delay=".5s">
           <h3 class="tittle">Xem bản đồ</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.9381186048677!2d106.67804821489212!3d10.81604769229464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528e1133ef44f%3A0xafaa83f57c317abc!2zNTIgxJDGsOG7nW5nIE5ndXnhu4VuIFRow6FpIFPGoW4sIFBoxrDhu51uZyAzLCBHw7IgVuG6pXAsIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1503076816573" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
       </div>
        <h3 class="tittle">Contact Form</h3>
        <form action="#" method="post" id="contactForm">
            <div class="contact-form2">
                <input type="text" name="name" id="name" placeholder="Nhập họ tên của bạn" >
                <input type="email" name="email" id="email" placeholder="Nhập email của bạn">
                <textarea type="text" name="content" id="content" placeholder="Nhập nội dung" " ></textarea>
                <input type="submit" name="submit" value="submit" id="submit">
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("#submit").click(function (e) {
            var patternEmail = /\S+@\S+\.\S+/;
            if($("#name").val() == "")
            {
                alert("Họ tên không được trống");
                $("#name").css("border", "1px solid red");
                $("#name").focus();
                return false;
            }
            else if($("#email").val() == "")
            {
                alert("Email không được trống");
                $("#email").css("border", "1px solid red");
                $("#email").focus();
                return false;
            }
            else if(!patternEmail.test($("#email").val()))
            {
                alert("Email không hợp lệ");
                $("#email").css("border", "1px solid red");
                $("#email").focus();
                return false;
            }
            else if($("#content").val() == "")
            {
                alert("Nội dung không được trống");
                $("#content").css("border", "1px solid red");
                $("#content").focus();
                return false;
            }
            else
            {
                alert("Dữ liệu nhập vào thành công");
                return true;
            }
        });
    });
</script>
<!-- //contact -->