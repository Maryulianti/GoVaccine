<?php
    $id_info = $_GET['id_info'];
    $foto = $_GET['foto'];

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
    //menghapus foto
    unlink('../img/'.$foto);

    //membuat query
    $querySQL = "delete FROM informasi WHERE id_info = '$id_info'";
    //mengeksekusi 
    $hasil = $conn->query( $querySQL);

    //kembali ke indekx.php
    header('location: admin_informasi.php')
?>