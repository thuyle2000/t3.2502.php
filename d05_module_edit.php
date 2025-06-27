<?php require_once 'modules.php';

use App\Models\ModuleDao;
use App\Models\Module;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = (int)($_GET['id'] ?? 0);
    $module = ModuleDao::getById($id);
    if (!$module) {
        echo "<div style='color:red'>Không tìm thấy môn học với ID: $id</div>";
        exit;
    }
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Xử lý khi người dùng gửi form
    $id = (int)($_POST['id'] ?? 0);
    $name = $_POST['name'] ?? '';
    $hours = (int)($_POST['hours'] ?? 40);
    $fee = (int)($_POST['fee'] ?? 100);
    $module = new Module(name: $name, hours: $hours, fee: $fee, id: $id);

    try {
        ModuleDao::update($module);
        // Nếu cập nhật thành công, hiển thị thông báo
        // echo "<div style='color:green'>Cập nhật môn học thành công!</div>";
        // exit;

        // Chuyển hướng về trang danh sách môn học sau khi cập nhật thành công       
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
    <title>edit-module</title>
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

        <h2 class="mt-5">Thay doi thong tin môn học</h2>

        <form method="post">
            <input type="hidden" name="id" value="<?php echo $module->id; ?>" >
            <div class="mb-3">
                <label for="name" class="form-label">Tên môn học</label>
                <input type="text" class="form-control" id="name" name="name" required 
                value="<?php echo htmlspecialchars($module->name); ?>"   >
            </div>

            <div class="mb-3">
                <label for="hours" class="form-label">Số giờ</label>
                <input type="number" class="form-control" id="hours" name="hours" 
                value="<?php echo $module->hours; ?>" required>
            </div>
            <div class="mb-3">
                <label for="fee" class="form-label">Học phí</label>
                <input type="number" class="form-control" id="fee" name="fee" 
                value="<?php echo $module->fee; ?>"
                required>
            </div>

            <button type="submit" class="btn btn-primary">Cập nhật</button>
            <button type="reset" class="btn btn-secondary">Làm lại</button>
        </form>
    </div>
</body>

</html>