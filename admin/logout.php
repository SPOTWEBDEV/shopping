<?php
// INCLUDE CONNECTION TO MYSQL connection
require('../server/connection.php');

// INCLUDE USER SESSION AUTH AND DETAILS
require('../server/admin/authoriazation/index.php');

if(isset($_SESSION['admin_id'])){
  session_destroy();
  header('loaction: ./logout.php') ;
}

?>