<?php

include('../../server/connection.php')

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rafcart-Tailwind</title>
    <link rel="shortcut icon" href="..assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../../assets/css/nice-select2.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
    <script defer src="../../assets/js/alpine.min.js"></script>
</head>

<body>

    <?php include('../../components/nav/index.php') ?>


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



                </div>

                <div id="products" class="grid grid-cols-6 gap-5 mt-4">



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
    <?php include('../../components/footer/index.php') ?>
    <!-- footer area end -->





    <!-- script -->
    <script src="../../assets/js/swiper-bundle.min.js"></script>
    <script src="../../assets/js/nice-select2.js"></script>
    <script src="../../assets/js/main.js"></script>
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
                '../../assets/images/headphone-3.png',
                '../../assets/images/apple-watch.png',
                '../../assets/images/watch3.png',
                '../../assets/images/watch2.png',
            ],
            imageIndex: 0
        }

        document.addEventListener('alpine:init', () => {
            Alpine.store('productView', {
                isActive: false
            })
        })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

    <!-- <div id="products" class="grid grid-cols-12 gap-4"></div> -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    <script type="module">
        import fetchAndRenderProducts from '../../assets/js/get_product.js';

        const data = await fetchAndRenderProducts()
        if (data) {
            $('#products').html('');
            data.forEach(product => {
                console.log(product)
                const html = `
                            <div class="col-span-6 sm:col-span-3 md:col-span-2">
                                <div class="border rounded group">
                                    <div class="group-hover:opacity-80 relative">
                                        <div class="flex justify-center">
                                            <img style="height:250px !important;" loading="lazy" class="w-full h-[250px] object-contain"
                                                src="${product.image}" alt="product">
                                        </div>
                                    </div>
                                    <div class="p-4 mb-3 relative">
                                        <a href="product-view.html">
                                            <h4 class="text-[18px] mb-1">${product.title}</h4>
                                        </a>
                                        <div class="ratprice">
                                            <div class="flex gap-3 items-center mb-1">
                                                <span class="text-primary font-medium">$${product.price}</span>
                                                <span class="prev_price text-[#687188] text-[14px] line-through font-medium">$55.45</span>
                                            </div>
                                            <div class="rating">
                                                <div class="flex gap-2">
                                                    <div class="flex gap-1">
                                                        ${'★'.repeat(5).split('').map(() => `
                                                            <span class="text-yellow-500">
                                                                <svg width="18" height="18" viewBox="0 0 24 24">
                                                                    <path fill="currentColor"
                                                                        d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z" />
                                                                </svg>
                                                            </span>
                                                        `).join('')}
                                                    </div>
                                                    <p class="text-sm">(150)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <a href="https://931mb2-by.myshopify.com/cart/${product.variant_id}:1" target="_blank">
                                                <button class="default_btn">Buy</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>`;
                $('#products').append(html);
            });
        }
    </script>

</body>

</html>