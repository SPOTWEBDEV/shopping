<?php
include('../../server/database.php');
$auth = false;   
if(isset($_SESSION['login_id'])){
    $id = $_SESSION['login_id'];
    $sql = "SELECT * FROM `client` WHERE `id`='$id'";
    $fetch = mysqli_query($connection, $sql);
    if(mysqli_num_rows($fetch)){
        while($row = mysqli_fetch_assoc($fetch)){
            $id = $row['id'];
            $name = $row['username'];
            $email = $row['email'];
            $phone_number = $row['phone_number'];
            $auth = true;   
              
        }
    }
}else{
    
     header("location:$domain  ./index.php")  ;
    
    

}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rafcart-Tailwind</title>
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
include('../../include/mobile/index.php');
?>

    <!-- breadcrumbs -->
    <div class="container py-5 flex items-center">
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
        <a href="#" class="text-secondary text-[13px] sm:text-base">Profile Information</a>
    </div>
    <!-- breadcrumbs end-->

    <!-- account -->
    <div class="container grid grid-cols-12 gap-6 pb-14">
        <!--  account sidebar  -->
        <div x-data="{isOpen: false}" class="col-span-12 lg:col-span-3 relative">
            <div @click.outside="isOpen=false">
                <div class="box_shadow px-4 py-2 flex gap-5 items-center">
                    <div class="w-12 border border-[#E9E4E4] rounded-full p-1">
                        <a href="my-account.html">
                            <img loading="lazy" src="../../assets/images/avatar-2.png" alt="user">
                        </a>
                    </div>

                    <div class="acprof_cont">
                        <p>Hello,</p>
                        <h4>Russell Ahmed</h4>
                    </div>

                    <button @click="isOpen=!isOpen" class="flex ml-auto border border-primary -mt-2 rounded  p-1 lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M4 18q-.425 0-.712-.288Q3 17.425 3 17t.288-.712Q3.575 16 4 16h16q.425 0 .712.288q.288.287.288.712t-.288.712Q20.425 18 20 18Zm0-5q-.425 0-.712-.288Q3 12.425 3 12t.288-.713Q3.575 11 4 11h16q.425 0 .712.287q.288.288.288.713t-.288.712Q20.425 13 20 13Zm0-5q-.425 0-.712-.287Q3 7.425 3 7t.288-.713Q3.575 6 4 6h16q.425 0 .712.287Q21 6.575 21 7t-.288.713Q20.425 8 20 8Z" />
                        </svg>
                    </button>
                </div>

                <div :class="isOpen ? 'opacity-100 visible top-20' : 'opacity-0 invisible top-0'" class="w-[300px] lg:w-full lg:mt-6 box_shadow px-4 py-6 bg-white absolute  lg:static lg:visible  lg:opacity-100 z-10 transition-all duration-300">
                    <div class="border-b">
                        <a href="my-account.html" class="flex gap-2 items-center text-lg lg:text-base xl:text-lg font-medium hover:text-primary group">
                            <span class="group-hover:text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M22 3H2c-1.09.04-1.96.91-2 2v14c.04 1.09.91 1.96 2 2h20c1.09-.04 1.96-.91 2-2V5a2.074 2.074 0 0 0-2-2m0 16H2V5h20v14m-8-2v-1.25c0-1.66-3.34-2.5-5-2.5c-1.66 0-5 .84-5 2.5V17h10M9 7a2.5 2.5 0 0 0-2.5 2.5A2.5 2.5 0 0 0 9 12a2.5 2.5 0 0 0 2.5-2.5A2.5 2.5 0 0 0 9 7m5 0v1h6V7h-6m0 2v1h6V9h-6m0 2v1h4v-1h-4" />
                                </svg>
                            </span>
                            Manage My Account
                        </a>
                        <a href="profile-information.html" class="pl-7 pt-1 block text-primary">Profile
                            Information</a>
                        <a href="manage-address.html" class="pl-7 pt-1 block hover:text-primary">Manage
                            Address</a>
                        <a href="change-password.html" class="pl-7 pt-1 pb-3 block hover:text-primary">Change
                            Password</a>
                    </div>
                    <div class="border-b mt-3">
                        <a href="order-history.html" class="flex gap-2 items-center text-[18px] font-medium hover:text-primary group">
                            <span class="group-hover:text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
                                    <path fill="currentColor"
                                        d="M12 5c-1.645 0-3 1.355-3 3c0 .353.073.684.188 1H4v6h1v13h22V15h1V9h-5.188c.115-.316.188-.647.188-1c0-1.645-1.355-3-3-3c-1.75 0-2.94 1.33-3.72 2.438c-.103.148-.188.292-.28.437c-.092-.145-.177-.29-.28-.438C14.94 6.33 13.75 5 12 5zm0 2c.626 0 1.436.67 2.063 1.563c.152.217.13.23.25.437H12c-.565 0-1-.435-1-1s.435-1 1-1zm8 0c.565 0 1 .435 1 1s-.435 1-1 1h-2.313c.12-.206.098-.22.25-.438C18.564 7.672 19.375 7 20 7zM6 11h20v2h-9v-1h-2v1H6v-2zm1 4h18v11h-8V16h-2v10H7V15z" />
                                </svg>
                            </span>
                            My Order History
                        </a>
                        <a href="return-order.html" class="pl-7 pt-1 block hover:text-primary">My Returns</a>
                        <a href="order-cencel.html" class="pl-7 pt-1 block hover:text-primary">My
                            Cancellations</a>
                        <a href="my-reviews.html" class="pl-7 pt-1 pb-3 block hover:text-primary">My Reviews</a>
                    </div>
                    <div class="border-b mt-3">
                        <a href="payment-method.html" class="flex gap-2 items-center text-lg lg:text-base xl:text-lg font-medium hover:text-primary group">
                            <span class="group-hover:text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 2048 2048">
                                    <path fill="currentColor"
                                        d="M1888 256q33 0 62 12t51 35t34 51t13 62v1088q0 33-12 62t-35 51t-51 34t-62 13H160q-33 0-62-12t-51-35t-34-51t-13-62V416q0-33 12-62t35-51t51-34t62-13h1728zM160 384q-14 0-23 9t-9 23v224h1792V416q0-14-9-23t-23-9H160zm1728 1152q14 0 23-9t9-23V768H128v736q0 14 9 23t23 9h1728zm-480-384h256v128h-256v-128z" />
                                </svg>
                            </span>
                            Payments Methods
                        </a>
                        <a href="vaucher.html" class="pl-7 pt-1 pb-3 block hover:text-primary">Voucher</a>
                    </div>
                    <div class="border-b mt-3">
                        <a href="wishlist.html" class="flex gap-2 items-center text-[18px] font-medium pb-3 hover:text-primary group">
                            <span class="group-hover:text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256">
                                    <path fill="currentColor"
                                        d="M128 220.2a13.6 13.6 0 0 1-9.9-4.1L35 133a58 58 0 0 1 2.2-84.2a56.5 56.5 0 0 1 41.6-14a62.8 62.8 0 0 1 40.3 18.3L128 62l11-11a57.9 57.9 0 0 1 84.1 2.2a56.2 56.2 0 0 1 14.1 41.6a62.8 62.8 0 0 1-18.3 40.3l-81 81a13.6 13.6 0 0 1-9.9 4.1Zm5.6-8.3ZM75 46.7a44 44 0 0 0-29.7 11.1a45.8 45.8 0 0 0-1.8 66.7l83.1 83.1a1.9 1.9 0 0 0 2.8 0l81-81c18.2-18.2 19.9-47.5 3.8-65.3a45.8 45.8 0 0 0-66.7-1.8l-15.3 15.2a6.1 6.1 0 0 1-8.5 0l-13.1-13.1A50.3 50.3 0 0 0 75 46.7Z" />
                                </svg>
                            </span>
                            My Wishlist
                        </a>
                    </div>
                    <div class="mt-4">
                        <a href="login.html" class="flex gap-2 items-center text-[18px] font-medium hover:text-primary group">
                            <span class="group-hover:text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                    <path fill="currentColor"
                                        d="M10.5 2.5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0v-6ZM13.743 4a.5.5 0 1 0-.499.867a6.5 6.5 0 1 1-6.494.004a.5.5 0 1 0-.5-.866A7.5 7.5 0 1 0 13.743 4Z" />
                                </svg>
                            </span>
                            Log Out
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- account content -->
        <div class="col-span-12 lg:col-span-9 box_shadow px-6 py-8">
            <div class="acprof_info_wrap shadow_sm">
                <h4 class="text-lg mb-3">Profile Information</h4>
                <form action="">
                    <div>
                        <div class="sm:flex gap-6">
                            <div class="w-full">
                                <label>First Name</label>
                                <input class="w-full border border-[#E9E4E4] rounded focus:border-primary focus:ring-0 mt-1 block" type="text" Value="John">
                            </div>
                            <div class="w-full mt-6 sm:mt-0">
                                <label>Last Name</label>
                                <input class="w-full border border-[#E9E4E4] rounded focus:border-primary focus:ring-0 mt-1 block" type="text" Value="Doe">
                            </div>
                        </div>
                        <div class="sm:flex gap-6 mt-6">
                            <div class="w-full">
                                <label>Birthday</label>
                                <input class="w-full border border-[#E9E4E4] rounded focus:border-primary focus:ring-0 mt-1 block" type="date" value="1998-01-08">
                            </div>
                            <div class="w-full mt-6 sm:mt-0">
                                <label>Gender</label>
                                <select class="nice-select w-full mt-1">
                                    <option selected>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="sm:flex gap-6 mt-16 sm:mt-6">
                            <div class="w-full">
                                <label>Email Address</label>
                                <input class="w-full border border-[#E9E4E4] rounded focus:border-primary focus:ring-0 mt-1 block" type="text" value="example@mail.com">
                            </div>
                            <div class="w-full mt-6 sm:mt-0">
                                <label>Phone Number</label>
                                <input class="w-full border border-[#E9E4E4] rounded focus:border-primary focus:ring-0 mt-1 block" type="text" value="123 456-789">
                            </div>
                        </div>
                        <div class="mt-8">
                            <button type="submit" class="default_btn rounded small">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- footer area -->
    <?php
    
    include("../../include/client/footer/index.php");
    
    
    ?>
    <!-- footer area end -->

    <!-- copyright -->
   
    <!-- copyright end -->

    <!-- script -->
    <script src="../../assets/js/nice-select2.js"></script>
    <script src="../../assets/js/main.js"></script>
</body>

</html>