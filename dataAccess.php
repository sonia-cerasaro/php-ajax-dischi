<?php
  include './src/data/repository.php';

  header('Content-Type: application/json');
  echo json_encode($disks);
 ?>
