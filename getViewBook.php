<?php
include('connect.php'); 

$bid = $_GET['bookID'];
$authorID=$_GET['authorID'];
$CatorigiesID=$_GET['CatorigiesID'];
$Tittle = $_GET['Tittle'];
$bookDescription=$_GET['bookDescription'];
$bookImage=$_GET['bookImage'];
$prices = $_GET['prices'];
$qty=$_GET['qty'];
$mid=$_GET['mid'];
 ?>

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
            <button class="btn btn-outline-primary btn-block buttonAdd" type="submit" name="add" value="add" name="add">Add
              <i class="fas fa-paper-plane-o ml-1"></i>
            </button>
      </div> 
    </form>