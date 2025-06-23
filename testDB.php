<?php
//test case ve chuc nang ket noi toi database
require_once 'library.php';

$conn = connectDatabase();

if ($conn) {
    echo "Kết nối đến cơ sở dữ liệu thành công!";
}


require_once 'modules.php';
use App\Models\ModuleDao;

// Test case: Lấy danh sách các module
try {
    $modules = ModuleDao::getAll();
    echo "Danh sách các module:\n"; 
    foreach ($modules as $m) {
        echo $m . "\n";
    }
} catch (\Exception $e) {
    echo "Lỗi khi lấy danh sách các module: " . $e->getMessage() . "\n";
} finally {
    if (isset($conn) && $conn) {
        mysqli_close($conn);
        echo "Đã đóng kết nối đến cơ sở dữ liệu.\n";
    }   
    echo "Kết thúc chương trình.\n";
}