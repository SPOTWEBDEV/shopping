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
                                            Best Collection For Home Decoration</h1>
                                        <p class="text-secondary text-base mb-2 sm:mb-4">Discover a shopping experience unlike any other. At <?php echo $sitename ?> we're dedicated to delivering excellence right to your doorstep. Immerse yourself in a world where convenience, style, and endless possibilities converge through our meticulously curated selection of products.</p>
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
                                            Best Collection For Home Decoration</h1>
                                        <p class="text-secondary text-base mb-2 sm:mb-4">At <?php echo $sitename ?> we're passionate about bringing you the best shopping experience possible. Step into a world of convenience, style, and endless possibilities with our carefully curated selection of products</p>
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
                                            Best Collection For Home Decoration</h1>
                                        <p class="text-secondary text-base mb-2 sm:mb-4">Embark on a shopping journey like no other. At <?php echo $sitename ?> we're dedicated to crafting an unforgettable experience tailored just for you. Step into a world where convenience, style, and boundless opportunities await, all within the comfort of your home.</p>
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
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-2">
            <div class="col-span-1 overflow-hidden">
                <a href="#" class="group h-[150px] sm:h-[250px] flex items-center justify-center relative bg-cover bg-no-repeat bg-center after:absolute after:inset-0 after:bg-[#00000060] after:content-['']" style="background-image: url(./assets/images/category-1.jpg);">
                    <div class="flex items-center relative z-10">
                        <h4 class="text-xl leading-6 text-white font-medium">Bedroom</h4>
                        <div class="text-white opacity-0 group-hover:opacity-100 group-hover:ml-2 transition-all duration-300">
                            <svg width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M13.3 17.275q-.3-.3-.288-.725q.013-.425.313-.725L16.15 13H5q-.425 0-.713-.288Q4 12.425 4 12t.287-.713Q4.575 11 5 11h11.15L13.3 8.15q-.3-.3-.3-.713q0-.412.3-.712t.713-.3q.412 0 .712.3L19.3 11.3q.15.15.213.325q.062.175.062.375t-.062.375q-.063.175-.213.325l-4.6 4.6q-.275.275-.687.275q-.413 0-.713-.3Z" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-span-1 overflow-hidden">
                <a href="#" class="group h-[150px] sm:h-[250px] flex items-center justify-center relative bg-cover bg-no-repeat bg-center after:absolute after:inset-0 after:bg-[#00000060] after:content-['']" style="background-image: url(./assets/images/category-2.jpg);">
                    <div class="flex items-center relative z-10">
                        <h4 class="text-xl leading-6 text-white font-medium">Mattresses</h4>
                        <div class="text-white opacity-0 group-hover:opacity-100 group-hover:ml-2 transition-all duration-300">
                            <svg width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M13.3 17.275q-.3-.3-.288-.725q.013-.425.313-.725L16.15 13H5q-.425 0-.713-.288Q4 12.425 4 12t.287-.713Q4.575 11 5 11h11.15L13.3 8.15q-.3-.3-.3-.713q0-.412.3-.712t.713-.3q.412 0 .712.3L19.3 11.3q.15.15.213.325q.062.175.062.375t-.062.375q-.063.175-.213.325l-4.6 4.6q-.275.275-.687.275q-.413 0-.713-.3Z" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-span-1 overflow-hidden">
                <a href="#" class="group h-[150px] sm:h-[250px] flex items-center justify-center relative bg-cover bg-no-repeat bg-center after:absolute after:inset-0 after:bg-[#00000060] after:content-['']" style="background-image: url(./assets/images/category-3.jpg);">
                    <div class="flex items-center relative z-10">
                        <h4 class="text-xl leading-6 text-white font-medium">Office</h4>
                        <div class="text-white opacity-0 group-hover:opacity-100 group-hover:ml-2 transition-all duration-300">
                            <svg width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M13.3 17.275q-.3-.3-.288-.725q.013-.425.313-.725L16.15 13H5q-.425 0-.713-.288Q4 12.425 4 12t.287-.713Q4.575 11 5 11h11.15L13.3 8.15q-.3-.3-.3-.713q0-.412.3-.712t.713-.3q.412 0 .712.3L19.3 11.3q.15.15.213.325q.062.175.062.375t-.062.375q-.063.175-.213.325l-4.6 4.6q-.275.275-.687.275q-.413 0-.713-.3Z" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-span-1 overflow-hidden">
                <a href="#" class="group h-[150px] sm:h-[250px] flex items-center justify-center relative bg-cover bg-no-repeat bg-center after:absolute after:inset-0 after:bg-[#00000060] after:content-['']" style="background-image: url(./assets/images/category-4.jpg);">
                    <div class="flex items-center relative z-10">
                        <h4 class="text-xl leading-6 text-white font-medium">Outdoor</h4>
                        <div class="text-white opacity-0 group-hover:opacity-100 group-hover:ml-2 transition-all duration-300">
                            <svg width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M13.3 17.275q-.3-.3-.288-.725q.013-.425.313-.725L16.15 13H5q-.425 0-.713-.288Q4 12.425 4 12t.287-.713Q4.575 11 5 11h11.15L13.3 8.15q-.3-.3-.3-.713q0-.412.3-.712t.713-.3q.412 0 .712.3L19.3 11.3q.15.15.213.325q.062.175.062.375t-.062.375q-.063.175-.213.325l-4.6 4.6q-.275.275-.687.275q-.413 0-.713-.3Z" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-span-1 overflow-hidden">
                <a href="#" class="group h-[150px] sm:h-[250px] flex items-center justify-center relative bg-cover bg-no-repeat bg-center after:absolute after:inset-0 after:bg-[#00000060] after:content-['']" style="background-image: url(./assets/images/category-5.jpg);">
                    <div class="flex items-center relative z-10">
                        <h4 class="text-xl leading-6 text-white font-medium">Lounges &amp; Sofas</h4>
                        <div class="text-white opacity-0 group-hover:opacity-100 group-hover:ml-2 transition-all duration-300">
                            <svg width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M13.3 17.275q-.3-.3-.288-.725q.013-.425.313-.725L16.15 13H5q-.425 0-.713-.288Q4 12.425 4 12t.287-.713Q4.575 11 5 11h11.15L13.3 8.15q-.3-.3-.3-.713q0-.412.3-.712t.713-.3q.412 0 .712.3L19.3 11.3q.15.15.213.325q.062.175.062.375t-.062.375q-.063.175-.213.325l-4.6 4.6q-.275.275-.687.275q-.413 0-.713-.3Z" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-span-1 overflow-hidden">
                <a href="#" class="group h-[150px] sm:h-[250px] flex items-center justify-center relative bg-cover bg-no-repeat bg-center after:absolute after:inset-0 after:bg-[#00000060] after:content-['']" style="background-image: url(./assets/images/category-6.jpg);">
                    <div class="flex items-center relative z-10">
                        <h4 class="text-xl leading-6 text-white font-medium">Living &amp; Dining</h4>
                        <div class="text-white opacity-0 group-hover:opacity-100 group-hover:ml-2 transition-all duration-300">
                            <svg width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M13.3 17.275q-.3-.3-.288-.725q.013-.425.313-.725L16.15 13H5q-.425 0-.713-.288Q4 12.425 4 12t.287-.713Q4.575 11 5 11h11.15L13.3 8.15q-.3-.3-.3-.713q0-.412.3-.712t.713-.3q.412 0 .712.3L19.3 11.3q.15.15.213.325q.062.175.062.375t-.062.375q-.063.175-.213.325l-4.6 4.6q-.275.275-.687.275q-.413 0-.713-.3Z" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- categories end-->

    <!-- top new arrival -->
    <div x-data class="container pb-14">
        <h2 class="text-[28px] text-secondary mb-6">Top new arrival</h2>
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                <?php

                $select_recomended = mysqli_query($connection, "SELECT * FROM `product_table` ORDER BY `id` DESC LIMIT 4");
                while ($row_recomended = mysqli_fetch_assoc($select_recomended)) { ?>
                    <div class="swiper-slide">
                        <div class="overflow-hidden rounded-[3px] shadow-sm group">
                            <div class="relative">
                                <img style="height: 170px !important;object-fit: fill;" src="<?php echo $domain . 'uploads/products/' . $row_recomended['product_front_photo'] ?>" class="w-full object-cover flex-shrink-0" alt="product">
                                <?php if ($row_recomended['discount'] != 0) { ?>
                                    <div class="absolute top-[15px] left-[15px] p-2 rounded-[3px] bg-[#28A745] text-[15px] text-white leading-[18px] z-10">
                                        25%</div>

                                <?php  } ?>


                                <div class="w-full h-full absolute left-0 top-0 bg-bgcolor opacity-0 group-hover:opacity-100 transition-all duration-500">
                                    <a href="?view-product=<?php echo  $row_recomended['id'] ?>">
                                        <button class="absolute left-0 bottom-0 w-full p-2 bg-secondary text-white text-base text-center leading-4 flex items-center justify-center">
                                            <span class="text-white mr-1"><svg width="20" height="20" viewBox="0 0 32 32">
                                                    <path fill="currentColor" d="M16 8C7.664 8 1.25 15.344 1.25 15.344L.656 16l.594.656s5.848 6.668 13.625 7.282c.371.046.742.062 1.125.062s.754-.016 1.125-.063c7.777-.613 13.625-7.28 13.625-7.28l.594-.657l-.594-.656S24.336 8 16 8zm0 2c2.203 0 4.234.602 6 1.406A6.89 6.89 0 0 1 23 15a6.995 6.995 0 0 1-6.219 6.969c-.02.004-.043-.004-.062 0c-.239.011-.477.031-.719.031c-.266 0-.523-.016-.781-.031A6.995 6.995 0 0 1 9 15c0-1.305.352-2.52.969-3.563h-.031C11.717 10.617 13.773 10 16 10zm0 2a3 3 0 1 0 .002 6.002A3 3 0 0 0 16 12zm-8.75.938A9.006 9.006 0 0 0 7 15c0 1.754.5 3.395 1.375 4.781A23.196 23.196 0 0 1 3.531 16a23.93 23.93 0 0 1 3.719-3.063zm17.5 0A23.93 23.93 0 0 1 28.469 16a23.196 23.196 0 0 1-4.844 3.781A8.929 8.929 0 0 0 25 15c0-.715-.094-1.398-.25-2.063z" />
                                                </svg></span>
                                            Quick View
                                        </button></a>

                                </div>
                            </div>
                            <div class="p-4">
                                <a href="#">
                                    <h4 class="text-lg leading-6 mb-1 text-secondary hover:text-primary font-medium transition duration-200">
                                        <?php echo $row_recomended['product_name'] ?></h4>
                                </a>
                                <p class="text-[15px] text-[#464545] mb-2.5"><?php echo $row_recomended['about_product'] ?></p>
                                <div class="mr-[5px]">
                                    <span class="text-[#fd3d57] text-xl font-semibold leading-[22px]">$<?php echo number_format($row_recomended['product_price']) ?></span>
                                </div>
                                <div class="flex items-center justify-start gap-[9px]">
                                    <div class="flex items-center">
                                        <span class="text-[#F6BC3E]"><svg width="17" height="17" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z">
                                                </path>
                                            </svg></span>
                                        <span class="text-[#F6BC3E]"><svg width="17" height="17" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z">
                                                </path>
                                            </svg></span>
                                        <span class="text-[#F6BC3E]"><svg width="17" height="17" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z">
                                                </path>
                                            </svg></span>
                                        <span class="text-[#F6BC3E]"><svg width="17" height="17" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z">
                                                </path>
                                            </svg></span>
                                        <span class="text-[#F6BC3E]"><svg width="17" height="17" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z">
                                                </path>
                                            </svg></span>
                                    </div>
                                    <p class="text-[15px] text-[#464545]">(150)</p>
                                </div>
                            </div>
                            <div class="w-full">
                                <button product_id="<?php echo $row_recomended['id']  ?>" id="add_to_cart" class="primary-btn w-full rounded-t-none text-base leading-[19px] gap-1.5 p-2 rounded-b-[3px] flex items-center justify-center transition-all duration-500">
                                    <span class="text-white btn-icon transition duration-500"><svg width="16" height="16" viewBox="0 0 32 32">
                                            <circle cx="10" cy="28" r="2" fill="currentColor" />
                                            <circle cx="24" cy="28" r="2" fill="currentColor" />
                                            <path fill="currentColor" d="M28 7H5.82L5 2.8A1 1 0 0 0 4 2H0v2h3.18L7 23.2a1 1 0 0 0 1 .8h18v-2H8.82L8 18h18a1 1 0 0 0 1-.78l2-9A1 1 0 0 0 28 7Zm-2.8 9H7.62l-1.4-7h20.53Z" />
                                        </svg></span>
                                    ADD TO CART
                                </button>
                            </div>
                        </div>
                    </div>
                <?php

                }  ?>

            </div>
            <div class="swiper-button-next next-btn"></div>
            <div class="swiper-button-prev prev-btn"></div>
        </div>

    </div>
    <!-- top new arrival end-->

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

    <!-- recomended for you -->
    <div x-data class="container pb-14">
        <h2 class="text-[28px] text-secondary mb-6">RECOMENDED FOR YOU</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">


            <?php

            $select_recomended = mysqli_query($connection, "SELECT * FROM `product_table` ORDER BY `id` DESC LIMIT 5");
            while ($row_recomended = mysqli_fetch_assoc($select_recomended)) { ?>

                <div class="col-span-1 overflow-hidden rounded-[3px] shadow-sm group">
                    <div class="relative">
                        <img style="height: 240px !important;object-fit: center" src="<?php echo $domain . 'uploads/products/' . $row_recomended['product_front_photo'] ?>" class="w-full object-cover flex-shrink-0" alt="product">
                        <?php if ($row_recomended['discount'] != 0) { ?>
                            <div class="absolute top-[15px] left-[15px] p-2 rounded-[3px] bg-[#ffc107] text-[15px] text-white leading-[18px] z-10">
                                <?php echo $row_recomended['discount']  ?>%</div>
                        <?php } ?>

                        <div class="w-[30px] h-[30px] bg-white text-base shadow-sm rounded-full absolute top-[15px] right-[15px] z-10 text-primary flex items-center justify-center cursor-pointer">
                            <svg width="26" height="26" viewBox="0 0 50 50">
                                <path fill="currentColor" d="m25 39.7l-.6-.5C11.5 28.7 8 25 8 19c0-5 4-9 9-9c4.1 0 6.4 2.3 8 4.1c1.6-1.8 3.9-4.1 8-4.1c5 0 9 4 9 9c0 6-3.5 9.7-16.4 20.2l-.6.5zM17 12c-3.9 0-7 3.1-7 7c0 5.1 3.2 8.5 15 18.1c11.8-9.6 15-13 15-18.1c0-3.9-3.1-7-7-7c-3.5 0-5.4 2.1-6.9 3.8L25 17.1l-1.1-1.3C22.4 14.1 20.5 12 17 12z" />
                            </svg>
                        </div>
                        <div class="w-full h-full absolute left-0 top-0 bg-bgcolor opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <a href="?view-product=<?php echo  $row_recomended['id'] ?>">
                                <button class="absolute left-0 bottom-0 w-full p-2 bg-secondary text-white text-base text-center leading-4 flex items-center justify-center">
                                    <span class="text-white mr-1"><svg width="20" height="20" viewBox="0 0 32 32">
                                            <path fill="currentColor" d="M16 8C7.664 8 1.25 15.344 1.25 15.344L.656 16l.594.656s5.848 6.668 13.625 7.282c.371.046.742.062 1.125.062s.754-.016 1.125-.063c7.777-.613 13.625-7.28 13.625-7.28l.594-.657l-.594-.656S24.336 8 16 8zm0 2c2.203 0 4.234.602 6 1.406A6.89 6.89 0 0 1 23 15a6.995 6.995 0 0 1-6.219 6.969c-.02.004-.043-.004-.062 0c-.239.011-.477.031-.719.031c-.266 0-.523-.016-.781-.031A6.995 6.995 0 0 1 9 15c0-1.305.352-2.52.969-3.563h-.031C11.717 10.617 13.773 10 16 10zm0 2a3 3 0 1 0 .002 6.002A3 3 0 0 0 16 12zm-8.75.938A9.006 9.006 0 0 0 7 15c0 1.754.5 3.395 1.375 4.781A23.196 23.196 0 0 1 3.531 16a23.93 23.93 0 0 1 3.719-3.063zm17.5 0A23.93 23.93 0 0 1 28.469 16a23.196 23.196 0 0 1-4.844 3.781A8.929 8.929 0 0 0 25 15c0-.715-.094-1.398-.25-2.063z" />
                                        </svg></span>
                                    Quick View
                                </button></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a href="#">
                            <h4 class="text-lg leading-6 mb-1 text-secondary hover:text-primary capitalize font-medium transition duration-200">
                                <?php echo $row_recomended['product_name'] ?></h4>
                        </a>
                        <p class="text-[15px] text-[#464545] mb-2.5"><?php echo $row_recomended['about_product']  ?></p>
                        <div class="mr-[5px]">
                            <span class="text-[#fd3d57] text-xl font-semibold leading-[22px]">$<?php echo number_format($row_recomended['product_price']) ?></span>
                        </div>
                        <div class="flex items-center justify-start gap-[9px]">
                            <div class="flex items-center">
                                <span class="text-[#F6BC3E]"><svg width="17" height="17" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z">
                                        </path>
                                    </svg></span>
                                <span class="text-[#F6BC3E]"><svg width="17" height="17" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z">
                                        </path>
                                    </svg></span>
                                <span class="text-[#F6BC3E]"><svg width="17" height="17" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z">
                                        </path>
                                    </svg></span>
                                <span class="text-[#F6BC3E]"><svg width="17" height="17" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z">
                                        </path>
                                    </svg></span>
                                <span class="text-[#F6BC3E]"><svg width="17" height="17" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z">
                                        </path>
                                    </svg></span>
                            </div>
                            <p class="text-[15px] text-[#464545]">(50)</p>
                        </div>
                    </div>
                    <div class="w-full">
                        <button product_id="<?php echo $row_recomended['id']  ?>" id="add_to_cart" class="primary-btn w-full rounded-t-none text-base leading-[19px] gap-1.5 p-2 rounded-b-[3px] flex items-center justify-center transition-all duration-500">
                            <span class="text-white btn-icon transition duration-500"><svg width="16" height="16" viewBox="0 0 32 32">
                                    <circle cx="10" cy="28" r="2" fill="currentColor" />
                                    <circle cx="24" cy="28" r="2" fill="currentColor" />
                                    <path fill="currentColor" d="M28 7H5.82L5 2.8A1 1 0 0 0 4 2H0v2h3.18L7 23.2a1 1 0 0 0 1 .8h18v-2H8.82L8 18h18a1 1 0 0 0 1-.78l2-9A1 1 0 0 0 28 7Zm-2.8 9H7.62l-1.4-7h20.53Z" />
                                </svg></span>
                            ADD TO CART
                        </button>
                    </div>
                </div>


            <?php }

            ?>





        </div>




    </div>
    <!-- recomended for you end-->

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

    <!-- product quick view -->
    <?php if (isset($_GET['view-product']) && isset($_GET['category'])) {
        $view_product = $_GET['view-product'];
        $category = $_GET['category'];
        $select = mysqli_query($connection, "SELECT product_table.*,category_table.id,category_table.name as category_table_name FROM product_table,category_table WHERE product_table.id='$view_product' AND    category_table.id = '$category'");
        if (mysqli_num_rows($select)) {
            while ($row = mysqli_fetch_assoc($select)) { ?>

                <div class="fixed left-0 top-0 w-full h-full rounded-sm flex justify-center items-center z-20">
                    <div @click.outside="$store.productView.isActive=false" class="relative max-w-[975px] max-h-[88vh] px-6 py-10 bg-white shadow overflow-y-auto mx-4 lg:mx-0">
                        <button @click="$store.productView.isActive=false" class="w-6 h-6 bg-primary text-white rounded flex justify-center items-center absolute top-2 right-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6Z" />
                            </svg>
                        </button>
                        <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12 lg:col-span-6" x-data="productImageModule">

                                <div class="flex justify-center items-center">
                                    <img loading="lazy" src="<?php echo $domain . 'uploads/products/' . $row['product_front_photo'] ?>" alt="product">

                                </div>

                                <div class="productSwiper mt-4 relative group w-full">
                                    <div class="swiper-wrapper flex">
                                        <div class="swiper-slide">
                                            <div class="h-[80px] flex flex-shrink-0 justify-center items-center">
                                                <img loading="lazy" src="<?php echo $domain . 'uploads/products/' . $row['product_front_photo'] ?>" alt="product" :class="imageIndex === index ? 'border border-primary' : ''" class="w-full h-full object-cover">
                                            </div>
                                        </div>
                                    </div>



                                </div>

                            </div>
                            <div class="col-span-12 lg:col-span-6">
                                <div class="product_info_wrapper">
                                    <div class="product_base_info">
                                        <h1 class="text-xl sm:text-3xl uppercase"><?php echo $row['product_name']  ?></h1>
                                        <div class="rating">
                                            <div class="flex gap-3 items-center mt-4">
                                                <div class="flex gap-1 items-center">
                                                    <span class="text-yellow-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                                            <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21L12 17.27z" />
                                                        </svg>
                                                    </span>
                                                    <span class="text-yellow-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                                            <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21L12 17.27z" />
                                                        </svg>
                                                    </span>
                                                    <span class="text-yellow-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                                            <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21L12 17.27z" />
                                                        </svg>
                                                    </span>
                                                    <span class="text-yellow-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                                            <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21L12 17.27z" />
                                                        </svg>
                                                    </span>
                                                    <span class="text-yellow-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                                            <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21L12 17.27z" />
                                                        </svg>
                                                    </span>
                                                </div>
                                                <p class="text-sm">50 Reviews</p>
                                            </div>
                                        </div>
                                        <div class="space-y-2 mt-4">
                                            <p><span class="font-medium pr-3">Availability:</span><span class="text-[#08B54C] font-medium">In Stock</span></p>

                                            <p><span class="font-medium pr-3">Category:</span><?php echo $row['category_table_name'] ?></p>
                                            <p><span class="font-medium pr-3">SKU:</span><?php echo $row['product_type'] ?></p>
                                        </div>

                                        <?php

                                        if ($row['discount'] == 0) { ?>
                                            <div class="mt-3 flex gap-3 items-center overflow-hidden">
                                                <span class="">$<?php echo number_format($row['product_price']) ?></span>


                                            </div>

                                        <?php  } else { ?>
                                            <div class="mt-3 flex gap-3 items-center overflow-hidden">
                                                <span class="line-through">$<?php echo number_format($row['product_price']) ?></span>
                                                <span class="text-2xl text-primary font-semibold">$<?php
                                                                                                    $price = $row['product_price'];
                                                                                                    $discount = $row['discount'];
                                                                                                    echo ($price / $discount) * 100;

                                                                                                    ?></span>
                                                <div class="ml-3 text-sm bg-primary text-white px-2 py-[2px] relative after:absolute after:w-[14px] after:h-[14px] after:bg-primary after:-left-1 after:top-1 after:rotate-45">
                                                    -<?php echo $row['discount'] ?>%</div>
                                            </div>

                                        <?php }

                                        ?>

                                        <div class="mt-2">
                                            <p>
                                                <?php echo $row['about_product']  ?>
                                            </p>
                                        </div>




                                    </div>
                                    <!-- add to cart & wishlist -->
                                    <div class="flex gap-5 mt-6 border-b pb-5">
                                        <a href="#" class="flex gap-2 items-center border border-primary bg-primary text-sm sm:text-base text-white hover:bg-white hover:text-primary transition duration-300 px-2 sm:px-8 py-2 rounded uppercase group">
                                            <span class="text-white group-hover:text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49A.996.996 0 0 0 20.01 4H5.21l-.94-2H1v2h2l3.6 7.59l-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2s-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2s2-.9 2-2s-.9-2-2-2z" />
                                                </svg>
                                            </span>
                                            Add to Cart
                                        </a>
                                        <a href="#" class="flex gap-2 items-center border border-primary hover:bg-primary text-primary  hover:text-white transition duration-300 px-2 sm:px-8 py-2 rounded uppercase group">
                                            <span class="text-primary group-hover:text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256">
                                                    <path fill="currentColor" d="M128 220.2a13.6 13.6 0 0 1-9.9-4.1L35 133a58 58 0 0 1 2.2-84.2a56.5 56.5 0 0 1 41.6-14a62.8 62.8 0 0 1 40.3 18.3L128 62l11-11a57.9 57.9 0 0 1 84.1 2.2a56.2 56.2 0 0 1 14.1 41.6a62.8 62.8 0 0 1-18.3 40.3l-81 81a13.6 13.6 0 0 1-9.9 4.1Zm5.6-8.3ZM75 46.7a44 44 0 0 0-29.7 11.1a45.8 45.8 0 0 0-1.8 66.7l83.1 83.1a1.9 1.9 0 0 0 2.8 0l81-81c18.2-18.2 19.9-47.5 3.8-65.3a45.8 45.8 0 0 0-66.7-1.8l-15.3 15.2a6.1 6.1 0 0 1-8.5 0l-13.1-13.1A50.3 50.3 0 0 0 75 46.7Z" />
                                                </svg>
                                            </span>
                                            Wishlist
                                        </a>
                                    </div>
                                    <!-- social icon -->
                                    <div class="flex gap-3 items-center mt-4">
                                        <a href="#" class="w-8 h-8 border rounded-full flex justify-center items-center hover:bg-[#E9E4E4]">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd" d="M9.945 22v-8.834H7V9.485h2.945V6.54c0-3.043 1.926-4.54 4.64-4.54c1.3 0 2.418.097 2.744.14v3.18h-1.883c-1.476 0-1.82.703-1.82 1.732v2.433h3.68l-.736 3.68h-2.944L13.685 22" />
                                            </svg>
                                        </a>
                                        <a href="#" class="w-8 h-8 border rounded-full flex justify-center items-center hover:bg-[#E9E4E4]">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23Z" />
                                            </svg>
                                        </a>
                                        <a href="#" class="w-8 h-8 border rounded-full flex justify-center items-center hover:bg-[#E9E4E4]">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 448 512">
                                                <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9S287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7s74.7 33.5 74.7 74.7s-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8c-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8s26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9c-26.2-26.2-58-34.4-93.9-36.2c-37-2.1-147.9-2.1-184.9 0c-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9c1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0c35.9-1.7 67.7-9.9 93.9-36.2c26.2-26.2 34.4-58 36.2-93.9c2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6c-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6c-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6c29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6c11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    <?php }
        }
    } ?>

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

    <script src="./assets/js/add_to_cart.js"></script>
</body>




</html>