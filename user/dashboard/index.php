<?php
include('../../server/database.php');
include('../../server/clients/auth/index.php');




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Markethub247</title>
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
        <a href="<?php echo "$domain" ?>/index.php" class="flex  items-center">
            <span class="text-primary">
                <svg width="17" height="17" viewBox="0 0 32 32">
                    <path fill="currentColor" d="m16 2.594l-.719.687l-13 13L3.72 17.72L5 16.437V28h9V18h4v10h9V16.437l1.281 1.282l1.438-1.438l-13-13zm0 2.844l9 9V26h-5V16h-8v10H7V14.437z" />
                </svg>
            </span>
            <span>
                <svg width="22" height="22" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6l-6-6z" />
                </svg>
            </span>

        </a>
        <a href="<?php echo "$domain" ?>/user/dashboard/index.php" class="text-secondary text-[13px] sm:text-base"> My Account </a>
    </div>
    <!-- breadcrumbs end-->

    <!-- account -->
    <div class="container grid grid-cols-12 gap-6 pb-14">
        <!--  account sidebar  -->
        <div x-data="{isOpen: false}" class="col-span-12 lg:col-span-3 relative">
            <div @click.outside="isOpen=false">


                <?php
                include('../../components/nav/sidenav.php');
                ?>
            </div>
        </div>
        <!-- account content -->
        <div class="col-span-12 lg:col-span-9">
            <div class="account_cont_wrap">
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 md:col-span-4 box_shadow p-6 min-h-[225px]">
                        <div class="flex justify-between items-center">
                            <h4 class="text-lg">Personal Profile</h4>
                            <a href="<?php echo $domain  ?>user/shipping/" class="text-primary">Edit</a>
                        </div>
                        <div class="mt-4">
                            <?php
                            $statement = "SELECT * FROM `client` WHERE `id`='$id'";
                            $query = mysqli_query($connection, $statement);
                            if (mysqli_num_rows($query) > 0) {
                                while ($row = mysqli_fetch_assoc($query)) { ?>


                                    <p class="font-semibold"><?php echo $row['username'] ?></p>
                                    <p><?php echo $row['email'] ?></p>
                                    <p><?php echo $row['phone_number'] ?></p>

                            <?php
                                }
                            }


                            ?>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-4 box_shadow p-6 min-h-[225px]">
                        <div class="flex justify-between items-center">
                            <h4 class="text-lg">Shipping Address</h4>
                            <a href="<?php echo $domain ?>user/settings/edit-profile/" class="text-primary">Edit</a>
                        </div>
                        <div class="mt-4">
                            <p class="font-semibold">Counry: <?php echo ($country != "")? "$country":"none" ?></p>
                            <p><span class="font-semibold">State</span>: <?php echo ($state != "")? "$state":"none" ?></p>
                            <p><span class="font-semibold">Address</span>: <?php echo ($address != "")? "$address":"none" ?></p>
                            <p><span class="font-semibold">Phone Number</span>: <?php echo ($phone_number != "")? "$phone_number":"none" ?></p>
                        </div>
                    </div>
                    
                </div>
                <div class="box_shadow px-6 py-8 mt-10">
                    <h4 class="text-lg">Recent Orders</h4>
                    <div class="border px-6 py-8 mt-6">
                        <div class="text-center flex justify-between sm:items-center mt-4 md:mt-0">
                            <div class="flex gap-3 justify-center">
                                <img class="w-[80px] h-[50px]" src="../../assets/images/tv.png" alt="product">
                                <img class="w-[80px] h-[50px] hidden sm:block" src="../../assets/images/tv.png" alt="product">
                            </div>
                            <div class="mt-4 md:mt-0">
                                <a href="order-details.html" class="border border-primary text-primary text-sm font-medium px-2 sm:px-4 py-1 sm:py-2 rounded hover:bg-primary hover:text-white transition duration-300">View
                                    Order</a>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-5 justify-between items-center mt-6">
                            <div>
                                <h5>Order Number</h5>
                                <p>23E34RT3</p>
                            </div>
                            <div>
                                <h5>Purchased</h5>
                                <p>01 March 2021</p>
                            </div>
                            <div>
                                <h5>Quantity</h5>
                                <p>x3</p>
                            </div>
                            <div>
                                <h5>Total</h5>
                                <p>$120</p>
                            </div>
                            <div>
                                <h5>Status</h5>
                                <p class="text-primary">Cancelled</p>
                            </div>
                        </div>
                    </div>
                    <div class="border px-6 py-8 mt-6">
                        <div class="flex justify-between sm:items-center">
                            <div class="flex gap-3 justify-center">
                                <img class="w-[80px] h-[50px]" src="../../assets/images/laptop-1.png" alt="product">
                                <img class="w-[80px] h-[50px] hidden sm:block" src="../../assets/images/laptop-1.png" alt="product">
                                <img class="w-[80px] h-[50px] hidden sm:block" src="../../assets/images/laptop-1.png" alt="product">
                            </div>
                            <div class="mt-4 sm:mt-0 text-center">
                                <a href="order-details.html" class="border border-primary text-primary text-sm font-medium px-2 sm:px-4 py-1 sm:py-2 rounded hover:bg-primary hover:text-white transition duration-300">View
                                    Order</a>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-5 justify-between items-center mt-6">
                            <div>
                                <h5>Order Number</h5>
                                <p>23E34RT3</p>
                            </div>
                            <div>
                                <h5>Purchased</h5>
                                <p>01 March 2021</p>
                            </div>
                            <div>
                                <h5>Quantity</h5>
                                <p>x3</p>
                            </div>
                            <div>
                                <h5>Total</h5>
                                <p>$120</p>
                            </div>
                            <div>
                                <h5>Status</h5>
                                <p class="text-[#08B54C]">Delivered</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer area -->
    <?php

    include("../../components/footer/index.php");


    ?>
    <!-- footer area end -->


    <!-- script -->
    <script src="../../assets/js/nice-select2.js"></script>
    <script src="../../assets/js/main.js"></script>

</body>

</html>