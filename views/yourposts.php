
<div class="container miniContainer">
  
  <div class="row">
    <div class="col-6">
      <h2>Ваши недавние посты </h2>
      <?php displayPosts('yourPosts'); ?>
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