<?php
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
    //membuat query
    // $querySQL = "SELECT * FROM pendaftaran";
    // //mengeksekusi 

    // $hasil = $conn->query( $querySQL);
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Go Vaccine - Silakan Mendaftar Vaksin</title>
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

    <div class="content1">
      <div class="daftar">
            <h3>Form Pendaftaran Vaksin Covid-19 </h3>

                        <div>
                            <h5>Pendaftaran Vaksin</h5> 
                        </div></br>
                        
                    <form action="pendaftaran_aksi.php" method="POST" enctype='multipart/form-data'>
                        <div>
                            <label for="NIK">Nomor Induk Keluarga (NIK):</label></br>
                            <input  class="form-control" type="text" name="NIK" class="form-control" placeholder="masukkan NIK anda" required></br>
                        </div>
                        <div>
                            <label for="Nama_Lengkap">Nama Lengkap:</label></br>
                            <input  class="form-control" type="text" name="nama" class="form-control" placeholder="masukkan nama lengkap anda" required></br>
                        </div>
                        <div>
                            <label for="Email">Email:</label></br>
                            <input  class="form-control" type="text" name="email" class="form-control" placeholder="Masukan Email Aktif"required></br>
                        </div>
                        <div>
                            <label for="Gender">Jenis Kelamin:</label></br>
                            <select class="form-control" name="jenis_kelamin">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select></br>
                        </div>
                        <div>
                            <label for="Berat badan">Berat Badan:</label></br>
                            <input  class="form-control" type="text" name="berat_badan" class="form-control" placeholder="masukkan berat badan anda"required></br>
                        </div>

                        <div>
                            <label for="Tanggal_Lahir">Tanggal Lahir:</label></br>
                            <input  class="form-control" type="date" name="Tanggal_lahir" class="form-control" placeholder="masuk tanggal lahir anda" required></br>
                        </div>
                       
                        <div>
                            <label for="Agama">Agama:</label></br>
                            <select class="form-control" name="agama" >
                                <option value="">--Pilih--</option>
                                <option value="Islam">Islam</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                            </select>
                        </div> 
                        <div>
                            <label for="Pekerjaan">Pekerjaan:</label></br>
                            <input  class="form-control" type="text" name="Pekerjaan" class="form-control" placeholder="status anda"required></br>
                        </div>
                        <div>
                            <label>Alamat:</label><br/>
                            <textarea name="Alamat" rows="3" cols="40"></textarea><br/>
                        </div><br/>
                        <div>
                            <label for="Pilih_Tanggal ">Pilih Tanggal:</label></br>
                            <input  class="form-control" type="date" name="Pilih_Tanggal" class="form-control" placeholder="dd/mm/yyyy"required></br>
                        </div>
                        <div>
                            <label for="Riwayat">Riwayat Penyakit:</label></br>
                            <input  class="form-control" type="text" name="Riwayat_Penyakit" class="form-control" placeholder="isi riwayat penyakit anda"required></br>
                        </div>
                        
                        <div>
                            <label>Alamat saat ini:</label><br/>
                            <textarea name="Alamat_saat_ini" rows="3" cols="40"></textarea><br/>
                        </div><br/>
                       
                        <h5><input  type="submit"  onclick="window.print()" name="Kirim"></h5>
                    </form>
                    </div>
         </div>
    </body>
</html>