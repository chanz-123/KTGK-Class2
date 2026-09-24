<?php
/*
 * BÀI 2: Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh 
 *        dựa trên điểm thi giữa kỳ, điểm thi cuối kỳ.
 *
 * Công thức tính điểm trung bình = (điểm giữa kỳ * 30%) + (điểm cuối kỳ * 70%)
 * - Điểm trung bình >= 9.0: "Xuất sắc"
 * - Điểm trung bình >= 7.0 và < 9.0: "Giỏi"
 * - Điểm trung bình >= 5.0 và < 7.0: "Khá"
 * - Điểm trung bình < 5.0: "Trung bình - Yếu"
 */
header('Content-Type: text/html; charset=utf-8');

echo "<pre style='font-family: Consolas, monospace; font-size: 15px; line-height: 1.6;'>";
echo "<b>=== BÀI 2: XẾP HẠNG HỌC LỰC HỌC SINH ===</b>\n\n";

// Khai báo điểm thi giữa kỳ và cuối kỳ
$diemGiuaKy = 8.5;
$diemCuoiKy = 9.2;

// Tính điểm trung bình theo trọng số 30% và 70%
$diemTB = ($diemGiuaKy * 0.3) + ($diemCuoiKy * 0.7);

// Hiển thị thông tin điểm
echo "Điểm thi giữa kỳ : {$diemGiuaKy}\n";
echo "Điểm thi cuối kỳ : {$diemCuoiKy}\n";
echo "Điểm trung bình  : " . number_format($diemTB, 2) . "\n";
echo "----------------------------------------\n";

// Câu lệnh điều kiện if - elseif - else xếp hạng
if ($diemTB >= 9.0) {
    echo "Xếp hạng học lực : Xuất sắc\n";
} elseif ($diemTB >= 7.0) {
    echo "Xếp hạng học lực : Giỏi\n";
} elseif ($diemTB >= 5.0) {
    echo "Xếp hạng học lực : Khá\n";
} else {
    echo "Xếp hạng học lực : Trung bình - Yếu\n";
}

echo "</pre>";
?>