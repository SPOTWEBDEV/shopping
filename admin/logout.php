<?php
// INCLUDE CONNECTION TO MYSQL DATABASE
require('../server/database.php');

// INCLUDE USER SESSION AUTH AND DETAILS
require('../server/admin/authoriazation/index.php');

if(isset($_SESSION['admin_id'])){
  session_destroy();
  header('loaction: ./logout.php') ;
}

?>