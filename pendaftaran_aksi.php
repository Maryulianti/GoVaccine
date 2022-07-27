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
$NIK= $_POST['NIK'];
$Nama_Lengkap= $_POST['nama'];
$Email = $_POST['email'];
$Gender = $_POST['jenis_kelamin'];
$Berat_Badan = $_POST['berat_badan'];
$Tanggal_Lahir = $_POST['Tanggal_lahir'];
$Agama =$_POST['agama'];
$Pekerjaan =$_POST['Pekerjaan'];
$Alamat = $_POST['Alamat'];
$Pilih_Tanggal = $_POST['Pilih_Tanggal'];
$Riwayat = $_POST['Riwayat_Penyakit'];
$Alamat_saat_ini = $_POST['Alamat_saat_ini'];



// membuat query
$querySQL = "INSERT INTO pendaftaran (NIK, Nama_Lengkap, Email, Jenis_Kelamin, 
                                        Tanggal_lahir, Agama, Berat_badan, Pekerjaan, 
                                        Alamat, Pilih_Tanggal,
                                        Riwayat_Penyakit, Alamat_Saat_ini)
                    VALUES('$NIK', '$Nama_Lengkap','$Email',
                            '$Gender', '$Tanggal_Lahir','$Agama', 
                            '$Berat_Badan','$Pekerjaan', '$Alamat',
                            '$Pilih_Tanggal','$Riwayat', '$Alamat_saat_ini')";
//mengeksekusi 
$hasil = $conn->query( $querySQL);

// //kembali ke indekx.php
header('location: beranda.php')

?>