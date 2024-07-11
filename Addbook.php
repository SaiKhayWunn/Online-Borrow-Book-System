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
 <style type="text/css">
          .card {
        background-color: rgba(126, 123, 215, 0.2);

      }
      .map-container-6{
      overflow:hidden;
      padding-bottom:56.25%;
      position:relative;
      height:0;
      }
      .map-container-6 iframe{
      left:0;
      top:0;
      height:100%;
      width:100%;
      position:absolute;
      }
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
        <a href="index.php" class="list-group-item list-group-item-action mask waves-effect waves-light elegant-color-dark white-text">
          <i class="fas fa-chart-pie mr-3"></i>Home
        </a>

        <a href="BookMajor.php" class="list-group-item list-group-item-action mask waves-effect waves-light elegant-color-dark white-text">
        <i class="fas fa-th-list mr-3"></i>Book Major</a>

        <a href="Categories.php" class="list-group-item list-group-item-action mask waves-effect waves-light elegant-color-dark white-text">
          <i class="fas fa-th-list mr-3"></i>Categories</a>

        <a href="Author.php" class="list-group-item list-group-item-action mask waves-effect waves-light elegant-color-dark white-text">
          <i class="fas fa-th-list mr-3"></i>Author</a>


        <a href="Addbook.php" class="list-group-item active mask waves-effect waves-light elegant-color-dark white-text">
        <i class="fas fa-th-list mr-3"></i>Book</a>

        <a href="ViewBook.php" class="list-group-item list-group-item-action mask waves-effect waves-light elegant-color-dark white-text">
          <i class="fas fa-th-list mr-3"></i>View Book</a>

      </div>

    </div>
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->
<main class="pt-5 mx-lg-5 view "style="background-image: url('img/unnamedq.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
<br><br><br>

<!-- Card -->
<div class="card mx-xl-5">
  <div class="card-body px-lg-5">
       <h3 class="white-text">Add Book</h3>
       <hr class="white">

    <!-- Default form subscription -->
    <form action="AdminCodes.php" method="post" enctype="multipart/form-data">
      <label class="white-text">Select Author Name</label>
      <select class="form-control" name="authorname">
        <?php  
              $sql="SELECT * FROM author";
              $author=mysqli_query($con,$sql);
              while ($record=mysqli_fetch_assoc($author)) 
              {
            ?>
        <option value="<?php echo $record['authorID'];?>">
                <?php echo $record["authorName"]; ?>
        </option>
        <?php
              }
        ?>
      </select>
     <label class="white-text">Select Catorigies Name</label>
     <select class="form-control" name="CatorigiesName">
        <?php  
              $sql="SELECT * FROM Catorigies";
              $Catorigies=mysqli_query($con,$sql);
              while ($record=mysqli_fetch_assoc($Catorigies)) 
              {
            ?>
        <option value="<?php echo $record['CatorigiesID'];?>">
                <?php echo $record["CatorigiesName"]; ?>
        </option>
        <?php
              }
        ?>
      </select>
          <br>
      <input type="text" class="form-control" name="tittle" placeholder="Enter Tittle">
              
     <br>
      <input type="text" class="form-control validate" name="descri" placeholder="Enter Description">

      <br>
      <input type="number" class="form-control validate" name="prices" placeholder="Enter Prices" min="1">

      <br>    
      <input type="number" class="form-control validate" name="qty" placeholder="Enter Quantity" min="1">
      <br>
      <div class="file-field">
      <a class="btn-floating mt-0 float-left white-text">
      <i class="fas fa-paperclip" aria-hidden="true"></i>
      <input type="file" name="img">
    </a>
  </div>
  <br>
    <br>
      <div class=" d-flex justify-content-center buttonAddFormWrapper">
            <button class="btn btn-outline-primary btn-block buttonAdd" type="submit" name="add" value="add" name="add">
              <i class="fas fa-paper-plane-o ml-1 text-primary">Add</i>
            </button>
      </div> 
    </form><br>
  </div>


</main>

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
  <!-- Footer Elements -->

  <!-- Copyright -->
  
  <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="bootstrap/js/mdb.min.js"></script>
  <!-- Initializations -->
  
</body>

</html>