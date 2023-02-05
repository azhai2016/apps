<?php

$path_to_root = '../..';
include_once $path_to_root . '/includes/session.php';
include_once $path_to_root . '/includes/ui.inc';
include_once $path_to_root . '/admin/db/designer_db.inc';

 
if ($_POST) {

  $json = $_POST['json'];

  update_print_content($_POST['id'],$json);
  
}


?>