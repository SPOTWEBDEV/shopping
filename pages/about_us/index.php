
<?php


include('../../server/connection.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $sitename ?> || About-page</title>
    <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/swiper-bundle.min.css" />
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
    include('../../components/nav/index.php');

    ?>

   


    <!-- about us banner -->
    <div class="bg-cover bg-center bg-no-repeat h-[350px]" style="background-image: url(./../../assets/images/contact-banner.jpg);">
        <div class="container mx-auto py-36">
            <h1 class="text-center text-3xl text-white mb-1">About us</h1>
            <div class="flex justify-center items-center">
                <a href="<?php echo "$domain" ?>/index.php" class="text-primary">
                    <svg width="17" height="17" viewBox="0 0 32 32">
                        <path fill="currentColor"
                            d="m16 2.594l-.719.687l-13 13L3.72 17.72L5 16.437V28h9V18h4v10h9V16.437l1.281 1.282l1.438-1.438l-13-13zm0 2.844l9 9V26h-5V16h-8v10H7V14.437z" />
                    </svg>
                </a>
                <span class="text-white">
                    <svg width="22" height="22" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6l-6-6z" /></svg>
                </span>
                <a href="#" class="text-white">About us</a>
            </div>
        </div>
    </div>

    <!-- about us history -->
    <div class="about_history section_padding">
        <div class="container py-14">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 lg:col-span-6">
                    <div>
                        <h2 class="text-sm text-primary mb-2">OUR HISTORY</h2>
                        <h3 class="text-2xl lg:text-3xl uppercase mb-3">Creative and New fashion <br class="d-none d-xl-block"> trends collection
                        </h3>
                        <p class="mb-4">
                            Fashion is a potent visual marker of our times,” says Caroline Stevenson, head of cultural and ... “Trend analysis of any given era will reveal society's values and aspirations.” ... The urge to creative expression runs deep
                        </p>
                        <div class="flex justify-between pt-2">
                            <div>
                                <h4 class="text-3xl text-primary mb-1">12</h4>
                                <p>Years Exprience</p>
                            </div>
                            <div>
                                <h4 class="text-3xl text-primary mb-1">20K</h4>
                                <p>Happy Customer</p>
                            </div>
                            <div>
                                <h4 class="text-3xl text-primary mb-1">100%</h4>
                                <p>Clients Satisfaction</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-6">
                    <div class="about_imgs">
                        <img loading="lazy" src="../../assets/images/about-img.jpg" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about vision -->
    <div class="container grid  grid-cols-12 gap-6">
        <div class="col-span-12 lg:col-span-5">
            <div class="about_imgs">
                <img loading="lazy" src="../../assets/images/about-img-2.jpg" class="w-100">
            </div>
        </div>
        <div class="col-span-12 lg:col-span-7">
            <div class="about_hiscont ps-xl-2">
                <h2 class="text-sm text-primary mb-2">OUR VISION</h2>
                <h3 class="text-2xl lg:text-3xl uppercase mb-3">Our vision is simple - We exist to <br class="d-none d-xl-block"> accelerate our customers’ progress</h3>
                <p class="mb-4">
                    we design and deliver our customers’ digital transformation by bringing together their vision with our industry knowledge and deep technological expertise. we design and deliver our customers’ digital transformation
                </p>
                <div>
                    <p class="flex items-center gap-2 mb-2">
                        <span class="text-primary me-2">
                            <svg width="16" height="16" viewBox="0 0 1024 1024">
                                <path fill="currentColor"
                                    d="M885.9 533.7c16.8-22.2 26.1-49.4 26.1-77.7c0-44.9-25.1-87.4-65.5-111.1a67.67 67.67 0 0 0-34.3-9.3H572.4l6-122.9c1.4-29.7-9.1-57.9-29.5-79.4A106.62 106.62 0 0 0 471 99.9c-52 0-98 35-111.8 85.1l-85.9 311H144c-17.7 0-32 14.3-32 32v364c0 17.7 14.3 32 32 32h601.3c9.2 0 18.2-1.8 26.5-5.4c47.6-20.3 78.3-66.8 78.3-118.4c0-12.6-1.8-25-5.4-37c16.8-22.2 26.1-49.4 26.1-77.7c0-12.6-1.8-25-5.4-37c16.8-22.2 26.1-49.4 26.1-77.7c-.2-12.6-2-25.1-5.6-37.1zM184 852V568h81v284h-81zm636.4-353l-21.9 19l13.9 25.4a56.2 56.2 0 0 1 6.9 27.3c0 16.5-7.2 32.2-19.6 43l-21.9 19l13.9 25.4a56.2 56.2 0 0 1 6.9 27.3c0 16.5-7.2 32.2-19.6 43l-21.9 19l13.9 25.4a56.2 56.2 0 0 1 6.9 27.3c0 22.4-13.2 42.6-33.6 51.8H329V564.8l99.5-360.5a44.1 44.1 0 0 1 42.2-32.3c7.6 0 15.1 2.2 21.1 6.7c9.9 7.4 15.2 18.6 14.6 30.5l-9.6 198.4h314.4C829 418.5 840 436.9 840 456c0 16.5-7.2 32.1-19.6 43z" />
                            </svg>
                        </span> We build strong relationships
                    </p>
                    <p class="flex items-center gap-2 mb-2">
                        <span class="text-primary me-2">
                            <svg width="16" height="16" viewBox="0 0 1024 1024">
                                <path fill="currentColor"
                                    d="M885.9 533.7c16.8-22.2 26.1-49.4 26.1-77.7c0-44.9-25.1-87.4-65.5-111.1a67.67 67.67 0 0 0-34.3-9.3H572.4l6-122.9c1.4-29.7-9.1-57.9-29.5-79.4A106.62 106.62 0 0 0 471 99.9c-52 0-98 35-111.8 85.1l-85.9 311H144c-17.7 0-32 14.3-32 32v364c0 17.7 14.3 32 32 32h601.3c9.2 0 18.2-1.8 26.5-5.4c47.6-20.3 78.3-66.8 78.3-118.4c0-12.6-1.8-25-5.4-37c16.8-22.2 26.1-49.4 26.1-77.7c0-12.6-1.8-25-5.4-37c16.8-22.2 26.1-49.4 26.1-77.7c-.2-12.6-2-25.1-5.6-37.1zM184 852V568h81v284h-81zm636.4-353l-21.9 19l13.9 25.4a56.2 56.2 0 0 1 6.9 27.3c0 16.5-7.2 32.2-19.6 43l-21.9 19l13.9 25.4a56.2 56.2 0 0 1 6.9 27.3c0 16.5-7.2 32.2-19.6 43l-21.9 19l13.9 25.4a56.2 56.2 0 0 1 6.9 27.3c0 22.4-13.2 42.6-33.6 51.8H329V564.8l99.5-360.5a44.1 44.1 0 0 1 42.2-32.3c7.6 0 15.1 2.2 21.1 6.7c9.9 7.4 15.2 18.6 14.6 30.5l-9.6 198.4h314.4C829 418.5 840 436.9 840 456c0 16.5-7.2 32.1-19.6 43z" />
                            </svg>
                        </span> We encourage initiative and provide opportunity
                    </p>
                    <p class="flex items-center gap-2 mb-2">
                        <span class="text-primary me-2">
                            <svg width="16" height="16" viewBox="0 0 1024 1024">
                                <path fill="currentColor"
                                    d="M885.9 533.7c16.8-22.2 26.1-49.4 26.1-77.7c0-44.9-25.1-87.4-65.5-111.1a67.67 67.67 0 0 0-34.3-9.3H572.4l6-122.9c1.4-29.7-9.1-57.9-29.5-79.4A106.62 106.62 0 0 0 471 99.9c-52 0-98 35-111.8 85.1l-85.9 311H144c-17.7 0-32 14.3-32 32v364c0 17.7 14.3 32 32 32h601.3c9.2 0 18.2-1.8 26.5-5.4c47.6-20.3 78.3-66.8 78.3-118.4c0-12.6-1.8-25-5.4-37c16.8-22.2 26.1-49.4 26.1-77.7c0-12.6-1.8-25-5.4-37c16.8-22.2 26.1-49.4 26.1-77.7c-.2-12.6-2-25.1-5.6-37.1zM184 852V568h81v284h-81zm636.4-353l-21.9 19l13.9 25.4a56.2 56.2 0 0 1 6.9 27.3c0 16.5-7.2 32.2-19.6 43l-21.9 19l13.9 25.4a56.2 56.2 0 0 1 6.9 27.3c0 16.5-7.2 32.2-19.6 43l-21.9 19l13.9 25.4a56.2 56.2 0 0 1 6.9 27.3c0 22.4-13.2 42.6-33.6 51.8H329V564.8l99.5-360.5a44.1 44.1 0 0 1 42.2-32.3c7.6 0 15.1 2.2 21.1 6.7c9.9 7.4 15.2 18.6 14.6 30.5l-9.6 198.4h314.4C829 418.5 840 436.9 840 456c0 16.5-7.2 32.1-19.6 43z" />
                            </svg>
                        </span> We embrace change and creativity
                    </p>
                    <p class="flex items-center gap-2 mb-2">
                        <span class="text-primary me-2">
                            <svg width="16" height="16" viewBox="0 0 1024 1024">
                                <path fill="currentColor"
                                    d="M885.9 533.7c16.8-22.2 26.1-49.4 26.1-77.7c0-44.9-25.1-87.4-65.5-111.1a67.67 67.67 0 0 0-34.3-9.3H572.4l6-122.9c1.4-29.7-9.1-57.9-29.5-79.4A106.62 106.62 0 0 0 471 99.9c-52 0-98 35-111.8 85.1l-85.9 311H144c-17.7 0-32 14.3-32 32v364c0 17.7 14.3 32 32 32h601.3c9.2 0 18.2-1.8 26.5-5.4c47.6-20.3 78.3-66.8 78.3-118.4c0-12.6-1.8-25-5.4-37c16.8-22.2 26.1-49.4 26.1-77.7c0-12.6-1.8-25-5.4-37c16.8-22.2 26.1-49.4 26.1-77.7c-.2-12.6-2-25.1-5.6-37.1zM184 852V568h81v284h-81zm636.4-353l-21.9 19l13.9 25.4a56.2 56.2 0 0 1 6.9 27.3c0 16.5-7.2 32.2-19.6 43l-21.9 19l13.9 25.4a56.2 56.2 0 0 1 6.9 27.3c0 16.5-7.2 32.2-19.6 43l-21.9 19l13.9 25.4a56.2 56.2 0 0 1 6.9 27.3c0 22.4-13.2 42.6-33.6 51.8H329V564.8l99.5-360.5a44.1 44.1 0 0 1 42.2-32.3c7.6 0 15.1 2.2 21.1 6.7c9.9 7.4 15.2 18.6 14.6 30.5l-9.6 198.4h314.4C829 418.5 840 436.9 840 456c0 16.5-7.2 32.1-19.6 43z" />
                            </svg>
                        </span> We champion an environment of honesty
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- about team -->
    <div class="container py-14">
        <h3 class="text-2xl uppercase mb-4 text-center">Meet with our Team</h3>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="group">
                        <div class="team_img rounded-lg overflow-hidden relative">
                            <img loading="lazy" src="../../assets/images/team-1.jpg" class="w-100 rounded-lg" alt="team">
                            <div class="flex items-center gap-2 absolute left-1/2 -translate-x-1/2 bottom-0 opacity-0 group-hover:opacity-100 group-hover:bottom-[16px] transition-all duration-300 z-10">
                                <a href="#" class="w-6 h-6 bg-[#3B5998] text-white rounded-sm flex justify-center items-center">
                                    <svg width="10" height="16" viewBox="0 0 224 488">
                                        <path fill="currentColor"
                                            d="M51 91v63H4v78h47v230h95V232h65q6-37 8-78h-72v-53q0-6 6.5-12.5T168 82h52V2h-71q-28 0-48.5 8.5T71 29.5T57 55t-5.5 21.5T51 91z" />
                                    </svg>
                                </a>
                                <a href="#" class="w-6 h-6 bg-[#0a58ca] text-white rounded-sm flex justify-center items-center">
                                    <svg width="16" height="16" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M19.633 7.997c.013.175.013.349.013.523c0 5.325-4.053 11.461-11.46 11.461c-2.282 0-4.402-.661-6.186-1.809c.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721a4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062c.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973a4.02 4.02 0 0 1-1.771 2.22a8.073 8.073 0 0 0 2.319-.624a8.645 8.645 0 0 1-2.019 2.083z" />
                                    </svg>
                                </a>
                                <a href="#" class="w-6 h-6 bg-[#D53982] text-white rounded-sm flex justify-center items-center">
                                    <svg width="16" height="16" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M17.34 5.46a1.2 1.2 0 1 0 1.2 1.2a1.2 1.2 0 0 0-1.2-1.2Zm4.6 2.42a7.59 7.59 0 0 0-.46-2.43a4.94 4.94 0 0 0-1.16-1.77a4.7 4.7 0 0 0-1.77-1.15a7.3 7.3 0 0 0-2.43-.47C15.06 2 14.72 2 12 2s-3.06 0-4.12.06a7.3 7.3 0 0 0-2.43.47a4.78 4.78 0 0 0-1.77 1.15a4.7 4.7 0 0 0-1.15 1.77a7.3 7.3 0 0 0-.47 2.43C2 8.94 2 9.28 2 12s0 3.06.06 4.12a7.3 7.3 0 0 0 .47 2.43a4.7 4.7 0 0 0 1.15 1.77a4.78 4.78 0 0 0 1.77 1.15a7.3 7.3 0 0 0 2.43.47C8.94 22 9.28 22 12 22s3.06 0 4.12-.06a7.3 7.3 0 0 0 2.43-.47a4.7 4.7 0 0 0 1.77-1.15a4.85 4.85 0 0 0 1.16-1.77a7.59 7.59 0 0 0 .46-2.43c0-1.06.06-1.4.06-4.12s0-3.06-.06-4.12ZM20.14 16a5.61 5.61 0 0 1-.34 1.86a3.06 3.06 0 0 1-.75 1.15a3.19 3.19 0 0 1-1.15.75a5.61 5.61 0 0 1-1.86.34c-1 .05-1.37.06-4 .06s-3 0-4-.06a5.73 5.73 0 0 1-1.94-.3a3.27 3.27 0 0 1-1.1-.75a3 3 0 0 1-.74-1.15a5.54 5.54 0 0 1-.4-1.9c0-1-.06-1.37-.06-4s0-3 .06-4a5.54 5.54 0 0 1 .35-1.9A3 3 0 0 1 5 5a3.14 3.14 0 0 1 1.1-.8A5.73 5.73 0 0 1 8 3.86c1 0 1.37-.06 4-.06s3 0 4 .06a5.61 5.61 0 0 1 1.86.34a3.06 3.06 0 0 1 1.19.8a3.06 3.06 0 0 1 .75 1.1a5.61 5.61 0 0 1 .34 1.9c.05 1 .06 1.37.06 4s-.01 3-.06 4ZM12 6.87A5.13 5.13 0 1 0 17.14 12A5.12 5.12 0 0 0 12 6.87Zm0 8.46A3.33 3.33 0 1 1 15.33 12A3.33 3.33 0 0 1 12 15.33Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <a href="#">
                                <h5 class="text-lg">Jane Cooper</h5>
                            </a>
                            <p class="text_sm">Founder</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="group">
                        <div class="team_img rounded-lg overflow-hidden relative">
                            <img loading="lazy" src="../../assets/images/team-2.jpg" class="w-100 rounded-lg" alt="team">

                            <div class="flex items-center gap-2 absolute left-1/2 -translate-x-1/2 bottom-0 opacity-0 group-hover:opacity-100 group-hover:bottom-[16px] transition-all duration-300 z-10">
                                <a href="#" class="w-6 h-6 bg-[#3B5998] text-white rounded-sm flex justify-center items-center">
                                    <svg width="10" height="16" viewBox="0 0 224 488">
                                        <path fill="currentColor"
                                            d="M51 91v63H4v78h47v230h95V232h65q6-37 8-78h-72v-53q0-6 6.5-12.5T168 82h52V2h-71q-28 0-48.5 8.5T71 29.5T57 55t-5.5 21.5T51 91z" />
                                    </svg>
                                </a>
                                <a href="#" class="w-6 h-6 bg-[#0a58ca] text-white rounded-sm flex justify-center items-center">
                                    <svg width="16" height="16" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M19.633 7.997c.013.175.013.349.013.523c0 5.325-4.053 11.461-11.46 11.461c-2.282 0-4.402-.661-6.186-1.809c.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721a4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062c.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973a4.02 4.02 0 0 1-1.771 2.22a8.073 8.073 0 0 0 2.319-.624a8.645 8.645 0 0 1-2.019 2.083z" />
                                    </svg>
                                </a>
                                <a href="#" class="w-6 h-6 bg-[#D53982] text-white rounded-sm flex justify-center items-center">
                                    <svg width="16" height="16" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M17.34 5.46a1.2 1.2 0 1 0 1.2 1.2a1.2 1.2 0 0 0-1.2-1.2Zm4.6 2.42a7.59 7.59 0 0 0-.46-2.43a4.94 4.94 0 0 0-1.16-1.77a4.7 4.7 0 0 0-1.77-1.15a7.3 7.3 0 0 0-2.43-.47C15.06 2 14.72 2 12 2s-3.06 0-4.12.06a7.3 7.3 0 0 0-2.43.47a4.78 4.78 0 0 0-1.77 1.15a4.7 4.7 0 0 0-1.15 1.77a7.3 7.3 0 0 0-.47 2.43C2 8.94 2 9.28 2 12s0 3.06.06 4.12a7.3 7.3 0 0 0 .47 2.43a4.7 4.7 0 0 0 1.15 1.77a4.78 4.78 0 0 0 1.77 1.15a7.3 7.3 0 0 0 2.43.47C8.94 22 9.28 22 12 22s3.06 0 4.12-.06a7.3 7.3 0 0 0 2.43-.47a4.7 4.7 0 0 0 1.77-1.15a4.85 4.85 0 0 0 1.16-1.77a7.59 7.59 0 0 0 .46-2.43c0-1.06.06-1.4.06-4.12s0-3.06-.06-4.12ZM20.14 16a5.61 5.61 0 0 1-.34 1.86a3.06 3.06 0 0 1-.75 1.15a3.19 3.19 0 0 1-1.15.75a5.61 5.61 0 0 1-1.86.34c-1 .05-1.37.06-4 .06s-3 0-4-.06a5.73 5.73 0 0 1-1.94-.3a3.27 3.27 0 0 1-1.1-.75a3 3 0 0 1-.74-1.15a5.54 5.54 0 0 1-.4-1.9c0-1-.06-1.37-.06-4s0-3 .06-4a5.54 5.54 0 0 1 .35-1.9A3 3 0 0 1 5 5a3.14 3.14 0 0 1 1.1-.8A5.73 5.73 0 0 1 8 3.86c1 0 1.37-.06 4-.06s3 0 4 .06a5.61 5.61 0 0 1 1.86.34a3.06 3.06 0 0 1 1.19.8a3.06 3.06 0 0 1 .75 1.1a5.61 5.61 0 0 1 .34 1.9c.05 1 .06 1.37.06 4s-.01 3-.06 4ZM12 6.87A5.13 5.13 0 1 0 17.14 12A5.12 5.12 0 0 0 12 6.87Zm0 8.46A3.33 3.33 0 1 1 15.33 12A3.33 3.33 0 0 1 12 15.33Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <a href="#">
                                <h5 class="text-lg">Esther Howard</h5>
                            </a>
                            <p class="text_sm">Team Leader</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="group">
                        <div class="team_img rounded-lg overflow-hidden relative">
                            <img loading="lazy" src="../../assets/images/team-4.jpg" class="w-100 rounded-lg" alt="team">
                            <div class="flex items-center gap-2 absolute left-1/2 -translate-x-1/2 bottom-0 opacity-0 group-hover:opacity-100 group-hover:bottom-[16px] transition-all duration-300 z-10">
                                <a href="#" class="w-6 h-6 bg-[#3B5998] text-white rounded-sm flex justify-center items-center">
                                    <svg width="10" height="16" viewBox="0 0 224 488">
                                        <path fill="currentColor"
                                            d="M51 91v63H4v78h47v230h95V232h65q6-37 8-78h-72v-53q0-6 6.5-12.5T168 82h52V2h-71q-28 0-48.5 8.5T71 29.5T57 55t-5.5 21.5T51 91z" />
                                    </svg>
                                </a>
                                <a href="#" class="w-6 h-6 bg-[#0a58ca] text-white rounded-sm flex justify-center items-center">
                                    <svg width="16" height="16" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M19.633 7.997c.013.175.013.349.013.523c0 5.325-4.053 11.461-11.46 11.461c-2.282 0-4.402-.661-6.186-1.809c.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721a4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062c.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973a4.02 4.02 0 0 1-1.771 2.22a8.073 8.073 0 0 0 2.319-.624a8.645 8.645 0 0 1-2.019 2.083z" />
                                    </svg>
                                </a>
                                <a href="#" class="w-6 h-6 bg-[#D53982] text-white rounded-sm flex justify-center items-center">
                                    <svg width="16" height="16" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M17.34 5.46a1.2 1.2 0 1 0 1.2 1.2a1.2 1.2 0 0 0-1.2-1.2Zm4.6 2.42a7.59 7.59 0 0 0-.46-2.43a4.94 4.94 0 0 0-1.16-1.77a4.7 4.7 0 0 0-1.77-1.15a7.3 7.3 0 0 0-2.43-.47C15.06 2 14.72 2 12 2s-3.06 0-4.12.06a7.3 7.3 0 0 0-2.43.47a4.78 4.78 0 0 0-1.77 1.15a4.7 4.7 0 0 0-1.15 1.77a7.3 7.3 0 0 0-.47 2.43C2 8.94 2 9.28 2 12s0 3.06.06 4.12a7.3 7.3 0 0 0 .47 2.43a4.7 4.7 0 0 0 1.15 1.77a4.78 4.78 0 0 0 1.77 1.15a7.3 7.3 0 0 0 2.43.47C8.94 22 9.28 22 12 22s3.06 0 4.12-.06a7.3 7.3 0 0 0 2.43-.47a4.7 4.7 0 0 0 1.77-1.15a4.85 4.85 0 0 0 1.16-1.77a7.59 7.59 0 0 0 .46-2.43c0-1.06.06-1.4.06-4.12s0-3.06-.06-4.12ZM20.14 16a5.61 5.61 0 0 1-.34 1.86a3.06 3.06 0 0 1-.75 1.15a3.19 3.19 0 0 1-1.15.75a5.61 5.61 0 0 1-1.86.34c-1 .05-1.37.06-4 .06s-3 0-4-.06a5.73 5.73 0 0 1-1.94-.3a3.27 3.27 0 0 1-1.1-.75a3 3 0 0 1-.74-1.15a5.54 5.54 0 0 1-.4-1.9c0-1-.06-1.37-.06-4s0-3 .06-4a5.54 5.54 0 0 1 .35-1.9A3 3 0 0 1 5 5a3.14 3.14 0 0 1 1.1-.8A5.73 5.73 0 0 1 8 3.86c1 0 1.37-.06 4-.06s3 0 4 .06a5.61 5.61 0 0 1 1.86.34a3.06 3.06 0 0 1 1.19.8a3.06 3.06 0 0 1 .75 1.1a5.61 5.61 0 0 1 .34 1.9c.05 1 .06 1.37.06 4s-.01 3-.06 4ZM12 6.87A5.13 5.13 0 1 0 17.14 12A5.12 5.12 0 0 0 12 6.87Zm0 8.46A3.33 3.33 0 1 1 15.33 12A3.33 3.33 0 0 1 12 15.33Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <a href="#">
                                <h5 class="mt-5">Kristin Wastson</h5>
                            </a>
                            <p class="text_sm">Senior Officer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="group">
                        <div class="team_img rounded-lg overflow-hidden relative">
                            <img loading="lazy" src="../../assets/images/team-3.jpg" class="w-100 rounded-lg" alt="team">

                            <div class="flex items-center gap-2 absolute left-1/2 -translate-x-1/2 bottom-0 opacity-0 group-hover:opacity-100 group-hover:bottom-[16px] transition-all duration-300 z-10">
                                <a href="#" class="w-6 h-6 bg-[#3B5998] text-white rounded-sm flex justify-center items-center">
                                    <svg width="10" height="16" viewBox="0 0 224 488">
                                        <path fill="currentColor"
                                            d="M51 91v63H4v78h47v230h95V232h65q6-37 8-78h-72v-53q0-6 6.5-12.5T168 82h52V2h-71q-28 0-48.5 8.5T71 29.5T57 55t-5.5 21.5T51 91z" />
                                    </svg>
                                </a>
                                <a href="#" class="w-6 h-6 bg-[#0a58ca] text-white rounded-sm flex justify-center items-center">
                                    <svg width="16" height="16" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M19.633 7.997c.013.175.013.349.013.523c0 5.325-4.053 11.461-11.46 11.461c-2.282 0-4.402-.661-6.186-1.809c.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721a4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062c.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973a4.02 4.02 0 0 1-1.771 2.22a8.073 8.073 0 0 0 2.319-.624a8.645 8.645 0 0 1-2.019 2.083z" />
                                    </svg>
                                </a>
                                <a href="#" class="w-6 h-6 bg-[#D53982] text-white rounded-sm flex justify-center items-center">
                                    <svg width="16" height="16" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M17.34 5.46a1.2 1.2 0 1 0 1.2 1.2a1.2 1.2 0 0 0-1.2-1.2Zm4.6 2.42a7.59 7.59 0 0 0-.46-2.43a4.94 4.94 0 0 0-1.16-1.77a4.7 4.7 0 0 0-1.77-1.15a7.3 7.3 0 0 0-2.43-.47C15.06 2 14.72 2 12 2s-3.06 0-4.12.06a7.3 7.3 0 0 0-2.43.47a4.78 4.78 0 0 0-1.77 1.15a4.7 4.7 0 0 0-1.15 1.77a7.3 7.3 0 0 0-.47 2.43C2 8.94 2 9.28 2 12s0 3.06.06 4.12a7.3 7.3 0 0 0 .47 2.43a4.7 4.7 0 0 0 1.15 1.77a4.78 4.78 0 0 0 1.77 1.15a7.3 7.3 0 0 0 2.43.47C8.94 22 9.28 22 12 22s3.06 0 4.12-.06a7.3 7.3 0 0 0 2.43-.47a4.7 4.7 0 0 0 1.77-1.15a4.85 4.85 0 0 0 1.16-1.77a7.59 7.59 0 0 0 .46-2.43c0-1.06.06-1.4.06-4.12s0-3.06-.06-4.12ZM20.14 16a5.61 5.61 0 0 1-.34 1.86a3.06 3.06 0 0 1-.75 1.15a3.19 3.19 0 0 1-1.15.75a5.61 5.61 0 0 1-1.86.34c-1 .05-1.37.06-4 .06s-3 0-4-.06a5.73 5.73 0 0 1-1.94-.3a3.27 3.27 0 0 1-1.1-.75a3 3 0 0 1-.74-1.15a5.54 5.54 0 0 1-.4-1.9c0-1-.06-1.37-.06-4s0-3 .06-4a5.54 5.54 0 0 1 .35-1.9A3 3 0 0 1 5 5a3.14 3.14 0 0 1 1.1-.8A5.73 5.73 0 0 1 8 3.86c1 0 1.37-.06 4-.06s3 0 4 .06a5.61 5.61 0 0 1 1.86.34a3.06 3.06 0 0 1 1.19.8a3.06 3.06 0 0 1 .75 1.1a5.61 5.61 0 0 1 .34 1.9c.05 1 .06 1.37.06 4s-.01 3-.06 4ZM12 6.87A5.13 5.13 0 1 0 17.14 12A5.12 5.12 0 0 0 12 6.87Zm0 8.46A3.33 3.33 0 1 1 15.33 12A3.33 3.33 0 0 1 12 15.33Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <a href="#">
                                <h5 class="text-lg">Arlene McCoy</h5>
                            </a>
                            <p class="text_sm">Marketing Officer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about brand -->
    <div class="container pb-14">
        <h2 class="text-2xl uppercase mb-3 text-center">OUR PARTNERS</h2>
        <!-- swiper -->
        <div class="swiper brandSwiper">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div>
                        <img loading="lazy" src="../../assets/images/brand1.png" alt="brand">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img loading="lazy" src="../../assets/images/brand2.png" alt="brand">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img loading="lazy" src="../../assets/images/brand4.png" alt="brand">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img loading="lazy" src="../../assets/images/brand3.png" alt="brand">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img loading="lazy" src="../../assets/images/brand1.png" alt="brand">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img loading="lazy" src="../../assets/images/brand4.png" alt="brand">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer area -->
    <?php
    include('../../components/footer/index.php');

    ?>
    <!-- footer area end -->

    <!-- copyright -->

    <!-- copyright end -->

    <!-- script -->
    <script src="../../assets/js/swiper-bundle.min.js"></script>
    <script src="../../assets/js/nice-select2.js"></script>
    <script src="../../assets/js/main.js"></script>
    <script>
        // swiper slider
        var mySwiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 30,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
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

        var brandSwiper = new Swiper(".brandSwiper", {
            slidesPerView: 6,
            spaceBetween: 15,
            slidesPerGroup: 1,
            loop: true,
            breakpoints: {
                320: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                480: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 6,
                    spaceBetween: 30,
                },
            },
        });
    </script>
</body>

</html>