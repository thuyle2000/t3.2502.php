<?php

require_once 'modules.php';
use App\Models\ModuleDao;
use App\Models\Module;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $hours = (int)($_POST['hours'] ?? 40);
    $fee = (int)($_POST['fee'] ?? 100); 
    $module = new Module(name: $name, hours: $hours, fee: $fee);
    
    try {
        ModuleDao::create($module);
        header('Location: d05_module_crud.php');
        exit;
    } catch (Exception $e) {
        echo "<div style='color:red'>Lỗi: " . $e->getMessage() . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create-module</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        form {
            width: fit-content;
            padding: 10px 30px;
            border: 1px solid #ccc;
            background-color: lightcyan;
        }
    </style>
</head>

<body>
<div class="container">

    <h2 class="mt-5">Thêm môn học mới</h2>

    <form method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Tên môn học</label>    
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="hours" class="form-label">Số giờ</label>
            <input type="number" class="form-control" id="hours" name="hours" value="40" required>
        </div>  
        <div class="mb-3">
            <label for="fee" class="form-label">Học phí</label>
            <input type="number" class="form-control" id="fee" name="fee" value="100" required>
        </div>

        <button type="submit" class="btn btn-primary">Tạo mới</button>
        <button type="reset" class="btn btn-secondary">Làm lại</button>
    </form>
</div>
</body>

</html>