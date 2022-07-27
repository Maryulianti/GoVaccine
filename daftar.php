<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="http://localhost/Vaccine/assets/style.css">
    </head>
   
    <body class="corona">
        <div class="login">
          <h1>Daftar Akun</h1>
            <form action="daftar_aksi.php" method="POST" name="form1" enctype="multipart/form-data">
                <label>Email</label><br>
                <input type="text" name="email" placeholder="" required><br>
                <label>Nama Lengkap : </label><br>
                <input type="text" name="nama" placeholder="" required><br>

                <label>Username :</label><br>
                <input type="text" name="username" placeholder="Masukkan Username" required><br>
                <label>Password: </label><br>
                <input type="password" name="password" placeholder="Masukkan password" required><br>
                <br/>
                <a class="akun" href="login.php">Sudah ada akun? Log in</a>
                <br/><br/>
                <button>Daftar</button>
            </form>
        </div>     
    </body>
</html>