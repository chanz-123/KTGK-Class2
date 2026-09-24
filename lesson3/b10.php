<?php
// Hàm tính thành tiền cho sản phẩm
function tinhThanhTien($donGia, $soLuong) {
    return $donGia * $soLuong;
}

// Mảng 2 chiều chứa danh sách sản phẩm
$sanPham = [
    ["ten" => "Bàn phím cơ", "donGia" => 800000, "soLuong" => 2],
    ["ten" => "Chuột không dây", "donGia" => 350000, "soLuong" => 3],
    ["ten" => "Màn hình 24 inch", "donGia" => 3200000, "soLuong" => 1],
    ["ten" => "Tai nghe gaming", "donGia" => 450000, "soLuong" => 4]
];
?>

<!-- Hiển thị dữ liệu bằng bảng HTML -->
<table border="1" cellpadding="8" cellspacing="0" style="border-collapse: collapse; width: 80%;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Đơn giá (VNĐ)</th>
            <th>Số lượng</th>
            <th>Thành tiền (VNĐ)</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $tongDonHang = 0;
        foreach ($sanPham as $index => $item): 
            $thanhTien = tinhThanhTien($item['donGia'], $item['soLuong']);
            $tongDonHang += $thanhTien;
        ?>
            <tr>
                <td align="center"><?php echo $index + 1; ?></td>
                <td><?php echo $item['ten']; ?></td>
                <td align="right"><?php echo number_format($item['donGia']); ?></td>
                <td align="center"><?php echo $item['soLuong']; ?></td>
                <td align="right"><?php echo number_format($thanhTien); ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="4" align="right"><strong>Tổng cộng:</strong></td>
            <td align="right"><strong><?php echo number_format($tongDonHang); ?> VNĐ</strong></td>
        </tr>
    </tbody>
</table>