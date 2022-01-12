
<?php
    include '../controller/Auth.php';
    $ctrl = new Auth();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Template</title>
    <link rel="stylesheet" href="../layout/Login/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../layout/Login/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../layout/Login/assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="../layout/Login/assets/css/styles.css">     
</head>

<body>
    <section class="login-dark">

        <form method="post" action="<?php echo $ctrl->Login() ?>">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <!--notifikasi-->
                <?php if (isset($_GET['signout'])) {?>
                    <div class="alert alert-success">
                        <small>Anda Berhasil Logout</small>
                    </div>
                <?php } ?>
            </div>
        </div>
            <h2 class="visually-hidden">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline">
            </i></div>
            <div class="form-group"><input class="form-control" type="text" name="user" placeholder="Username"></div>
            <div class="form-group"><input class="form-control" type="password" name="pass" placeholder="Password"></div>
           <div  class="form-group" ><img src="captcha.php" alt="gambar" /></div>
           <div class="form-group"><input class="form-control" type="text" name="nilaiCaptcha" placeholder="Isi Dengan Benar..."></div>
           <button class="btn btn-primary d-block w-100" type="submit" name="login">Log In</button>
            <div class="form-group">     
                <div class="kotak">		
                    <?php 
                    if(isset($_GET['pesan'])){
                        if($_GET['pesan'] == "salah"){
                            echo "<p>Captcha tidak sesuai.</p>";
                        }
                    }
                    ?>
                    
                    
                 </div>
            </div> 
        </form>     
    </section>      

          

              
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>


</body>

</html>