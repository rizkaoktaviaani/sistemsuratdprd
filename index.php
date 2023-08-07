<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login  | Sistem Informasi Pengelolaan Surat Masuk dan Surat Keluar</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
   <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
    <form action="proses_login.php" method="post">
    <div class="container-fluid">
        <div class="container">
            <div class="col-xl-10 col-lg-11 mx-auto login-container">
                <div class="row">
                   
                    <div class="col-lg-5 col-md-6 no-padding">
                        <div class="login-box">
                            <h5><b>Selamat Datang</b></h5>
                            <h6 align="center">Silahkan Login</h6>
                            <hr>

                            <div class="login-row row no-margin">
                                <label for=""><i class="fas fa-envelope"></i> Username</label>
                                <input type="text" class="form-control" placeholder="Masukkan Username Anda" name="username" required= "required" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                             <div class="login-row row no-margin">
                                <label for=""><i class="fas fa-unlock-alt"></i> Password</label>
                               <input type="password" class="form-control" placeholder="Masukkan Password Anda" name= "password" required= "required" aria-label="Password" aria-describedby="basic-addon1">
                                    
                            </div>

                             <div class="login-row btnroo row no-margin">
                               <button type="submit" name="login" class="btn btn-success btn-sm"> Login</button>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-lg-7 col-md-6 img-box">
                     <h4 align="center"><font color="#2E8B57" face="Arial"><b>Sistem Informasi Pengelolaan Surat Masuk dan Surat Keluar
                     </b></font></h4>
                        <center>
                            <img src="assets/images/logo.png" height="300" alt="">
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>

</body>
<style>
    h4{
        
    }
</style>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/scrip.js"></script>

</html>