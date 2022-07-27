<?php

session_start();
$email = $_POST['email'];
$uname = $_POST['username'];
$upass = $_POST['password'];
$NamaLengkap = $_POST['nama'];

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
$querySQL = "INSERT INTO login (email, nama_lengkap, username, password)
                            VALUE('$email', '$NamaLengkap','$uname','$upass')";
//mengeksekusi 
$hasil = $conn->query( $querySQL);

$_SESSION['email'] = $email;
$_SESSION['username'] = $uname;
$_SESSION['nama'] = $NamaLengkap;
$_SESSION['password'] = $upass;

header("Location: beranda.php");

?>