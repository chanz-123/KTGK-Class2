<?php
/*
 * BÀI 3: Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ.
 */
header('Content-Type: text/html; charset=utf-8');

echo "<pre style='font-family: Consolas, monospace; font-size: 15px; line-height: 1.6;'>";
echo "<b>=== BÀI 3: KIỂM TRA NĂM HIỆN TẠI LÀ CHẴN HAY LẺ ===</b>\n\n";

// Lấy năm hiện tại tự động từ hệ thống bằng hàm date('Y')
$namHienTai = (int) date('Y');

echo "Năm hiện tại: {$namHienTai}\n";
echo "----------------------------------------\n";

// Sử dụng toán tử chia lấy dư (%) để kiểm tra tính chẵn lẻ
if ($namHienTai % 2 === 0) {
    echo "Kết luận: Năm {$namHienTai} là năm CHẴN.\n";
} else {
    echo "Kết luận: Năm {$namHienTai} là năm LẺ.\n";
}

echo "</pre>";
?>