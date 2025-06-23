<?php   
// viet ham tao ket noi toi database 'db2502.e0'
function connectDatabase() {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'db2502.e0';
    $port = 3306;
    $conn = mysqli_connect(hostname:$host, username:$user, database: $database, port:$port, password:$password);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_set_charset($conn, 'utf8');
    return $conn;
}


