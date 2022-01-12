<?php
    include '../controller/Auth.php';
    $ctrl = new Auth();
    //mengaktifkan session
    session_start();
    
    
    // menentukan session
    $code = $ctrl->acakCaptha();

    $_SESSION["code"]= $code;

    
    // membuat gambar dengan menentukan ukuran
   $wh = imagecreatetruecolor(240, 50);

   //warna background captha
   $bgc = imagecolorallocate($wh, 30, 86, 165);

   $fc = imagecolorallocate($wh, 240, 240, 245);
   imagefill($wh, 0, 0, $bgc);
   
   imagestring($wh, 10, 50, 15, $code, $fc);

    //untuk membuat gambar 
    header("Content-type: image/jpg");
    imagepng($wh); 
    imagedestroy($wh);
?>