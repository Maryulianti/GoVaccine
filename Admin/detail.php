<?php
//menjalankan session
session_start();

// cek sudah login atau belum
if(!$_SESSION['username']){
  header('Location: admin_login.php');

}
    //tangkap id_mhs yang di edit
    $id_pendaftaran = $_GET['id_pendaftaran'];

    // echo $id_pendaftaran;
    
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
    $querySQL = "SELECT * FROM pendaftaran where id_pendaftaran = '$id_pendaftaran'";
    //mengeksekusi 
    $hasil = $conn->query( $querySQL);

    //uraian data mhs
    $row = $hasil->fetch_assoc();

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pendaftar</title>
    <link rel="stylesheet" href="http://localhost/Vaccine/assets/bootstrap.css">
        <link rel="stylesheet" href="http://localhost/Vaccine/assets/style.css">
        <script src="http://localhost/Vaccine/assets/javascriptsaya.js"></script>
        <!-- jQuery library -->
        <script src="http://localhost/Vaccine/assets/jquery.js"></script>

        <!-- Popper JS -->
        <script src="http://localhost/Vaccine/assets/popper.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://localhost/Vaccine/assets/bootstrap.js"></script>
  </head>
    <body>
 <!--header area start-->
 <header class="judul">
      
      <div class="left_area">
        <h1>GO <span>VACCINE</span></h1>
      </div>
    
      <div class="right_area">
      <div class="logout_btn"> <marquee width="300" height="40">SELAMAT DATANG ADMIN</marquee></div>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="http://localhost/Vaccine/img/user.png" class="profile_image" alt="">
       <h5>ADMIN : <?php echo $_SESSION ['username']; ?></h5>
      </div>
      </div>
    <!--sidebar end-->
 
    <div class="admin">
        <article>
      <table width='100%' border=0>
        <header>
            <h1>Pendaftar Vaccine</h1>
            <nav>
                <a href="admin_beranda.php">Kebali Ke Halaman Home</a>
            </nav>
        </header>

        <article>
            <p>Detail Pendaftar</p>
            <br/>

            <h1> <?php echo $row['Nama_Lengkap']?></h1>
            <div>
                <p>
                NIK: <?php echo $row['NIK']?>
                </p>
                <p>
                Nama_Lengkap: <?php echo $row['Nama_Lengkap']?>
                </p>
                <p>
                    Email: <?php echo $row['Email']?>
                </p>
                <p>
                    Agama: <?php echo $row['Agama']?>
                </p>
                <p>
                    Alamat: <?php echo $row['Alamat']?>
                </p>
            </div>

        </article>
    </body>
</html>
