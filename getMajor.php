<?php 

$mid = $_GET['mid'];
$MajorName=$_GET['MajorName'];

 ?>

 <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Be always up to date</p>
      </div>

  <form action="AdminCodes.php" method="post" enctype="multipart/form-data">
      <div class="modal-body">

        <i class="fas fa-bell fa-4x animated rotateIn mb-4"></i>

       <input type="text" id="inputName1" class="form-control validate" name="MajorName" placeholder="Enter Major Name"  value="<?php echo $MajorName; ?>">
        <label data-error="wrong" data-success="right" for="inputName1">Major Name</label>
        <input type="hidden" name="mid" value="<?php echo $mid; ?>">

        <div class="file-field">
      <a class="btn-floating mt-0 float-left white-text">
      <i class="fas fa-paperclip" aria-hidden="true"></i>
      <input type="file" name="img">
    </a>
    <label data-error="wrong" data-success="right"></label>
  </div>

      </div>

      

      <div class="modal-footer d-flex justify-content-center buttonAddFormWrapper">
            <button class="btn btn-outline-primary btn-block buttonAdd" type="submit" value="addmajor" name="updateMajor">Edit Major
              <i class="fas fa-paper-plane-o ml-1"></i>
            </button>
        </div>
    </form>
    <!--/.Content-->
  </div>
</div>