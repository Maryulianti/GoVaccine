<?php
//menjalankan session
session_start();

// cek sudah login atau belum
if(!$_SESSION['username']){
  header('Location: admin_login.php');

}?>
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
      <a href="http://localhost/Vaccine/Admin/admin_beranda.php"><i class="fas fa-desktop"></i><span>Data Pendaftaran</span></a>
      <a href="http://localhost/Vaccine/Admin/admin_informasi.php"><i class="fas fa-cogs"></i><span>Tambah Informasi</span></a>
   
      <a href="http://localhost/Vaccine/Admin/admin_logout.php" onclick="keluar()"><i class="fas fa-sliders-h" ></i><span>Logout</span></a>
   </div>
    <!--sidebar end-->
 
    <div class="admin">
    <article>
    <form action="http://localhost/Vaccine/Admin/info_aksi.php" method="post" name="form1" enctype="multipart/form-data">
        <div>
        <label for="Nama info">Nama Info:</label></br>
        <input  class="form-control" type="text" name="info" class="form-control" placeholder="Nama Info" required></br>
        </div>

        <div>
        <label>foto:</label><br/>
        <input type="file" name="fotoinfo" id="fileToUpload">
        <br/><br/>
        <input type="submit" name="submit" value="Add">
    </div><br/>
    </form>

        </article>

    </div>

</body>
</html>