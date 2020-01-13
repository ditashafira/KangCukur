<?php 
session_start();
if ($_SESSION == null){
  header( 'Location: ../index.php' );
}
include '../koneksi.php';
//session_destroy();
$id_pelanggan = $_SESSION['id'];
if (isset($_POST['nm_pelanggan'])){
  //ini variable post
  $nm_pelanggan = $_POST['nm_pelanggan'];
  $no_telp = $_POST['no_telp'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  //update query
  $con->query("Update pelanggan 
    Set nm_pelanggan = '$nm_pelanggan', no_telp = '$no_telp' , email = '$email' , password = '$password'
    Where id_pelanggan = $id_pelanggan");
  }
?>
<!DOCTYPE html>
<html>


<head>  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="icon/logo3.jpg" type="image/x-icon">
  <meta name="description" content="">

  <title>Ubah Profile</title>

  <link rel="stylesheet" href="../css/font-awesome.min.css"> 
  <link rel="stylesheet" href="../css/allhome.css">
  <link rel="stylesheet" href="../css/buatsigninup.css">
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
              <a class="text-primary display-2" href="customer.php">Halaman Utama</a><hr>
              <a class="text-primary display-2" href="settingup.php">Pengaturan</a><hr>
              <a class="text-primary display-2" href="../logout.php">Keluar</a><hr>
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
<section>
      <div>
      <div><br><br><br>
      </div>
        <div>
<amp-img src="../icon/ubahprofil.jpg" layout="responsive" width="14" height="2" alt="a sample image">     
            </amp-img>           
        </div>
    </div>
</section>
<meta name="viewport" content="width=device-width, initial-scale=1">
<section class="header2 cid-rIdnGxH7WRS" id="header2-f">
 
  <?php  
  $sql_profil = mysqli_query($con,"SELECT * FROM pelanggan WHERE id_pelanggan = $id_pelanggan");
  while($data = mysqli_fetch_array($sql_profil)){
  ?>
<br><br><br><br><br><br><br>
<form class="box" action="" method="post">
  <input type="text" name="nm_pelanggan" value="<?php echo $data['nm_pelanggan']; ?>" placeholder="Nama">
  <input type="text" name="no_telp" value="<?php echo $data['no_telp']; ?>" placeholder="No Telepon">
  <input type="text" name="email" value="<?php echo $data['email']; ?>" placeholder="Email">
  <input type="text" name="password" value="<?php echo $data['password']; ?>" placeholder="Kata Kunci">
<input type="submit" name="submit" value="Simpan">

</form>
<?php } ?>
<br><br>
</section>

<section class="social-follow cid-rIdugNkbS4" id="social-follow-p">
    <div class="wrapper">
<br>        
        <div class="icons-list">   
        <a href="http://m.facebook.com/and4ru" target="_blank">
                <img src="../icon/iconfb.png" width="25" height="25"></img>
            </a>
<a href="http://www.instagram.com/ditashf/?hl=id" target="_blank">
                <img src="../icon/iconig.png" width="25" height="25"></img>
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
</body>
</html>
