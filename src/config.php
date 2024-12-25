<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "absensi_forstif";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaLengkap = $_POST['namaLengkap'];
    $nomorBP = $_POST['nobpKamu'];
    $jurusan = $_POST['jurusan'];

    $stmt = $connect->prepare("INSERT INTO mahasiswa (nama_lengkap, nomor_bp, jurusan) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $namaLengkap, $nomorBP, $jurusan);

    if ($stmt->execute()) {
        header("Location: index.php?status=success");
    } else {
        if ($connect->errno === 1062) { // Duplicate entry error code
            header("Location: index.php?status=duplicate");
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    $stmt->close();
}

$connect->close();