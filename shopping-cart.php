<?php include('./server/database.php') ?>
<?php include('./server/config.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $sitename ?> ||</title>
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/nice-select2.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <script defer src="./assets/js/alpine.min.js"></script>
</head>

<body>



   <?php include('./components/nav/index.php') ?>



    <!-- breadcrumbs -->
    <div class="container py-5 flex items-center">
        <a href="index-1.html" class="flex  items-center">
            <span class="text-primary">
                <svg width="17" height="17" viewBox="0 0 32 32">
                    <path fill="currentColor"
                        d="m16 2.594l-.719.687l-13 13L3.72 17.72L5 16.437V28h9V18h4v10h9V16.437l1.281 1.282l1.438-1.438l-13-13zm0 2.844l9 9V26h-5V16h-8v10H7V14.437z" />
                </svg>
            </span>
            <span>
                <svg width="22" height="22" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6l-6-6z" /></svg>
            </span>
            <a href="list-view.html" class="text-primary text-[13px] sm:text-base">Shop</a>
            <span>
                <svg width="22" height="22" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6l-6-6z" /></svg>
            </span>
        </a>
        <a href="#" class="text-secondary text-[13px] sm:text-base">Shopping Cart</a>
    </div>
    <!-- breadcrumbs end-->

    <!-- shopping cart -->
    <div class="container pb-10">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 lg:col-span-9">
                <div class="hidden lg:flex justify-between bg-[#E9E4E4] py-2">
                    <p class="pl-44 font-semibold">Product</p>
                    <div class="flex gap-24">
                        <span class="font-semibold">Quantity</span>
                        <span class="pr-24 font-semibold">Total Price</span>
                    </div>
                </div>
                <div  class="sm:px-20 md:px-0 cart_holder">
                    
                    
                </div>
            </div>
            <div class="col-span-12 lg:col-span-3 border p-4">
                <div>
                    <h4 class="uppercase text-lg">Order Summary</h4>
                    <div class="space-y-2 border-b pb-3 mt-2">
                        <div class="flex justify-between">
                            <p class="font-medium">Subtotal</p>
                            <p class="font-medium overview">$45.00</p>
                        </div>
                        <div class="flex justify-between">
                            <p class="font-medium">Delivery</p>
                            <p class="font-medium">Free</p>
                        </div>
                        <div class="flex justify-between">
                            <p class="font-medium">Tax</p>
                            <p class="font-medium">Free</p>
                        </div>
                    </div>
                    <div class="flex justify-between mt-2">
                        <p class="font-semibold">Total</p>
                        <p class="font-semibold">$45.00</p>
                    </div>
                    <div class="flex  w-full lg:max-w-sm rounded-lg overflow-hidden mt-4">
                        <input type="text" placeholder="Enter coupon"
                            class="w-full border border-[#E9E4E4] text-xs focus:outline-none  focus:border-primary overflow-hidden">
                        <button
                            class="bg-primary border border-primary text-white rounded-br-lg text-xs uppercase px-4 sm:px-8 lg:px-4 hover:bg-white hover:text-primary hover:border-primary transition-all ">apply</button>
                    </div>
                    <div class="mt-8">
                        <a href="checkout.html"
                            class="block w-full px-8 lg:px-2 xl:px-8 py-2 text-center bg-primary hover:bg-transparent text-white hover:text-primary hover:border-primary border transition duration-300 rounded-lg uppercase text-sm">Proccees
                            to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer area -->
      <?php include('./components/footer/index.php') ?>
    <!-- footer area end -->



    <!-- script -->
    <script src="./assets/js/swiper-bundle.min.js"></script>
    <script src="./assets/js/nice-select2.js"></script>
    <script src="./assets/js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-qFOQ9YFAeGj1gDOuUD61g3D+tLDv3u1ECYWqT82WQoaWrOhAY+5mRMTTVsQdWutbA5FORCnkEPEgU0OF8IzGvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/js/add_to_cart.js"></script>
</body>
</html>