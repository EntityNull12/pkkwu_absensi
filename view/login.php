  <!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="./lib/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./lib/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./lib/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./lib/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="font-family: 'Poppins';">

    <div class="container">
      <form class="form-signin" method="post" action="model/proses.php" autocomplete="off">
        <h2 class="form-signin-heading">Please sign in</h2>
        <!-- <div class='alert alert-danger'><strong>Info : Telah dilakukan pembersihan User, untuk dapat masuk silahkan hubungi <a href="http://fb.me/rizal.ofdraw" title="Hubungi Admin">Admin</a>.<br />Mohon maaf atas ketidaknyamanan ini, Terimakasih.</strong></div>
        <div class='alert alert-success'>
        <strong>Untuk sekedar melihat-lihat Anda dapat menggunakan akun sementara :<br />
        User : siswa@siswa.siswa <br />
        Pass : siswa
        </strong>
        </div> -->
        <?php 
            if (isset($_GET['log'])) {
                if ($_GET['log']==2) {
                    echo "<div class='alert alert-danger'><strong>Periksa kembali email & katasandi Anda!</strong></div>";
                }
            }
         ?>
        <div class="box1" style="margin-top: 30px;">
          <div class="user-box position-relative" style="margin-bottom: 20px;">
            <input type="text" name="email" id="inputEmail" class="form-control border border-bottom"  required=""  autofocus oninvalid="this.setCustomValidity('Ini wajib di isi! / isi format dengan benar!')" oninput="this.setCustomValidity('')">
            <label for="inputEmail" class="sr-only form-label">Username</label>
          </div>
          <div class="user-box position-relative">
            <input type="password" name="pwd" id="inputPassword" class="form-control rounded" required="" oninvalid="this.setCustomValidity('Ini wajib di isi!')" oninput="this.setCustomValidity('')">
            <label for="inputPassword" class="sr-only form-label">Password</label>
          </div>
        </div>
        <input class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="Sign-in">
        
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./lib/ie10-viewport-bug-workaround.js"></script>
  

</body></html>