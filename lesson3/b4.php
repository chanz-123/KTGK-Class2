<?php
$ngay = 3;

switch ($ngay) {
    case 1:
        echo "Chủ Nhật";
        break;
    case 2:
        echo "Thứ Hai";
        break;
    case 3:
        echo "Thứ Ba";
        break;
    case 4:
        echo "Thứ Tư";
        break;
    case 5:
        echo "Thứ Năm";
        break;
    case 6:
        echo "Thứ Sáu";
        break;
    case 7:
        echo "Thứ Bảy";
        break;
    default:
        echo "Giá trị không hợp lệ (chỉ từ 1 - 7).";
        break;
}
?>