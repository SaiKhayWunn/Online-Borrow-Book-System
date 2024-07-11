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
        <a href="index.php" class="list-group-item active list-group-item-action mask waves-effect waves-light elegant-color-dark white-text">
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
      

        <a href="ViewBook.php" class="list-group-item  mask waves-effect waves-light elegant-color-dark white-text">
          <i class="fas fa-th-list mr-3"></i>View Book</a>
          
      </div>

    </div>
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->



<br><br><br><br>
<main class="pt-5 mx-lg-5 view "style="background-image: url('img/0b613eecb9041832c6ce8f4670908fbb.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
  <br>
<!--Modal: modalPush-->
<div class=" white-text table-responsive container">
 <table id="dtBasicExample" class="table table-striped table-bordered white-text " cellspacing="0" style="width: 100%;">
  <thead>
    <tr>
      <th class="th-sm">NO
      </th>
      <th class="th-sm">Member Name
      </th>
      <th class="th-sm">Email
      </th>
      <th class="th-sm">Password
      </th>
      <th class="th-sm">Phone
      </th>
      <th class="th-sm">Address
      </th>
    
    </tr>
  </thead>
 

<?php 
  $select ="SELECT * FROM Member order by memberID desc";
$rest = mysqli_query($con,$select);
$i=1;
while ($row=mysqli_fetch_assoc($rest))
{
?>
  <tbody>
    <tr>
      <td> <?php echo $i;?> </td>
      <td><?php echo $row['MemberName']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['password']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td><?php echo $row['Address']; ?></td>
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
      <th class="th-sm">Member Name
      </th>
      <th class="th-sm">Email
      </th>
      <th class="th-sm">Password
      </th>
      <th class="th-sm">Phone
      </th>
      <th class="th-sm">Address
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

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> Sai Khay Wunn</a>
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

if(isset($_POST['add']))
{

  $bid = $_POST['bid'];
  $t=$_POST['qty'];

  $upt=mysqli_query($con,"UPDATE bookname SET qty=(qty+$t) WHERE bookID=$bid");
  if($upt)
  {
    echo "<script> alert('Add Quantity successfully');
    location.assign('managebookqty.php');</script>";
  }
}
 ?>

