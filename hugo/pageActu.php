<?php include 'include/header.php'; ?>

<div>
<?php include 'profilMenu.php'; ?>
  <div class="container col-lg-7 col-9-md col-12-sm col-8-xl">
   <form method="POST" id="comment_form" class="row">
    <div class="form-group ">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="id" id="id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>
  <?php include('pageSearch.php'); ?>
</div>
  <?php include('include/footer.php')?>