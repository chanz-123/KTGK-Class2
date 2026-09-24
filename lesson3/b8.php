<?php
$numbers = [12, 5, 8, 19, 3, 22, 15, 7, 30, 1];

// 1. Tính tổng và trung bình
$tong = array_sum($numbers);
$trungBinh = $tong / count($numbers);

// 2. Tìm min, max
$nhoNhat = min($numbers);
$lonNhat = max($numbers);

// 3. Sắp xếp tăng dần
sort($numbers);

echo "Tổng: " . $tong . "<br>";
echo "Trung bình: " . $trungBinh . "<br>";
echo "Nhỏ nhất: " . $nhoNhat . "<br>";
echo "Lớn nhất: " . $lonNhat . "<br>";
echo "Mảng sau khi sắp xếp: " . implode(", ", $numbers);
?>