<script>
    $(function() {
        var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
        var id=null;
        if (pgurl=="") pgurl="." ;
        $("#main-nav li a").each(function(){
            if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
            {
                var title = $(this).attr("title");
                id=document.getElementById(title);
                $(this).addClass("current");
                $(id).addClass("current");
            }

        })

        $(id).click();

    });

</script>
<ul id="main-nav">
    <!-- Accordion Menu -->

    <li>
        <a href="thong_ke_doanh_thu.php" class="nav-top-item no-submenu">
            <!-- Add the class "no-submenu" to menu items with no sub menu  -->
            Thống kê doanh thu
        </a>
    </li>

    <li>
        <a href="#" class="nav-top-item" id="loaimon">Loại sản phẩm </a>
        <ul>
            <li><a href="loai_san_pham.php" title="loaimon">Danh sách loại sản phảm</a></li>
            <li><a href="them_loai_san_pham.php" title="loaimon" >Thêm loại sản phẩm</a></li>
        </ul>
    </li>
    <li> <a href="#" class="nav-top-item" id="monan"> Sản phẩm </a>
        <ul>
            <li><a href="san_pham.php" title="monan">Danh sách sản phẩm</a></li>
            <li><a href="them_san_pham.php" title="monan">Thêm sản phẩm</a></li>
        </ul>
    </li>
    <li> <a href="#" class="nav-top-item" id="monan"> Khách hàng</a>
        <ul>
            <li><a href="khach_hang.php" title="monan">Danh sách khách hàng</a></li>
        </ul>
    </li>
    <li> <a href="#" class="nav-top-item" id="monan"> Hóa đơn</a>
        <ul>
            <li><a href="hoa_don.php" title="monan">Hóa đơn</a></li>
        </ul>
    </li>

</ul>
<!-- End #main-nav -->