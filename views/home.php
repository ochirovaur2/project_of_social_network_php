<div class="container miniContainer">
  
  <div class="row">
    <div class="col-6">
      <h2>Недавние посты </h2>
      <?php displayPosts('public'); ?>
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