<?php
//menjalankan session
session_start();

// cek sudah login atau belum
if(!$_SESSION['username']){
  header('Location: login.php');

}
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
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GO VACCINE - PENDAFTARAN VAKSIN COVID-19</title>
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
      <div class="logout_btn"> <marquee width="500" height="40">SUDAH VAKSIN?, TETAP JAGA JARAK DAN PAKAI MASKERMU KARENA COVID-19 ITU NYATA</marquee></div>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="http://localhost/Vaccine/img/user.png" class="profile_image" alt="">
        <h5><?php echo $_SESSION ['username']; ?></h5>
      </div>
      <a href="beranda.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="informasi.php"><i class="fas fa-cogs"></i><span>Informasi</span></a>
      <a href="kontak.php"><i class="fas fa-sliders-h"></i><span>Kontak</span></a>
      <a href="logout.php" onclick="keluar()"><i class="fas fa-sliders-h" ></i><span>Logout</span></a>
    </div>
    <!--sidebar end-->
    <div class="content gambar">
      <div class="card">
                <h4 class="text-black font-weight-bold"> Selamat Datang di Pendaftaran Vaksin </h4>
                <p>Silakan melakukan pendaftaran dengan menekan tombol dibawah</p><br/>

                <div class="input_btn">
                    <button><a href="pendaftaran.php" style="float : right" >Daftar</a></button>
                  </div>
               </div>
         </div>
  </body>
</html>
      