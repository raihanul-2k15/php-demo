
<?php
session_start();
if (isset($_SESSION['flash'])):
?>
<div class="text-center alert alert-primary alert-dismissible fade show" role="alert">
  <strong> <?php echo $_SESSION['flash'];unset($_SESSION['flash']); ?> </strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php
endif;
?>