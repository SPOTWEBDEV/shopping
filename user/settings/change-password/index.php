



<?php
include_once('../../../server/connection.php');
include('../../../server/clients/auth/index.php');




if(isset($_POST['submit'])){
   

    // Sanitize input data
    $current_password =  $_POST['current_password'];
    $new_password =  $_POST['new_password'];
    $retype_password =  $_POST['retype_password'];

    if($current_password=="" || $new_password=="" || $retype_password==""){
        echo "<script>alert('Please fill all the fields.')</script>";
    } else {
       

        $statement = "SELECT * FROM `client` WHERE `id`='$id' AND `password`='$current_password'";
        $query = mysqli_query($connection, $statement);

        if(mysqli_num_rows($query) == 1){ 
            if($new_password == $retype_password){
                
                $update_statement = "UPDATE `client` SET `password`='$new_password' WHERE `id`='$id'";
                $update_query = mysqli_query($connection, $update_statement);
                
                if($update_query){
                    echo "<script>alert('Password changed successfully.')</script>";
                } else {
                    echo "<script>alert('Error updating password.')</script>";
                }
            } else {
                echo "<script>alert('New password and retype password do not match.')</script>";
            }
        } else {
            echo "<script>alert('Incorrect current password.')</script>";
        }
    }
}
?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $sitename ?> || Change_password</title>
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/nice-select2.css">
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <script defer src="../../../assets/js/alpine.min.js"></script>
</head>

<body>
    <!--Preloader-->
    <div x-data="{hide: false}" x-init="setTimeout(() => {hide=true}, 1000)" x-show="!hide" x-transition.duration.500ms class="preloader fixed inset-0 bg-white z-30 opacity-100 flex items-center justify-center">
        <img src="../../../assets/images/preloader.gif" alt="" class="w-[30rem] h-[30rem] object-cover">
    </div>
    <!--Preloader end-->

    

    <?php
    
    include('../../../components/nav/index.php');
    ?>

    <!-- breadcrumbs -->
    <div class="container">
        <div class="py-5 flex items-center">
            <a href="index-1.html" class="flex  items-center">
                <span class="text-primary">
                    <svg width="17" height="17" viewBox="0 0 32 32">
                        <path fill="currentColor"
                            d="m16 2.594l-.719.687l-13 13L3.72 17.72L5 16.437V28h9V18h4v10h9V16.437l1.281 1.282l1.438-1.438l-13-13zm0 2.844l9 9V26h-5V16h-8v10H7V14.437z" />
                    </svg></span>
                <span>
                    <svg width="22" height="22" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6l-6-6z" /></svg>
                </span>

            </a>
            <a href="my-account.html" class="text-primary text-[13px] sm:text-base">My Acoount</a>
            <span>
                <svg width="22" height="22" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6l-6-6z" /></svg>
            </span>
            <a href="#" class="text-secondary text-[13px] sm:text-base">Change Password</a>
        </div>
    </div>
    <!-- breadcrumbs end-->

    <!-- account -->
    <div class="container grid grid-cols-12 gap-6 pb-14">
        <!--  account sidebar  -->
        <div x-data="{isOpen: false}" class="col-span-12 lg:col-span-3 relative">
            <div @click.outside="isOpen=false">
               
            <?php
                include('../../../components/nav/sidenav.php');
                ?>
            </div>
        </div>
        <!-- account content -->
        <div class="col-span-12 lg:col-span-9 box_shadow px-6 py-8">
            <div class="acprof_info_wrap shadow_sm">
                <h4 class="text-lg mb-3">Change Password</h4>
                <form method="POST">
                    <div class="max-w-[402px]">
                        <div>
                            <label class="block">Current Password</label>
                            <div class="relative">
                                <input type="password" class="w-full border border-[#E9E4E4] rounded focus:ring-0 focus:border-primary text-sm mt-2" name="current_password" placeholder="enter current password">
                                <span class="absolute top-5 right-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M88.3 68.1c-5.6-5.5-14.6-5.5-20.1.1-5.5 5.5-5.5 14.5 0 20l355.5 355.7c3.7 3.7 9 4.9 13.7 3.6 2.4-.6 4.6-1.9 6.4-3.7 5.5-5.5 5.5-14.5 0-20L88.3 68.1z"
                                            fill="currentColor" />
                                        <path
                                            d="M260.2 345.9c-53 2.4-96.6-41.2-94.1-94.1.6-12.2 3.6-23.8 8.6-34.3L121.3 164c-27.7 21.4-55.4 48.9-85.1 81.3-5.5 6.1-5.6 15.2-.1 21.3C101 338.3 158.2 400 255.8 400c29.7 0 57.1-7.4 82.3-19.2l-43.5-43.5c-10.6 5-22.2 8-34.4 8.6z"
                                            fill="currentColor" />
                                        <path
                                            d="M475.8 266c5.3-5.8 5.6-14.6.5-20.7C424 181.8 351.5 112 255.8 112c-29.1 0-56 6.6-82 19l43.7 43.7c10.5-5 22.1-8.1 34.3-8.6 53-2.4 96.6 41.2 94.1 94.1-.6 12.2-3.6 23.8-8.6 34.3l53.5 53.5c33-25.3 61.3-55.9 85-82z"
                                            fill="currentColor" />
                                        <path
                                            d="M192.2 260.9c2.4 31.3 27.6 56.5 58.9 58.9 8.2.6 16.1-.3 23.4-2.6l-79.8-79.8c-2.2 7.4-3.1 15.3-2.5 23.5z"
                                            fill="currentColor" />
                                        <path
                                            d="M320 256c0-1.3-.1-2.6-.1-3.9-5.6 2.5-11.7 3.9-18.2 3.9-1.1 0-2.1 0-3.1-.1l18.6 18.7c1.8-5.9 2.8-12.2 2.8-18.6z"
                                            fill="currentColor" />
                                        <path
                                            d="M256 209c0-6 1.1-11.7 3.1-16.9-1 0-2-.1-3.1-.1-6.4 0-12.6 1-18.5 2.8l18.7 18.7c-.1-1.5-.2-3-.2-4.5z"
                                            fill="currentColor" /></svg>
                                </span>
                            </div>
                        </div>
                        <div class="mt-4">
                            <label class="block font-medium">New Password</label>
                            <div class="relative">
                                <input type="password" class="w-full border border-[#E9E4E4] rounded focus:ring-0 focus:border-primary text-sm mt-2" name="new_password" placeholder="enter new password">
                                <span class="absolute top-5 right-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M88.3 68.1c-5.6-5.5-14.6-5.5-20.1.1-5.5 5.5-5.5 14.5 0 20l355.5 355.7c3.7 3.7 9 4.9 13.7 3.6 2.4-.6 4.6-1.9 6.4-3.7 5.5-5.5 5.5-14.5 0-20L88.3 68.1z"
                                            fill="currentColor" />
                                        <path
                                            d="M260.2 345.9c-53 2.4-96.6-41.2-94.1-94.1.6-12.2 3.6-23.8 8.6-34.3L121.3 164c-27.7 21.4-55.4 48.9-85.1 81.3-5.5 6.1-5.6 15.2-.1 21.3C101 338.3 158.2 400 255.8 400c29.7 0 57.1-7.4 82.3-19.2l-43.5-43.5c-10.6 5-22.2 8-34.4 8.6z"
                                            fill="currentColor" />
                                        <path
                                            d="M475.8 266c5.3-5.8 5.6-14.6.5-20.7C424 181.8 351.5 112 255.8 112c-29.1 0-56 6.6-82 19l43.7 43.7c10.5-5 22.1-8.1 34.3-8.6 53-2.4 96.6 41.2 94.1 94.1-.6 12.2-3.6 23.8-8.6 34.3l53.5 53.5c33-25.3 61.3-55.9 85-82z"
                                            fill="currentColor" />
                                        <path
                                            d="M192.2 260.9c2.4 31.3 27.6 56.5 58.9 58.9 8.2.6 16.1-.3 23.4-2.6l-79.8-79.8c-2.2 7.4-3.1 15.3-2.5 23.5z"
                                            fill="currentColor" />
                                        <path
                                            d="M320 256c0-1.3-.1-2.6-.1-3.9-5.6 2.5-11.7 3.9-18.2 3.9-1.1 0-2.1 0-3.1-.1l18.6 18.7c1.8-5.9 2.8-12.2 2.8-18.6z"
                                            fill="currentColor" />
                                        <path
                                            d="M256 209c0-6 1.1-11.7 3.1-16.9-1 0-2-.1-3.1-.1-6.4 0-12.6 1-18.5 2.8l18.7 18.7c-.1-1.5-.2-3-.2-4.5z"
                                            fill="currentColor" /></svg>
                                </span>
                            </div>
                        </div>
                        <div class="mt-4">
                            <label>Retype Password</label>
                            <div class="relative">
                                <input type="password" class="w-full border border-[#E9E4E4] rounded focus:ring-0 focus:border-primary text-sm mt-2" name="retype_password" placeholder="repeat your password">
                                <span class="absolute top-5 right-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M88.3 68.1c-5.6-5.5-14.6-5.5-20.1.1-5.5 5.5-5.5 14.5 0 20l355.5 355.7c3.7 3.7 9 4.9 13.7 3.6 2.4-.6 4.6-1.9 6.4-3.7 5.5-5.5 5.5-14.5 0-20L88.3 68.1z"
                                            fill="currentColor" />
                                        <path
                                            d="M260.2 345.9c-53 2.4-96.6-41.2-94.1-94.1.6-12.2 3.6-23.8 8.6-34.3L121.3 164c-27.7 21.4-55.4 48.9-85.1 81.3-5.5 6.1-5.6 15.2-.1 21.3C101 338.3 158.2 400 255.8 400c29.7 0 57.1-7.4 82.3-19.2l-43.5-43.5c-10.6 5-22.2 8-34.4 8.6z"
                                            fill="currentColor" />
                                        <path
                                            d="M475.8 266c5.3-5.8 5.6-14.6.5-20.7C424 181.8 351.5 112 255.8 112c-29.1 0-56 6.6-82 19l43.7 43.7c10.5-5 22.1-8.1 34.3-8.6 53-2.4 96.6 41.2 94.1 94.1-.6 12.2-3.6 23.8-8.6 34.3l53.5 53.5c33-25.3 61.3-55.9 85-82z"
                                            fill="currentColor" />
                                        <path
                                            d="M192.2 260.9c2.4 31.3 27.6 56.5 58.9 58.9 8.2.6 16.1-.3 23.4-2.6l-79.8-79.8c-2.2 7.4-3.1 15.3-2.5 23.5z"
                                            fill="currentColor" />
                                        <path
                                            d="M320 256c0-1.3-.1-2.6-.1-3.9-5.6 2.5-11.7 3.9-18.2 3.9-1.1 0-2.1 0-3.1-.1l18.6 18.7c1.8-5.9 2.8-12.2 2.8-18.6z"
                                            fill="currentColor" />
                                        <path
                                            d="M256 209c0-6 1.1-11.7 3.1-16.9-1 0-2-.1-3.1-.1-6.4 0-12.6 1-18.5 2.8l18.7 18.7c-.1-1.5-.2-3-.2-4.5z"
                                            fill="currentColor" /></svg>
                                </span>
                            </div>
                        </div>
                        <div class="mt-8">
                            <button type="submit" name="submit" class="default_btn">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- footer area -->
    <!-- footer area -->
    <?php
    
    include("../../../components/footer/index.php");
    
    
    ?>
    <!-- footer area end -->

    
    <!-- copyright end -->

    <!-- script -->
    <script src="../../../assets/js/nice-select2.js"></script>
    <script src="../../../assets/js/main.js
    "></script>
</body>

</html>