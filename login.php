<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="http://localhost/Vaccine/assets/style.css">
    </head>
   
    <body class="corona">
        <div class="login">
          <h1>Login</h1>
            <form action="login_aksi.php" method="POST" name="form2" enctype="multipart/form-data">
                <label>Username :</label><br>
                <input type="text" name="username" placeholder="Masukkan Username" required><br>
                <label>Password :</label><br>
                <input type="password" name="password" placeholder="Masukkan password" required><br>
                <br/>
                <a class="akun" href="daftar.php">Belum punya akun? Daftar</a>
                <br/><br/>
                <button>Log in</button>
            </form>
        </div>     
    </body>
</html>