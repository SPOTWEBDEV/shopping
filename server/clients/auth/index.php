
<?php

$url = $domain . 'user/login/index.php';
if(isset($_SESSION['login_id'])) {
    $id = $_SESSION['login_id'];
    $select = mysqli_query($connection, "SELECT * FROM `user` WHERE `id`= 1");
         if (mysqli_num_rows($select)){
             while($row = mysqli_fetch_assoc($select)){
                    $email = $row['email'];
                    $name = $row['name'] ;
                    
          }
         }
         else{
             echo "<script>window.open('$url', '_self');</script>";
         }
} else {
    echo "<script>window.open('$url.', '_self');</script>";;
}













?>


