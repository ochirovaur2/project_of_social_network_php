<div class="container miniContainer">
  
  <div class="row">
    <div class="col-6">
      <h2>Сообщения </h2>
      <?php displayPosts('messages'); ?>
    </div>
    <div class="col-6">
      <?php displaySearch();
      ?>
      <hr>
      <?php displayMessageBox();
      ?>
    </div>
  </div>
</div>