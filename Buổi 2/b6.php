<?php
$str = "https://example.com";
$prefix = "https";

// strncmp trả về 0 nếu n ký tự đầu của 2 chuỗi trùng khớp
if (strncmp($str, $prefix, strlen($prefix)) === 0) {
    echo "Chuỗi '$str' bắt đầu bằng '$prefix'";
} else {
    echo "Chuỗi '$str' không bắt đầu bằng '$prefix'";
}
?>