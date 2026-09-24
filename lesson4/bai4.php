<?php
/*
 * BÀI 4: Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100.
 */
header('Content-Type: text/html; charset=utf-8');

echo "<pre style='font-family: Consolas, monospace; font-size: 15px; line-height: 1.6; word-wrap: break-word; white-space: pre-wrap;'>";
echo "<b>=== BÀI 4: IN DÃY SỐ TỪ 1 ĐẾN 100 BẰNG VÒNG LẶP FOR ===</b>\n\n";

for ($i = 1; $i <= 100; $i++) {
    // In số ra màn hình, ngăn cách nhau bằng dấu phẩy
    if ($i < 100) {
        echo $i . ", ";
    } else {
        echo $i . ".\n";
    }
}

echo "</pre>";
?>