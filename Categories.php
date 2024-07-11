<?php include('connect.php'); ?>
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

  <link href="bootstrap/css/addons/datatables.min.css" rel="stylesheet">
  
 
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
        <a href="index.php" class="list-group-item list-group-item-action mask waves-effect waves-light elegant-color-dark white-text">
          <i class="fas fa-chart-pie mr-3"></i>Home
        </a>

        <a href="BookMajor.php" class="list-group-item list-group-item-action mask waves-effect waves-light elegant-color-dark white-text">
          <i class="fas fa-th-list mr-3"></i>Book Major</a>

        <a href="Categories.php" class="list-group-item active mask waves-effect waves-light elegant-color-dark white-text">
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


<br>
<main class="pt-5 mx-lg-5 view "style="background-image: url('img/wallpaper44.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
  <br>
  
    <!-- Material form subscription -->
    <!--Card content-->
    <div class="card-body px-lg-5">
       <h3 class="white-text">Categories</h3>
       <hr class="white">
       <button type="button" class="btn btn-primary center" data-toggle="modal" data-target="#modalPush">ADD Categories</button>
    </div>

<!--Modal: modalPush-->
<div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Be always up to date</p>
      </div>

  <form action="AdminCodes.php" method="post">
      <div class="modal-body">

        <i class="fas fa-bell fa-4x animated rotateIn mb-4"></i>

       <input type="text" id="inputName1" class="form-control validate" name="CatorigiesName" placeholder="Catorigies Name">
        <label data-error="wrong" data-success="right" for="inputName1"> </label>

        <select class="form-control" name="MajorName">
        <?php  
              $sql="SELECT * FROM bookMajor";
              $bookMajor=mysqli_query($con,$sql);
              while ($record=mysqli_fetch_assoc($bookMajor)) 
              {
            ?>
        <option value="<?php echo $record['MajorID'];?>">
                <?php echo $record["MajorName"]; ?>
        </option>
        <?php
              }
        ?>
      </select>

      </div>

      <div class="modal-footer d-flex justify-content-center buttonAddFormWrapper">
            <button class="btn btn-outline-primary btn-block buttonAdd" type="submit" value="addcategories" name="addcategories">Add Categories
              <i class="fas fa-paper-plane-o ml-1"></i>
            </button>
        </div>
    </div>
  </form>
    <!--/.Content-->
  </div>
</div>




  <!-- Edit Modal -->
<div class="modal fade" id="CatEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
</div>

<div class="card-body px-lg-5">
  <hr class="white">
</div>
<!--Modal: modalPush-->
<div class="table-responsive-sm white-text">
 <table id="dtBasicExample" class="table table-striped table-bordered white-text" cellspacing="0" width="100%">
  <thead>
   <tr>
       <th><span class="fas fa-sort-numeric-down"> NO</span>
      </th>
      <th><span class="fas fa-sort-numeric-down"> Major Name</span> 
      <th><span class="fas fa-sort-numeric-down">Category Name</span> 
      </th>
      <th><span class="far fa-edit"> Edit</span>
      </th>
      <th ><span class="fas fa-trash"> Delete</span>
      </th>
    </tr>
  </thead>
 <?php 
$select ="SELECT * FROM Catorigies c,bookMajor b WHERE b.MajorID=c.MajorID order by CatorigiesID desc";
$rest = mysqli_query($con,$select);
$i=1;
while ($row=mysqli_fetch_assoc($rest))
{
?>
  
  <tbody>
    <tr>
      <td> <?php echo $i; ?> </td>
      <td> <?php echo $row['MajorName']; ?></td>
      <td><?php echo $row['CatorigiesName']; ?></td>
      <td>
        <a class="btn btn-primary" data-toggle="modal" onclick="getCat('<?php echo $row['CatorigiesID'];?>','<?php echo $row['CatorigiesName'];?>','<?php echo $row['MajorID'];?>');"><span class="far fa-edit"> Edit</span></a>
      </td>
      <td> 
        <a href="?cid=<?php echo $row['CatorigiesID']; ?>" class="btn btn-danger"><span class="fas fa-trash"> Delete</span></a>
      </td> 
    </tr>
    <?php
 $i+=1;
  }
  ?>
  </tbody>
  <tfoot>
    <tr>
      <th><span class="fas fa-sort-numeric-down"> NO</span>
      </th>
      <th><span class="fas fa-sort-numeric-down"> Major Name</span> 
      </th>
      <th><span class="fas fa-sort-numeric-down"> Category Name</span> 
      </th>
      <th><span class="far fa-edit"> Edit</span>
      </th>
      <th><span class="fas fa-trash"> Delete</span>
      </th>
    </tr>
  </tfoot>
</table>
</div>
</main>

<script type="text/javascript">
 
 
  function getCat(cid,CatorigiesName,mid)
  {

                
$('#CatEdit').load('getCatorigies.php?cid='+ cid ,'&CatorigiesName='+ CatorigiesName +'&Mid='+ mid,
                function() {
                    $('#CatEdit').modal({
                     
                        show : true
                    });
                     });
           
        }


</script>



<footer class="page-footer font-small">
<br>
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
  <!-- jQuery -->
  <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="bootstrap/js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

  <script type="text/javascript" src="bootstrap/js/addons/datatables.min.js"></script>

  <script>
  $(document).ready(function () 
  {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
</script>
</body>
</html>
<?php 
if(isset($_GET['cid']))
{

  $cid = $_GET['cid'];

  $del=mysqli_query($con,"DELETE FROM catorigies WHERE CatorigiesID=$cid");
  if($del)
  {
    echo "<script> alert('delete successfully');
    location.assign('Categories.php');</script>";
  }
}
 ?>
