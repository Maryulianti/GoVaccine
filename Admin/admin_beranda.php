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
    $dbname = "Polihasnur";

    // Create connection db
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection db
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
      $img_tmp = $_FILES['Foto']['tmp_name'];
      $img_name = $_FILES['foto']['name'];
      //menyimpan gambar secara permanen
      move_uploaded_file($img_tmp, 'foto/'.$img_name);

//membuat query
$querySQL = "SELECT * FROM admin wherw Foto='$img_name'";
//mengeksekusi 

$hasil = $conn->query( $querySQL);

     
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POLIHASNUR - PENILAIAN MAHASISWA</title>
    <link rel="stylesheet" href="http://localhost/polihasnur/assets/bootstrap.css">
        <link rel="stylesheet" href="http://localhost/polihasnur/assets/style.css">
        <script src="http://localhost/polihasnur/assets/javascriptsaya.js"></script>
        <!-- jQuery library -->
        <script src="http://localhost/polihasnur/assets/jquery.js"></script>

        <!-- Popper JS -->
        <script src="http://localhost/polihasnur/assets/popper.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://localhost/polihasnur/assets/bootstrap.js"></script>
  </head>
  <body>
  <header class="judul">
      
      <div class="left_area">
        <h1>POLI <span>HASNUR</span></h1>
      </div>

    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="http://localhost/Polihasnur/img/<?php echo ''.$row['Foto']'';?>" class="profile_image" alt="">
       <h5><?php echo $_SESSION ['Username']; ?></h5>
      </div>
      <a href="http://localhost/Polihasnur/admin_beranda.php"><i class="fas fa-desktop"></i><span>Data Mahasiswa</span></a>
      <a href="http://localhost/Polihasnur/admin_nilai.php"><i class="fas fa-cogs"></i><span>Data Nilai</span></a>
   
      <a href="http://localhost/Polihasnur/admin_logout.php" onclick="keluar()"><i class="fas fa-sliders-h" ></i><span>Logout</span></a>
    </div>
    <!--sidebar end-->
 
    <div class="admin">
        <article>
      <h1>DATA PENDAFTARAN</h1>
      <table width='100%' border=0>

          <thead bgcolor='#CCCCCC'>
              <tr>
                  <td>Id</td>
                  <td>NIM</td>
                  <td>Nama</td>
                  <td>Program Studi</td>
                  <td>NO HP</td>
  
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
                <td>'.$row['id_mhs'].'</td>
                <td>'.$row['NIM'].'</td>
                <td>'.$row['Nama'].'</td>
                <td>'.$row['Program_Studi'].'</td> 
                <td>'.$row['No_Hp'].'</td>
            </td>
            <td>
                <a href="detail.php?id_mhs='.$row['id_mhs'].'"> detail</a> |
                <a href="delete_aksi.php?id_mhs='.$row['id_mhs'].'"
                onClick="return confirm(\'Apakah Anda Yakin Ingin Menghapus Data Ini?\')">Delete</a>
                </td>
        </tr>
                ';
                    }
                  }
                  ?>
            </tbody>
        </table>

      </article>
  </div>

  </body>
</html>
      