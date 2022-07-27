<?php

session_start();

$uname = $_POST['username'];
$upass = $_POST['password'];




$servername = "localhost";
    $username = "root";
    $password = "12345";
    $dbname = "Govaccine";

    // Create connection db
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection db
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

//membuat query
$querySQL = "SELECT * FROM login WHERE username = '$uname' AND password = '$upass'";
                         
//mengeksekusi  
$hasil = $conn->query( $querySQL);
 // cek hasil
 if ($hasil->num_rows > 0){
    $_SESSION ['username'] = $uname;
    $_SESSION ['password'] = $upass;

    header("Location: beranda.php");

 } else{
    echo "Anda belum terdaftar <br/>";
    echo "Silakan Daftar Terlebih dahulu <br/>";
    echo "<a href= daftar.php> daftar akun </a>";

 }

?>