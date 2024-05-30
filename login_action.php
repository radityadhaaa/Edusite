<?php
// Fungsi untuk memeriksa login
function login($username, $password) {
    $host = "localhost";
$user = "root";
$pass= "";
$dbname = "db_tubes_sbd";
$conn = mysqli_connect($host, $user, $pass, $dbname);

if(!$conn){
   die ("Koneksi dengan database gagal: ".mysqli_connect_error());
}

    // Melakukan query untuk memeriksa kecocokan username dan password
    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    // Memeriksa jumlah baris hasil query
    if ($result->num_rows == 1) {
        $conn->close();
        return true; // Login berhasil
    } else {
        $conn->close();
        return false; // Login gagal
    }
}

// Contoh penggunaan fungsi login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Panggil fungsi login
    if (login($username, $password)) {
        // Redirect ke halaman lain setelah login berhasil
        header("Location: admin.php");
        exit();
    } else {
        echo "Login gagal!";
        // Lakukan tindakan jika login gagal
    }
}
