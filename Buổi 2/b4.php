<?php
$str = "Learning PHP is easy";
$search = "PHP";

// Dùng !== false vì vị trí đầu tiên của chuỗi là 0
$position = strpos($str, $search);

if ($position !== false) {
    echo "Tìm thấy '$search' tại vị trí index: $position";
} else {
    echo "Không tìm thấy '$search' trong chuỗi";
}
?>