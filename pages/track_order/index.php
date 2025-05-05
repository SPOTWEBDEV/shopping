<?php


include('../../server/connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $sitename ?> ||</title>
    <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/nice-select2.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
    <script defer src="../../assets/js/alpine.min.js"></script>
</head>

<body>
    <!--Preloader-->
    <div x-data="{hide: false}" x-init="setTimeout(() => {hide=true}, 1000)" x-show="!hide" x-transition.duration.500ms class="preloader fixed inset-0 bg-white z-30 opacity-100 flex items-center justify-center">
        <img src="../../assets/images/preloader.gif" alt="" class="w-[30rem] h-[30rem] object-cover">
    </div>
    <!--Preloader end-->

    

    <?php
include('../../components/nav/index.php');

?>

    <!-- breadcrumbs -->
    <div class="container py-5 flex items-center">
        <a href="<?php  echo "$domain"?>/index.php" class="flex  items-center">
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
        <a href="#" class="text-secondary text-[13px] sm:text-base"> Track Order </a>
    </div>
    <!-- breadcrumbs end-->

    <!-- track order -->
    <div class="container pb-14">
        <div class="w-full px-[32px] py-[24px] box_shadow">
            <h2 class="text-[28px] uppercase mb-4">Order Tracking</h2>
            <form>
                <div>
                    <div>
                        <label for="first_name" class="block mb-1">Order ID <span>*</span></label>
                        <input type="text" class="max-w-lg w-full border border-[#E9E4E4] rounded focus:border-primary focus:ring-0">
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="default_btn">track order</button>
                    </div>
                </div>
            </form>

            <div class="mt-4 pt-2 track_status relative">
                <h4 class="bg-[#28A745] py-2 uppercase text-center text-white text-[22px]">delivered</h4>
                <div class="w-full md:w-[650px] mx-auto mt-8 relative after:content after:absolute md:after:left-1/2 after:top-0 after:h-full after:border-r after:border-dotted after:border-[#979797] after:-z-10">
                    <div class="max-w-[290px] ml-9 md:ml-auto border border-[#E9E4E4] p-4 relative after:content after:absolute after:-left-[13px] after:top-1/2 after:rotate-45 after:-translate-y-1/2 after:w-[24px] after:h-[24px] after:bg-white after:border-l after:border-l-[#E9E4E4] after:border-b after:border-b-[#E9E4E4]">
                        <h5 class="mb-2">01. Order Placement</h5>
                        <p>30 january, 2021, 8:37 AM</p>
                        <span class="w-[26px] h-[26px] bg-[#28a745] text-white  rounded-full flex justify-center items-center absolute top-7 -left-12">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19L21 7l-1.41-1.41z" />
                            </svg>
                        </span>
                    </div>
                    <div class="max-w-[290px] ml-9 md:ml-0 border border-[#E9E4E4] p-4 relative after:content after:absolute after:-left-[13px] md:after:left-[277px] after:top-1/2 after:rotate-45 after:-translate-y-1/2 after:w-[24px] after:h-[24px] after:bg-white after:border-l md:after:border-l-0 md:after:border-t after:border-t-[#E9E4E4] after:border-b md:after:border-b-0 md:after:border-r after:border-r-[#E9E4E4] mt-8">
                        <h5 class="mb-2">02. Processing</h5>
                        <p>30 january, 2021, 8:37 AM</p>
                        <span class="w-[26px] h-[26px] bg-[#28a745] text-white  rounded-full flex justify-center items-center absolute top-7 -left-12 md:left-[312px] ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19L21 7l-1.41-1.41z" />
                            </svg>
                        </span>
                    </div>
                    <div class="max-w-[290px] ml-9 md:ml-auto border border-[#E9E4E4] p-4 relative after:content after:absolute after:-left-[13px] after:top-1/2 after:rotate-45 after:-translate-y-1/2 after:w-[24px] after:h-[24px] after:bg-white after:border-l after:border-l-[#E9E4E4] after:border-b after:border-b-[#E9E4E4] mt-8">
                        <h5 class="mb-2">03. Shipping</h5>
                        <p>30 january, 2021, 8:37 AM</p>
                        <span class="w-[26px] h-[26px] bg-[#28a745] text-white  rounded-full flex justify-center items-center absolute top-7 -left-12">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19L21 7l-1.41-1.41z" /></svg>
                        </span>
                    </div>
                    <div class="max-w-[290px] ml-9 md:ml-0 border border-[#E9E4E4] p-4 relative after:content after:absolute after:-left-[13px] md:after:left-[277px] after:top-1/2 after:rotate-45 after:-translate-y-1/2 after:w-[24px] after:h-[24px] after:bg-white after:border-l md:after:border-l-0 after:border-b md:after:border-b-0 md:after:border-t after:border-t-[#E9E4E4] md:after:border-r after:border-r-[#E9E4E4] mt-8">
                        <h5 class="mb-2">04. delivery</h5>
                        <p>30 january, 2021, 8:37 AM</p>
                        <span class="w-[26px] h-[26px] bg-[#ffc107] text-white  rounded-full flex justify-center items-center absolute top-7 -left-12 md:left-[312px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256">
                                <path fill="currentColor"
                                    d="M128 28a100 100 0 1 0 100 100A100.2 100.2 0 0 0 128 28Zm0 192a92 92 0 1 1 92-92a92.1 92.1 0 0 1-92 92Zm-4-84V80a4 4 0 0 1 8 0v56a4 4 0 0 1-8 0Zm12 36a8 8 0 1 1-8-8a8 8 0 0 1 8 8Z" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer area -->
    <?php
    include('../../components/footer/index.php');
    
    ?>
    <!-- footer area end -->

    <!-- copyright -->
    
    <!-- copyright end -->

    <!-- script -->
    <script src="../../assets/js/nice-select2.js"></script>
    <script src="../../assets/js/main.js"></script>
</body>

</html>