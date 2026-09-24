<?php
//  1.Viết một chương trình PHP để hiển thị dãy số Fibonacci 
function generateFibonacci(int $n): array {
    $fibonacci = [];

    if ($n <= 0) {
        return $fibonacci;
    }
    $fibonacci[] = 0;
    if ($n == 1) {
        return $fibonacci;
    }
    $fibonacci[] = 1;
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}
// Hiển thị dãy Fibonacci 10 phần tử đầu tiên
$n = 10;
$fibSequence = generateFibonacci($n);

echo "Dãy số Fibonacci đầu tiên có $n phần tử là: <br>";
echo implode(', ', $fibSequence);



// 2. Viết ứng dụng PHP để quản lý thông tin học sinh sử dụng mảng kết hợp
$host = '127.0.0.1';
$port = 3307;
$db   = 'quan_ly_sinh_vien';
$user = 'root';
$pass = '';
try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Lỗi kết nối MySQL: " . $e->getMessage());
}
// Mảng kết hợp chứa thông tin về học sinh 
$students = [ 
    ['id' => 'HS01', 'name' => 'Nguyễn Văn An',   'age' => 16, 'grade' => 8.50],
    ['id' => 'HS02', 'name' => 'Trần Thị Bình',   'age' => 17, 'grade' => 9.20],
    ['id' => 'HS03', 'name' => 'Lê Hoàng Cường',  'age' => 16, 'grade' => 7.80],
    ['id' => 'HS04', 'name' => 'Phạm Mai Dung',   'age' => 17, 'grade' => 9.80],
    ['id' => 'HS05', 'name' => 'Bùi Văn Hùng',    'age' => 17, 'grade' => 9.90]
];

$sqlInsert = "INSERT INTO students (id, name, age, grade) 
              VALUES (:id, :name, :age, :grade)
              ON DUPLICATE KEY UPDATE name = :name, age = :age, grade = :grade";
$stmtInsert = $conn->prepare($sqlInsert);
foreach ($students as $hs) {
    $stmtInsert->execute([
        ':id'    => $hs['id'],
        ':name'  => $hs['name'],
        ':age'   => $hs['age'],
        ':grade' => $hs['grade']
    ]);
}
$stmtSelect = $conn->prepare("SELECT id, name, age, grade FROM students");
$stmtSelect->execute();
$danhSachTuDB = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);
//  Hiển thị thông tin tất cả học sinh
echo "<h3>DANH SÁCH TẤT CẢ HỌC SINH (LẤY TỪ DATABASE)</h3>";
echo "<ul>";
foreach ($danhSachTuDB as $sv) {
    echo "<li>Mã HS: {$sv['id']} | Tên: {$sv['name']} | Tuổi: {$sv['age']} | Điểm: {$sv['grade']}</li>";
}
echo "</ul>";

// Hàm tìm học sinh có điểm cao nhất duyệt mảng
function findTopStudent(array $studentList): ?array {
    if (empty($studentList)) {
        return null;
    }

    $topStudent = $studentList[0];
    foreach ($studentList as $student) {
        if ($student['grade'] > $topStudent['grade']) {
            $topStudent = $student;
        }
    }
    return $topStudent;
}

$bestStudent = findTopStudent($danhSachTuDB);
echo "<h3>HỌC SINH CÓ ĐIỂM CAO NHẤT</h3>";
if ($bestStudent) {
    echo "Họ và tên: <b>{$bestStudent['name']}</b> (Mã HS: {$bestStudent['id']})<br>";
    echo "Tuổi: {$bestStudent['age']}<br>";
    echo "Điểm số: <b>{$bestStudent['grade']}</b><hr>";
}
?>