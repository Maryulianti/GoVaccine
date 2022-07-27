<?php
session_start();

// cek sudah login atau belum
if(!$_SESSION['username']){
  header('Location: login.php');

}

    //inisialisasa variable koneksi
    $servername = "localhost";
    $username = "root";
    $password = "12345";
    $dbname = "Govaccine";
    
    // pembuatan koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // pengecekkan koneksi
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    //membuat query
    $querySQL = "SELECT * FROM informasi";
    //mengeksekusi 
    $hasil = $conn->query( $querySQL);
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Go Vaccine - Informasi Seputar Vaksin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
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
    <header class="judul">
    <div class="left_area">
        <h1>GO <span>VACCINE</span></h1>
      </div>

      <div class="right_area">
      <div class="logout_btn"> <marquee width="500" height="40">SUDAH VAKSIN?, TETAP JAGA JARAK DAN PAKAI MASKERMU KARENA COVID-19 ITU NYATA</marquee></div>
      </div>
      
    </header>


    <div class="sidebar">
      <div class="profile_info">
        <img src="http://localhost/Vaccine/img/user.png" class="profile_image" alt="">
        <h5><?php echo $_SESSION ['username']; ?></h5>
      </div>
      <a href="beranda.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="informasi.php"><i class="fas fa-cogs"></i><span>Informasi</span></a>
      <a href="kontak.php"><i class="fas fa-sliders-h"></i><span>Kontak</span></a>
      <a href="logout.php"><i class="fas fa-sliders-h" onclick="keluar()"></i><span>Logout</span></a>
    </div>

    <div class="content1" >
      <div class="info">
            <h3>Informasi Seputar Pendaftaran Vaksin </h3>
                  <div class="row">     
            <?php
                    if ($hasil->num_rows > 0){

                    while($row = $hasil->fetch_assoc()){
                       echo '
                      
                        <div class="col-sm-4 ">
                        <a target="_blank" href="img/'.$row['foto'].'">
                        <img src="img/'.$row['foto'].'" width="280" height="290" ></a>
                        <div class="desc">'.$row['nama_info'].'</div>
                        </div>
                       
                      
                    ';
                    }
                 }      
                ?>

          
         </div>
            
         </div>
    </div>
    </body>
</html>