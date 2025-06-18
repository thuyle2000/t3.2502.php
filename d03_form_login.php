<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">

        <form class="mt-5" method="get">
            <h2 class="mt-5">Login</h2>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control"
                    id="username"
                    name="taikhoan" value="admin" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control"
                    id="password"
                    name="matma" value="123456" required>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>


        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['taikhoan']) && isset($_GET['matma'])) {
            $username = $_GET['taikhoan'];
            $password = $_GET['matma'];

            if ($username === 'admin' && $password === '123456') {
                echo "<div class='alert alert-success mt-3'>Login successful!</div>";
            } else {
                echo "<div class='alert alert-danger mt-3'>Invalid username or password.</div>";
            }
        }
        ?>
    </div>


</body>

</html>