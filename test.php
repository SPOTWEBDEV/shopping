<?php

include('../../server/connection.php');



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $sitename ?> || Product</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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


            <div class="col-span-4">
                <div class="flex items-center">
                    <div class="lg:hidden block pr-4">
                        <button @click="isOpen=true"
                            class="pt-2 pb-[9px]  border border-primary px-2.5 min-w-[150px] primary-btn"
                            id="mobile_filter_btn">FILTER</button>
                    </div>



                </div>



                <div class="product_view_wrap section_padding_b" id="singleProduct">
                   
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


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

    <!-- <div id="products" class="grid grid-cols-12 gap-4"></div> -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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


    <script type="module">
    import fetchAndRenderProducts from '../../assets/js/get_product.js';


    function getIdFromUrl() {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get('id');
    }

    // Example usage
    const id = getIdFromUrl();
    console.log("ID from URL:", id);


    const data = await fetchAndRenderProducts()

    const renderProducts = (product) => {

        // $('#products').html('');
        product.forEach(pro => {

            console.log(product);

            
            
            
            const singleProduct = pro.filter(p => p.variant_id == id);


            const {
                title,
                category,
                create_at,
                price,
                image,
                compare_at_price,
                description,
                variant_id
            } = singleProduct;


            const html = ` <div class="container">
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
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
                                                exercitationem quaerat
                                                excepturi labore blanditiis
                                            </p>
                                        </div>
                                        <!-- size -->
                                        <div class="shop_filter mt-4">
                                            <h4 class="text-sm font-medium  text-secondary uppercase mb-2">Size</h4>
                                            <div class="flex gap-3 items-center">
                                                <div class="single_size_opt">
                                                    <input type="radio" name="size" class="size_inp hidden" id="size-xs"
                                                        checked>
                                                    <label for="size-xs" class="px-1.5 py-1">XS</label>
                                                </div>
                                                <div class="single_size_opt ms-2">
                                                    <input type="radio" hidden name="size" class="size_inp hidden"
                                                        id="size-s">
                                                    <label for="size-s" class="px-2.5 py-1">S</label>
                                                </div>
                                                <div class="single_size_opt ms-2">
                                                    <input type="radio" hidden name="size" class="size_inp hidden"
                                                        id="size-m">
                                                    <label for="size-m" class="px-2.5 py-1">M</label>
                                                </div>
                                                <div class="single_size_opt ms-2">
                                                    <input type="radio" hidden name="size" class="size_inp hidden"
                                                        id="size-l">
                                                    <label for="size-l" class="px-2.5 py-1">L</label>
                                                </div>
                                                <div class="single_size_opt ms-2">
                                                    <input type="radio" hidden name="size" class="size_inp hidden"
                                                        id="size-xl">
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
                                                    <label for="color-purple"
                                                        class="w-6 h-6 bg-primary focus:ring-1  inline-block"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Rose Red" aria-label="Rose Red"
                                                        checked=""></label>
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
                                                    <label for="color-green"
                                                        class="w-6 h-6  bg-black focus:ring-1  inline-block"
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
                                                <div x-text="number"
                                                    class="w-8 h-8 border flex justify-center items-center">4</div>
                                                <div @click="count++"
                                                    class="w-8 h-8 border hover:bg-[#E9E4E4] flex justify-center items-center cursor-pointer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
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

                                </div>
                            </div>
                        </div>


                    </div>
                    `
            $('#singleProduct').append(html);
        });

    }
    renderProducts(data)

    
    </script>

</body>

</html>