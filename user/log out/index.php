
<?php
include('../../server/database.php');
include('../../server/clients/auth/index.php');


if (isset($_SESSION['login_id']) && $_SESSION['login_id'] != '') {
        session_destroy();
        header('./index.php');
}
?>