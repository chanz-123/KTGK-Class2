<?php
/*
 * BÀI 1: Viết chương trình PHP, sử dụng câu lệnh điều kiện if else 
 *        để kiểm tra 1 số là số chẵn hay số lẻ?
 */
header('Content-Type: text/html; charset=utf-8');

echo "<pre style='font-family: Consolas, monospace; font-size: 15px; line-height: 1.6;'>";
echo "<b>=== BÀI 1: KIỂM TRA SỐ CHẴN HAY SỐ LẺ ===</b>\n\n";

$so = 15; // Có thể thay đổi số cần kiểm tra tại đây

if ($so % 2 === 0) {
    echo "Số {$so} là số chẵn.\n";
} else {
    echo "Số {$so} là số lẻ.\n";
}

echo "</pre>";
?>