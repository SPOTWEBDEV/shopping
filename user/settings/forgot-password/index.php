<?php
include('../../../include//client/nav/settings-nav/index.php')

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rafcart-Tailwind</title>
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
    
    include('../../../include/mobile/index.php');
    ?>
    <!-- breadcrumbs -->
    <div class="container">
        <div class="py-5 flex items-center">
            <a href="index-1.html" class="flex  items-center">
                <span class="text-primary">
                    <svg width="17" height="17" viewBox="0 0 32 32">
                        <path fill="currentColor"
                            d="m16 2.594l-.719.687l-13 13L3.72 17.72L5 16.437V28h9V18h4v10h9V16.437l1.281 1.282l1.438-1.438l-13-13zm0 2.844l9 9V26h-5V16h-8v10H7V14.437z" />
                    </svg>
                </span>
                <span>
                    <svg width="22" height="22" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6l-6-6z" /></svg>
                </span>

            </a>
            <a href="#" class="text-secondary text-[13px] sm:text-base"> Forgot Password </a>
        </div>
    </div>
    <!-- breadcrumbs end-->

    <!-- forgot password -->
    <div class="w-full max-w-[500px] mx-auto box_shadow px-6 py-8 mb-14">
        <h2 class="text-[28px] uppercase">reset password</h2>
        <p class="text_md mb-4">Please enter your email address below to receive a link.</p>
        <div class="mt-6">
            <label class="block">Email Address <span class="text-primary">*</span></label>
            <input class="w-full text-sm border border-[#E9E4E4] rounded focus:ring-0 focus:border-primary mt-2" type="email" placeholder="example@gmail.com">
        </div>
        <div class="mt-6">
            <button type="submit" class="default_btn rounded small">reset my password</button>
        </div>
    </div>

    <!-- footer area -->
    <?php
    
    include("../../../include/client/footer/index.php");
    
    
    ?>
    <!-- footer area end -->>

    <!-- copyright -->
    
    <!-- copyright end -->

    <!-- script -->
    <script src="../../../assets/js/nice-select2.js"></script>
    <script src="../../../assets/js/main.js"></script>
</body>

</html>