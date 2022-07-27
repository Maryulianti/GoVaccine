<?php
//menjalankan session
session_start();

// cek sudah login atau belum
if(!$_SESSION['username']){
  header('Location: admin_login.php');

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
     //membuat query
     $querySQL = "SELECT * FROM informasi";
     //mengeksekusi 
     $hasil = $conn->query( $querySQL);
     
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
      <a href="http://localhost/Vaccine/Admin/tambah_info.php"><i class="fas fa-cogs"></i><span>Tambah Informasi</span></a>
   
      <a href="http://localhost/Vaccine/Admin/admin_logout.php" onclick="keluar()"><i class="fas fa-sliders-h" ></i><span>Logout</span></a>
    </div>
    <!--sidebar end-->
 
    <div class="admin">
        <article>
      <h1>DATA INFORMASI</h1>
      <table width='100%' border=0>

          <thead bgcolor='#CCCCCC'>
              <tr>
                  <td>No. Info</td>
                  <td>Nama Info</td>

                  <td>Foto</td>
                  <td>Aksi</td>
                 
  
              </tr>
          </thead>
          <tbody>
          <?php
              if($hasil->num_rows > 0){

              while($row = $hasil->fetch_assoc()){
                  echo '
              
            <tr>
            <tr>
                <td>'.$row['id_info'].'</td>
                <td>'.$row['nama_info'].'</td>
                <td>
                <div class="image-wrapper">
                <img src="../img/'.$row['foto'].'" width="100px" height="90px">
                </td>
            </div>
            <td>
            <a href="delete_info.php?id_info='.$row['id_info'].'&foto='.$row['foto'].'"
            onClick="return confirm(\'Apakah Anda Yakin Ingin Menghapus Data Ini?\')">Delete</a>
            </td> 
        </tr>        
        ';
    }
  }
  ?> 
            </tbody>
        </table>
       
      </article><br/><br/>
      <a class="btn btn-primary btn-xl " href="http://localhost/Vaccine/Admin/tambah_info.php">Tambah Informasi</a>
  </div>

  </body>
</html>
      