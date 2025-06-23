<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modules</title>

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

        <h2 class="mt-5">Danh sách các môn học</h2>
        <div>
            <a href="d05_module_create.php" class="btn btn-primary mb-3">Thêm môn học mới</a>
        </div>


        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên môn học</th>
                    <th>Số giờ</th>
                    <th>Học phí</th>
                    <th>Thao tác</th>
                </tr>
            </thead>

            <tbody>
                <?php
                require_once 'modules.php';

                use App\Models\ModuleDao;

                if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['deleteid'])) {
                    $deleteId = (int)$_GET['deleteid'];
                    ModuleDao::delete($deleteId);
                }

                try {
                    $modules = ModuleDao::getAll();
                    foreach ($modules as $module) {
                        echo "<tr>";
                        echo "<td>{$module->id}</td>";
                        echo "<td>{$module->name}</td>";
                        echo "<td>{$module->hours}</td>";
                        echo "<td>{$module->fee}</td>";
                        echo "<td>";
                        echo "<a href='d05_module_edit.php?id={$module->id}' class='btn btn-warning'>Sửa</a> ";
                        echo "<a href='?deleteid={$module->id}' class='btn btn-danger'
                    onclick=\"return confirm('ban co muon xoa mon hoc ?')\"                  
                    >Xóa</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } catch (Exception $e) {
                    echo "<tr><td colspan='4' class='text-danger'>Lỗi: " . $e->getMessage() . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>