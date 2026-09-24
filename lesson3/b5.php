<?php
for ($i = 1; $i <= 100; $i++) {
    // Dừng toàn bộ vòng lặp khi vượt quá 50
    if ($i > 50) {
        break;
    }

    // Bỏ qua các số chia hết cho 3
    if ($i % 3 === 0) {
        continue;
    }

    echo $i . " ";
}
?>