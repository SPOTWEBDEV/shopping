
<?php

$url = $domain . 'admin/login.php';
if(isset($_SESSION['admin_id'])) {
    $id = $_SESSION['admin_id'];
} else {
    echo "<script>window.open('$url', '_self');</script>";;
}













?>


