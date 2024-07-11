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
  <style>



  </style>
</head>

<body class="elegant-color-dark">

  <!--Main Navigation-->
 
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

        <a href="Categories.php" class="list-group-item list-group-item-action mask waves-effect waves-light elegant-color-dark white-text">
          <i class="fas fa-th-list mr-3"></i>Categories</a>



        <a href="Author.php" class="list-group-item list-group-item-action mask waves-effect waves-light elegant-color-dark white-text">
          <i class="fas fa-th-list mr-3"></i>Author</a>

          
        <a href="Addbook.php" class="list-group-item list-group-item-action mask waves-effect waves-light elegant-color-dark white-text">
          <i class="fas fa-th-list mr-3"></i>Book</a>
      

        <a href="ViewBook.php" class="list-group-item active mask waves-effect waves-light elegant-color-dark white-text">
          <i class="fas fa-th-list mr-3"></i>View Book</a>
          
      </div>

    </div>
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->



<br>
<main class="pt-5 mx-lg-5 view "style="background-image: url('img/fIG1lSq.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
  <br>
<!--Modal: modalPush-->
<div class=" white-text table-responsive container">
 <table id="dtBasicExample" class="table table-striped table-bordered white-text" cellspacing="0" style="width: 40%;">
  <thead>
    <tr>
      <th class="th-sm">NO
      </th>
      <th class="th-sm">Author Name
      </th>
      <th class="th-sm">Categories Name
      </th>
      <th class="th-sm">Tittle
      </th>
      <th class="th-sm">Description
      </th>
      <th class="th-sm">Image
      </th>
      <th class="th-sm">Prices
      </th>
      <th class="th-sm">Quantity
      </th>
      <th class="th-sm">Edit
      </th>
      <th class="th-sm">Delete
      </th>
    </tr>
  </thead>
  <?php 

$select ="SELECT * FROM BookName,author,catorigies WHERE BookName.authorID=author.authorID AND catorigies.CatorigiesID=BookName.CatorigiesID order by bookID desc";
$rest = mysqli_query($con,$select);
$i=1;
while ($row=mysqli_fetch_assoc($rest))
{
?>
  
  <tbody>
    <tr>
      <td> <?php echo $i;?> </td>
      <td><?php echo $row['authorName']; ?></td>
      <td><?php echo $row['CatorigiesName']; ?></td>
      <td><?php echo $row['Tittle']; ?></td>
      <td><?php echo $row['bookDescription']; ?></td>
      <td><img src="upload/book/<?php echo $row['bookImage']; ?>" style="height: 100px;width: 100px;"></td>
      <td><?php echo $row['prices']; ?></td>
      <td><?php echo $row['qty']; ?></td>
      <td>
         <a href="EditBook.php?bid=<?php echo $row['bookID']; ?>" class="btn btn-info"><span> Edit</span></a>
      </td>
      <td> 
        <a href="?bid=<?php echo $row['bookID']; ?>" class="btn btn-danger"><span> Delete</span></a>
      </td> 
    </tr>
     <?php
 $i+=1;
  }
  ?>
  </tbody>
  <tfoot>
    <tr>
     <th class="th-sm">NO
      </th>
      <th class="th-sm">Author Name
      </th>
      <th class="th-sm">Categories Name
      </th>
      <th class="th-sm">Tittle
      </th>
      <th class="th-sm">Description
      </th>
      <th class="th-sm">Image
      </th>
      <th class="th-sm">Prices
      </th>
      <th class="th-sm">Quantity
      </th>
      <th class="th-sm">Edit
      </th>
      <th class="th-sm">Delete
      </th>
    </tr>
  </tfoot>
</table>
</div>

</main>




<footer class="page-footer font-small">

  <!-- Footer Elements -->
  <div class="container">
<br>
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
  $(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
</script>
  
</body>

</html>

<?php 

if(isset($_GET['bid']))
{

  $bid = $_GET['bid'];
  $del=mysqli_query($con,"DELETE FROM bookname WHERE bookID=$bid");
  if($del)
  {
    echo "<script> alert('delete successfully');
    location.assign('ViewBook.php');</script>";
  }
}
 ?>

