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



          
         
          <div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
              <!--Content-->
              <div class="modal-content text-center">
                <!--Header-->
                <div class="modal-header d-flex justify-content-center">
                  <p class="heading">Are you sure?</p>
                </div>

                <!--Body-->
                <div class="modal-body">
                  <i class="fas fa-sign-out-alt fa-4x  animated rotateIn"></i>
                </div>
                <!--Footer-->
                <div class="modal-footer flex-center">
                  <a href="LoginPage.php" class="btn  btn-outline-danger">Yes</a>
                  <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">No</a>
                </div>
              </div>
              <!--/.Content-->
            </div>
          </div>
<!--Modal: modalConfirmDelete-->

      </div>

    </div>
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->

  <br><br>
  <!--Main layout-->
  <main class="pt-5 mx-lg-5 view "style="background-image: url('img/wallpaper11.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">

      <div class="card mb-4 wow fadeIn elegant-color-dark white-text" >

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between ">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="#" target="_blank">Admin</a>
            <span>/</span>
            <span>Home</span>
          </h4>

          <form class="d-flex justify-content-center">
            <!-- Default input -->
            <input type="search" placeholder="search book..." aria-label="Search" class="form-control">
            <button class="btn btn-primary btn-sm my-0 p" type="submit">
              <i class="fas fa-search"></i>
            </button>

          </form>

        </div>

      </div>
      <hr class="blue">
      

<?php 
$marr=array();
$marr=['January','February','March','April','May','June','July','August','September','October','November','December']; ?>

<!-- Grid row -->
<div class="gallery white-text" id="gallery">
  <!-- Grid column -->
  <div class="mb-3 pics animation 1">
    <h3>View Monthly Borrower report</h3> <br><br>

<?php if(isset($_POST['view']))
{ 

$fm=$_POST['frommoth'];
$tm=$_POST['tomoth'];
$y=$_POST['year'];
?>
 <form method="post" action="">
              <div class="row"> 
                <div class="form-group col-md-4">
                    <label> Choose From Month</label>
                    <select name="frommoth" class="form-control"> 
                     
                    <?php for($i=0;$i<=11;$i++)
                    {
                    if($fm==$i)
                    {
                    ?>
                    <option value="<?php echo $i; ?>" selected> <?php echo $marr[$i]; ?> </option>
                  <?php  }
                  else{ ?>

                       <option value="<?php echo $i; ?>"> <?php echo $marr[$i]; ?> </option>
                    <?php }
                    } ?>
                    </select>
                </div>

                 <div class="form-group col-md-2">
                    <label> Choose To Month</label>
                    <select name="tomoth" class="form-control"> 
                      
                    <?php for($i=0;$i<=11;$i++)
                    {
                    if($tm==$i)
                    {
                    ?>
                    <option value="<?php echo $i; ?>" selected> <?php echo $marr[$i]; ?> </option>
                  <?php  }
                  else{ ?>

                       <option value="<?php echo $i; ?>"> <?php echo $marr[$i]; ?> </option>
                    <?php }
                    } ?>
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label> Year </label>
                  <input type="number" name="year" class="form-control" value="<?php echo $y; ?>">
                </div>
                <div class="form-group col-md-2">
                    <label> View</label>
                    <input type="submit" name="view" class="form-control" class="btn btn-success" value="View">
                </div>
              </div>
 </form>


        <table class="table white-text">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Member Name</th>
              <th scope="col">Address</th>
              <th scope="col">Phone</th>

            </tr>
          </thead>
          <tbody>

<?php 
$i=1;
$sel=mysqli_query($con,"SELECT m.*
FROM member m,borrowdetail bd,borrow b WHERE b.borrowID=bd.borrowID AND m.memberID=b.memberID AND  month(b.borrowDate) BETWEEN '$fm' AND '$tm' AND YEAR(b.borrowDate)='$y' GROUP BY MONTH(b.borrowDate) ");
while($r=mysqli_fetch_assoc($sel))
  { 
    ?>
            <tr>
              
              <th scope="row"><?php echo $i;$i++; ?></th>
              <td><?php echo $r['MemberName']; ?></td>
              <td><?php echo $r['Address']; ?></td>
              <td><?php echo $r['phone']; ?></td>
            </tr>
    <?php } ?> 
          </tbody>
        </table>
        </div>
<?php }
else{ ?>
  <div class="mb-3 pics animation 1">
  <form method="post" action="">
              <div class="row"> 
                <div class="form-group col-md-4">
                    <label> Choose From Month</label>
                    <select name="frommoth" class="form-control"> 
                     
                    <?php for($i=0;$i<=11;$i++)
                    {
                    
                    ?>
                    <option value="<?php echo $i; ?>"> <?php echo $marr[$i]; ?> </option>
                  <?php  }
                  ?>

                      
                    </select>
                </div>

                 <div class="form-group col-md-2">
                    <label> Choose To Month</label>
                    <select name="tomoth" class="form-control"> 
                      
                    <?php for($i=0;$i<=11;$i++)
                    {
                  
                    ?>
                    <option value="<?php echo $i; ?>"> <?php echo $marr[$i]; ?> </option>
                  <?php  } ?>
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label> Year </label>
                  <input type="number" name="year" class="form-control" value="<?php echo $y; ?>">
                </div>
                <div class="form-group col-md-2">
                    <label> View</label>
                    <input type="submit" name="view" class="form-control" class="btn btn-success" value="View">
                </div>
              </div>
 </form>
</div>
<?php } ?>


        <br><br><br><hr class="blue"><br>

  </div>
  <!-- Grid column -->

</div>
      
      <br>
      <div class="row text-center white-text">
        <div class="col-md-4">
          <a class="btn-floating  accent-1">
            <i class="fas fa-map-marker-alt"></i>
          </a>
          <p>New York, 94126</p>
          <p class="mb-md-0">United States</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating accent-1">
            <i class="fas fa-phone"></i>
          </a>
          <p>+ 01 234 567 89</p>
          <p class="mb-md-0">Mon - Fri, 8:00-22:00</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating  accent-1">
            <i class="fas fa-envelope"></i>
          </a>
          <p>info@gmail.com</p>
          <p class="mb-0">sale@gmail.com</p>
        </div>
      </div>

 
</main>

<!-- Footer -->
<br><br><br>
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



<!-- 
          <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modalConfirmDelete">Log Out</button> -->
