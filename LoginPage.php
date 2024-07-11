<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login</title>
   <link rel="shortcut icon" href="img/logo2.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/logo2.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="bootstrap/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="bootstrap/css/style.min.css" rel="stylesheet">
  <style type="text/css">
    html,
body,
header,
.view {
  height: 100%;
}

.rgba-gradient {
  background: -webkit-linear-gradient(45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
  background: -webkit-gradient(linear, 45deg, from(rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%)));
  background: linear-gradient(to 45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
}

.card {
  background-color: rgba(126, 123, 215, 0.2);
}

.md-form label {
  color: #ffffff;
}

h6 {
  line-height: 1.7;
}
</style>

</head>

<html lang="en">
    <body>

        <header>
          <!-- Navbar -->
          <!-- Full Page Intro -->
          <div class="view" style="background-image: url('img/wallpaper11.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-gradient align-items-center">
              <!-- Content -->
              <div class="container">
                <!--Grid row-->
                <div class="row mt-5">
                                   
                  <div class="col-md-6 col-xl-5 mb-4">
                    <form method="post" enctype="multipart/form-data">
                    <!--Form-->
                    <div class="card wow fadeInRight" data-wow-delay="0.3s">
                      <div class="card-body">
                        <!--Header-->
                        <div class="text-center">
                          <h3 class="white-text">
                            <i class="fas fa-user white-text"></i> Login:</h3>
                          <hr class="hr-light">
                        </div>
                        <!--Body-->
                        <div class="md-form white-text">
                          <i class="fa fa-envelope prefix"></i>
                            <input type="email" id="materialFormCardEmailEx" class="form-control white-text" name="email" placeholder="email">
                           
                        </div>
                        <div class="md-form white-text">
                          <i class="fas fa-lock prefix"></i>
                          <input type="password" id="modalLRInput13" class="form-control white-text validate" name="password" placeholder="password">
                      
                        </div>
                        <div class="text-center mt-4">
                           <button class="btn btn-indigowhite-text text-info" type="submit" name="login" value="login" style="font-size: 28px;">LOGIN</button>
                        </div>
                      
                      </div>
                    </div>
                  </form>
                  <?php  

  include ("../Admin/connect.php");
  if(!empty($_REQUEST['login']))
  {
    $email=$_REQUEST['email'];
    $pass=$_REQUEST['password'];
    if($email=='admin@gmail.com' && $pass='admin123')
    {
      $no=1;
      $_SESSION['admin']=$email;
      echo "  <script>
            alert('Login success');
            location.assign('index.php');
          </script>";
    }
    else
    {
      $no=0;
    }
  
if($no==0)
{
echo "  <script>
    alert('Email and Password do not match. Please try again!!!');
    </script>";

if (!isset($_SESSION['time']))
  $_SESSION['time']=1;
else
  $_SESSION['time']+=1;

if($_SESSION['time']<=3)
echo "  <script>
    alert('you fail 3-time, 3-min will open');

    document.getElementById('email').disabled=true;
    document.getElementById('pass').disabled=true;
    document.getElementById('login').disabled=true;

    setTimeout(open,3000);
    function open()
    {
      document.getElementById('email').disabled=false;
      document.getElementById('pass').disabled=false;
      document.getElementById('login').disabled=false;
    }
  </script>";
  unset($_SESSION['time']);
}
  }

?>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>
              <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
          </div>
          <!-- Full Page Intro -->
        </header>
        <!-- Main navigation -->
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="bootstrap/js/mdb.min.js"></script>
  <!-- Initializations -->

  <script>
      new WOW().init();
  </script>
</body>

</html>
  
  