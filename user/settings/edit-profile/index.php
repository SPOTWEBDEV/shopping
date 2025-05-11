<?php
include_once('../../../server/connection.php');
include('../../../server/clients/auth/index.php');


if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];


    if ($fullname == '' || $email == '' || $phone_number == '') {
        echo '<script>alert("error")</script>';
    } else {

        $statement = "UPDATE `client` SET `username`='$fullname', `phone_number`='$phone_number', `email`='$email' WHERE `id`='$id'";

        $query = mysqli_query($connection, $statement);
        if ($query) {

            echo '<script>alert("success")</script>';
        } else {
            echo '<script>alert("error")</script>';
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
    <title><?php echo $sitename ?> || Edit_profile</title>
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
    <div class="container py-5 flex items-center">
        <a href="index-1.html" class="flex  items-center">
            <span class="text-primary">
                <svg width="17" height="17" viewBox="0 0 32 32">
                    <path fill="currentColor" d="m16 2.594l-.719.687l-13 13L3.72 17.72L5 16.437V28h9V18h4v10h9V16.437l1.281 1.282l1.438-1.438l-13-13zm0 2.844l9 9V26h-5V16h-8v10H7V14.437z" />
                </svg></span>
            <span>
                <svg width="22" height="22" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6l-6-6z" />
                </svg>
            </span>

        </a>
        <a href="<?php echo "$domain" ?>/user/dashboard/index.php" class="text-primary text-[13px] sm:text-base">My Acoount</a>
        <span>
            <svg width="22" height="22" viewBox="0 0 24 24">
                <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6l-6-6z" />
            </svg>
        </span>
        <a href="#" class="text-secondary text-[13px] sm:text-base">Profile Information</a>
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
                <h4 class="text-lg mb-3">Profile Information</h4>
                <form method="POST">
                    <div>
                        <div class="sm:flex gap-6">
                            <div class="w-full">
                                <label>Full Name</label>
                                <input class="w-full border border-[#E9E4E4] rounded focus:border-primary focus:ring-0 mt-1 block" name="fullname" type="text" Value="<?php echo "$name" ?>">
                            </div>

                        </div>
                        <div class="sm:flex gap-6 mt-6">

                        </div>
                        <div class="sm:flex gap-6 mt-16 sm:mt-6">
                            <div class="w-full">
                                <label>Email Address</label>
                                <input class="w-full border border-[#E9E4E4] rounded focus:border-primary focus:ring-0 mt-1 block" type="text" name="email" value="<?php echo "$email" ?>">
                            </div>

                        </div>
                        <div class="sm:flex gap-6 mt-16 sm:mt-6">
                            <div class="w-full">
                                <label>Phone Number</label>
                                <input class="w-full border border-[#E9E4E4] rounded focus:border-primary focus:ring-0 mt-1 block" type="number" name="phone_number" value="<?php echo "$phone_number" ?>">
                            </div>

                        </div>
                        <div class="mt-8">
                            <button type="submit" name="submit" class="default_btn rounded small">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- footer area -->
    <?php

    include("../../../components/footer/index.php");


    ?>
    <!-- footer area end -->

    <!-- copyright -->


    <!-- script -->
    <script src="../../../assets/js/nice-select2.js"></script>
    <script src="../../../assets/js/main.js"></script>
</body>

</html>