<?php
$diemChuyenCan = 7.5;
$soBuoiNghi = 2;

// Điều kiện: điểm >= 5 VÀ số buổi nghỉ <= 3
$duDieuKien = ($diemChuyenCan >= 5.0) && ($soBuoiNghi <= 3);

if ($duDieuKien) {
    echo "Đủ điều kiện dự thi.";
} else {
    echo "Bị cấm thi do vi phạm quy chế.";
}
?>