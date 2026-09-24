<?php
$sinhVien = [
    "Nguyễn Văn A" => 7.5,
    "Trần Thị B"   => 8.5,
    "Lê Văn C"     => 9.0,
    "Phạm Thị D"   => 6.0,
    "Hoàng Văn E"  => 8.0
];

// Lọc các sinh viên có điểm >= 8.0
$svGioi = array_filter($sinhVien, function($diem) {
    return $diem >= 8.0;
});

// Sắp xếp mảng theo điểm giảm dần, giữ nguyên liên kết key => value
arsort($svGioi);

echo "Danh sách sinh viên đạt từ 8 điểm trở lên (giảm dần):<br>";
foreach ($svGioi as $ten => $diem) {
    echo "- " . $ten . ": " . $diem . " điểm<br>";
}
?>