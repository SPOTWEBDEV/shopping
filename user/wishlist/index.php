<?php include('../../server/connection.php');
include('../../server/clients/auth/index.php');


if(isset($_GET['del_id'])){
    $del_id = $_GET['del_id'];

    $select = mysqli_query($connection, "DELETE FROM `wishlist` WHERE `id`='$del_id'");

    if($select){
        echo "<script>alert('You have successfull remove item from wishlist ')</script>";
    }else{
        echo "<script>alert('Error occur when trying to  remove item from wishlist ')</script>";
    };

};



?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.rslahmed.dev/<?php echo $sitename ?> ||/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Apr 2024 11:53:02 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $sitename ?> || Wishlist</title>
    <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/nice-select2.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
    <script defer src="../../assets/js/alpine.min.js"></script>
</head>

<body>
    <!--Preloader-->
    <?php include('../../components/loader/Preloader.php') ?>
    <!--Preloader end-->

    <?php include('../../components/nav/index.php') ?>


    <!-- breadcrumbs -->
    <div class="container py-5 flex items-center">
        <a href="index-1.html" class="flex  items-center">
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
        <a href="#" class="text-secondary text-[13px] sm:text-base"> Wishlist </a>
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
            <?php

            $select_wishlist = mysqli_query($connection, "SELECT product_table.*, wishlist.id as wishlist_id  FROM wishlist,product_table WHERE product_table.id = wishlist.product_id AND wishlist.user_id = $id ");
            echo mysqli_error($connection);
            if(mysqli_num_rows($select_wishlist)){
                while ($row_wishlist = mysqli_fetch_assoc($select_wishlist)) { ?>
                    <div class="md:flex justify-between items-center border rounded p-5">
                        <div class="w-20 h-20">
                            <img loading="lazy" class="w-full h-full object-cover" src="../../uploads/products/<?php echo $row_wishlist['product_front_photo'] ?>" alt="product">
                        </div>
                        <div class="mt-6 md:mt-0">
                            <a href="product-view.html" class="hover:text-primary transition durition-300">
                                <h5 class="capitalize"><?php echo $row_wishlist['product_name'] ?></h5>
                            </a>
                            <p class="instock mb-0">Availability: <span class="text-[#28A745]">In Stock</span></p>
                        </div>
    
                        <div class="text-[18px] text-primary font-semibold mt-2 md:mt-0">
                            $<?php echo number_format($row_wishlist['product_price']) ?>
                        </div>
                        <div class="flex justify-between md:gap-12 items-center mt-4 md:mt-0">
                            <div class="group">
                                <button product_id="<?php echo $row_wishlist['user_id']  ?>"  class="flex gap-2 items-center border border-primary bg-primary text-white text-sm uppercase px-4 py-2 rounded hover:bg-white hover:text-primary transition duration-300">
                                    <span class="text-white group-hover:text-primary transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
                                            <path fill="currentColor" d="m209.7 131.9l12.2-66.8a6.1 6.1 0 0 0-1.3-4.9A5.8 5.8 0 0 0 216 58H53l-5.2-28.5A13.9 13.9 0 0 0 34.1 18H16a6 6 0 0 0 0 12h18.1a2 2 0 0 1 1.9 1.6l27.7 152.2A26 26 0 1 0 106 204a25.6 25.6 0 0 0-4.1-14h60.2a25.6 25.6 0 0 0-4.1 14a26 26 0 1 0 26-26H74.8l-5.1-28h118.4a22 22 0 0 0 21.6-18.1ZM94 204a14 14 0 1 1-14-14a14 14 0 0 1 14 14Zm104 0a14 14 0 1 1-14-14a14 14 0 0 1 14 14ZM55.2 70h153.6l-10.9 59.8a10 10 0 0 1-9.8 8.2H67.6Z" />
                                        </svg>
                                    </span> Message Seller</button>
                            </div>
                            <a href="?del_id=<?php echo $row_wishlist['wishlist_id'] ?>" onclick="return confirm('Are you sure that you want to remove this item from the  wishlist')">
                            <div class="cursor-pointer hover:text-primary transition">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M7 21q-.825 0-1.412-.587Q5 19.825 5 19V6q-.425 0-.713-.287Q4 5.425 4 5t.287-.713Q4.575 4 5 4h4q0-.425.288-.713Q9.575 3 10 3h4q.425 0 .713.287Q15 3.575 15 4h4q.425 0 .712.287Q20 4.575 20 5t-.288.713Q19.425 6 19 6v13q0 .825-.587 1.413Q17.825 21 17 21ZM7 6v13h10V6Zm2 10q0 .425.288.712Q9.575 17 10 17t.713-.288Q11 16.425 11 16V9q0-.425-.287-.713Q10.425 8 10 8t-.712.287Q9 8.575 9 9Zm4 0q0 .425.288.712q.287.288.712.288t.713-.288Q15 16.425 15 16V9q0-.425-.287-.713Q14.425 8 14 8t-.712.287Q13 8.575 13 9ZM7 6v13V6Z" />
                                </svg>
                            </div>
                            </a>
                        </div>
                    </div>
    
                <?php }
    
            
                
            }else{ ?>
            <div class="md:flex justify-between items-center border rounded p-5">
            <p>YOU DON'T HAVE ANY WISHLISH</p>
            </div>
             

           <?php }
            
            ?>


        </div>
    </div>

    <!-- footer area -->
    <?php include('../../components/footer/index.php') ?>
    <!-- footer area end -->



    <!-- script -->
    <script src="../../assets/js/nice-select2.js"></script>
    <script src="../../assets/js/main.js"></script>
</body>

</html>