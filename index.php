<?php 
include_once('resources/function/helper.php');
include_once('templates/header.php'); 

$page = isset($_GET['page']) ? $_GET['page'] : false;

?>

<div class="container">
<div class="main-content">

<?php 

$filename = "$page.php";
if (file_exists($filename)) {
  include_once($filename);
} else {
  echo 'Maaf, file tersebut tidak dapat ditemukan di dalam sistem.';
}

?>
  
</div>
</div>

<?php include_once('templates/footer.php'); ?>
