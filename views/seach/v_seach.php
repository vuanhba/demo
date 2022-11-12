<!--<div class="col-md-6 header-middle">-->
<!--    <form href="#">-->
<!--        <div class="search">-->
<!--            <input type="search" id="searchValue" placeholder="Tìm kiếm sản phẩm" >-->
<!--        </div>-->
<!--        <div class="sear-sub">-->
<!--            <input type="submit" value="" id="search">-->
<!--        </div>-->
<!--        <div class="clearfix"></div>-->
<!--    </form>-->
<!--</div>-->
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-8">
                <div class="form-row">
                    <div class="col">
                        <input style="width: 60% !important; float:left;" type="text" id="searchValue" class="form-control" placeholder="Tìm kiếm sản phẩm">
                    </div>
                    <div class="col">
                        <input type="submit" id="search" class="btn btn-danger" value="Tìm kiếm">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="kq">

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function (e) {
        $("#search").click(function (e) {
           var valueSearch = $("#searchValue").val();
            var form_data ={"valueSearch": valueSearch};
            $.ajax({
                type:"POST",
                data: form_data,
                url:"xl_tim_san_pham.php",
                success: function(data){
                    //alert("123");
                    $("#kq").html(data);
                }
            })
        });
    });
</script>