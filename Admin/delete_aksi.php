<?php
    $id_pendaftaran = $_GET['id_pendaftaran'];

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
    $querySQL = "delete FROM pendaftaran WHERE id_pendaftaran = '$id_pendaftaran'";
    //mengeksekusi 
    $hasil = $conn->query( $querySQL);

    //kembali ke indekx.php
    header('location: admin_beranda.php')
?>