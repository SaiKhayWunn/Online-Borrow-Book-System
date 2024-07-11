  <?php 
  session_start();
  include('connect.php'); 

  if(!isset($_SESSION['admin']))
    {
      header("location:LoginPage.php");
      
      }?>


  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar elegant-color-dark">
      <div class="container-fluid">
          <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <img class="img-fluid" src="img/logo.png" alt="" />
          </a>
      </div>
      <div>
        <a href="logout.php" class="list-group-item active waves-effect waves-light elegant-color-dark"><i class="fas fa-sign-out-alt"></i></a>
      </div>
    </nav>
    <!-- Navbar -->

