<?php
$host = "127.0.0.1";
$port = 3307;
$db   = "quan_ly_sinh_vien";
$user = "root";
$pass = "123456"; 


$conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);


// SỬ DỤNG PDO THÊM DỮ LIỆU VÀO BẢNG (INSERT)

$sqlInsert = "INSERT IGNORE INTO sinh_vien (ma_sinh_vien, ho_ten, ngay_sinh, lop_hoc, diem_trung_binh)
              VALUES (:ma, :ten, :ngay, :lop, :diem)";
$stmtInsert = $conn->prepare($sqlInsert);
$stmtInsert->execute([
    ':ma'   => 'SV001',
    ':ten'  => 'Nguyen Van An',
    ':ngay' => '2003-05-15',
    ':lop'  => 'K60SN',
    ':diem' => 7.50
]);
echo "Thêm sinh viên SV001 thành công!<br>";


// SỬ DỤNG PDO CẬP NHẬT DỮ LIỆU VÀO BẢNG (UPDATE)

$sqlUpdate = "UPDATE sinh_vien 
              SET diem_trung_binh = :diem_moi 
              WHERE ma_sinh_vien = :ma";
$stmtUpdate = $conn->prepare($sqlUpdate);
$stmtUpdate->execute([
    ':diem_moi' => 8.50,
    ':ma'       => 'SV001'
]);
echo "Cập nhật điểm cho SV001 thành 8.5 thành công!<br>";


// HIỂN THỊ DỮ LIỆU SỬ DỤNG PDO (SELECT)

$sqlSelect = "SELECT * FROM sinh_vien";
$stmtSelect = $conn->prepare($sqlSelect);
$stmtSelect->execute();
$danhSachSinhVien = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);

echo "<h3>DANH SÁCH SINH VIÊN</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th>Mã SV</th>
        <th>Họ tên</th>
        <th>Ngày sinh</th>
        <th>Lớp</th>
        <th>Điểm TB</th>
      </tr>";

foreach ($danhSachSinhVien as $sinhVien) {
    echo "<tr>";
    echo "<td>" . $sinhVien['ma_sinh_vien'] . "</td>";
    echo "<td>" . $sinhVien['ho_ten'] . "</td>";
    echo "<td>" . $sinhVien['ngay_sinh'] . "</td>";
    echo "<td>" . $sinhVien['lop_hoc'] . "</td>";
    echo "<td>" . $sinhVien['diem_trung_binh'] . "</td>";
    echo "</tr>";
}
echo "</table><br>";


// XOÁ DỮ LIỆU Ở BẢNG SỬ DỤNG PDO (DELETE)

$sqlDelete = "DELETE FROM sinh_vien WHERE ma_sinh_vien = :ma";
$stmtDelete = $conn->prepare($sqlDelete);
$stmtDelete->execute([
    ':ma' => 'SV001'
]);
echo "Đã xoá sinh viên SV001 khỏi bảng!";
?>