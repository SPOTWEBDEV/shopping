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
            <a href="list-view.html" class="text-primary text-[13px] sm:text-base">View Product</a>
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

    const id = getIdFromUrl();

    const data = await fetchAndRenderProducts(); // fetched array of products

  function renderProducts(products) {
    products.forEach(product => {
        if (product.variant_id == id) {
            console.log(product);

            const {
                title,
                category,
                price,
                image,
                compare_at_price,
                description,
                variant_id,
                options
            } = product;

            const { Color = [], Size = [] } = options;

            const discount = compare_at_price > 0
                ? ((1 - (price / compare_at_price)) * 100).toFixed(0)
                : 0;

            const html = `<div class="container">
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 lg:col-span-6" x-data="productImageModule">
                        <div class="flex justify-center items-center">
                            <img loading="lazy" src="${image}" alt="product">
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="product_info_wrapper">
                            <div class="product_base_info">
                                <h1 class="text-2xl sm:text-3xl uppercase">${title}</h1>
                                <div class="space-y-2 mt-4">
                                    <p><span class="font-medium pr-3">Availability:</span><span class="text-[#08B54C] font-medium">In Stock</span></p>
                                    <p><span class="font-medium pr-3">Category:</span>${category}</p>
                                    <p><span class="font-medium pr-3">SKU:</span>${variant_id}</p>
                                </div>
                                <div class="mt-3 flex gap-3 items-center overflow-hidden">
                                    <span class="line-through">$${compare_at_price.toFixed(2)}</span>
                                    <span class="text-2xl text-primary font-semibold">$${price.toFixed(2)}</span>
                                    <div class="ml-3 text-sm bg-primary text-white px-2 py-[2px] relative after:absolute after:w-[14px] after:h-[14px] after:bg-primary after:-left-1 after:top-1 after:rotate-45">
                                        -${discount}%
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <p>${description}</p>
                                </div>

                                <!-- Size -->
                                <div class="shop_filter mt-4">
                                    <h4 class="text-sm font-medium text-secondary uppercase mb-2">Size</h4>
                                    <div class="flex gap-3 items-center" id="size-options"></div>
                                </div>

                                <!-- Color -->
                                <div class="pb-4 mt-4">
                                    <h4 class="text-sm uppercase mb-3 text-secondary">Color</h4>
                                    <div class="size_selector color_selector flex gap-3 items-center" id="color-options"></div>
                                </div>

                                <!-- Quantity, Buttons, etc. -->
                                <!-- KEEP THE REST UNCHANGED -->

                                <div class="flex gap-5 mt-6 border-b pb-5">
                                        <a href="https://931mb2-by.myshopify.com/cart/${product.variant_id}:1"
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
            </div>`;

            // Inject product HTML into container
            document.getElementById('singleProduct').innerHTML = html;

            // Dynamically insert sizes
            const sizeContainer = document.getElementById('size-options');
            sizeContainer.innerHTML = Size.map((size, i) => `
                <div class="single_size_opt">
                    <input type="radio" name="size" class="size_inp hidden" id="size-${i}">
                    <label for="size-${i}" class="px-1.5 py-1">${size}</label>
                </div>
            `).join('');

            // Dynamically insert colors
            const colorContainer = document.getElementById('color-options');
            colorContainer.innerHTML = Color.map((color, i) => `
                <div class="single_size_opt relative group">
                    <input type="radio" name="color" class="size_inp hidden" id="color-${i}">
                    <label for="color-${i}"
                        class="w-6 h-6  focus:ring-1 inline-block"
                        data-bs-toggle="tooltip" style="background:${color.toLowerCase()}" title="${color}" aria-label="${color}"></label>
                    <p class="absolute -left-3 -top-9 opacity-0 group-hover:opacity-100 invisible group-hover:visible text-sm text-white bg-black w-20 py-1 text-center rounded after:absolute after:w-2 after:h-2 after:bg-black after:rotate-45 after:-bottom-1 after:left-4">
                        ${color}
                    </p>
                </div>
            `).join('');
        }
    });
}

renderProducts(data)

    </script>

</body>

</html>