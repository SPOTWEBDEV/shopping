<?php
include('../../server/database.php');
include('../../server/clients/auth/index.php');





if(isset($_POST['shipping_btn'])){
   $country = $_POST['country'];
   $state = $_POST['state'];
   $address = $_POST['address'];

   if(!empty($country) && !empty($state) && !empty($address)){

    $update = mysqli_query($connection,"UPDATE `client` SET `country`='$country',`state`='$state',`address`='$address' WHERE `id`='$id'");

     if($update){
        echo "<script>alert('shipping information updated successfully')</script>";
     }else{
        echo "<script>alert('Error occur when trying to updated shipping information')</script>";
     }

       
     
   }else{
        echo "<script>alert('User Input is empty')</script>";
   }
   
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

    
   <?php include('../../components/nav/index.php') ?>

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
        <a href="#" class="text-secondary text-[13px] sm:text-base">Shippping Information</a>
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
        <div class="col-span-12 lg:col-span-9 box_shadow px-6 py-8">
            <div class="acprof_info_wrap shadow_sm">
                <!--end -->
                <div class="block w-full xl:block xl:w-80 shrink-0 menu-content">
                        <div class="h-[calc(100vh_-_theme('spacing.10')_*_6)] xl:min-h-[calc(100vh_-_theme('height.header')_*_2.4)] card xl:h-[calc(100%_-_theme('spacing.5'))]">
                            <div class="flex flex-col h-full">
                                <div class="tab-content">
                                    <div class="block tab-pane" id="mainChatList">
                                        <div class="card-body">
                                            <div class="flex items-center gap-3">
                                                <button class="inline-flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 shrink-0 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500"><i data-lucide="chevrons-left" class="mx-auto size-4"></i></button>
                                                <h6 class="text-15 grow">Chats</h6>
                                                <button data-modal-target="addContactModal" class="inline-flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 shrink-0 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500"><i data-lucide="plus" class="mx-auto size-4"></i></button>
                                            </div>
                                            <div class="relative mt-5">
                                                <input type="text" class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Search for ..." autocomplete="off">
                                                <i data-lucide="search" class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                                            </div>
                                        </div>
                                        <div data-simplebar class="max-h-[calc(100vh_-_380px)] xl:max-h-[calc(100vh_-_300px)]">
                                            <ul class="flex flex-col gap-1" id="chatList">
                                                <li class="px-5">
                                                    <p class="mb-1 text-slate-500 dark:text-zink-200">Recent Chats</p>
                                                </li>
                                                <li>
                                                    <a href="#!" class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 dark:[&.active]:bg-zink-600 group/item active online">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                            <img src="assets/images/avatar-5.png" alt="" class="rounded-full h-9">
                                                            <span class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                        </div>
                                                        <div class="overflow-hidden grow">
                                                            <h6 class="mb-1">Marie Prohaska</h6>
                                                            <p class="text-xs truncate text-slate-500 dark:text-zink-200">I will purchase it for support</p>
                                                        </div>
                                                        <div class="self-start shrink-0 text-slate-500 dark:text-zink-200">
                                                            <small>2 min ago</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!" class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                            <img src="assets/images/user-1.jpg" alt="" class="rounded-full h-9">
                                                            <span class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                        </div>
                                                        <div class="overflow-hidden grow">
                                                            <h6 class="mb-1">Kara Miller</h6>
                                                            <p class="text-xs truncate text-slate-500 dark:text-zink-200">Hey, how's it going?</p>
                                                        </div>
                                                        <div class="self-start shrink-0 text-slate-500 dark:text-zink-200">
                                                            <small>02:57 PM</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!" class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 online">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                            <img src="assets/images/avatar-5.png" alt="" class="rounded-full h-9">
                                                            <span class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                        </div>
                                                        <div class="overflow-hidden grow">
                                                            <h6 class="mb-1">Mark Walton</h6>
                                                            <p class="text-xs truncate text-slate-500 dark:text-zink-200">Hey, how's it going?</p>
                                                        </div>
                                                        <div class="self-start shrink-0 text-slate-500 dark:text-zink-200">
                                                            <small>Yesterday</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="px-5">
                                                    <p class="mb-1 text-slate-500 dark:text-zink-200">All Conversion</p>
                                                </li>
                                                <li>
                                                    <a href="#!" class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                            <img src="assets/images/user-2.jpg" alt="" class="rounded-full h-9">
                                                            <span class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                        </div>
                                                        <div class="overflow-hidden grow">
                                                            <h6 class="mb-1">Aurore Maggio</h6>
                                                            <p class="text-xs truncate text-slate-500 dark:text-zink-200">React Developer</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!" class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 online">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                            LP
                                                            <span class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                        </div>
                                                        <div class="overflow-hidden grow">
                                                            <h6 class="mb-1">Mark Walton</h6>
                                                            <p class="text-xs truncate text-slate-500 dark:text-zink-200">UI / UX Designer</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!" class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                            <img src="assets/images/avatar-5.png" alt="" class="rounded-full h-9">
                                                            <span class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                        </div>
                                                        <div class="overflow-hidden grow">
                                                            <h6 class="mb-1">Daniel Miller</h6>
                                                            <p class="text-xs truncate text-slate-500 dark:text-zink-200">ASP.Net Developer</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!" class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                            <img src="assets/images/user-3.jpg" alt="" class="rounded-full h-9">
                                                            <span class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                        </div>
                                                        <div class="overflow-hidden grow">
                                                            <h6 class="mb-1">Jaqueline Hammes</h6>
                                                            <p class="text-xs truncate text-slate-500 dark:text-zink-200">Angular Developer</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!" class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                            <img src="assets/images/avatar-8.png" alt="" class="rounded-full h-9">
                                                            <span class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                        </div>
                                                        <div class="overflow-hidden grow">
                                                            <h6 class="mb-1">Andrea Pesina</h6>
                                                            <p class="text-xs truncate text-slate-500 dark:text-zink-200">Laravel Developer</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!" class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 online">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                            <img src="assets/images/avatar-10.png" alt="" class="rounded-full h-9">
                                                            <span class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                        </div>
                                                        <div class="overflow-hidden grow">
                                                            <h6 class="mb-1">Bernard Pereira</h6>
                                                            <p class="text-xs truncate text-slate-500 dark:text-zink-200">Web Designer</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!" class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                            <img src="assets/images/user-4.jpg" alt="" class="rounded-full h-9">
                                                            <span class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                        </div>
                                                        <div class="overflow-hidden grow">
                                                            <h6 class="mb-1">William Jones</h6>
                                                            <p class="text-xs truncate text-slate-500 dark:text-zink-200">Project Manager</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hidden tab-pane" id="contactList">
                                        <div class="card-body">
                                            <div class="flex items-center gap-3">
                                                <button class="inline-flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 shrink-0 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500"><i data-lucide="chevrons-left" class="mx-auto size-4"></i></button>
                                                <h6 class="text-15 grow">Contacts</h6>
                                                <button data-modal-target="addContactModal" class="inline-flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 shrink-0 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500"><i data-lucide="plus" class="mx-auto size-4"></i></button>
                                            </div>
                                            <div class="relative mt-5">
                                                <input type="text" class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Search for ..." autocomplete="off">
                                                <i data-lucide="search" class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                                            </div>
                                        </div>
                                        <div data-simplebar class="max-h-[calc(100vh_-_390px)] xl:max-h-[calc(100vh_-_300px)]">
                                            <ul class="flex flex-col gap-1">
                                                <li class="px-5">
                                                    <p class="mb-1 text-slate-500 dark:text-zink-200">Contact List</p>
                                                </li>
                                                <li>
                                                    <div class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                            <img src="assets/images/user-2.jpg" alt="" class="rounded-full h-9">
                                                            <span class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                        </div>
                                                        <a href="#!" class="overflow-hidden grow">
                                                            <h6 class="mb-1">Aurore Maggio</h6>
                                                            <p class="text-xs truncate text-slate-500 dark:text-zink-200">React Developer</p>
                                                        </a>
                                                        <div class="relative dropdown shrink-0">
                                                            <button type="button" class="dropdown-toggle" id="contactListDropdown1" data-bs-toggle="dropdown"><i data-lucide="more-vertical" class="inline-block ml-1 size-4"></i></button>

                                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="contactListDropdown1">
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Send Message</a>
                                                                </li>
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Edit</a>
                                                                </li>
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                            LP
                                                            <span class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                        </div>
                                                        <a href="#!" class="overflow-hidden grow">
                                                            <h6 class="mb-1">Mark Walton</h6>
                                                            <p class="text-xs truncate text-slate-500 dark:text-zink-200">UI / UX Designer</p>
                                                        </a>
                                                        <div class="relative dropdown shrink-0">
                                                            <button type="button" class="dropdown-toggle" id="contactListDropdown1" data-bs-toggle="dropdown"><i data-lucide="more-vertical" class="inline-block ml-1 size-4"></i></button>

                                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="contactListDropdown1">
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Send Message</a>
                                                                </li>
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Edit</a>
                                                                </li>
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                            <img src="assets/images/avatar-5.png" alt="" class="rounded-full h-9">
                                                            <span class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                        </div>
                                                        <a href="#!" class="overflow-hidden grow">
                                                            <h6 class="mb-1">Daniel Miller</h6>
                                                            <p class="text-xs truncate text-slate-500 dark:text-zink-200">ASP.Net Developer</p>
                                                        </a>
                                                        <div class="relative dropdown shrink-0">
                                                            <button type="button" class="dropdown-toggle" id="contactListDropdown1" data-bs-toggle="dropdown"><i data-lucide="more-vertical" class="inline-block ml-1 size-4"></i></button>

                                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="contactListDropdown1">
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Send Message</a>
                                                                </li>
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Edit</a>
                                                                </li>
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                            <img src="assets/images/user-3.jpg" alt="" class="rounded-full h-9">
                                                            <span class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                        </div>
                                                        <a href="#!" class="overflow-hidden grow">
                                                            <h6 class="mb-1">Jaqueline Hammes</h6>
                                                            <p class="text-xs truncate text-slate-500 dark:text-zink-200">Angular Developer</p>
                                                        </a>
                                                        <div class="relative dropdown shrink-0">
                                                            <button type="button" class="dropdown-toggle" id="contactListDropdown1" data-bs-toggle="dropdown"><i data-lucide="more-vertical" class="inline-block ml-1 size-4"></i></button>

                                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="contactListDropdown1">
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Send Message</a>
                                                                </li>
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Edit</a>
                                                                </li>
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                            <img src="assets/images/avatar-8.png" alt="" class="rounded-full h-9">
                                                            <span class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                        </div>
                                                        <a href="#!" class="overflow-hidden grow">
                                                            <h6 class="mb-1">Andrea Pesina</h6>
                                                            <p class="text-xs truncate text-slate-500 dark:text-zink-200">Laravel Developer</p>
                                                        </a>
                                                        <div class="relative dropdown shrink-0">
                                                            <button type="button" class="dropdown-toggle" id="contactListDropdown1" data-bs-toggle="dropdown"><i data-lucide="more-vertical" class="inline-block ml-1 size-4"></i></button>

                                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="contactListDropdown1">
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Send Message</a>
                                                                </li>
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Edit</a>
                                                                </li>
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                            <img src="assets/images/avatar-10.png" alt="" class="rounded-full h-9">
                                                            <span class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                        </div>
                                                        <a href="#!" class="overflow-hidden grow">
                                                            <h6 class="mb-1">Bernard Pereira</h6>
                                                            <p class="text-xs truncate text-slate-500 dark:text-zink-200">Web Designer</p>
                                                        </a>
                                                        <div class="relative dropdown shrink-0">
                                                            <button type="button" class="dropdown-toggle" id="contactListDropdown1" data-bs-toggle="dropdown"><i data-lucide="more-vertical" class="inline-block ml-1 size-4"></i></button>

                                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="contactListDropdown1">
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Send Message</a>
                                                                </li>
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Edit</a>
                                                                </li>
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                            <img src="assets/images/user-4.jpg" alt="" class="rounded-full h-9">
                                                            <span class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                        </div>
                                                        <a href="#!" class="overflow-hidden grow">
                                                            <h6 class="mb-1">William Jones</h6>
                                                            <p class="text-xs truncate text-slate-500 dark:text-zink-200">Project Manager</p>
                                                        </a>
                                                        <div class="relative dropdown shrink-0">
                                                            <button type="button" class="dropdown-toggle" id="contactListDropdown1" data-bs-toggle="dropdown"><i data-lucide="more-vertical" class="inline-block ml-1 size-4"></i></button>

                                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="contactListDropdown1">
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Send Message</a>
                                                                </li>
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Edit</a>
                                                                </li>
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                            <img src="assets/images/avatar-8.png" alt="" class="rounded-full h-9">
                                                            <span class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                        </div>
                                                        <a href="#!" class="overflow-hidden grow">
                                                            <h6 class="mb-1">Andrea Pesina</h6>
                                                            <p class="text-xs truncate text-slate-500 dark:text-zink-200">Laravel Developer</p>
                                                        </a>
                                                        <div class="relative dropdown shrink-0">
                                                            <button type="button" class="dropdown-toggle" id="contactListDropdown1" data-bs-toggle="dropdown"><i data-lucide="more-vertical" class="inline-block ml-1 size-4"></i></button>

                                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="contactListDropdown1">
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Send Message</a>
                                                                </li>
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Edit</a>
                                                                </li>
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                            <img src="assets/images/avatar-10.png" alt="" class="rounded-full h-9">
                                                            <span class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                        </div>
                                                        <a href="#!" class="overflow-hidden grow">
                                                            <h6 class="mb-1">Bernard Pereira</h6>
                                                            <p class="text-xs truncate text-slate-500 dark:text-zink-200">Web Designer</p>
                                                        </a>
                                                        <div class="relative dropdown shrink-0">
                                                            <button type="button" class="dropdown-toggle" id="contactListDropdown1" data-bs-toggle="dropdown"><i data-lucide="more-vertical" class="inline-block ml-1 size-4"></i></button>

                                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="contactListDropdown1">
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Send Message</a>
                                                                </li>
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Edit</a>
                                                                </li>
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                            <img src="assets/images/user-4.jpg" alt="" class="rounded-full h-9">
                                                            <span class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                        </div>
                                                        <a href="#!" class="overflow-hidden grow">
                                                            <h6 class="mb-1">Mary Segura</h6>
                                                            <p class="text-xs truncate text-slate-500 dark:text-zink-200">NodeJS Developer</p>
                                                        </a>
                                                        <div class="relative dropdown shrink-0">
                                                            <button type="button" class="dropdown-toggle" id="contactListDropdown1" data-bs-toggle="dropdown"><i data-lucide="more-vertical" class="inline-block ml-1 size-4"></i></button>

                                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="contactListDropdown1">
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Send Message</a>
                                                                </li>
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Edit</a>
                                                                </li>
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                            PJ
                                                            <span class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                        </div>
                                                        <a href="#!" class="overflow-hidden grow">
                                                            <h6 class="mb-1">Pearl Johnson</h6>
                                                            <p class="text-xs truncate text-slate-500 dark:text-zink-200">Team Leader</p>
                                                        </a>
                                                        <div class="relative dropdown shrink-0">
                                                            <button type="button" class="dropdown-toggle" id="contactListDropdown1" data-bs-toggle="dropdown"><i data-lucide="more-vertical" class="inline-block ml-1 size-4"></i></button>

                                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="contactListDropdown1">
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Send Message</a>
                                                                </li>
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Edit</a>
                                                                </li>
                                                                <li>
                                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hidden tab-pane" id="botChat">
                                        <div class="card-body">
                                            <div class="flex items-center gap-3">
                                                <button class="inline-flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 shrink-0 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500"><i data-lucide="chevrons-left" class="mx-auto size-4"></i></button>
                                                <h6 class="text-15 grow">AI Bot</h6>
                                            </div>
                                            <div class="relative mt-5">
                                                <input type="text" class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Search for ..." autocomplete="off">
                                                <i data-lucide="search" class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                                            </div>
                                        </div>
                                        <p class="mx-5 mb-2 text-slate-500 dark:text-zink-200">Recent Find</p>
                                        <div data-simplebar class="max-h-[calc(100vh_-_410px)] xl:max-h-[calc(100vh_-_330px)]">
                                            <ul class="flex flex-col gap-1">
                                                <li>
                                                    <a href="#!" class="flex items-center gap-3 px-5 py-2.5 [&.active]:bg-slate-50 dark:[&.active]:bg-zink-600 active">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 w-7 h-7 dark:text-zink-200 shrink-0">
                                                            <i data-lucide="messages-square" class="size-4"></i>
                                                        </div>
                                                        <h6 class="font-medium truncate grow">What is Tailwind CSS, and what is Utility-First CSS?</h6>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!" class="flex items-center gap-3 px-5 py-2.5 [&.active]:bg-slate-50 dark:[&.active]:bg-zink-600">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 w-7 h-7 dark:text-zink-200 shrink-0">
                                                            <i data-lucide="messages-square" class="size-4"></i>
                                                        </div>
                                                        <h6 class="font-medium truncate grow">How to install and set up Tailwind CSS in a project?</h6>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!" class="flex items-center gap-3 px-5 py-2.5 [&.active]:bg-slate-50 dark:[&.active]:bg-zink-600">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 w-7 h-7 dark:text-zink-200 shrink-0">
                                                            <i data-lucide="messages-square" class="size-4"></i>
                                                        </div>
                                                        <h6 class="font-medium truncate grow">How to customize the configuration file in Tailwind CSS?</h6>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!" class="flex items-center gap-3 px-5 py-2.5 [&.active]:bg-slate-50 dark:[&.active]:bg-zink-600">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 w-7 h-7 dark:text-zink-200 shrink-0">
                                                            <i data-lucide="messages-square" class="size-4"></i>
                                                        </div>
                                                        <h6 class="font-medium truncate grow">How to use responsive variants in Tailwind CSS?</h6>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!" class="flex items-center gap-3 px-5 py-2.5 [&.active]:bg-slate-50 dark:[&.active]:bg-zink-600">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 w-7 h-7 dark:text-zink-200 shrink-0">
                                                            <i data-lucide="messages-square" class="size-4"></i>
                                                        </div>
                                                        <h6 class="font-medium truncate grow">Why is Tailwind faster?</h6>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!" class="flex items-center gap-3 px-5 py-2.5 [&.active]:bg-slate-50 dark:[&.active]:bg-zink-600">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 w-7 h-7 dark:text-zink-200 shrink-0">
                                                            <i data-lucide="messages-square" class="size-4"></i>
                                                        </div>
                                                        <h6 class="font-medium truncate grow">What problem does Tailwind CSS solve?</h6>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!" class="flex items-center gap-3 px-5 py-2.5 [&.active]:bg-slate-50 dark:[&.active]:bg-zink-600">
                                                        <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 w-7 h-7 dark:text-zink-200 shrink-0">
                                                            <i data-lucide="messages-square" class="size-4"></i>
                                                        </div>
                                                        <h6 class="font-medium truncate grow">How to apply background image with linear gradient using Tailwind CSS ?</h6>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hidden tab-pane" id="profile">
                                        <div data-simplebar class="max-h-[calc(100vh_-_250px)] xl:max-h-full card-body">
                                            <div class="flex items-center gap-3">
                                            <h6 class="text-15 grow">Profile</h6>
                                                <button class="inline-flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 shrink-0 bg-slate-100 text-slate-500 hover:text-red-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-red-500"><i data-lucide="x" class="mx-auto size-4 "></i></button>
                                            </div>
                                            <div class="text-center">
                                                <div class="mx-auto mt-8 bg-pink-100 rounded-full size-20 dark:bg-pink-500/20">
                                                    <img src="assets/images/avatar-1.png" alt="" class="h-20 rounded-full">
                                                </div>
                                                <h5 class="mt-4 text-16">William Heineman</h5>
                                                <p class="text-slate-500 dark:text-zink-200">NextJs Developer</p>
                                            </div>
                                            <div class="mt-5">
                                                <p class="mb-3 text-slate-500 dark:text-zink-200">Object</p>
                                                <p>If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual.</p>
                                            </div>
                                            <div class="mt-5">
                                                <p class="mb-4 text-slate-500 dark:text-zink-200">Personal Information</p>
                                                <h6 class="mb-3 font-medium"><i data-lucide="phone" class="inline-block mr-1 size-4 text-slate-500 dark:text-zink-200"></i> <span class="align-middle">+(103) 1234 567 8954</span></h6>
                                                <h6 class="mb-3 font-medium"><i data-lucide="map-pin" class="inline-block mr-1 size-4 text-slate-500 dark:text-zink-200"></i> <span class="align-middle">California, USA</span></h6>
                                                <h6 class="font-medium"><i data-lucide="mail" class="inline-block mr-1 size-4 text-slate-500 dark:text-zink-200"></i> <span class="align-middle">william@tailwick.com</span></h6>
                                            </div>
                                            <div class="mt-5">
                                                <div class="flex items-center gap-2 mb-4">
                                                    <p class="text-slate-500 dark:text-zink-200 grow">Settings</p>
                                                    <a href="#!" class="text-sm underline text-slate-500 dark:text-zink-200 shrink-0">View More</a>
                                                </div>
                                                <div class="flex items-center mb-3">
                                                    <div class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                                        <input type="checkbox" name="muteNotification" id="muteNotification" class="absolute block transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer size-5 border-slate-200 dark:border-zink-600 bg-white/80 dark:bg-zink-400 peer/published checked:bg-custom-500 dark:checked:bg-custom-500 ltr:checked:right-0 rtl:checked:left-0 checked:border-custom-100 dark:checked:border-custom-900 arrow-none checked:bg-none">
                                                        <label for="muteNotification" class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-custom-100 dark:peer-checked/published:bg-custom-900 peer-checked/published:border-custom-100 dark:peer-checked/published:border-custom-900"></label>
                                                    </div>
                                                    <label for="muteNotification" class="inline-block text-base font-medium cursor-pointer">Mute Notifications</label>
                                                </div>
                                                <div class="flex items-center mb-3">
                                                    <div class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                                        <input type="checkbox" name="blockAccount" id="blockAccount" class="absolute block transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer size-5 border-slate-200 dark:border-zink-600 bg-white/80 dark:bg-zink-400 peer/published checked:bg-custom-500 dark:checked:bg-custom-500 ltr:checked:right-0 rtl:checked:left-0 checked:border-custom-100 dark:checked:border-custom-900 arrow-none checked:bg-none">
                                                        <label for="blockAccount" class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-custom-100 dark:peer-checked/published:bg-custom-900 peer-checked/published:border-custom-100 dark:peer-checked/published:border-custom-900"></label>
                                                    </div>
                                                    <label for="blockAccount" class="inline-block text-base font-medium cursor-pointer">Block Account</label>
                                                </div>
                                                <a href="#!">
                                                    <p class="mb-3"><i data-lucide="bell-ring" class="inline-block mr-1 size-4 text-slate-500 dark:text-zink-200"></i> <span class="align-middle">Custom Notification</span></p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden tab-pane" id="fileDocument">
                                        <div class="card-body">
                                            <div class="flex items-center gap-3">
                                                <button class="inline-flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 shrink-0 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500"><i data-lucide="chevrons-left" class="mx-auto size-4"></i></button>
                                                <h6 class="text-15 grow">Documents</h6>
                                            </div>
                                            <div class="relative mt-5">
                                                <input type="text" class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Search for ..." autocomplete="off">
                                                <i data-lucide="search" class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                                            </div>
                                        </div>
                                        <div data-simplebar class="max-h-[calc(100vh_-_380px)] xl:max-h-[calc(100vh_-_300px)]">
                                            <div class="flex flex-col gap-3">
                                                <a href="#!" class="flex items-center gap-3 !py-3 border-y border-dashed rounded-md card-body border-slate-200 dark:border-zink-500">
                                                    <div class="flex items-center justify-center text-sm font-semibold rounded-md size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0">
                                                        <img src="assets/images/img-2.jpg" alt="" class="object-cover rounded-md h-9">
                                                    </div>
                                                    <div class="grow">
                                                        <h6>Preview-01.jpg</h6>
                                                        <p class="text-slate-500 dark:text-zink-200">1.2 MB</p>
                                                    </div>
                                                </a>
                                                <a href="#!" class="flex items-center gap-3 !py-3 border-y border-dashed rounded-md card-body border-slate-200 dark:border-zink-500">
                                                    <div class="flex items-center justify-center text-sm font-semibold rounded-md size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0">
                                                        TXT
                                                    </div>
                                                    <div class="grow">
                                                        <h6>changelog.txt</h6>
                                                        <p class="text-slate-500 dark:text-zink-200">140.62 KB</p>
                                                    </div>
                                                </a>
                                                <a href="#!" class="flex items-center gap-3 !py-3 border-y border-dashed rounded-md card-body border-slate-200 dark:border-zink-500">
                                                    <div class="flex items-center justify-center text-sm font-semibold rounded-md size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0">
                                                        PSD
                                                    </div>
                                                    <div class="grow">
                                                        <h6>tailwick-design.psd</h6>
                                                        <p class="text-slate-500 dark:text-zink-200">97.59 MB</p>
                                                    </div>
                                                </a>
                                                <a href="#!" class="flex items-center gap-3 !py-3 border-y border-dashed rounded-md card-body border-slate-200 dark:border-zink-500">
                                                    <div class="flex items-center justify-center text-sm font-semibold rounded-md size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0">
                                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEwAAABMCAYAAADHl1ErAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDcuMS1jMDAwIDc5LmRhYmFjYmIsIDIwMjEvMDQvMTQtMDA6Mzk6NDQgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMi41IChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpGMDk0N0MyMDY4QjcxMUVFOTYxN0Q1OTIxQkQxNzgwRCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpGMDk0N0MyMTY4QjcxMUVFOTYxN0Q1OTIxQkQxNzgwRCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkYwOTQ3QzFFNjhCNzExRUU5NjE3RDU5MjFCRDE3ODBEIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkYwOTQ3QzFGNjhCNzExRUU5NjE3RDU5MjFCRDE3ODBEIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+iIlVCAAACB1JREFUeNrsXGtsFFUUPvfObl/bUoSQUEz0jzERBEQKWNTgIyoqgV8mhEQTTSRGkYdgRCHGmKCComCojwpKYpDEBENijAlRAXkKpSAWRawhmqjlLaXdst3duX53Zlra0t2Z2b13Ztt6mjN3dnrn9d1zz/nua5gQgrzI7I0rrZSRiQ0UKcuYip6/u84RV+ex/if6OE/ui6+weQg6h4hvFoJhl1tPIQS39ruO4Teu7hzrmcf+n0yZk3bmtWXToyvIq0SocOU7vOzdzv5neMsYQFgf9kMVJmCC7QU4NT0Pso+wSUE3/g/YFaTk5ntUm5oMGT5BnqgDXijCCwswth2PdCdZ/iWT8jps5g92C5PPsQcOfDJ1c8ZZLHEtNkno+4MRMIkQfBaf5O8Ueg/ApbFfN8gAg4MXbFKOJ38ILYG+OwgAE/Lee4Uvy8pUPSUZkykbsIAh2LAD0AlqajStcShH7QAFjO2Hg5+g+KLroFEHvAEF2D7KuxpmrJ7vOFX9rYECWD3adxP1Blx6E6C1Yv+Dfg4Y2wGdGNDNJD+7rKMZFRBg7BsEsmkBWzOaUVRm87X+A5iMhjsFsTtCisa1TvSs6x+ACdoDwG4LmRlLcosWgdiggqdFdCEF2Q1SGjZYnbLeaRHUFiJgEfgraVmTC6snxOJp8n3XFhJgBoA6CJ91CxWm5N0iUAkYkwyeHLCiRoTOt12k060XrP3AWqjyTwgaVTmCyqIllDLTfVka5Qqawjdh+9Dcqe78da6tlcZW3UhTrruZWhPx4BqpjJPBOW1vOkTNl85RabQ4U/X8B/pFGIAVOQ3p8d0P/tsep9Ejb6CZY6eFUvcam09S09m/AFhppiwfwxh3yrL1yZPy7aKRDWk+Xg5p9Var1yUkMeWQmjCor+dytBJR/GXhE4I8AJOIsH12F02m/vcQRWQbF+jSJ/Aa1wQAmORZbBdKqdouxb40QiLEMRZhDegablqOiP5AAICx3Th1qsUiiGfR8KyMWfd3ez4rz71anT5sawcJ43bXfGa4Pkz6KbPTl2aX0boAexA6DyXiKewNLx9K9X/+TvFEgtqTHVnztiUuU1XlMHq85r6MedqTCdqwZxvFkRZHolloBSMG/bvlAlWWlHupRMO1AIb6PgPJdKed6CpDimP025lm2nvyBIirkTXv2bYWGld1fVbAOlIp2nJ0P52Lt1FFcYkLcSWqGjIUlKKE0qbpgRbpsDDBVkl6Be/wkpfsyZSg8qIyKh9W5po3Fi2jkRXDXQgpo2uHjKBYUQxa7OmR02lPbrpFV5X8A7oM0SeGdIHyiOYaIJiTj6uOvqd0M/2F4C7yvGfUIca9BWzBr6g62RVA04jNg0UkLfCUWRj3nE+xhW0LADDp+Pki+DXpUZ9TYmFerMYa4FZqYeCTdCCgxrcF2mJYmrzG/PwszPBEcm3rMlRa2GsaeytEJtAWoORl9Vys1cKEch/2KS70tTbA7Im6veCzmLw8bixBqTdRjvO1zOB9GIASj+XSdPMMWCIxyu5Tpa4Zzs5v4YBGjXp9GFNpYR0ixxM9A5ZOV1jTw5kcsWKmnfI0ylr+ZtNzMW9/PEyphc0ie6xyrsYqmXQsqhMw07EsMQtVc2tePROeo6RSH/YkdDN0e0BR0pIZKO2t+fMwIywetjxIwB5GSX+pjOl76QpSz/Tvgd4KbdAN2GyU8ma1bUnuzirU8zAp9/sBjPt9NcgjKOHNPUpblfqJkur0Lp1VciZK93NSLCH6MCkjNQHGVsPPPE06xPTY/6+nt6JCC2Ao1bNIzkNHqbewUHsrUnosTLDXsd0CSziEtFwtYj54mKncws7r9GEnwMinALR67JcGaWHMysd0WNgvunnYzyjhqUgPq7MwIyweJuXbAIirOIJSnmhPQhFG/hbmPrVA9OjTVzbe2U7B9Lha0gCrqAGVO6DGwrzgzn3k9XTjjdicCbIteVAuNRbWpJRgoqSpzofFYbOvauutyCL7YWnjANwPeKXcAoHVV++hmpnMe173EDIXl2kOAzApP8lJwMKmHEW5WRjzVCUVRcmluNumXIBXOfm0EdFril1NfV7X8kvcE2AKouQLxMxVuQYO1RO4juCSAI0n3acZ9aVu1Yjnq8uwWZXPC2qY3iwahODSp4GniRJPTUn4JuZS4gZn1pwveyomy8Fn2ZaVr/fTNR/8OB6yGiXa4MWnGTxCHWlGF+MdVBQx6HKy51TxytIonW5JWHkMaxjUN614FsWyTsWL6ZxAf8z5rEK9230qS4vp9KUUzalrIM6uHgFlOJYyBaVhiWXRKAl/Qz6LGFMDlm7ApPyI172J7B7NjN0oEhBhEl1MpO3Zs70ruZBWSFRW5NuynsfZSpc0B7FEowkRaRJCuKQcsT69nmMxsSKXbmrhdTqfXQ0ZE+t8nVEggEn51f5EjPe+8zxlse2zhPILBzgvXByGpVVDE3ZDWpu+gpu9restgl4kfwikU66hlA32qIbrL0fBrLA/4KZHwlh5cMSe489NBUS0uy7FZoWOahimhXVWT/k5hhp76Y2SQlsOUroyiFUBYX4/TK6AGwNt97AmKJsusy0rGAn5607iuCADlIM8tQgykNI1QT5xAXyhThyz14fzlHersnzWEtL8nZ0CBcxuEYAOjBHEW7uPPWZW9iLOWR3GgxbSNxBPkGx7Ct7eNZvnKrX6whYCsTfCesgC+2ikHCO0GuyJDMsJ51Gen1EYaIBJaQTlmAyN91pyLBdR1OrmWf0RMBkIjtqL7tkpx9E/FbZldcp/AgwA9oU96lMDwgIAAAAASUVORK5CYII=" alt="" class="h-6">
                                                    </div>
                                                    <div class="grow">
                                                        <h6>logo-design.png</h6>
                                                        <p class="text-slate-500 dark:text-zink-200">0.123 KB</p>
                                                    </div>
                                                </a>
                                                <a href="#!" class="flex items-center gap-3 !py-3 border-y border-dashed rounded-md card-body border-slate-200 dark:border-zink-500">
                                                    <div class="flex items-center justify-center text-sm font-semibold rounded-md size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0">
                                                        SVG
                                                    </div>
                                                    <div class="grow">
                                                        <h6>pattern.svg</h6>
                                                        <p class="text-slate-500 dark:text-zink-200">0.802 MB</p>
                                                    </div>
                                                </a>
                                                <a href="#!" class="flex items-center gap-3 !py-3 border-y border-dashed rounded-md card-body border-slate-200 dark:border-zink-500">
                                                    <div class="flex items-center justify-center text-sm font-semibold rounded-md size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0">
                                                        <img src="assets/images/img-6.jpg" alt="" class="object-cover rounded-md h-9">
                                                    </div>
                                                    <div class="grow">
                                                        <h6>profile-bg.jpg</h6>
                                                        <p class="text-slate-500 dark:text-zink-200">33.49 MB</p>
                                                    </div>
                                                </a>
                                                <a href="#!" class="flex items-center gap-3 !py-3 border-y border-dashed rounded-md card-body border-slate-200 dark:border-zink-500">
                                                    <div class="flex items-center justify-center text-sm font-semibold rounded-md size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0">
                                                        PSD
                                                    </div>
                                                    <div class="grow">
                                                        <h6>tailwick-design.psd</h6>
                                                        <p class="text-slate-500 dark:text-zink-200">97.59 MB</p>
                                                    </div>
                                                </a>
                                                <a href="#!" class="flex items-center gap-3 !py-3 border-y border-dashed rounded-md card-body border-slate-200 dark:border-zink-500">
                                                    <div class="flex items-center justify-center text-sm font-semibold rounded-md size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0">
                                                        ZIP
                                                    </div>
                                                    <div class="grow">
                                                        <h6>tailwick.zip</h6>
                                                        <p class="text-slate-500 dark:text-zink-200">35.89 MB</p>
                                                    </div>
                                                </a>
                                                <a href="#!" class="flex items-center gap-3 !py-3 border-y border-dashed rounded-md card-body border-slate-200 dark:border-zink-500">
                                                    <div class="flex items-center justify-center text-sm font-semibold rounded-md size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0">
                                                        PSD
                                                    </div>
                                                    <div class="grow">
                                                        <h6>tailwick-design.psd</h6>
                                                        <p class="text-slate-500 dark:text-zink-200">97.59 MB</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end -->
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