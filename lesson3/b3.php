<?php
$diemTB = 8.2;

if ($diemTB < 0 || $diemTB > 10) {
    echo "Điểm không hợp lệ.";
} elseif ($diemTB >= 9.0) {
    echo "Xuất sắc";
} elseif ($diemTB >= 8.0) {
    echo "Giỏi";
} elseif ($diemTB >= 6.5) {
    echo "Khá";
} elseif ($diemTB >= 5.0) {
    echo "Trung bình";
} else {
    echo "Yếu";
}
?>