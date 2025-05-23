<?php

include('./server/connection.php')


?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $sitename ?> || Home</title>
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/nice-select2.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <script defer src="./assets/js/alpine.min.js"></script>
</head>

<body>
    <!--Preloader-->
    <div x-data="{hide: false}" x-init="setTimeout(() => {hide=true}, 1000)" x-show="!hide" x-transition.duration.500ms class="preloader fixed inset-0 bg-white z-30 opacity-100 flex items-center justify-center">
        <img src="./assets/images/preloader.gif" alt="" class="w-[30rem] h-[30rem] object-cover">
    </div>
    <!--Preloader end-->

    <?php include('./components/nav/index.php') ?>

    <!-- hero area -->
    <div class="w-full">
        <div class="w-full flex items-center">
            <!-- Slider main container -->
            <div class="swiper banner-swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide flex items-center bg-no-repeat bg-cover bg-center min-h-[520px]" style="background-image: url(./assets/images/banner-1.jpg);">
                        <div class="container">
                            <div class="lg:flex flex-wrap">
                                <div class="w-full lg:w-1/2">
                                    <div>
                                        <h1 class="text-[38px] md:text-[56px] lg:text-5xl xl:text-[56px] leading-[42px] md:leading-[64px] lg:leading-[48px] xl:leading-[64px] font-medium mb-2 sm:mb-4 text-secondary">
                                            Step Into Style With Benco Fashion World</h1>
                                        <p class="text-secondary text-base mb-2 sm:mb-4">Discover a fashion experience like no other. At <?php echo $sitename ?>, we bring the runway to your doorstep. Explore trendy styles, premium quality, and collections that define confidence and elegance.</p>
                                        <div class="mt-[30px] md:mt-[40px]">
                                            <a class="primary-btn py-2.5" href="<?php echo "$domain" ?>pages/product/" tabindex="-1">SHOP NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide flex items-center bg-no-repeat bg-cover bg-center min-h-[520px]" style="background-image: url(./assets/images/banner-2.jpg);">
                        <div class="container">
                            <div class="lg:flex flex-wrap">
                                <div class="lg:w-1/2">
                                    <div>
                                        <h1 class="text-[38px] md:text-[56px] lg:text-5xl xl:text-[56px] leading-[42px] md:leading-[64px] lg:leading-[48px] xl:leading-[64px] font-medium mb-2 sm:mb-4 text-secondary">
                                            Fashion That Speaks for You</h1>
                                        <p class="text-secondary text-base mb-2 sm:mb-4">At <?php echo $sitename ?>, we're passionate about redefining your wardrobe with fashion-forward outfits. Shop our carefully handpicked styles for every mood and moment.</p>
                                        <div class="mt-[30px] md:mt-[40px]">
                                            <a class="primary-btn py-2.5" href="<?php echo "$domain" ?>pages/product/" tabindex="-1">SHOP NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide flex items-center bg-no-repeat bg-cover bg-center min-h-[520px]" style="background-image: url(./assets/images/banner-3.jpg);">
                        <div class="container">
                            <div class="lg:flex flex-wrap">
                                <div class="lg:w-1/2">
                                    <div>
                                        <h1 class="text-[38px] md:text-[56px] lg:text-5xl xl:text-[56px] leading-[42px] md:leading-[64px] lg:leading-[48px] xl:leading-[64px] font-medium mb-2 sm:mb-4 text-secondary">
                                            Your Style, Our Passion</h1>
                                        <p class="text-secondary text-base mb-2 sm:mb-4">At <?php echo $sitename ?>, fashion meets personality. Let your outfits do the talking as you browse through our vibrant and elegant selections. Designed to make you stand out — effortlessly.</p>
                                        <div class="mt-[30px] md:mt-[40px]">
                                            <a class="primary-btn py-2.5" href="<?php echo "$domain" ?>pages/product/" tabindex="-1">SHOP NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev hidden xl:block collection-banner"></div>
                <div class="swiper-button-next hidden xl:block collection-banner"></div>

                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <!-- hero area end -->

    <!-- feature area -->
    <div class="container py-14">
        <div class="flex justify-center">
            <div class="w-full xl:w-5/6 max-w-full xl:px-3">
                <div class="sm:flex justify-center">
                    <div class="w-[270px] sm:w-1/3 max-w-full sm:pr-3 mb-3 sm:mb-0 mx-auto">
                        <div class="min-h-[90px] border border-primary rounded-sm flex items-center justify-center">
                            <div class="mr-3 md:mr-6 flex-shrink-0">
                                <img src="./assets/images/delivery-van.svg" class="w-[40px] md:w-[50px] max-h-11" alt="icon">
                            </div>
                            <div>
                                <h4 class="text-lg sm:text-base md:text-lg leading-6 mb-1">Free shipping</h4>
                                <p class="sm:text-[10px] md:text-[13px] text-[#6B6B6B]">Orders over $200</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-[270px] sm:w-1/3 max-w-full sm:px-3 mb-3 sm:mb-0 mx-auto">
                        <div class="min-h-[90px] border border-primary rounded-sm flex items-center justify-center">
                            <div class="mr-3 md:mr-6 flex-shrink-0">
                                <img src="./assets/images/money-back.svg" class="w-[40px] md:w-[50px] max-h-11" alt="icon">
                            </div>
                            <div>
                                <h4 class="text-lg sm:text-base md:text-lg leading-6 mb-1">Money Returns</h4>
                                <p class="sm:text-[10px] md:text-[13px] text-[#6B6B6B]">30 Days money return</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-[270px] sm:w-1/3 max-w-full sm:pl-3 mx-auto">
                        <div class="min-h-[90px] border border-primary rounded-sm flex items-center justify-center">
                            <div class="mr-3 md:mr-6 flex-shrink-0">
                                <img src="./assets/images/service-hours.svg" class="w-[40px] md:w-[50px] max-h-11" alt="icon">
                            </div>
                            <div>
                                <h4 class="text-lg sm:text-base md:text-lg leading-6 mb-1">24/7 Support</h4>
                                <p class="sm:text-[10px] md:text-[13px] text-[#6B6B6B]">Customer support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature area end -->

    <!-- offer deal -->
    <div class="container pb-14">
        <div class="sm:flex flex-wrap">
            <div class="w-full sm:w-1/2 sm:pr-3 mb-8 sm:mb-0">
                <div class="flex flex-col-reverse lg:flex-row gap-4 lg:gap-0 lg:items-center justify-between px-8 py-6 bg-[#FBE3E4]">
                    <div>
                        <h3 class="text-lg leading-4 mb-2 text-[#FD3D57]">30% offer</h3>
                        <h4 class="text-[22px] leading-[26px] text-secondary mb-2">Free Shipping</h4>
                        <p class="text-[15px] leading-4 text-[#464545] mb-5">Attractive Natural Furniture</p>
                        <a href="<?php echo "$domain" ?>pages/product/" class="primary-btn min-w-[80px]">Shop Now</a>
                    </div>
                    <div class="flex justify-center">
                        <img src="./assets/images/sofa-1.png" class="w-[200px] h-[150px] lg:h-[180px] object-contain flex-shrink-0 hover:scale-105 transition-all duration-300" alt="product">
                    </div>
                </div>
            </div>

            <div class="w-full sm:w-1/2 sm:pl-3">
                <div class="flex flex-col-reverse lg:flex-row gap-4 lg:gap-0 lg:items-center justify-between px-8 py-6 bg-[#EDECEC]">
                    <div>
                        <h3 class="text-lg leading-4 mb-2 text-[#FD3D57]">50% offer</h3>
                        <h4 class="text-[22px] leading-[26px] text-secondary mb-2">Flash Sale</h4>
                        <p class="text-[15px] leading-4 text-[#464545] mb-5">Attractive Natural Furniture</p>
                        <a href="<?php echo "$domain" ?>pages/product/" class="primary-btn min-w-[80px]">Shop Now</a>
                    </div>
                    <div class="flex justify-center">
                        <img src="./assets/images/sofa-2.png" class="w-[200px] h-[150px] lg:h-[180px] object-contain flex-shrink-0 hover:scale-105 transition-all duration-300" alt="product">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offer deal end-->

    <!-- categories -->
    <div class="container pb-14">
        <h2 class="text-[28px] text-secondary mb-6">SHOP BY CATEGORY</h2>
        <div id="category" class="grid grid-cols-2 lg:grid-cols-3 gap-2">



        </div>
    </div>
    <!-- categories end-->



    <div x-data class="container pb-14">
        <h2 class="text-[28px] text-secondary mb-6">RECOMENDED FOR YOU</h2>
        <div id="arrival" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">



        </div>




    </div>

    <!-- ad banner -->
    <div class="pb-14">
        <div class="container">
            <a href="#">
                <picture>
                    <img class="w-full flex-shrink-0" src="./assets/images/offer-2.jpg" alt="ad">
                </picture>
            </a>
        </div>
    </div>
    <!-- ad banner end -->


    <div x-data class="container pb-14">
        <h2 class="text-[28px] text-secondary mb-6">RECOMENDED FOR YOU</h2>
        <div id="recomended" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">



        </div>




    </div>



    <!-- footer area -->
    <?php include('./components/footer/index.php') ?>
    <!-- footer area end -->



    <!-- popup -->
    <div x-data="{open: false}" x-show="open" x-transition x-cloak x-init="setTimeout(() => {open = true}, 2000)" class="fixed w-full h-full top-0 left-0 bg-black/50 flex items-center justify-center px-[15px] z-30">
        <div @click.outside="open=false" class="relative w-full max-w-[700px] bg-white py-[66px] px-6 bg-no-repeat bg-right bg-contain rounded-[5px] opacity-100" style="background-image: url(./assets/images/popup-bg.jpg);">
            <div class="w-full max-w-[380px] text-center">
                <button @click="open=false" class="absolute right-2.5 top-2.5 text-secondary hover:text-primary transition duration-300">
                    <svg width="22" height="22" viewBox="0 0 32 32">
                        <path fill="currentColor" d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z" />
                    </svg>
                </button>
                <h2 class="text-[40px] leading-[50px] font-medium mb-2 text-secondary">GET <span class="text-primary">30% </span>OFF</h2>
                <p class="text-[15px] leading-[22px] mb-4 text-secondary">
                    Subscribe to the newsletter to receive updates about new products.
                </p>
                <form action="#" class="flex">
                    <input type="text" placeholder="Your Email Address" class="w-full bg-white rounded-l-[5px] border border-primary focus:ring-0 focus:border-primary border-r-transparent text-sm px-5 py-[14px] focus:outline-none">
                    <button type="submit" class="min-w-[120px] primary-btn rounded-l-none">Subscribe</button>
                </form>
                <div class="mt-6">
                    <div class="flex items-center justify-center">
                        <input type="checkbox" name="pointer" id="pointer">
                        <label for="pointer" class="pl-4 relative cursor-pointer text-secondary">Do not show this
                            again</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popup end-->



    <!-- script -->
    <script src="./assets/js/swiper-bundle.min.js"></script>
    <script src="./assets/js/nice-select2.js"></script>
    <script src="./assets/js/main.js"></script>
    <script>
        // slider
        const swiper = new Swiper('.banner-swiper', {
            // Optional parameters
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });


        // swiper slider
        var mySwiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 30,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                480: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
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
                './assets/images/product1.jpg',
                './assets/images/product9.jpg',
                './assets/images/product4.jpg',
                './assets/images/product12.jpg',
            ],
            imageIndex: 0
        }

        document.addEventListener('alpine:init', () => {
            Alpine.store('productView', {
                isActive: false
            })
        })
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/add_to_cart.js"></script>
    <script type="module">
        import fetchAndRenderProducts from './assets/js/get_product.js';
        const data = await fetchAndRenderProducts()


        let viewProduct = "<?php echo $domain ?>pages/product-view/";




        function dispalyCategory(products) {
            // Filter out products with empty category
            const validProducts = products.filter(p => p.category && p.category.trim() !== '');

            // Extract unique categories
            const uniqueCategories = [...new Set(validProducts.map(p => p))];

            uniqueCategories.forEach(el => {

                const html = `<div class="col-span-1 overflow-hidden">
                <a href="#" class="group h-[150px] sm:h-[250px] flex items-center justify-center relative bg-cover bg-no-repeat bg-center after:absolute after:inset-0 after:bg-[#00000060] after:content-['']" style="background-image: url(${el.image});">
                    <div class="flex items-center relative z-10">
                        <h4 class="text-xl leading-6 text-white font-medium">${el.category}</h4>
                        <div class="text-white opacity-0 group-hover:opacity-100 group-hover:ml-2 transition-all duration-300">
                            <svg width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M13.3 17.275q-.3-.3-.288-.725q.013-.425.313-.725L16.15 13H5q-.425 0-.713-.288Q4 12.425 4 12t.287-.713Q4.575 11 5 11h11.15L13.3 8.15q-.3-.3-.3-.713q0-.412.3-.712t.713-.3q.412 0 .712.3L19.3 11.3q.15.15.213.325q.062.175.062.375t-.062.375q-.063.175-.213.325l-4.6 4.6q-.275.275-.687.275q-.413 0-.713-.3Z" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>`
                document.getElementById('category').innerHTML += html

            })


        }
        dispalyCategory(data)


        function renderProductCard(product) {
            const {
                title,
                category,
                create_at,
                price,
                image,
                compare_at_price,
                description,
                variant_id
            } = product;

            let discountText = '';
            if (compare_at_price && compare_at_price > price) {
                const discount_percentage = Math.round(((compare_at_price - price) / compare_at_price) * 100);
                discountText = `<div class="absolute top-[15px] left-[15px] p-2 rounded-[3px] bg-[#ffc107] text-[15px] text-white leading-[18px] z-10">${discount_percentage}% OFF</div>`;
            }

            return `
        <div class="col-span-1 overflow-hidden rounded-[3px] shadow-sm group">
            <div class="relative">
                <img style="height: 240px !important;object-fit: center" src="${image}" class="w-full object-cover flex-shrink-0" alt="product">
                ${discountText}
            </div>
            <div class="p-4">
                <h4 class="text-lg font-semibold text-secondary capitalize">${title}</h4>
                <p class="text-sm text-gray-600 mb-2">${shortenDescription(description) || 'No description available.'}</p>
                <div class="flex items-center gap-2">
                    <span class="text-xl font-bold text-red-500">$${price}</span>
                    ${compare_at_price && compare_at_price > price ? `<span class="text-base line-through text-gray-400">$${compare_at_price}</span>` : ''}
                </div>
            </div>
            <div class="w-full">
               <a href="${viewProduct}?id=${variant_id}"> <button product_id="${variant_id}" id="add_to_cart" class="primary-btn w-full p-2 rounded-b-[3px] flex items-center justify-center gap-2">
                    <svg width="16" height="16" viewBox="0 0 32 32"><circle cx="10" cy="28" r="2" fill="currentColor" /><circle cx="24" cy="28" r="2" fill="currentColor" /><path fill="currentColor" d="M28 7H5.82L5 2.8A1 1 0 0 0 4 2H0v2h3.18L7 23.2a1 1 0 0 0 1 .8h18v-2H8.82L8 18h18a1 1 0 0 0 1-.78l2-9A1 1 0 0 0 28 7Zm-2.8 9H7.62l-1.4-7h20.53Z" /></svg>
                    VIEW PRODUCT
                </button></a>
            </div>
        </div>
    `;
        }

        function recomended(products) {
            // Shuffle all products and pick 10
            const shuffled = products
                .sort(() => 0.5 - Math.random())
                .slice(0, 10);

            document.getElementById('recomended').innerHTML = shuffled.map(renderProductCard).join('');
        }

        function arrival(products) {
            // Check some date values


            const validProducts = products
                .filter(p => p.created_at)
                .sort((a, b) => new Date(b.created_at) - new Date(a.created_at))
                .slice(0, 10);

            console.log(validProducts)

            document.getElementById('arrival').innerHTML = validProducts.map(renderProductCard).join('');
        }

        // Call the functions with your product data
        recomended(data);
        arrival(data);

        function shortenDescription(description, maxLength=100) {
            if (!description) return '';
            if (description.length <= maxLength) {
                return description;
            }
            return description.slice(0, maxLength).trim() + '...';
        }
    </script>
</body>




</html>