<?php
session_start();
$koneksi=new mysqli("localhost","root","","tugas_akhir");
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Admin</title>
    <link rel="apple-touch-icon" href="theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/vendors/css/charts/chartist.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/pages/dashboard-ecommerce.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
  </head>
  <body>
    <section class="basic-inputs">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  <div class="row match-height">

      <div class="col-md-4 offset-4">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">LOGIN USER</h4>
              </div>
              <div class="card-block">
                  <div class="card-body">
                    <form method="post">
					Email
                      <div class="form-group">
                          <input type="text" class="form-control" name="email" >
                      </div>
                      <div class="form-group">
					  Password
                          <input type="password" class="form-control" name="pass" >
                      </div>
                      <button class="btn btn-primary" name="login">Login</button>
                    </form>
                    <?php
                                    if (isset($_POST['login'])) 
                                    {
                                    $ambil = $koneksi->query("SELECT * FROM daftar WHERE email='$_POST[email]' AND password='$_POST[pass]'");
                                    $yangcocok = $ambil->num_rows;
                                    if ($yangcocok==1) 
                                      {
                                      $_SESSION['admin']=$ambil->fetch_assoc();
                                      echo "<div class='alert alert-info'>Login Telah Berhasil, Selamat Datang User..</div>";
                                      echo "<meta http-equiv='refresh' content='1;url=index1.php'>";
                                      }
                                      else
                                      {
                                        echo "<div class='alert alert-danger'>Login gagal, Coba Lagi...</div>";
                                      echo "<meta http-equiv='refresh' content='1;url=loginuser.php'>";
                                      }
                                    }
                                    ?>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
</section>
</body>
<!-- BEGIN VENDOR JS-->
    <script src="theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="theme-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="theme-assets/js/core/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="theme-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>