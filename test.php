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
    <link rel="shortcut icon" href="<?php echo $domain ?>assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/nice-select2.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/main.css">
    <script defer src="<?php echo $domain ?>assets/js/alpine.min.js"></script>
</head>

<body>
    

    <!-- top header -->


    <?php include('../../components/nav/index.php') ?>
    <!-- top header end -->

    <!-- mobile bottom bar -->
    <div x-data class="fixed left-0 bottom-0 w-full bg-white border-t border-[#cacaca] p-3 z-20 lg:hidden">
        <div class="flex items-center justify-evenly">
            <!-- menu -->
            <button @click="$store.mobileMenu.isOpen=true"
                class="relative text-secondary flex flex-col justify-center items-center text-center transition-all">
                <span class="text-secondary">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </span>
                <span class="text-[11px] leading-[10px] mt-1 text-secondary">Menu</span>
            </button>

            <!-- Categories -->
            <button @click="$store.category.isCategory=true"
                class="relative text-secondary flex flex-col justify-center items-center text-center transition-all">
                <span class="text-secondary">
                    <svg width="22" height="22" viewBox="0 0 2048 2048">
                        <path fill="currentColor"
                            d="M2048 384v128H512V384h1536zM512 896h1536v128H512V896zm0 512h1536v128H512v-128zM0 256h384v384H0V256zm128 256h128V384H128v128zM0 768h384v384H0V768zm128 256h128V896H128v128zM0 1280h384v384H0v-384zm128 256h128v-128H128v128z" />
                    </svg>
                </span>
                <span class="text-[11px] leading-[10px] mt-1 text-secondary">Categories</span>
            </button>

            <!-- Search -->
            <button @click="$store.search.isSearch=true"
                class="relative text-secondary flex flex-col justify-center items-center text-center">
                <span class="text-secondary">
                    <svg width="26" height="26" viewBox="0 0 28 28">
                        <path fill="currentColor"
                            d="M11.5 2.75a8.75 8.75 0 0 1 6.695 14.384l6.835 6.836a.75.75 0 0 1-.976 1.133l-.084-.073l-6.836-6.835A8.75 8.75 0 1 1 11.5 2.75Zm0 1.5a7.25 7.25 0 1 0 0 14.5a7.25 7.25 0 0 0 0-14.5Z" />
                    </svg>
                </span>
                <span class="text-[11px] leading-[10px] mt-1 text-secondary">Search</span>
            </button>

            <!-- Cart -->
            <button @click="$store.cart.isCart=true"
                class="relative text-secondary flex flex-col justify-center items-center text-center">
                <span class="relative block text-secondary">
                    <svg width="22" height="22" viewBox="0 0 32 32">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2">
                            <path d="M6 6h24l-3 13H9m18 4H10L5 2H2" />
                            <circle cx="25" cy="27" r="2" />
                            <circle cx="12" cy="27" r="2" />
                        </g>
                    </svg>
                </span>
                <span class="text-[11px] leading-[10px] mt-1 text-secondary">Cart</span>
                <span
                    class="absolute text-white bg-primary text-[11px] rounded-full w-[18px] h-[18px] leading-[18px] -right-1 -top-[8px]">8</span>
            </button>
        </div>
    </div>
    <!-- mobile bottom bar -->

    <!-- mobile menu -->
    <div x-data x-show="$store.mobileMenu.isOpen" x-cloak
        class="lg:hidden fixed inset-0 w-full h-full z-30 overflow-hidden bg-[#00000070] cursor-default">

        <div x-show="$store.mobileMenu.isOpen" x-transition:enter="transition ease-in-out duration-500"
            x-transition:enter-start="-translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
            x-transition:leave="transition ease-in-out duration-500"
            x-transition:leave-end="-translate-x-full opacity-100" @click.outside="$store.mobileMenu.isOpen=false"
            class="relative w-[320px] h-full overflow-y-auto bg-white">
            <h5 class="text-center bg-primary text-white py-[14px] text-xl relative">
                Menu
                <button @click="$store.mobileMenu.isOpen=false"
                    class="absolute top-[17px] right-[15px] text-white text-center cursor-pointer">
                    <svg width="20" height="20" viewBox="0 0 32 32">
                        <path fill="currentColor"
                            d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z" />
                    </svg>
                </button>
            </h5>
            <ul x-data="menuModules">
                <template x-for="(menu, index) in menuModules.menuList">
                    <li>
                        <button @click="toggleMenu(index)"
                            class="py-2.5 pr-[15px] pl-[25px] w-full text-secondary border-b border-dotted border-[#C8C8CE] hover:bg-[#efefef] transition-all duration-300 block text-left relative">
                            <span x-text="menu.name"></span>
                            <span :class="menu.isOpen ? 'rotate-180' : ''"
                                class="absolute top-2.5 right-[15px] text-center text-secondary transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </span>
                        </button>

                        <div x-show="menu.isOpen" x-transition>
                            <template x-for="subMenu in menu.subMenus">
                                <a :href="subMenu.href" x-text="subMenu.name"
                                    class="pl-12 py-2.5 pr-[15px] w-full text-secondary  border-b border-dotted border-[#C8C8CE] block hover:bg-[#efefef]">
                                </a>
                            </template>
                        </div>
                    </li>
                </template>
            </ul>
        </div>
    </div>
    <!-- mobile menu end -->

    <!-- mobile category -->
    <div x-data x-show="$store.category.isCategory"
        :class="$store.category.isCategory ? 'opacity-100 visible' : 'opacity-0 invisible'" x-cloak
        class="lg:hidden fixed left-0 top-0 w-full h-full z-30 overflow-hidden bg-[#00000070] cursor-default transition-all duration-500">

        <div x-show="$store.category.isCategory" x-transition:enter="transition ease-in-out duration-500"
            x-transition:enter-start="-translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
            x-transition:leave="transition ease-in-out duration-500"
            x-transition:leave-end="-translate-x-full opacity-100" @click.away="$store.category.isCategory=false"
            class="relative w-[320px] h-full overflow-y-auto bg-white transition-all duration-500">
            <h5 class="text-center bg-primary text-white py-[14px] text-xl relative mb-2">
                All categories
                <button @click="$store.category.isCategory=false"
                    class="absolute top-[17px] right-[15px] text-white text-center cursor-pointer">
                    <svg width="20" height="20" viewBox="0 0 32 32">
                        <path fill="currentColor"
                            d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z" />
                    </svg>
                </button>
            </h5>

            <!-- category wrapper -->
            <div x-data="categoryModules">
                <template x-for="(category, catIndex) in categoryList">
                    <div class="single-mobile-menu">
                        <!-- category -->
                        <button @click="openMainCat(catIndex)"
                            class="mobile-submenu-open relative flex flex-wrap items-center border-b border-dotted border-[#C8C8CE] px-5 w-full text-[#222] transition duration-300 hover:bg-[#EFEFEF]">
                            <!-- icon -->
                            <span class="w-11 text-[#f4cad0] font-black" x-html="category.icon"></span>

                            <!-- name -->
                            <span class="text-[15px] cursor-pointer text-[#222] py-2.5" x-text="category.name"></span>

                            <!-- arrow down -->
                            <span x-show="category.subCategories" :class="category.isOpen ? 'rotate-180' : ''"
                                class="mobile-menu-icon absolute top-2.5 right-[15px] text-center text-[#222]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="arrow-icon h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </span>
                        </button>

                        <!-- sub menus -->
                        <template x-if="category.subCategories">
                            <div x-show="category.isOpen" class="sub-menu static h-auto pt-2.5 pl-[64px] w-full pr-5">
                                <div class="w-full">
                                    <template x-for="(subCat, subCatIndex) in category.subCategories">
                                        <div class="category-mobile-submenu">
                                            <!-- single menu -->
                                            <button @click="openSubCat(catIndex, subCatIndex)"
                                                class="category-submenu-open text-left cursor-pointer w-full relative text-base font-normal text-[#424242] leading-[21px] mb-2.5">
                                                <span x-text="subCat.name"></span>
                                                <span x-show="!subCat.isOpen"
                                                    class="plus absolute -right-1 top-[2px]"><svg width="14" height="14"
                                                        viewBox="0 0 256 256">
                                                        <path fill="currentColor"
                                                            d="M224 128a8 8 0 0 1-8 8h-80v80a8 8 0 0 1-16 0v-80H40a8 8 0 0 1 0-16h80V40a8 8 0 0 1 16 0v80h80a8 8 0 0 1 8 8Z" />
                                                    </svg>
                                                </span>
                                                <span x-show="subCat.isOpen"
                                                    class="minus absolute -right-1 top-[2px]"><svg width="14"
                                                        height="14" viewBox="0 0 256 256">
                                                        <path fill="currentColor"
                                                            d="M216 136H40a8 8 0 0 1 0-16h176a8 8 0 0 1 0 16Z" />
                                                    </svg>
                                                </span>
                                            </button>

                                            <!-- mega menu -->
                                            <div x-show="subCat.isOpen" class="category-sub-menu pl-[15px]">
                                                <template x-for="mega in subCat.megaCategories">
                                                    <a href="#" x-text="mega.name"
                                                        class="text-[15px] text-[#453E3E] mb-[9px] block hover:text-primary transition duration-300">
                                                    </a>
                                                </template>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </template>
                    </div>
                </template>

            </div>
            <!-- category wrapper end -->
        </div>
    </div>
    <!-- mobile category end -->

    <!-- mobile searchbar -->
    <div x-data x-show="$store.search.isSearch" x-transition:enter="transition ease-in-out duration-500"
        x-transition:enter-start="-translate-y-full opacity-0" x-transition:enter-end="translate-y-0 opacity-100"
        x-transition:leave="transition ease-in-out duration-500" x-transition:leave-end="-translate-y-full opacity-100"
        :class="$store.search.isSearch ? 'opacity-100 visible' : 'opacity-0 invisible'" x-cloak
        class="fixed left-0 top-0 w-full h-full bg-white z-20 p-[30px] transition-all duration-500">
        <div class="relative">
            <p class="text-xs mb-3 text-[#8a8a8a]">WHAT YOU ARE LOOKING FOR?</p>
            <!-- close -->
            <button @click="$store.search.isSearch=false" class="absolute top-0 right-0 cursor-pointer text-secondary">
                <svg width="20" height="20" viewBox="0 0 32 32">
                    <path fill="currentColor"
                        d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z" />
                </svg>
            </button>
        </div>
        <!-- search input -->
        <form class="relative">
            <div class="border-b border-[#c3c3c3] z-50">
                <input type="text" placeholder="search products..."
                    class="w-full focus:outline-none  focus:ring-0 border-none pr-2.5 py-[5px] text-secondary text-lg">
            </div>
            <button class="absolute right-0 top-[8px] border-none bg-transparent">
                <svg width="20" height="20" viewBox="0 0 28 28">
                    <path fill="currentColor"
                        d="M11.5 2.75a8.75 8.75 0 0 1 6.695 14.384l6.835 6.836a.75.75 0 0 1-.976 1.133l-.084-.073l-6.836-6.835A8.75 8.75 0 1 1 11.5 2.75Zm0 1.5a7.25 7.25 0 1 0 0 14.5a7.25 7.25 0 0 0 0-14.5Z">
                    </path>
                </svg>
            </button>
        </form>
        <!-- search product -->
        <div class="overflow-y-auto pt-4">
            <a href="product-viewhtml"
                class="flex items-center border-b border-[#ebebeb] py-2 hover:bg-[#f2f0f0] transition duration-300">
                <div class="w-[90px] p-2.5">
                    <img src="<?php echo $domain ?>assets/images/laptop-2.png"
                        class="w-full h-[50px] object-contain flex-shrink-0" alt="product">
                </div>
                <div class="pl-2">
                    <h4 class="text-lg font-medium mb-1.5 text-secondary">HP Pavilion 15</h4>
                    <div>
                        <span class="text-primary mr-[5px] leading-[22px] text-base font-medium">$45.00</span>
                        <span class="text-sm text-[#687188] font-medium leading-[22px]">$55.45</span>
                    </div>
                </div>
            </a>
            <a href="product-viewhtml"
                class="flex items-center border-b border-[#ebebeb] py-2 hover:bg-[#f2f0f0] transition duration-300">
                <div class="w-[90px] p-2.5">
                    <img loading="lazy" src="<?php echo $domain ?>assets/images/phone-1.png"
                        class="w-full h-[50px] object-contain flex-shrink-0" alt="product">
                </div>
                <div class="pl-2">
                    <h4 class="text-lg font-medium mb-1.5 text-secondary">Xiaomi Note 7 Pro</h4>
                    <div class="price">
                        <span class="text-primary mr-[5px] leading-[22px] text-base font-medium">$45.00</span>
                        <span class="text-sm text-[#687188] font-medium leading-[22px]">$55.45</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- mobile searchbar end -->

    <!-- mobile cart -->
    <div x-data x-show="$store.cart.isCart" :class="$store.cart.isCart ? 'opacity-100 visible' : 'opacity-0 invisible'"
        x-cloak
        class="lg:hidden fixed inset-0 w-full h-full z-30 overflow-hidden bg-[#00000070] cursor-default transition-all duration-500">

        <div x-show="$store.cart.isCart" x-transition:enter="transition ease-in-out duration-500"
            x-transition:enter-start="-translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
            x-transition:leave="transition ease-in-out duration-500"
            x-transition:leave-end="-translate-x-full opacity-100" @click.away="$store.cart.isCart=false"
            class="relative w-[320px] h-full overflow-y-auto bg-white flex flex-col transition-all duration-500">
            <h5 class="text-center bg-primary text-white py-[14px] text-xl relative mb-2">
                Cart
                <button @click="$store.cart.isCart=false"
                    class="absolute top-[17px] right-[15px] text-white text-center cursor-pointer" id="CartClose">
                    <svg width="20" height="20" viewBox="0 0 32 32">
                        <path fill="currentColor"
                            d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z" />
                    </svg>
                </button>
            </h5>

            <div class="p-4 flex-grow flex flex-col">
                <div class="mb-3 border-b border-[#d8d8d8]">
                    <h4 class="text-base mb-1.5 font-medium text-secondary">Total 2 Items</h4>
                </div>
                <div>
                    <a href="product-viewhtml" class="flex relative pr-5 mb-4">
                        <span
                            class="absolute right-0 cursor-pointer text-secondary hover:text-primary transition duration-300">
                            <svg width="16" height="16" viewBox="0 0 32 32">
                                <path fill="currentColor"
                                    d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z" />
                            </svg>
                        </span>
                        <div class="flex-shrink-0">
                            <img src="<?php echo $domain ?>assets/images/shoes-5.png"
                                class="w-[75px] h-[60px] object-contain" alt="product">
                        </div>
                        <div class="flex-grow pl-4">
                            <h5 class="text-base text-secondary font-medium hover:text-primary transition duration-300">
                                Men casual shoes
                            </h5>
                            <p class="text-sm text-[#464545]">x1 <span class="ml-2 text-sm text-[#464545]">$450</span>
                            </p>
                        </div>
                    </a>
                    <a href="product-viewhtml" class="flex relative pr-5 mb-4">
                        <span
                            class="absolute right-0 cursor-pointer text-secondary hover:text-primary transition duration-300">
                            <svg width="16" height="16" viewBox="0 0 32 32">
                                <path fill="currentColor"
                                    d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z" />
                            </svg>
                        </span>
                        <div class="flex-shrink-0">
                            <img src="<?php echo $domain ?>assets/images/headphone-2.png"
                                class="w-[75px] h-[60px] object-contain" alt="product">
                        </div>
                        <div class="lex-grow pl-4">
                            <h5 class="text-base text-secondary font-medium hover:text-primary transition duration-300">
                                Men casual shoes
                            </h5>
                            <p class="text-sm text-[#464545]">x1 <span class="ml-2 text-sm text-[#464545]">$450</span>
                            </p>
                        </div>
                    </a>
                </div>

                <div class="mt-auto">
                    <div class="mt-4 pt-4 border-t border-[#d8d8d8] flex justify-between">
                        <h4 class="text-base font-medium text-secondary">SUB TOTAL:</h4>
                        <h4 class="text-base font-medium text-secondary">$980.00</h4>
                    </div>
                    <div class="mt-4 flex gap-4">
                        <a href="shopping-cart.html" class="primary-btn px-2 py-[9px] w-1/2 text-sm">VIEW CART</a>
                        <a href="checkout.html"
                            class="primary-btn px-2 py-[9px] w-1/2 bg-white hover:bg-primary text-primary hover:text-white text-sm">CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile cart end -->

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
                    <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6l-6-6z" />
                </svg>
            </span>

        </a>
        <a href="list-view.html" class="text-primary text-[13px] sm:text-base">Shop</a>
        <span>
            <svg width="22" height="22" viewBox="0 0 24 24">
                <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6l-6-6z" />
            </svg>
        </span>
        <a href="#" class="text-secondary text-[13px] sm:text-base"> Product view </a>
    </div>
    <!-- breadcrumbs end-->

    <!-- product view -->
    <div class="product_view_wrap section_padding_b">
        <div class="container">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 lg:col-span-6" x-data="productImageModule">

                    <div class="flex justify-center items-center">
                        <img loading="lazy" :src="productImages[imageIndex]" alt="product">
                    </div>

                    <div class="swiper mt-4 relative group">
                        <div x-data="productImages" class="swiper-wrapper flex">
                            <template x-for="(img, index) in productImages">
                                <div class="swiper-slide">
                                    <div class="w-full h-[80px] flex justify-center items-center"
                                        @click="imageIndex = index">
                                        <img loading="lazy" :src="img" alt="product"
                                            :class="imageIndex === index ? 'border border-primary' : ''"
                                            class="w-full h-full object-cover cursor-pointer">
                                    </div>
                                </div>
                            </template>
                        </div>

                        <div
                            class="swiper-button-next box_shadow w-8 h-8 bg-[#eceef0] absolute right-0 top-1/2 opacity-0 group-hover:opacity-100 transition duration-300">
                        </div>
                        <div
                            class="swiper-button-prev box_shadow w-8 h-8 bg-[#eceef0] absolute left-0 top-1/2 opacity-0 group-hover:opacity-100 transition duration-300">
                        </div>

                    </div>

                </div>
                <div class="col-span-12 lg:col-span-6">
                    <div class="product_info_wrapper">
                        <div class="product_base_info">
                            <h1 class="text-2xl sm:text-3xl uppercase">MEN'S ADIDAS COURTSMASH</h1>
                            
                            <div class="space-y-2 mt-4">
                                <p><span class="font-medium pr-3">Availability:</span><span
                                        class="text-[#08B54C] font-medium">In Stock</span></p>
                                <p><span class="font-medium pr-3">Brand:</span>Bata</p>
                                <p><span class="font-medium pr-3">Category:</span>Clothing</p>
                                <p><span class="font-medium pr-3">SKU:</span>BE45VGRT</p>
                            </div>
                            <div class="mt-3 flex gap-3 items-center overflow-hidden">
                                <span class="line-through">$5000.00</span>
                                <span class="text-2xl text-primary font-semibold">$4500.00</span>
                                <div
                                    class="ml-3 text-sm bg-primary text-white px-2 py-[2px] relative after:absolute after:w-[14px] after:h-[14px] after:bg-primary after:-left-1 after:top-1 after:rotate-45">
                                    -30%</div>
                            </div>
                            <div class="mt-2">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim exercitationem quaerat
                                    excepturi labore blanditiis
                                </p>
                            </div>
                            <!-- size -->
                            <div class="shop_filter mt-4">
                                <h4 class="text-sm font-medium  text-secondary uppercase mb-2">Size</h4>
                                <div class="flex gap-3 items-center">
                                    <div class="single_size_opt">
                                        <input type="radio" name="size" class="size_inp hidden" id="size-xs" checked>
                                        <label for="size-xs" class="px-1.5 py-1">XS</label>
                                    </div>
                                    <div class="single_size_opt ms-2">
                                        <input type="radio" hidden name="size" class="size_inp hidden" id="size-s">
                                        <label for="size-s" class="px-2.5 py-1">S</label>
                                    </div>
                                    <div class="single_size_opt ms-2">
                                        <input type="radio" hidden name="size" class="size_inp hidden" id="size-m">
                                        <label for="size-m" class="px-2.5 py-1">M</label>
                                    </div>
                                    <div class="single_size_opt ms-2">
                                        <input type="radio" hidden name="size" class="size_inp hidden" id="size-l">
                                        <label for="size-l" class="px-2.5 py-1">L</label>
                                    </div>
                                    <div class="single_size_opt ms-2">
                                        <input type="radio" hidden name="size" class="size_inp hidden" id="size-xl">
                                        <label for="size-xl" class="px-1.5 py-1">XL</label>
                                    </div>
                                </div>
                            </div>

                            <!-- color -->
                            <div class="pb-4 mt-4">
                                <h4 class="text-sm uppercase mb-3 text-secondary">Color</h4>
                                <div class="size_selector color_selector flex gap-3 items-center">
                                    <div class="single_size_opt relative group">
                                        <input type="radio" class="size_inp hidden" id="color-purple">
                                        <label for="color-purple" class="w-6 h-6 bg-primary focus:ring-1  inline-block"
                                            data-bs-toggle="tooltip" title="" data-bs-original-title="Rose Red"
                                            aria-label="Rose Red" checked=""></label>
                                        <p
                                            class="absolute -left-3 -top-9 opacity-0 group-hover:opacity-100 invisible group-hover:visible text-sm text-white bg-black w-20 py-1 text-center rounded after:absolute after:w-2 after:h-2 after:bg-black after:rotate-45 after:-bottom-1 after:left-4">
                                            Rose Red</p>
                                    </div>
                                    <div class="single_size_opt relative group">
                                        <input type="radio" hidden="" name="color" class="size_inp hidden"
                                            id="color-red">
                                        <label for="color-red"
                                            class="w-6 h-6  bg-white focus:bg-white focus:ring-1  inline-block"
                                            data-bs-toggle="tooltip" title="" data-bs-original-title="White"
                                            aria-label="White"></label>
                                        <p
                                            class="absolute -left-3 -top-9 opacity-0 group-hover:opacity-100 invisible group-hover:visible text-sm text-white bg-black w-16 py-1 text-center rounded after:absolute after:w-2 after:h-2 after:bg-black after:rotate-45 after:-bottom-1 after:left-4">
                                            White</p>
                                    </div>
                                    <div class="single_size_opt relative group">
                                        <input type="radio" hidden="" name="color" class="size_inp hidden"
                                            id="color-green">
                                        <label for="color-green" class="w-6 h-6  bg-black focus:ring-1  inline-block"
                                            data-bs-toggle="tooltip" title="" data-bs-original-title="Black"
                                            aria-label="Black"></label>
                                        <p
                                            class="absolute -left-3 -top-9 opacity-0 group-hover:opacity-100 invisible group-hover:visible text-sm text-white bg-black w-16 py-1 text-center rounded after:absolute after:w-2 after:h-2 after:bg-black after:rotate-45 after:-bottom-1 after:left-4">
                                            Black</p>
                                    </div>
                                </div>
                            </div>

                            <!-- quantity -->
                            <div x-data="{number:4}" class="cart_qnty ms-md-auto">
                                <p>Quantity</p>
                                <div x-data="{count:0}" x-modelable="count" x-model="number"
                                    class="flex items-center  mt-1">
                                    <div @click="count--"
                                        class="w-8 h-8 border hover:bg-[#E9E4E4] flex justify-center items-center cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M19 12.998H5v-2h14z" />
                                        </svg>
                                    </div>
                                    <div x-text="number" class="w-8 h-8 border flex justify-center items-center">4</div>
                                    <div @click="count++"
                                        class="w-8 h-8 border hover:bg-[#E9E4E4] flex justify-center items-center cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- add to cart & wishlist -->
                        <div class="flex gap-5 mt-6 border-b pb-5">
                            <a href="shopping-cart.html"
                                class="flex gap-2 items-center border border-primary bg-primary text-sm sm:text-base text-white hover:bg-white hover:text-primary transition duration-300 px-2 sm:px-8 py-2 rounded uppercase group">
                                <span class="text-white group-hover:text-primary">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49A.996.996 0 0 0 20.01 4H5.21l-.94-2H1v2h2l3.6 7.59l-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2s-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2s2-.9 2-2s-.9-2-2-2z" />
                                    </svg> -->
                                </span>
                                PURCHASE
                            </a>
                          
                        </div>
                        <!-- social icon -->
                        <div class="flex gap-3 items-center mt-4">
                            <a href="#"
                                class="w-8 h-8 border rounded-full flex justify-center items-center hover:bg-[#E9E4E4]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M9.945 22v-8.834H7V9.485h2.945V6.54c0-3.043 1.926-4.54 4.64-4.54c1.3 0 2.418.097 2.744.14v3.18h-1.883c-1.476 0-1.82.703-1.82 1.732v2.433h3.68l-.736 3.68h-2.944L13.685 22" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-8 h-8 border rounded-full flex justify-center items-center hover:bg-[#E9E4E4]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23Z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-8 h-8 border rounded-full flex justify-center items-center hover:bg-[#E9E4E4]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 448 512">
                                    <path fill="currentColor"
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9S287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7s74.7 33.5 74.7 74.7s-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8c-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8s26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9c-26.2-26.2-58-34.4-93.9-36.2c-37-2.1-147.9-2.1-184.9 0c-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9c1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0c35.9-1.7 67.7-9.9 93.9-36.2c26.2-26.2 34.4-58 36.2-93.9c2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6c-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6c-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6c29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6c11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
           

        </div>
    </div>

    <!-- related product -->
    <section class="pb-14 mt-12">
        <div class="container">
            <h2 class="text-[22px] sm:text-[32px] font-medium text-secondary">Related Product</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-4">
                <div class="w-full col-span-1 group">
                    <div class="border border-[#DDDDDD] rounded-[5px] overflow-hidden">
                        <div class="relative bg-[#f3f3f3] px-[30px] py-[30px] sm:py-5">
                            <img class="w-full h-[130px] object-contain flex-shrink-0"
                                src="<?php echo $domain ?>assets/images/laptop-3.png" alt="product">
                            <span
                                class="absolute top-0 left-0 px-2.5 py-2 bg-[#ED0020] rounded-tl-[5px] rounded-br-[5px] text-white text-[15px] font-medium z-20">HOT</span>
                            <div
                                class="absolute top-0 left-0 w-full h-full flex items-center justify-center bg-[#e5e5e58c] z-10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                                <a href="#"
                                    class="mx-2 h-10 w-10 bg-primary hover:bg-secondary transition duration-300 text-center text-white flex justify-center items-center rounded-full"
                                    tabindex="0">
                                    <svg width="20" height="20" viewBox="0 0 32 32">
                                        <path fill="currentColor"
                                            d="m29 27.586l-7.552-7.552a11.018 11.018 0 1 0-1.414 1.414L27.586 29ZM4 13a9 9 0 1 1 9 9a9.01 9.01 0 0 1-9-9Z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="mx-2 h-10 w-10 bg-primary hover:bg-secondary transition duration-300 text-center text-white flex justify-center items-center rounded-full"
                                    tabindex="0">
                                    <svg width="20" height="20" viewBox="0 0 256 256">
                                        <path fill="currentColor"
                                            d="M128 220.2a13.6 13.6 0 0 1-9.9-4.1L35 133a58 58 0 0 1 2.2-84.2a56.5 56.5 0 0 1 41.6-14a62.8 62.8 0 0 1 40.3 18.3L128 62l11-11a57.9 57.9 0 0 1 84.1 2.2a56.2 56.2 0 0 1 14.1 41.6a62.8 62.8 0 0 1-18.3 40.3l-81 81a13.6 13.6 0 0 1-9.9 4.1Zm5.6-8.3ZM75 46.7a44 44 0 0 0-29.7 11.1a45.8 45.8 0 0 0-1.8 66.7l83.1 83.1a1.9 1.9 0 0 0 2.8 0l81-81c18.2-18.2 19.9-47.5 3.8-65.3a45.8 45.8 0 0 0-66.7-1.8l-15.3 15.2a6.1 6.1 0 0 1-8.5 0l-13.1-13.1A50.3 50.3 0 0 0 75 46.7Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="p-5 h-[125px] overflow-hidden relative">
                            <a href="#">
                                <h4 class="text-secondary text-lg font-medium mb-[5px]">HP Pavilion 15</h4>
                            </a>
                            <div>
                                <div>
                                    <span class="text-primary mr-[5px]">$45.00</span>
                                    <span class="text-sm text-[#687188] line-through">$55.45</span>
                                </div>

                                <div class="flex items-center justify-start">
                                    <div class="flex items-center">
                                        <span class="text-[#F6BC3E]"><svg width="16" height="16" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                            </svg></span>
                                        <span class="text-[#F6BC3E]"><svg width="16" height="16" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                            </svg></span>
                                        <span class="text-[#F6BC3E]"><svg width="16" height="16" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                            </svg></span>
                                        <span class="text-[#F6BC3E]"><svg width="16" height="16" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                            </svg></span>
                                        <span class="text-[#F6BC3E]"><svg width="16" height="16" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                            </svg></span>
                                    </div>
                                    <p class="text-[13px] ml-[9px] text-[#687188]">(150)</p>
                                </div>
                            </div>
                            <div
                                class="absolute left-5 top-14 mt-[15px] group-hover:mt-0 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                                <button class="primary-btn hover:bg-white px-[15px]">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full col-span-1 group">
                    <div class="border border-[#DDDDDD] rounded-[5px] overflow-hidden">
                        <div class="relative bg-[#f3f3f3] px-[30px] py-[30px] sm:py-5">
                            <img class="w-full h-[130px] object-contain flex-shrink-0"
                                src="<?php echo $domain ?>assets/images/shoes-1.png" alt="product">
                            <div
                                class="absolute top-0 left-0 w-full h-full flex items-center justify-center bg-[#e5e5e58c] z-10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                                <a href="#"
                                    class="mx-2 h-10 w-10 bg-primary hover:bg-secondary transition duration-300 text-center text-white flex justify-center items-center rounded-full"
                                    tabindex="0">
                                    <svg width="20" height="20" viewBox="0 0 32 32">
                                        <path fill="currentColor"
                                            d="m29 27.586l-7.552-7.552a11.018 11.018 0 1 0-1.414 1.414L27.586 29ZM4 13a9 9 0 1 1 9 9a9.01 9.01 0 0 1-9-9Z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="mx-2 h-10 w-10 bg-primary hover:bg-secondary transition duration-300 text-center text-white flex justify-center items-center rounded-full"
                                    tabindex="0">
                                    <svg width="20" height="20" viewBox="0 0 256 256">
                                        <path fill="currentColor"
                                            d="M128 220.2a13.6 13.6 0 0 1-9.9-4.1L35 133a58 58 0 0 1 2.2-84.2a56.5 56.5 0 0 1 41.6-14a62.8 62.8 0 0 1 40.3 18.3L128 62l11-11a57.9 57.9 0 0 1 84.1 2.2a56.2 56.2 0 0 1 14.1 41.6a62.8 62.8 0 0 1-18.3 40.3l-81 81a13.6 13.6 0 0 1-9.9 4.1Zm5.6-8.3ZM75 46.7a44 44 0 0 0-29.7 11.1a45.8 45.8 0 0 0-1.8 66.7l83.1 83.1a1.9 1.9 0 0 0 2.8 0l81-81c18.2-18.2 19.9-47.5 3.8-65.3a45.8 45.8 0 0 0-66.7-1.8l-15.3 15.2a6.1 6.1 0 0 1-8.5 0l-13.1-13.1A50.3 50.3 0 0 0 75 46.7Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="p-5 h-[125px] overflow-hidden relative">
                            <a href="#">
                                <h4 class="text-secondary text-lg font-medium mb-[5px]">Red Casual Shoes</h4>
                            </a>
                            <div>
                                <div>
                                    <span class="text-primary mr-[5px]">$45.00</span>
                                    <span class="text-sm text-[#687188] line-through">$55.45</span>
                                </div>

                                <div class="flex items-center justify-start">
                                    <div class="flex items-center">
                                        <span class="text-[#F6BC3E]"><svg width="16" height="16" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                            </svg></span>
                                        <span class="text-[#F6BC3E]"><svg width="16" height="16" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                            </svg></span>
                                        <span class="text-[#F6BC3E]"><svg width="16" height="16" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                            </svg></span>
                                        <span class="text-[#F6BC3E]"><svg width="16" height="16" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                            </svg></span>
                                        <span class="text-[#F6BC3E]"><svg width="16" height="16" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                            </svg></span>
                                    </div>
                                    <p class="text-[13px] ml-[9px] text-[#687188]">(150)</p>
                                </div>
                            </div>
                            <div
                                class="absolute left-5 top-14 mt-[15px] group-hover:mt-0 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                                <button class="primary-btn hover:bg-white px-[15px]">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full col-span-1 group">
                    <div class="border border-[#DDDDDD] rounded-[5px] overflow-hidden">
                        <div class="relative bg-[#f3f3f3] px-[30px] py-[30px] sm:py-5">
                            <img class="w-full h-[130px] object-contain flex-shrink-0"
                                src="<?php echo $domain ?>assets/images/headphone-3.png" alt="product">
                            <div
                                class="absolute top-0 left-0 w-full h-full flex items-center justify-center bg-[#e5e5e58c] z-10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                                <a href="#"
                                    class="mx-2 h-10 w-10 bg-primary hover:bg-secondary transition duration-300 text-center text-white flex justify-center items-center rounded-full"
                                    tabindex="0">
                                    <svg width="20" height="20" viewBox="0 0 32 32">
                                        <path fill="currentColor"
                                            d="m29 27.586l-7.552-7.552a11.018 11.018 0 1 0-1.414 1.414L27.586 29ZM4 13a9 9 0 1 1 9 9a9.01 9.01 0 0 1-9-9Z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="mx-2 h-10 w-10 bg-primary hover:bg-secondary transition duration-300 text-center text-white flex justify-center items-center rounded-full"
                                    tabindex="0">
                                    <svg width="20" height="20" viewBox="0 0 256 256">
                                        <path fill="currentColor"
                                            d="M128 220.2a13.6 13.6 0 0 1-9.9-4.1L35 133a58 58 0 0 1 2.2-84.2a56.5 56.5 0 0 1 41.6-14a62.8 62.8 0 0 1 40.3 18.3L128 62l11-11a57.9 57.9 0 0 1 84.1 2.2a56.2 56.2 0 0 1 14.1 41.6a62.8 62.8 0 0 1-18.3 40.3l-81 81a13.6 13.6 0 0 1-9.9 4.1Zm5.6-8.3ZM75 46.7a44 44 0 0 0-29.7 11.1a45.8 45.8 0 0 0-1.8 66.7l83.1 83.1a1.9 1.9 0 0 0 2.8 0l81-81c18.2-18.2 19.9-47.5 3.8-65.3a45.8 45.8 0 0 0-66.7-1.8l-15.3 15.2a6.1 6.1 0 0 1-8.5 0l-13.1-13.1A50.3 50.3 0 0 0 75 46.7Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="p-5 h-[125px] overflow-hidden relative">
                            <a href="#">
                                <h4 class="text-secondary text-lg font-medium mb-[5px]">COWIN E7 Active</h4>
                            </a>
                            <div>
                                <div>
                                    <span class="text-primary mr-[5px]">$45.00</span>
                                    <span class="text-sm text-[#687188] line-through">$55.45</span>
                                </div>

                                <div class="flex items-center justify-start">
                                    <div class="flex items-center">
                                        <span class="text-[#F6BC3E]"><svg width="16" height="16" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                            </svg></span>
                                        <span class="text-[#F6BC3E]"><svg width="16" height="16" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                            </svg></span>
                                        <span class="text-[#F6BC3E]"><svg width="16" height="16" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                            </svg></span>
                                        <span class="text-[#F6BC3E]"><svg width="16" height="16" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                            </svg></span>
                                        <span class="text-[#F6BC3E]"><svg width="16" height="16" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                            </svg></span>
                                    </div>
                                    <p class="text-[13px] ml-[9px] text-[#687188]">(150)</p>
                                </div>
                            </div>
                            <div
                                class="absolute left-5 top-14 mt-[15px] group-hover:mt-0 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                                <button class="primary-btn hover:bg-white px-[15px]">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full col-span-1 group">
                    <div class="border border-[#DDDDDD] rounded-[5px] overflow-hidden">
                        <div class="relative bg-[#f3f3f3] px-[30px] py-[30px] sm:py-5">
                            <img class="w-full h-[130px] object-contain flex-shrink-0"
                                src="<?php echo $domain ?>assets/images/phone-1.png" alt="product">
                            <div
                                class="absolute top-0 left-0 w-full h-full flex items-center justify-center bg-[#e5e5e58c] z-10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                                <a href="#"
                                    class="mx-2 h-10 w-10 bg-primary hover:bg-secondary transition duration-300 text-center text-white flex justify-center items-center rounded-full"
                                    tabindex="0">
                                    <svg width="20" height="20" viewBox="0 0 32 32">
                                        <path fill="currentColor"
                                            d="m29 27.586l-7.552-7.552a11.018 11.018 0 1 0-1.414 1.414L27.586 29ZM4 13a9 9 0 1 1 9 9a9.01 9.01 0 0 1-9-9Z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="mx-2 h-10 w-10 bg-primary hover:bg-secondary transition duration-300 text-center text-white flex justify-center items-center rounded-full"
                                    tabindex="0">
                                    <svg width="20" height="20" viewBox="0 0 256 256">
                                        <path fill="currentColor"
                                            d="M128 220.2a13.6 13.6 0 0 1-9.9-4.1L35 133a58 58 0 0 1 2.2-84.2a56.5 56.5 0 0 1 41.6-14a62.8 62.8 0 0 1 40.3 18.3L128 62l11-11a57.9 57.9 0 0 1 84.1 2.2a56.2 56.2 0 0 1 14.1 41.6a62.8 62.8 0 0 1-18.3 40.3l-81 81a13.6 13.6 0 0 1-9.9 4.1Zm5.6-8.3ZM75 46.7a44 44 0 0 0-29.7 11.1a45.8 45.8 0 0 0-1.8 66.7l83.1 83.1a1.9 1.9 0 0 0 2.8 0l81-81c18.2-18.2 19.9-47.5 3.8-65.3a45.8 45.8 0 0 0-66.7-1.8l-15.3 15.2a6.1 6.1 0 0 1-8.5 0l-13.1-13.1A50.3 50.3 0 0 0 75 46.7Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        

                        <div class="p-5 h-[125px] overflow-hidden relative">
                            <a href="#">
                                <h4 class="text-secondary text-lg font-medium mb-[5px]">Xiaomi Note 7 Pro</h4>
                            </a>
                            <div>
                                <div>
                                    <span class="text-primary mr-[5px]">$45.00</span>
                                    <span class="text-sm text-[#687188] line-through">$55.45</span>
                                </div>

                                <div class="flex items-center justify-start">
                                    <div class="flex items-center">
                                        <span class="text-[#F6BC3E]"><svg width="16" height="16" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                            </svg></span>
                                        <span class="text-[#F6BC3E]"><svg width="16" height="16" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                            </svg></span>
                                        <span class="text-[#F6BC3E]"><svg width="16" height="16" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                            </svg></span>
                                        <span class="text-[#F6BC3E]"><svg width="16" height="16" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                            </svg></span>
                                        <span class="text-[#F6BC3E]"><svg width="16" height="16" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                            </svg></span>
                                    </div>
                                    <p class="text-[13px] ml-[9px] text-[#687188]">(150)</p>
                                </div>
                            </div>
                            <div
                                class="absolute left-5 top-14 mt-[15px] group-hover:mt-0 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                                <button class="primary-btn hover:bg-white px-[15px]">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- related product end -->

    <!-- footer area -->
    <?php include('../../components/footer/index.php') ?>
    <!-- footer area end -->

    
    

    <!-- script -->
    <script src="<?php echo $domain ?>assets/js/swiper-bundle.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/nice-select2.js"></script>
    <script src="main.js"></script>
    <script>
    const swiper = new Swiper('.swiper', {
        slidesPerView: '5',
        navigationClickable: true,
        spaceBetween: 8,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    const productImageModule = {
        productImages: [
            '<?php echo $domain ?>assets/images/slider-1.png',
            '<?php echo $domain ?>assets/images/slider-2.png',
            '<?php echo $domain ?>assets/images/slider-3.png',
            '<?php echo $domain ?>assets/images/slider-4.png',
            '<?php echo $domain ?>assets/images/slider-5.png',
            '<?php echo $domain ?>assets/images/slider-1.png',
        ],
        imageIndex: 0
    }
    </script>
</body>

</html>