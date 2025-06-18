<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tester</title>

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
    <div class="container mt-5">
        <form action="">
            <h2>Profiles</h2>
            <hr>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" class="form-control"
                    id="email" name="email" value="admin@aptech.fpt.vn"
                    required>
            </div>

            <div class="mt-3">
                <label class="form-label">gender</label>
            </div>

            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" id="genderM" name="gender" value="male" checked>
                <label class="form-check-label">male</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" id="genderF" name="gender" value="female">
                <label class="form-check-label">female</label>
            </div>

            <div class="mt-3">
                <label class="form-label">languages</label>
            </div>

            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="languages" name="languages[]" value="c" checked>
                <label class="form-check-label">C/C++</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="languages" name="languages[]" value="java">
                <label class="form-check-label">java</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="languages" name="languages[]" value="python">
                <label class="form-check-label">python</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="languages" name="languages[]" value="ruby" checked>
                <label class="form-check-label">ruby</label>
            </div>

            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="languages" name="languages[]" value="javascript">
                <label class="form-check-label">javascript</label>
            </div>

            <div class="mt-3">
                <label for="city" class="form-label">city</label>

                <select class="form-select" name="city" id="city" required>
                    <option selected value="Saigon">Sai gon</option>
                    <option value="Hue">Hue</option>
                    <option value="Hanoi">Ha noi</option>
                    <option value="Danang">Da nang</option>
                    <option value="Cantho">Can Tho</option>
                    <option value="Nhatrang">Nha Trang</option>
                </select>
            </div>


            <div class="mt-3">
                <button type="submit" class="btn btn-warning">Login</button>
                <button type="reset" class="btn btn-info">Reset</button>

            </div>

        </form>
    </div>
</body>

</html>