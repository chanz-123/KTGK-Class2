<?php
/*
 * BÀI 6: Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm
 *        trong mảng có sẵn: $nam = array(1990, 1991, 1992, 1993, 1994, 1995);
 */
header('Content-Type: text/html; charset=utf-8');

echo "<pre style='font-family: Consolas, monospace; font-size: 15px; line-height: 1.6;'>";
echo "<b>=== BÀI 6: DUYỆT MẢNG NĂM BẰNG VÒNG LẶP FOREACH ===</b>\n\n";

// Khởi tạo mảng các năm theo đề bài
$nam = array(1990, 1991, 1992, 1993, 1994, 1995);

echo "Danh sách các năm trong mảng:\n";
echo "----------------------------------------\n";

// Duyệt từng phần tử của mảng bằng foreach
foreach ($nam as $index => $item) {
    $thuTu = $index + 1;
    echo "Năm thứ {$thuTu}: {$item}\n";
}

echo "</pre>";
?>