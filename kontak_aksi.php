<?php

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

//tanggkap input user
$email=$_POST['email'];
$nama= $_POST['nama'];
$komentar = $_POST['komentar'];


//membuat query
$querySQL = "INSERT INTO komentar (nama_lengkap, email, komentar)
                    VALUE ('$nama', '$email','$komentar')";
//mengeksekusi 
$hasil = $conn->query( $querySQL);

//kembali ke indekx.php
header('location: kontak.php')

?>