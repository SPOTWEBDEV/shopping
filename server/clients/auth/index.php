<?php

$out = '../../user/login/' ;
if (isset($_SESSION['login_id']) && $_SESSION['login_id'] != '') {
    $id    = $_SESSION['login_id'];
    $sql   = "SELECT * FROM `client` WHERE `id`='$id'";
    $fetch = mysqli_query($connection, $sql);
    if (mysqli_num_rows($fetch)) {
        while ($row = mysqli_fetch_assoc($fetch)) {
            $name         = $row['username'];
            $email        = $row['email'];
            $phone_number = $row['phone_number'];
            $country      = $row['country'];
            $state        = $row['state'];
            $address      = $row['address'];
            $auth         = true;
        }
    } else {
        header("location:$out");
    }
} else {
    header("location:$out");
}
