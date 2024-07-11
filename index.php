<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="shortcut icon" href="img/logo2.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/logo2.png">
  
  <title>Admin home</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="bootstrap/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="bootstrap/css/style.min.css" rel="stylesheet">
 <style>
   
 </style>
</head>

<body class="elegant-color-dark">

  <!--Main Navigation-->
  <header >

    <!-- Navbar -->
      <?php include('nav.php'); ?>
    <!-- Navbar -->

    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed elegant-color-dark">

      <a class="logo-wrapper waves-effect ">
        <img src="img/logo2.png" class="img-fluid" alt="#">
      </a>

      <div class="list-group list-group-flush">
        <a href="index.php" class="list-group-item active mask waves-effect waves-light elegant-color-dark white-text">
          <i class="fas fa-chart-pie mr-3"></i>Home
        </a>

         <a href="BookMajor.php" class="list-group-item list-group-item-action mask waves-effect waves-light elegant-color-dark white-text">
          <i class="fas fa-th-list mr-3"></i>Book Major</a>

        <a href="Categories.php" class="list-group-item list-group-item-action mask waves-effect waves-light elegant-color-dark white-text">
          <i class="fas fa-th-list mr-3"></i>Categories</a>
        
        <a href="Author.php" class="list-group-item list-group-item-action mask waves-effect waves-light elegant-color-dark white-text">
          <i class="fas fa-th-list mr-3"></i>Author</a>
      
      <a href="Addbook.php" class="list-group-item list-group-item-action mask waves-effect waves-light elegant-color-dark white-text">
          <i class="fas fa-th-list mr-3"></i>Book</a>

        <a href="ViewBook.php" class="list-group-item list-group-item-action mask waves-effect waves-light elegant-color-dark white-text">
          <i class="fas fa-th-list mr-3"></i>View Book</a>

      </div>

    </div>
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->

  <br><br>
  <!--Main layout-->
<main class="pt-5 mx-lg-5 View" style="background-image: url('img/Wallpaper6.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
 <!-- Heading -->
      <div class="card mb-4 wow fadeIn elegant-color-dark white-text" >
<br>
        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between ">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="#" target="_blank">Admin</a>
            <span>/</span>
            <span>Home</span>
          </h4>
          <form class="d-flex justify-content-center" method="post" action="searchbook.php">
            <!-- Default input -->
            <input type="search" placeholder="search book..." aria-label="Search" class="form-control" name="ss">
            <button class="btn btn-primary btn-sm my-0 p" type="submit" name="search">
              <i class="fas fa-search"></i>
            </button>

          </form>

        </div>

      </div><br><br>
      <hr class="blue"><br><br>
      <h3 class="white-text">View Reports(Monthly & Most Borrowed Book)</h3>
      <br><br>
      <table align="right" width="50%">
        <tr>
          <td>
            <a href="viewreport.php" class="list-group-item active mask waves-effect waves-light elegant-color-dark white-text">
            <i class="fas fa-chart-pie mr-3"></i> Monthly Borrowers
            </a>
          </td>
          <td>
            <a href="most.php" class="list-group-item active mask waves-effect waves-light elegant-color-dark white-text">
            <i class="fas fa-chart-pie mr-3"></i> Most Borrowed Books
            </a>

          </td>
        </tr>
      </table>
<br><br>
      <hr class="blue"><br><br>
      <h3 class="white-text">View Member Information</h3>
      <br><br>
      <table  width="50%">
        <tr>
          <td>
            <a href="ViewInformation.php" class="list-group-item active mask waves-effect waves-light elegant-color-dark white-text">
            <i class="fas fa-chart-pie mr-3"></i> View Member Information
            </a>
          </td>
        </tr>
      </table>
<br><br><br>

<hr class="blue"><br><br>

<h3 class="white-text">Manage book</h3>
<br>
  
       <!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-md-12 d-flex justify-content-center mb-5 white-text">
 <table align="right" width="75%">
  <tr>
          <td>
    <a href="manageborrow.php" class="list-group-item active mask waves-effect waves-light elegant-color-dark white-text" data-rel="all">
      <i class="fas fa-chart-pie mr-3"></i> Manage Borrow Book </a></td>
      <td>

    <a href="managereturn.php" class="list-group-item active mask waves-effect waves-light elegant-color-dark white-text" data-rel="all">
      <i class="fas fa-chart-pie mr-3"></i> Manage Return Book  </a></td>
      <td>

   <a href="managebookqty.php" class="list-group-item active mask waves-effect waves-light elegant-color-dark white-text" data-rel="all">
      <i class="fas fa-eye "></i> Manage Book Quantity  </a></td>
      <td>

   <a href="cancelborrow.php" class="list-group-item active mask waves-effect waves-light elegant-color-dark white-text" data-rel="all">
      <i class="fas fa-eye"></i> View Cancel Borrow Book  </a>
</td></tr></table>
 

   


  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

<!-- Grid row -->

<br><hr class="blue">
  </div>
  <!-- Grid column -->

</div>
      
      
      <div class="row text-center white-text">
        <div class="col-md-4">
          <a class="btn-floating  accent-1">
            <i class="fas fa-map-marker-alt"></i>
          </a>
          <p>Mandalay</p>
          <p class="mb-md-0">Myanmar</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating accent-1">
            <i class="fas fa-phone"></i>
          </a>
          <p>+95 790416994</p>
          <p class="mb-md-0">Mon - Fri , 8-AM to 9-PM</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating  accent-1">
            <i class="fas fa-envelope"></i>
          </a>
          <p>onlinelibraryskw@gmail.com</p>
          <p class="mb-0">saikhaewunn3344@gmail.com</p>
        </div>
      </div>
<br>
 


<!-- Footer -->
<br><br>
</main>
<br>
<footer class="page-footer font-small">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fab fa-linkedin-in"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1">
          <i class="fab fa-dribbble"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

  <div class=" text-center py-3"><!-- © 2020 Copyright: -->
    <a>--> saikhaewunn3344@gmail.com <--</a>
  </div>
  </div>


</footer>
<!-- Footer -->
  <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
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
    
    $(function() {
var selectedClass = "";
$(".filter").click(function(){
selectedClass = $(this).attr("data-rel");
$("#gallery").fadeTo(100, 0.1);
$("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
setTimeout(function() {
$("."+selectedClass).fadeIn().addClass('animation');
$("#gallery").fadeTo(300, 1);
}, 300);
});
});
  </script>
  
</body>

</html>
