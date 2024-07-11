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
      

        <a href="ViewBook.php" class="list-group-item mask waves-effect waves-light elegant-color-dark white-text">
          <i class="fas fa-th-list mr-3"></i>View Book</a>
          
      </div>

    </div>
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->



<br>
<main class="pt-5 mx-lg-5 view "style="background-image: url('img/GCJRhiA.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
  <br>
<!--Modal: modalPush-->
<div class=" white-text table-responsive container"><br>
  <h4 class="text-light"> Confirm Boorw  List and Manage Book Return  </h4> <br>
 <table id="dtBasicExample" class="table table-striped table-bordered white-text" cellspacing="0" style="width: 100%;">
  <thead>
    <tr>
      <th class="th-sm">NO
      </th>
      <th class="th-sm">Member Name
      </th>
      <th class="th-sm">Member Phone
      </th>
      <th class="th-sm">Borrow Books
      </th>
      <th class="th-sm">Borrow Date
      </th>
      <th class="th-sm">Return Date
      </th>
      <th class="th-sm">Borrow Amount
      </th>
      <th class="th-sm">Delivery Address
      </th>
      <th class="th-sm">Delivery Phone
      </th>
      <th class="th-sm">Return State
      </th>
      
    </tr>
  </thead>
  <?php 
$bt=array();


$select ="SELECT SUM(bn.prices*bd.bqty) as tsum,d.*,b.*,m.MemberName,m.phone,bn.bookID,bd.bqty
FROM bookname bn,borrow b,borrowdetail bd,delivery d,member m
WHERE b.borrowID=bd.borrowID AND b.borrowID=d.borrowID AND bn.bookID=bd.bookID AND b.memberID=m.memberID AND b.status=2 GROUP BY bd.borrowID ORDER BY b.borrowID DESC";
$rest = mysqli_query($con,$select);
$i=1;
while ($row=mysqli_fetch_assoc($rest))
{ 
  $bid=$row['borrowID'];
  
?>
  
  <tbody>
    <tr>
      <td> <?php echo $i;?> </td>
      <td><?php echo $row['MemberName']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td>
        <table>
          <tr>
          <th> Book </th>
          <th> Qty </th>
        </tr>
        <?php $selb=mysqli_query($con,"SELECT bookname.bookID,Tittle,bqty FROM bookname,borrowdetail WHERE bookname.bookID=borrowdetail.bookID AND borrowdetail.borrowID=$bid");
        while($b=mysqli_fetch_assoc($selb))
          { 

  $id=$b['bookID'];
  $q=$row['bqty'];
  $bt[$id]=$q;?>
        <tr>
          <td> <?php echo $b['Tittle']; ?></td>
          <td> <?php echo $b['bqty']; ?></td>
        </tr>
    <?php } ?>
        </table>
      </td>
      <td><?php echo $row['borrowDate']; ?></td>
      <td><?php echo $row['returnDate'] ?></td>
      <td><?php echo $row['tsum']; ?> MMK </td>
      <td><?php echo $row['deliadd']; ?></td>
      <td><?php echo $row['deliphone']; ?></td>
      <td>
        <?php if($row['getReturn']=='Borrow'){ ?>
         <form action="" method="post">
           <input type="hidden" name="bid" value="<?php echo $bid; ?>">
           <input type="hidden" name="rdate" value="<?php echo $row['returnDate']; ?>">
           <select class="form-control" name="action" onchange="this.form.submit();">
            <option> --Check-- </option>
             <option value="Yes"> Return </option>

           </select>
         </form>
       <?php }
       elseif($row['getReturn']=='Yes')
       {
        echo "Returned";
      }
          ?>

      </td>
      
    </tr>
     <?php
 $i+=1;
  }
  ?>
  </tbody>
 
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
if(isset($_POST['action']))
{
  $bid = $_POST['bid'];
  $st=$_POST['action'];
  $rdate=$_POST['rdate'];
  $t=date('Y-m-d');

  if($t<$rdate)
  {

  $del=mysqli_query($con,"UPDATE borrow SET getReturn='$st' WHERE borrowID=$bid");
  if($del)
  {
    
  foreach ($bt as $id => $tt)
  {
      $upd=mysqli_query($con,"UPDATE bookname SET qty=(qty+$tt) WHERE bookID=$id");
  } 
    echo "<script> alert('Book Received Successfully');
    location.assign('managereturn.php');</script>"; 
  }
}
else
{
   echo "<script> alert('You Need to Pay Overduee Fee. Your Overduee Fee is 1000 MMK');
    location.assign('managereturn.php');</script>";

     $del=mysqli_query($con,"UPDATE borrow SET getReturn='$st' WHERE borrowID=$bid");
  if($del)
  {
    
  foreach ($bt as $id => $tt)
  {
      $upd=mysqli_query($con,"UPDATE bookname SET qty=(qty+$tt) WHERE bookID=$id");
  }
    
      
    echo "<script> alert('Book Received Successfully');
    location.assign('managereturn.php');</script>";
      
    
  }

}


}
 ?>

