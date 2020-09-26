

<div class="container miniContainer">
  
  <div class="row">
    <div class="col-6">
      <?php if($_GET['userid']) { ?>
  		<?php displayPosts($_GET['userid']);  ?>
  
		<?php } else { ?>
      <h2>Активные пользователи </h2>
      <?php displayUsers();  ?>
      <?php }?>
    </div>
    <div class="col-6">
      <?php displaySearch();
      ?>
      <hr>
      <?php displayPostBox();
      ?>
    </div>
  </div>
</div>