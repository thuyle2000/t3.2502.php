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
} 


// Test case: Tạo mới một module
// try {
//     $newModule = new \App\Models\Module(name: "Lập trình PHP co ban", hours: 60, fee: 220);
//     $result = ModuleDao::create($newModule);    
//     if ($result) {
//         echo "Tạo mới module thành công: " . $newModule . "\n";
//     } else {
//         echo "Tạo mới module không thành công.\n";
//     }
// } catch (\Exception $e) {
//     echo "Lỗi khi tạo mới module: " . $e->getMessage() . "\n";

// } 

// Test case: Xóa một module theo ID
try {
    $idToDelete = 3;    
    $result = ModuleDao::delete($idToDelete);
    if ($result) {
        echo "Xóa module với ID $idToDelete thành công.\n"; 
    } else {
        echo "Xóa module với ID $idToDelete không thành công.\n";
    }
} catch (\Exception $e) {
    echo "Lỗi khi xóa module: " . $e->getMessage() . "\n";
}