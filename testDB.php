<?php
//test case ve chuc nang ket noi toi database
require_once 'library.php';

$conn = connectDatabase();

if ($conn) {
    echo "Kết nối đến cơ sở dữ liệu thành công!";
}