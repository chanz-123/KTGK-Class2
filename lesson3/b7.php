<?php
function calculateTotal($price, $quantity, $discount = 0) {
    $subtotal = $price * $quantity;
    $total = $subtotal - ($subtotal * ($discount / 100));
    return $total;
}

// Gọi hàm không truyền discount (mặc định = 0%)
echo "Không giảm giá: " . calculateTotal(100000, 2) . " VNĐ<br>";

// Gọi hàm có chiết khấu 10%
echo "Có giảm giá 10%: " . calculateTotal(100000, 2, 10) . " VNĐ";
?>