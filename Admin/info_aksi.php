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
$info = $_POST['info'];


// //tangkap gambar
$img_tmp = $_FILES['fotoinfo']['tmp_name'];
$img_name = $_FILES['fotoinfo']['name'];

//menyimpan gambar secara permanen
move_uploaded_file($img_tmp, '../img/'.$img_name);

//membuat query
$querySQL = "INSERT INTO informasi(nama_info, foto)
                            VALUE('$info', '$img_name')";
// mengeksekusi 
$hasil = $conn->query( $querySQL);

//kembali ke indekx.php
header('location: admin_informasi.php')

?>