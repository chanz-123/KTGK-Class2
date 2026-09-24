<?php
/*
 * BÀI 5: Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm,
 *        số lẻ là chữ in thường. Kết quả: 1 2 3 4 ... 100.
 * Hướng dẫn: Sử dụng vòng lặp for, 1 biến đếm i, toán tử %.
 */
header('Content-Type: text/html; charset=utf-8');

echo "<pre style='font-family: Consolas, monospace; font-size: 15px; line-height: 1.8; word-wrap: break-word; white-space: pre-wrap;'>";
echo "<b>=== BÀI 5: DÃY SỐ TỪ 1 ĐẾN 100 (CHẴN IN ĐẬM, LẺ IN THƯỜNG) ===</b>\n\n";

for ($i = 1; $i <= 100; $i++) {
    // Nếu là số chẵn in đậm bằng thẻ <b>, số lẻ in thường
    if ($i % 2 === 0) {
        echo "<b>{$i}</b>";
    } else {
        echo $i;
    }

    // Ngăn cách giữa các số bằng khoảng trắng
    if ($i < 100) {
        echo " ";
    }
}

echo "\n</pre>";
?>