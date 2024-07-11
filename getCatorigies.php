<?php
include('connect.php'); 

 
$cid = $_GET['cid'];
$CatorigiesName=$_GET['CatorigiesName'];
$mid=$_GET['mid'];
 


 ?>

 <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Be always up to date</p>
      </div>
        <input type="hidden" name="mid" value="<?php echo $mid; ?>">
  <form action="AdminCodes.php" method="post">
      <div class="modal-body">

        <i class="fas fa-bell fa-4x animated rotateIn mb-4"></i>

       <input type="text" id="inputName1" class="form-control validate" name="CatorigiesName" placeholder="Enter Categories Name"  value="<?php echo $CatorigiesName; ?>">
       <br>
        <input type="hidden" name="cid" value="<?php echo $cid; ?>">
    <select class="form-control" name="MajorName">
        <?php  
              $sql="SELECT * FROM bookMajor";
              $bookMajor=mysqli_query($con,$sql);
              while ($record=mysqli_fetch_assoc($bookMajor)) 
              {
                if($mid==$record['MajorID'])
                {
                ?>
                
                <option value="<?php echo $record['MajorID']; ?>" selected> <?php echo $record['MajorName']; ?></option>

              <?php  }
                else{
            ?>

        <option value="<?php echo $record['MajorID'];?>">
                <?php echo $record["MajorName"]; ?>
        </option>
        <?php
              }
            }
        ?>
      </select>
      </div>

      <div class="modal-footer d-flex justify-content-center buttonAddFormWrapper">
            <button class="btn btn-outline-primary btn-block buttonAdd" type="submit" value="updatecategories" name="updatecategories">Edit Categories
              <i class="fas fa-paper-plane-o ml-1"></i>
            </button>
        </div>
    </form>
    <!--/.Content-->
  </div>
</div>