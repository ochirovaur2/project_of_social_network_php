<div class="container miniContainer">
  
  <div class="row">
    <div class="col-6">
      <h2>Посты тех, на кого вы подписались </h2>
      <?php displayPosts('isFollowing'); ?>
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