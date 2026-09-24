<?php
$str = "   Code Clean   ";
$trimmedStr = trim($str);

echo "Độ dài ban đầu: " . strlen($str) . "<br>";
echo "Độ dài sau trim: " . strlen($trimmedStr) . "<br>";
echo "Chuỗi sau trim: '$trimmedStr'";
?>