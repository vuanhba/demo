function xoa_san_pham(ma_san_pham)
{
    if(confirm('Bạn xóa sản phầm hiện hành?\nCẩn thận'))
    {
        window.location="xoa_san_pham.php?ma_san_pham=" + ma_san_pham;
    }
}