<?php 

$aid = $_GET['aid'];
$authorname=$_GET['aname'];

 ?>

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

       <input type="text" id="inputName1" class="form-control validate" name="authorname" placeholder="Enter Author Name"  value="<?php echo $authorname; ?>">
        <label data-error="wrong" data-success="right" for="inputName1">Author Name</label>
        <input type="hidden" name="aid" value="<?php echo $aid; ?>">
      </div>

      <div class="modal-footer d-flex justify-content-center buttonAddFormWrapper">
            <button class="btn btn-outline-primary btn-block buttonAdd" type="submit" value="addAuthor" name="UpdateAuthor">Edit Author
              <i class="fas fa-paper-plane-o ml-1"></i>
            </button>
        </div>
    </form>
    <!--/.Content-->
  </div>
</div>