<?php

include('./server/database.php')

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rafcart-Tailwind</title>
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/nice-select2.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <script defer src="./assets/js/alpine.min.js"></script>
</head>

<body>
   
  <?php include('./components/nav/index.php') ?>


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
            <a href="list-view.html" class="text-primary text-[13px] sm:text-base">Shop</a>
            <span>
                <svg width="22" height="22" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6l-6-6z" /></svg>
            </span>
            <a href="#" class="text-secondary text-[13px] sm:text-base">Grid view</a>
        </div>
    </div>
    <!-- breadcrumbs end-->

    <!-- shop grid view -->
    <div class="container pb-14 relative">
        <div x-data="{isOpen:false}" class="grid grid-cols-4 relative gap-6">
            <div class="col-span-1">
                <div :class="isOpen ? 'opacity-100 visible' : 'opacity-0 invisible'"
                    class="lg:opacity-100 lg:visible transition-all duration-300 absolute bg-white top-[80px] left-0 lg:static w-[320px] shadow lg:w-full p-4 z-20">
                    <div class="sm:hidden">
                        <div class="flex justify-between items-center">
                            <h4 class="text-xl uppercase">Sort by</h4>
                            <button @click="isOpen=false" class="text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="border-b pb-14 rounded mt-5">
                            <select class="nice_select nice-select">
                                <option selected>Default sorting</option>
                                <option>Price low-high</option>
                                <option>Price high-low</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-6 sm:mt-2">
                        <div class="pb-4 border-b border-[#E9E4E4] mb-4">
                            <div class="flex justify-between items-start">
                                <h4 class="text-xl text-left font-medium mb-3 text-secondary uppercase">Categories
                                </h4>
                                <!-- close filter -->
                                <button @click="isOpen=false"
                                    class="text-primary hidden sm:block lg:hidden closefilter">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <div class="space-y-2">
                                <div class="custom_check flex justify-between items-center">
                                    <div class="flex gap-3 items-center">
                                        <input type="checkbox"
                                            class="focus:ring-0 text-primary focus:bg-primary focus:outline-none"
                                            id="cat-women" checked>
                                        <label for="cat-women" class="cursor-pointer text-secondary">Women</label>
                                    </div>
                                    <p>(16)</p>
                                </div>
                                <div class="custom_check flex justify-between items-center">
                                    <div class="flex gap-3 items-center cursor-pointer">
                                        <input type="checkbox"
                                            class="focus:ring-0 text-primary focus:bg-primaryfocus:outline-none"
                                            id="cat-men">
                                        <label for="cat-men" class="cursor-pointer text-secondary">Men</label>
                                    </div>
                                    <p class="mb-0 ms-auto">(9)</p>
                                </div>
                                <div class="custom_check flex justify-between items-center">
                                    <div class="flex gap-3 items-center cursor-pointer">
                                        <input type="checkbox" id="cat-shoes"
                                            class="focus:ring-0 text-primary focus:bg-primary focus:outline-none">
                                        <label for="cat-shoes" class="cursor-pointer text-secondary">Shoes</label>
                                    </div>
                                    <p class="mb-0 ms-auto">(19)</p>
                                </div>
                                <div class="custom_check flex justify-between items-center">
                                    <div class="flex gap-3 items-center cursor-pointer">
                                        <input type="checkbox" id="cat-computer"
                                            class="focus:ring-0 text-primary focus:bg-primary focus:outline-none">
                                        <label for="cat-computer" class="text-secondary cursor-pointer">Computer</label>
                                    </div>
                                    <p class="mb-0 ms-auto">(35)</p>
                                </div>
                            </div>
                        </div>

                        <div class="pb-4 border-b border-[#E9E4E4] mb-4">
                            <h4 class="text-xl font-medium mb-3 text-secondary uppercase">Brands</h4>
                            <div class="space-y-3">
                                <div class="flex gap-3 items-center">
                                    <input type="checkbox" id="adidas"
                                        class="focus:ring-0 text-primary focus:bg-primaryfocus:outline-none" checked>
                                    <label for="adidas" class="relative cursor-pointer text-secondary">Adidas</label>
                                </div>
                                <div class="flex gap-3 items-center">
                                    <input type="checkbox" id="nike"
                                        class="focus:ring-0 text-primary focus:bg-primaryfocus:outline-none">
                                    <label for="nike" class="relative cursor-pointer text-secondary">Nike</label>
                                </div>
                                <div class="flex gap-3 items-center">
                                    <input type="checkbox" id="easy"
                                        class="focus:ring-0 text-primary focus:bg-primaryfocus:outline-none">
                                    <label for="easy" class="relative cursor-pointer text-secondary">Easy</label>
                                </div>
                                <div class="flex gap-3 items-center">
                                    <input type="checkbox" id="arong"
                                        class="focus:ring-0 text-primary focus:bg-primaryfocus:outline-none">
                                    <label for="arong" class="relative cursor-pointer text-secondary">Arong</label>
                                </div>
                            </div>
                        </div>

                        <div class="pb-4 border-b border-[#E9E4E4] mb-4">
                            <h4 class="text-xl font-medium  text-secondary uppercase">Price</h4>
                            <span id="rangeValue" class="block relative text-center text-xl font-semibold">500</span>
                            <input type="range" class="range" min="0" max="1000" onchange="rangeslide(this.value)" />
                        </div>

                        <div class="shop_filter">
                            <h4 class="text-xl font-medium  text-secondary uppercase mb-4">Size</h4>
                            <div class="flex gap-3 items-center">
                                <div class="single_size_opt">
                                    <input type="radio" name="size" class="size_inp" id="size-xs" checked>
                                    <label for="size-xs" class="px-1.5 py-1">XS</label>
                                </div>
                                <div class="single_size_opt ms-2">
                                    <input type="radio" hidden name="size" class="size_inp" id="size-s">
                                    <label for="size-s" class="px-2.5 py-1">S</label>
                                </div>
                                <div class="single_size_opt ms-2">
                                    <input type="radio" hidden name="size" class="size_inp" id="size-m">
                                    <label for="size-m" class="px-2.5 py-1">M</label>
                                </div>
                                <div class="single_size_opt ms-2">
                                    <input type="radio" hidden name="size" class="size_inp" id="size-l">
                                    <label for="size-l" class="px-2.5 py-1">L</label>
                                </div>
                                <div class="single_size_opt ms-2">
                                    <input type="radio" hidden name="size" class="size_inp" id="size-xl">
                                    <label for="size-xl" class="px-1.5 py-1">XL</label>
                                </div>
                            </div>
                        </div>

                        <div class="pb-4 border-b border-[#E9E4E4] mt-4">
                            <h4 class="text-xl uppercase mb-3 text-secondary">Color</h4>
                            <div class="size_selector color_selector flex gap-3 items-center">
                                <div class="single_size_opt">
                                    <input type="radio" class="size_inp" id="color-purple">
                                    <label for="color-purple" class="w-6 h-6 bg-primary focus:ring-1  inline-block"
                                        data-bs-toggle="tooltip" title="" data-bs-original-title="Rose Red"
                                        aria-label="Rose Red" checked=""></label>
                                </div>
                                <div class="single_size_opt ms-2">
                                    <input type="radio" hidden="" name="color" class="size_inp" id="color-red">
                                    <label for="color-red"
                                        class="w-6 h-6  bg-white focus:bg-white focus:ring-1  inline-block"
                                        data-bs-toggle="tooltip" title="" data-bs-original-title="White"
                                        aria-label="White"></label>
                                </div>
                                <div class="single_size_opt ms-2">
                                    <input type="radio" hidden="" name="color" class="size_inp" id="color-green">
                                    <label for="color-green" class="w-6 h-6  bg-black focus:ring-1  inline-block"
                                        data-bs-toggle="tooltip" title="" data-bs-original-title="Black"
                                        aria-label="Black"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-4 lg:col-span-3">
                <div class="flex items-center">
                    <div class="lg:hidden block pr-4">
                        <button @click="isOpen=true"
                            class="pt-2 pb-[9px]  border border-primary px-2.5 min-w-[150px] primary-btn"
                            id="mobile_filter_btn">FILTER</button>
                    </div>

                    <div class="cursor-pointer hidden sm:block">
                        <select class="nice-select nice-select">
                            <option selected>Default sorting</option>
                            <option>Price low-high</option>
                            <option>Price high-low</option>
                        </select>

                    </div>

                    <div class="flex items-center ml-auto">
                        <a href="grid-view.html">
                            <div
                                class="w-10 h-8 border border-primary  bg-primary text-white text-center rounded-[3px] ml-2.5 flex items-center justify-center">
                                <svg width="20" height="20" viewBox="0 0 20 20">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M8 4H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm7 0h-3a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm-7 7H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zm7 0h-3a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"
                                        clip-rule="evenodd" /></svg>
                            </div>
                        </a>
                        <a href="list-view.html">
                            <div
                                class="w-10 h-8 border border-[#C1C1C1] text-center rounded-[3px] ml-2.5  flex items-center justify-center">
                                <svg width="20" height="20" viewBox="0 0 48 48">
                                    <g fill="none">
                                        <path d="M20 24h24h-24Z" clip-rule="evenodd" />
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="4" d="M20 24h24" />
                                        <path d="M20 38h24h-24Z" clip-rule="evenodd" />
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="4" d="M20 38h24" />
                                        <path d="M20 10h24h-24Z" clip-rule="evenodd" />
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="4" d="M20 10h24" />
                                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="4"
                                            d="M4 34h8v8H4zm0-14h8v8H4zM4 6h8v8H4z" />
                                    </g>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-6 gap-5 mt-4">
                    <div class="col-span-6 sm:col-span-3 md:col-span-2">
                        <div class="border rounded group">
                            <div class="bg-[#f3f3f3] group-hover:bg-[#e5e5e58c] group-hover:opacity-80 relative">
                                <div class="py-8 flex justify-center">
                                    <img loading="lazy" class="w-full h-[130px] object-contain"
                                        src="./assets/images/laptop-3.png" alt="product">
                                </div>
                                <span class="absolute top-0 left-0 bg-primary text-white p-2 rounded-br-lg">HOT</span>
                                <div
                                    class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 flex gap-3 transition-all duration-500 opacity-0 group-hover:opacity-100">
                                    <button @click="$store.productView.isActive=true"
                                        class="bg-primary hover:bg-[#2B2D42] text-white w-10 h-10 rounded-full flex justify-center items-center"
                                        tabindex="0">
                                        <svg width="24" height="24" viewBox="0 0 32 32">
                                            <path fill="currentColor"
                                                d="m29 27.586l-7.552-7.552a11.018 11.018 0 1 0-1.414 1.414L27.586 29ZM4 13a9 9 0 1 1 9 9a9.01 9.01 0 0 1-9-9Z" />
                                        </svg>
                                    </button>
                                    <a href="wishlist.html"
                                        class="bg-primary hover:bg-[#2B2D42] text-white w-10 h-10 rounded-full flex justify-center items-center"
                                        tabindex="0">
                                        <svg width="24" height="24" viewBox="0 0 16 16">
                                            <path fill="currentColor"
                                                d="m8 6.236l-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2C2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37c.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064c.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92C15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852c-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92C0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008c.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92c0 2.069-1.3 3.288-3.365 5.227c-1.193 1.12-2.642 2.48-4.243 4.38z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="p-4 mb-3 relative">
                                <a href="product-view.html">
                                    <h4 class="text-[18px] mb-1">HP Pavilion 15</h4>
                                </a>
                                <div class="ratprice">
                                    <div class="flex gap-3 items-center mb-1">
                                        <span class="text-primary font-medium">$45.00</span>
                                        <span
                                            class="prev_price text-[#687188] text-[14px] line-through font-medium">$55.45</span>
                                    </div>
                                    <div class="rating">
                                        <div class="flex gap-2">
                                            <div class="flex gap-1">
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <p class="text-sm">(150)</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="opacity-0 group-hover:opacity-100 transition-all duration-300 absolute top-[72px] group-hover:top-[52px]">
                                    <button class="default_btn">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6 sm:col-span-3 md:col-span-2">
                        <div class="border rounded group">
                            <div class="bg-[#f3f3f3] group-hover:bg-[#e5e5e58c] group-hover:opacity-80  relative">
                                <div class="py-8 flex justify-center">
                                    <img loading="lazy" class="w-full h-[130px] object-contain"
                                        src="./assets/images/shoes-5.png" alt="product">
                                </div>

                                <div
                                    class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 flex gap-3 transition-all duration-500 opacity-0 group-hover:opacity-100">
                                    <button @click="$store.productView.isActive=true"
                                        class="bg-primary hover:bg-[#2B2D42] text-white w-10 h-10 rounded-full flex justify-center items-center"
                                        tabindex="0">
                                        <svg width="24" height="24" viewBox="0 0 32 32">
                                            <path fill="currentColor"
                                                d="m29 27.586l-7.552-7.552a11.018 11.018 0 1 0-1.414 1.414L27.586 29ZM4 13a9 9 0 1 1 9 9a9.01 9.01 0 0 1-9-9Z" />
                                        </svg>
                                    </button>
                                    <a href="wishlist.html"
                                        class="bg-primary hover:bg-[#2B2D42] text-white w-10 h-10 rounded-full flex justify-center items-center"
                                        tabindex="0">
                                        <svg width="24" height="24" viewBox="0 0 16 16">
                                            <path fill="currentColor"
                                                d="m8 6.236l-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2C2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37c.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064c.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92C15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852c-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92C0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008c.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92c0 2.069-1.3 3.288-3.365 5.227c-1.193 1.12-2.642 2.48-4.243 4.38z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="p-4 mb-3 relative">
                                <a href="product-view.html">
                                    <h4 class="text-[18px] mb-1">Men Casual Shoes</h4>
                                </a>
                                <div class="ratprice">
                                    <div class="flex gap-3 items-center mb-1">
                                        <span class="text-primary font-medium">$45.00</span>
                                        <span
                                            class="prev_price text-[#687188] text-[14px] line-through font-medium">$55.45</span>
                                    </div>
                                    <div class="rating">
                                        <div class="flex gap-2">
                                            <div class="flex gap-1">
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <p class="text-sm">(150)</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="opacity-0 group-hover:opacity-100 transition-all duration-300 absolute top-[72px] group-hover:top-[52px]">
                                    <button class="default_btn">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6 sm:col-span-3 md:col-span-2">
                        <div class="border rounded group">
                            <div class="bg-[#f3f3f3] group-hover:bg-[#e5e5e58c] group-hover:opacity-80 relative">
                                <div class="py-8 flex justify-center">
                                    <img loading="lazy" class="w-full h-[130px] object-contain"
                                        src="./assets/images/headphone-3.png" alt="product">
                                </div>

                                <div
                                    class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 flex gap-3 transition-all duration-500 opacity-0 group-hover:opacity-100">
                                    <button @click="$store.productView.isActive=true"
                                        class="bg-primary hover:bg-[#2B2D42] text-white w-10 h-10 rounded-full flex justify-center items-center"
                                        tabindex="0">
                                        <svg width="24" height="24" viewBox="0 0 32 32">
                                            <path fill="currentColor"
                                                d="m29 27.586l-7.552-7.552a11.018 11.018 0 1 0-1.414 1.414L27.586 29ZM4 13a9 9 0 1 1 9 9a9.01 9.01 0 0 1-9-9Z" />
                                        </svg>
                                    </button>
                                    <a href="wishlist.html"
                                        class="bg-primary hover:bg-[#2B2D42] text-white w-10 h-10 rounded-full flex justify-center items-center"
                                        tabindex="0">
                                        <svg width="24" height="24" viewBox="0 0 16 16">
                                            <path fill="currentColor"
                                                d="m8 6.236l-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2C2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37c.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064c.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92C15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852c-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92C0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008c.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92c0 2.069-1.3 3.288-3.365 5.227c-1.193 1.12-2.642 2.48-4.243 4.38z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="p-4 mb-3 relative">
                                <a href="product-view.html">
                                    <h4 class="text-[18px] mb-1">COWIN E7 Active</h4>
                                </a>
                                <div class="ratprice">
                                    <div class="flex gap-3 items-center mb-1">
                                        <span class="text-primary font-medium">$45.00</span>
                                        <span
                                            class="prev_price text-[#687188] text-[14px] line-through font-medium">$55.45</span>
                                    </div>
                                    <div class="rating">
                                        <div class="flex gap-2">
                                            <div class="flex gap-1">
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <p class="text-sm">(150)</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="opacity-0 group-hover:opacity-100 transition-all duration-300 absolute top-[72px] group-hover:top-[52px]">
                                    <button class="default_btn">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6 sm:col-span-3 md:col-span-2">
                        <div class="border rounded group">
                            <div class="bg-[#f3f3f3] group-hover:bg-[#e5e5e58c] group-hover:opacity-80 relative">
                                <div class="py-8 flex justify-center">
                                    <img loading="lazy" class="w-full h-[130px] object-contain"
                                        src="./assets/images/phone-1.png" alt="product">
                                </div>
                                <div
                                    class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 flex gap-3 transition-all duration-500 opacity-0 group-hover:opacity-100">
                                    <button @click="$store.productView.isActive=true"
                                        class="bg-primary hover:bg-[#2B2D42] text-white w-10 h-10 rounded-full flex justify-center items-center"
                                        tabindex="0">
                                        <svg width="24" height="24" viewBox="0 0 32 32">
                                            <path fill="currentColor"
                                                d="m29 27.586l-7.552-7.552a11.018 11.018 0 1 0-1.414 1.414L27.586 29ZM4 13a9 9 0 1 1 9 9a9.01 9.01 0 0 1-9-9Z" />
                                        </svg>
                                    </button>
                                    <a href="wishlist.html"
                                        class="bg-primary hover:bg-[#2B2D42] text-white w-10 h-10 rounded-full flex justify-center items-center"
                                        tabindex="0">
                                        <svg width="24" height="24" viewBox="0 0 16 16">
                                            <path fill="currentColor"
                                                d="m8 6.236l-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2C2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37c.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064c.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92C15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852c-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92C0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008c.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92c0 2.069-1.3 3.288-3.365 5.227c-1.193 1.12-2.642 2.48-4.243 4.38z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="p-4 mb-3 relative">
                                <a href="product-view.html">
                                    <h4 class="text-[18px] mb-1">Xiaomi Note 7 Pro</h4>
                                </a>
                                <div class="ratprice">
                                    <div class="flex gap-3 items-center mb-1">
                                        <span class="text-primary font-medium">$45.00</span>
                                        <span
                                            class="prev_price text-[#687188] text-[14px] line-through font-medium">$55.45</span>
                                    </div>
                                    <div class="rating">
                                        <div class="flex gap-2">
                                            <div class="flex gap-1">
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <p class="text-sm">(150)</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="opacity-0 group-hover:opacity-100 transition-all duration-300 absolute top-[72px] group-hover:top-[52px]">
                                    <button class="default_btn">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6 sm:col-span-3 md:col-span-2">
                        <div class="border rounded group">
                            <div class="bg-[#f3f3f3] group-hover:bg-[#e5e5e58c] group-hover:opacity-80 relative">
                                <div class="py-8 flex justify-center">
                                    <img loading="lazy" class="w-full h-[130px] object-contain"
                                        src="./assets/images/phone-2.png" alt="product">
                                </div>

                                <div
                                    class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 flex gap-3 transition-all duration-500 opacity-0 group-hover:opacity-100">
                                    <button @click="$store.productView.isActive=true"
                                        class="bg-primary hover:bg-[#2B2D42] text-white w-10 h-10 rounded-full flex justify-center items-center"
                                        tabindex="0">
                                        <svg width="24" height="24" viewBox="0 0 32 32">
                                            <path fill="currentColor"
                                                d="m29 27.586l-7.552-7.552a11.018 11.018 0 1 0-1.414 1.414L27.586 29ZM4 13a9 9 0 1 1 9 9a9.01 9.01 0 0 1-9-9Z" />
                                        </svg>
                                    </button>
                                    <a href="wishlist.html"
                                        class="bg-primary hover:bg-[#2B2D42] text-white w-10 h-10 rounded-full flex justify-center items-center"
                                        tabindex="0">
                                        <svg width="24" height="24" viewBox="0 0 16 16">
                                            <path fill="currentColor"
                                                d="m8 6.236l-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2C2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37c.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064c.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92C15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852c-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92C0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008c.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92c0 2.069-1.3 3.288-3.365 5.227c-1.193 1.12-2.642 2.48-4.243 4.38z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="p-4 mb-3 relative">
                                <a href="product-view.html">
                                    <h4 class="text-[18px] mb-1">iPhone 11 Pro</h4>
                                </a>
                                <div class="ratprice">
                                    <div class="flex gap-3 items-center mb-1">
                                        <span class="text-primary font-medium">$45.00</span>
                                        <span
                                            class="prev_price text-[#687188] text-[14px] line-through font-medium">$55.45</span>
                                    </div>
                                    <div class="rating">
                                        <div class="flex gap-2">
                                            <div class="flex gap-1">
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <p class="text-sm">(150)</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="opacity-0 group-hover:opacity-100 transition-all duration-300 absolute top-[72px] group-hover:top-[52px]">
                                    <button class="default_btn">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6 sm:col-span-3 md:col-span-2">
                        <div class="border rounded group">
                            <div class="bg-[#f3f3f3] group-hover:bg-[#e5e5e58c] group-hover:opacity-80 relative">
                                <div class="py-8 flex justify-center">
                                    <img loading="lazy" class="w-full h-[130px] object-contain"
                                        src="./assets/images/laptop-2.png" alt="product">
                                </div>

                                <div
                                    class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 flex gap-3 transition-all duration-500 opacity-0 group-hover:opacity-100">
                                    <button @click="$store.productView.isActive=true"
                                        class="bg-primary hover:bg-[#2B2D42] text-white w-10 h-10 rounded-full flex justify-center items-center"
                                        tabindex="0">
                                        <svg width="24" height="24" viewBox="0 0 32 32">
                                            <path fill="currentColor"
                                                d="m29 27.586l-7.552-7.552a11.018 11.018 0 1 0-1.414 1.414L27.586 29ZM4 13a9 9 0 1 1 9 9a9.01 9.01 0 0 1-9-9Z" />
                                        </svg>
                                    </button>
                                    <a href="wishlist.html"
                                        class="bg-primary hover:bg-[#2B2D42] text-white w-10 h-10 rounded-full flex justify-center items-center"
                                        tabindex="0">
                                        <svg width="24" height="24" viewBox="0 0 16 16">
                                            <path fill="currentColor"
                                                d="m8 6.236l-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2C2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37c.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064c.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92C15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852c-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92C0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008c.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92c0 2.069-1.3 3.288-3.365 5.227c-1.193 1.12-2.642 2.48-4.243 4.38z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="p-4 mb-3 relative">
                                <a href="product-view.html">
                                    <h4 class="text-[18px] mb-1">HP Omen 13</h4>
                                </a>
                                <div class="ratprice">
                                    <div class="flex gap-3 items-center mb-1">
                                        <span class="text-primary font-medium">$45.00</span>
                                        <span
                                            class="prev_price text-[#687188] text-[14px] line-through font-medium">$55.45</span>
                                    </div>
                                    <div class="rating">
                                        <div class="flex gap-2">
                                            <div class="flex gap-1">
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <p class="text-sm">(150)</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="opacity-0 group-hover:opacity-100 transition-all duration-300 absolute top-[72px] group-hover:top-[52px]">
                                    <button class="default_btn">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6 sm:col-span-3 md:col-span-2">
                        <div class="border rounded group">
                            <div class="bg-[#f3f3f3] group-hover:bg-[#e5e5e58c] group-hover:opacity-80 relative">
                                <div class="py-8 flex justify-center">
                                    <img loading="lazy" class="w-full h-[130px] object-contain"
                                        src="./assets/images/shoes-3.png" alt="product">
                                </div>

                                <div
                                    class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 flex gap-3 transition-all duration-500 opacity-0 group-hover:opacity-100">
                                    <button @click="$store.productView.isActive=true"
                                        class="bg-primary hover:bg-[#2B2D42] text-white w-10 h-10 rounded-full flex justify-center items-center"
                                        tabindex="0">
                                        <svg width="24" height="24" viewBox="0 0 32 32">
                                            <path fill="currentColor"
                                                d="m29 27.586l-7.552-7.552a11.018 11.018 0 1 0-1.414 1.414L27.586 29ZM4 13a9 9 0 1 1 9 9a9.01 9.01 0 0 1-9-9Z" />
                                        </svg>
                                    </button>
                                    <a href="wishlist.html"
                                        class="bg-primary hover:bg-[#2B2D42] text-white w-10 h-10 rounded-full flex justify-center items-center"
                                        tabindex="0">
                                        <svg width="24" height="24" viewBox="0 0 16 16">
                                            <path fill="currentColor"
                                                d="m8 6.236l-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2C2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37c.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064c.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92C15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852c-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92C0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008c.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92c0 2.069-1.3 3.288-3.365 5.227c-1.193 1.12-2.642 2.48-4.243 4.38z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="p-4 mb-3 relative">
                                <a href="product-view.html">
                                    <h4 class="text-[18px] mb-1">Women high Shoes</h4>
                                </a>
                                <div class="ratprice">
                                    <div class="flex gap-3 items-center mb-1">
                                        <span class="text-primary font-medium">$45.00</span>
                                        <span
                                            class="prev_price text-[#687188] text-[14px] line-through font-medium">$55.45</span>
                                    </div>
                                    <div class="rating">
                                        <div class="flex gap-2">
                                            <div class="flex gap-1">
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <p class="text-sm">(150)</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="opacity-0 group-hover:opacity-100 transition-all duration-300 absolute top-[72px] group-hover:top-[52px]">
                                    <button class="default_btn">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6 sm:col-span-3 md:col-span-2">
                        <div class="border rounded group">
                            <div class="bg-[#f3f3f3] group-hover:bg-[#e5e5e58c] group-hover:opacity-80 relative">
                                <div class="py-8 flex justify-center">
                                    <img loading="lazy" class="w-full h-[130px] object-contain"
                                        src="./assets/images/headphone-2.png" alt="product">
                                </div>

                                <div
                                    class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 flex gap-3 transition-all duration-500 opacity-0 group-hover:opacity-100">
                                    <button @click="$store.productView.isActive=true"
                                        class="bg-primary hover:bg-[#2B2D42] text-white w-10 h-10 rounded-full flex justify-center items-center"
                                        tabindex="0">
                                        <svg width="24" height="24" viewBox="0 0 32 32">
                                            <path fill="currentColor"
                                                d="m29 27.586l-7.552-7.552a11.018 11.018 0 1 0-1.414 1.414L27.586 29ZM4 13a9 9 0 1 1 9 9a9.01 9.01 0 0 1-9-9Z" />
                                        </svg>
                                    </button>
                                    <a href="wishlist.html"
                                        class="bg-primary hover:bg-[#2B2D42] text-white w-10 h-10 rounded-full flex justify-center items-center"
                                        tabindex="0">
                                        <svg width="24" height="24" viewBox="0 0 16 16">
                                            <path fill="currentColor"
                                                d="m8 6.236l-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2C2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37c.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064c.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92C15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852c-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92C0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008c.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92c0 2.069-1.3 3.288-3.365 5.227c-1.193 1.12-2.642 2.48-4.243 4.38z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="p-4 relative mb-3">
                                <a href="product-view.html">
                                    <h4 class="text-[18px] mb-1">Bose Headphone</h4>
                                </a>
                                <div class="ratprice">
                                    <div class="flex gap-3 items-center mb-1">
                                        <span class="text-primary font-medium">$45.00</span>
                                        <span
                                            class="prev_price text-[#687188] text-[14px] line-through font-medium">$55.45</span>
                                    </div>
                                    <div class="rating">
                                        <div class="flex gap-2">
                                            <div class="flex gap-1">
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <p class="text-sm">(150)</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="opacity-0 group-hover:opacity-100 transition-all duration-300 absolute top-[72px] group-hover:top-[52px]">
                                    <button class="default_btn">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6 sm:col-span-3 md:col-span-2">
                        <div class="border rounded group">
                            <div class="bg-[#f3f3f3] group-hover:bg-[#e5e5e58c] group-hover:opacity-80 relative">
                                <div class="py-8 flex justify-center">
                                    <img loading="lazy" class="w-full h-[130px] object-contain"
                                        src="./assets/images/iphone-xr.png" alt="product">
                                </div>

                                <div
                                    class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 flex gap-3 transition-all duration-500 opacity-0 group-hover:opacity-100">
                                    <button @click="$store.productView.isActive=true"
                                        class="bg-primary hover:bg-[#2B2D42] text-white w-10 h-10 rounded-full flex justify-center items-center"
                                        tabindex="0">
                                        <svg width="24" height="24" viewBox="0 0 32 32">
                                            <path fill="currentColor"
                                                d="m29 27.586l-7.552-7.552a11.018 11.018 0 1 0-1.414 1.414L27.586 29ZM4 13a9 9 0 1 1 9 9a9.01 9.01 0 0 1-9-9Z" />
                                        </svg>
                                    </button>
                                    <a href="wishlist.html"
                                        class="bg-primary hover:bg-[#2B2D42] text-white w-10 h-10 rounded-full flex justify-center items-center"
                                        tabindex="0">
                                        <svg width="24" height="24" viewBox="0 0 16 16">
                                            <path fill="currentColor"
                                                d="m8 6.236l-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2C2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37c.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064c.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92C15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852c-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92C0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008c.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92c0 2.069-1.3 3.288-3.365 5.227c-1.193 1.12-2.642 2.48-4.243 4.38z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="p-4 mb-3 relative">
                                <a href="product-view.html">
                                    <h4 class="text-[18px] mb-1">iPhone 12 Pro XR</h4>
                                </a>
                                <div class="ratprice">
                                    <div class="flex gap-3 items-center mb-1">
                                        <span class="text-primary font-medium">$45.00</span>
                                        <span
                                            class="prev_price text-[#687188] text-[14px] line-through font-medium">$55.45</span>
                                    </div>
                                    <div class="rating">
                                        <div class="flex gap-2">
                                            <div class="flex gap-1">
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                                <span class="text-yellow-500">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <p class="text-sm">(150)</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="opacity-0 group-hover:opacity-100 transition-all duration-300 absolute top-[72px] group-hover:top-[52px]">
                                    <button class="default_btn">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5 flex items-center justify-center gap-2.5">
                    <button
                        class="w-[30px] h-[30px] leading-[30px] text-[15px] text-center bg-primary text-white">1</button>
                    <button
                        class="w-[30px] h-[30px] leading-[30px] text-[15px] text-center border border-[#E9E4E4] text-secondary hover:text-white hover:bg-primary transition duration-300">2</button>
                    <button
                        class="w-[30px] h-[30px] leading-[30px] text-[15px] text-center border border-[#E9E4E4] text-secondary hover:text-white hover:bg-primary transition duration-300">3</button>
                    <button
                        class="w-[30px] h-[30px] leading-[30px] text-[15px] text-center border border-[#E9E4E4] text-secondary hover:text-white hover:bg-primary transition duration-300">4</button>
                    <button
                        class="w-[30px] h-[30px] leading-[30px] text-[15px] flex items-center justify-center border border-[#E9E4E4] text-secondary hover:text-white hover:bg-primary transition duration-300">
                        <svg width="15" height="15" viewBox="0 0 32 32">
                            <path fill="currentColor"
                                d="M21.188 9.281L19.78 10.72L24.063 15H4v2h20.063l-4.282 4.281l1.407 1.438L27.905 16z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- shop grid view end-->

    <!-- footer area -->
     <?php include('./components/footer/index.php') ?>
    <!-- footer area end -->



    <!-- product quick view -->
    <div x-data x-show="$store.productView.isActive"
        :class="$store.productView.isActive ? 'opacity-100 visible bg-black bg-opacity-50' : 'opacity-0 invisible bg-none bg-opacity-0'"
        class="fixed left-0 top-0 w-full h-full rounded-sm flex justify-center items-center z-20">
        <div @click.outside="$store.productView.isActive=false"
            class="relative max-w-[975px] max-h-[88vh] px-6 py-10 bg-white shadow overflow-y-auto mx-4 lg:mx-0">
            <button @click="$store.productView.isActive=false"
                class="w-6 h-6 bg-primary text-white rounded flex justify-center items-center absolute top-2 right-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6Z" />
                </svg>
            </button>
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 lg:col-span-6" x-data="productImageModule">

                    <div class="flex justify-center items-center w-full h-[350px]">
                        <img loading="lazy" :src="productImages[imageIndex]" alt="product">

                    </div>

                    <div class="productSwiper mt-4 relative group">
                        <div x-data="productImages" class="swiper-wrapper flex">
                            <template x-for="(img,index) in productImages">
                                <div class="swiper-slide">
                                    <div class="h-[80px] flex flex-shrink-0 justify-center items-center"
                                        @click="imageIndex = index">
                                        <img loading="lazy" :src="img" alt="product"
                                            :class="imageIndex === index ? 'border border-primary' : ''"
                                            class="w-full h-full object-cover">
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
                            <h1 class="text-xl sm:text-3xl uppercase">GADGET SHOWROOM</h1>
                            <div class="rating">
                                <div class="flex gap-3 items-center mt-4">
                                    <div class="flex gap-1 items-center">
                                        <span class="text-yellow-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21L12 17.27z" />
                                            </svg>
                                        </span>
                                        <span class="text-yellow-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21L12 17.27z" />
                                            </svg>
                                        </span>
                                        <span class="text-yellow-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21L12 17.27z" />
                                            </svg>
                                        </span>
                                        <span class="text-yellow-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21L12 17.27z" />
                                            </svg>
                                        </span>
                                        <span class="text-yellow-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21L12 17.27z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <p class="text-sm">50 Reviews</p>
                                </div>
                            </div>
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
                                            <path fill="currentColor" d="M19 12.998H5v-2h14z" /></svg>
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
                            <a href="#"
                                class="flex gap-2 items-center border border-primary bg-primary text-sm sm:text-base text-white hover:bg-white hover:text-primary transition duration-300 px-2 sm:px-8 py-2 rounded uppercase group">
                                <span class="text-white group-hover:text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49A.996.996 0 0 0 20.01 4H5.21l-.94-2H1v2h2l3.6 7.59l-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2s-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2s2-.9 2-2s-.9-2-2-2z" />
                                    </svg>
                                </span>
                                Add to Cart
                            </a>
                            <a href="#"
                                class="flex gap-2 items-center border border-primary hover:bg-primary text-primary  hover:text-white transition duration-300 px-2 sm:px-8 py-2 rounded uppercase group">
                                <span class="text-primary group-hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 256 256">
                                        <path fill="currentColor"
                                            d="M128 220.2a13.6 13.6 0 0 1-9.9-4.1L35 133a58 58 0 0 1 2.2-84.2a56.5 56.5 0 0 1 41.6-14a62.8 62.8 0 0 1 40.3 18.3L128 62l11-11a57.9 57.9 0 0 1 84.1 2.2a56.2 56.2 0 0 1 14.1 41.6a62.8 62.8 0 0 1-18.3 40.3l-81 81a13.6 13.6 0 0 1-9.9 4.1Zm5.6-8.3ZM75 46.7a44 44 0 0 0-29.7 11.1a45.8 45.8 0 0 0-1.8 66.7l83.1 83.1a1.9 1.9 0 0 0 2.8 0l81-81c18.2-18.2 19.9-47.5 3.8-65.3a45.8 45.8 0 0 0-66.7-1.8l-15.3 15.2a6.1 6.1 0 0 1-8.5 0l-13.1-13.1A50.3 50.3 0 0 0 75 46.7Z" />
                                    </svg>
                                </span>
                                Wishlist
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

    <!-- script -->
    <script src="./assets/js/swiper-bundle.min.js"></script>
    <script src="./assets/js/nice-select2.js"></script>
    <script src="./assets/js/main.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },
        });


        // product image slider
        const productSwiper = new Swiper('.productSwiper', {
            slidesPerView: '4',
            spaceBetween: 8,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        const productImageModule = {
            productImages: [
                './assets/images/headphone-3.png',
                './assets/images/apple-watch.png',
                './assets/images/watch3.png',
                './assets/images/watch2.png',
            ],
            imageIndex: 0
        }

        document.addEventListener('alpine:init', () => {
            Alpine.store('productView', {
                isActive: false
            })
        })
    </script>
</body>


<!-- Mirrored from themes.rslahmed.dev/rafcart-tailwind/grid-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Apr 2024 11:52:42 GMT -->
</html>