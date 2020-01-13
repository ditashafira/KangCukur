<!DOCTYPE html>
<html amp>


<head>  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="icon/logo3.jpg" type="image/x-icon">
  <meta name="description" content="">

  <title>Daftar</title>

  <link rel="stylesheet" href="css/font-awesome.min.css"> 
 <link rel="stylesheet" href="css/allhome.css">
 <link rel="stylesheet" href="css/buatsigninup.css">
<style amp-boilerplate>
body{
  -webkit-animation: -amp-start 8s steps(1,end) 0s 1 normal both;
  -moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;
  animation:-amp-start 8s steps(1,end) 0s 1 normal both
}
@-webkit-keyframes -amp-start{
  from{visibility:hidden}to{visibility:visible}
}
@-moz-keyframes -amp-start{
  from{visibility:hidden}to{visibility:visible}
}
@-ms-keyframes -amp-start{
  from{visibility:hidden}to{visibility:visible}
}
@-o-keyframes -amp-start{
  from{visibility:hidden}to{visibility:visible}
}
@keyframes -amp-start{
  from{visibility:hidden}to{visibility:visible}
}
</style> <!-- ini penting buat animasi navigasi jangan ditaruh css biar lanjayy -->

  <script async  src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
  <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
</head>


<body>
<amp-sidebar id="sidebar" class="cid-rIduZ5xEHs" layout="nodisplay" side="right">
        <div class="builder-sidebar" id="builder-sidebar">
            <button on="tap:sidebar.close" class="close-sidebar">
                <span></span>
                <span></span>
            </button>

            <div class="sidebar mbr-white" data-app-modern-menu="true"><hr>
              <a class="text-primary display-2" href="pelanggan/signinkc.php">Masuk Pelanggan</a><hr>
              <a class="text-primary display-2" href="tukang_cukur/signinkcbar.php">Masuk Tukang Cukur</a><hr>
              <a class="text-primary display-2" href="daftar-pelanggan.php">Daftar Pelanggan</a><hr>
              <a class="text-primary display-2" href="daftar-tukang-cukur.php">Daftar Tukang Cukur</a><hr>
            </div>
        </div>
    </amp-sidebar>
  <section class="menu cid-rIduZ5xEHs" id="menu1-q">
    
    <nav class="headerbar sticky-nav">
      <div class="brand">
          
          <p class="brand-name mbr-fonts-style display-2">KANG CUKUR</p>
      </div>
    </nav>
    
    <button on="tap:sidebar.toggle" class="ampstart-btn hamburger sticky-but">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </button>
</section>    

    <div>
      <div><br><br><br>
      </div>
        <div>
            <amp-img src="icon/signup.jpg" layout="responsive" width="14" height="16" alt="a sample image">
                
            </amp-img>
            
        </div>
    </div>
</section>

<section class="header2 cid-rIdnGxH7WRS" id="header2-f">
  <?php
require('koneksi.php');
// If form submitted, insert values into the database.
if (isset($_POST['email'])){
        // removes backslashes
 $nm_pelanggan = ($_POST['nm_pelanggan']);
 $no_telp = ($_POST['no_telp']);
 $email = ($_POST['email']);
 $password = ($_POST['password']);
 $cekk = mysqli_num_rows(mysqli_query($con,"SELECT * FROM pelanggan WHERE email='$email' or no_telp='$no_telp'"));
        if($cekk > 0){
         echo "<script>window.alert('Gagal Mendaftar, nomor telepon atau email sudah terdaftar.')</script>";
        }
        else{ 
          mysqli_query($con,"INSERT into `pelanggan` (nm_pelanggan, no_telp, email, password) VALUES ('$nm_pelanggan', '$no_telp', '$email', '$password')");
          echo "<script>window.alert('Berhasil Mendaftar')
    window.location='pelanggan/signinkc.php'</script>";
}
    }else{
?>
<br><br><br><br><br><br>
<form class="box" action="" method="post">
  <input type="text" name="nm_pelanggan" placeholder="Nama">
  <input type="text" name="no_telp" placeholder="No Telepon">
  <input type="text" name="email" placeholder="Email">
  <input type="password" name="password" placeholder="Kata Kunci">
<input type="submit" name="submit" value="Daftar">
</form>  
</section>

<section class="social-follow cid-rIdugNkbS4" id="social-follow-p">
    <div class="wrapper">
<br>        
        <div class="icons-list">   
        <a href="http://m.facebook.com/and4ru" target="_blank">
                <img src="icon/iconfb.png" width="25" height="25"></img>
            </a>
<a href="http://www.instagram.com/ditashf/?hl=id" target="_blank">
                <img src="icon/iconig.png" width="25" height="25"></img>
            </a>
</div>
    </div>
</section>

<section class="footer1 cid-rIdooQtecn" id="footer1-j">
    <div class="container">
        <div class="mbr-col-sm-12 align-center mbr-white">
            <p class="mbr-text mbr-fonts-style display-7">
                © 2019 by KANG CUKUR</p>
        </div>
    </div>
</section>
  <?php } ?> 
</body>
</html>