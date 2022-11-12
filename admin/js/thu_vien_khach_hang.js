function xoa_khach_hang(ma_khach_hang)
{
    if(confirm('Bạn muốn xóa khách hâng hiện hành?\nCẩn thận'))
    {
        window.location="xoa_khach_hang.php?ma_khach_hang=" + ma_khach_hang;
    }
}