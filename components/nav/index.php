<!-- top header -->
<header class="py-[2px] hidden sm:block border-b border-[#f1f1f1]">
        <div class="container flex items-center justify-between">
            <!-- link -->
            <div class="flex items-center">
                <a href="#" class="text-[14px] text-secondary hover:text-primary transition duration-300"><?php echo  $siteemail ?></a>
            </div>
            <!--link  -->

            <!-- right-content -->
            <div class="flex items-center">
                <!-- track order -->
               
                <!-- login/register -->
                <div class="mr-4 flex items-center py-2">
                    <a href="<?php echo $domain  ?>user/login/" class="text-secondary text-sm hover:text-primary font-medium leading-[26px] transition duration-200">Login</a>
                    <span class="text-secondary text-sm">/</span>
                    <a href="<?php echo $domain ?>user/register/" class="text-secondary text-sm hover:text-primary font-medium leading-[26px] transition duration-200">Register</a>
                </div>

                <!-- Language -->
                <select class="nice-select nice-select language">
                    <option value="" selected>Language</option>
                    <option>English</option>
                    <option>Franch</option>
                </select>

                <!-- Currency -->
               
            </div>
            <!-- right-content end-->
        </div>
    </header>
    <!-- top header end -->

    <!-- header -->
    <nav class="bg-white py-1.5">
        <div class="container flex items-center justify-between">
            <a href="index-1.html" class="lg:hidden">
                <h2><?php echo "$sitename"  ?></h2>
                <!-- <img src="./assets/images/logo.svg" class="w-[120px]" alt=""> -->
            </a>
            <!-- logo -->
            <a class="w-[130px] lg:block hidden" href="index-1.html">
                <!-- <img src="./assets/images/logo.svg" class="w-full object-cover" alt="logo">
                  -->
                <h2><?php echo "$sitename"  ?></h2>
            </a>
            <!-- logo end-->
      
            


            <!-- header icone -->
            <div class="flex items-center">
                <!-- Wish List -->
                <div class="py-2">
                    <a href="<?php echo $domain ?>user/wishlist/" class="relative flex-col items-center">
                        <span class="text-secondary flex justify-center"><svg width="28" height="28" viewBox="0 0 256 256">
                                <path fill="currentColor" d="M128 220.2a13.6 13.6 0 0 1-9.9-4.1L35 133a58 58 0 0 1 2.2-84.2a56.5 56.5 0 0 1 41.6-14a62.8 62.8 0 0 1 40.3 18.3L128 62l11-11a57.9 57.9 0 0 1 84.1 2.2a56.2 56.2 0 0 1 14.1 41.6a62.8 62.8 0 0 1-18.3 40.3l-81 81a13.6 13.6 0 0 1-9.9 4.1Zm5.6-8.3ZM75 46.7a44 44 0 0 0-29.7 11.1a45.8 45.8 0 0 0-1.8 66.7l83.1 83.1a1.9 1.9 0 0 0 2.8 0l81-81c18.2-18.2 19.9-47.5 3.8-65.3a45.8 45.8 0 0 0-66.7-1.8l-15.3 15.2a6.1 6.1 0 0 1-8.5 0l-13.1-13.1A50.3 50.3 0 0 0 75 46.7Z" />
                            </svg>
                        </span>
                        <span class="text-secondary text-[11px] leading-[10px]">Wish List</span>
                        <span class="absolute bg-primary -top-1 right-0 text-white text-[11px] w-[18px] h-[18px] leading-[18px] text-center rounded-full overflow-hidden">6</span>
                    </a>
                </div>

                <!-- Cart -->
                <div class="relative group hidden lg:block py-2">
                    <a href="#" class="text-secondary ml-5 relative block text-center">
                        <span class="text-secondary justify-center"><svg width="28" height="28" viewBox="0 0 256 256">
                                <path fill="currentColor" d="M94 216a14 14 0 1 1-14-14a14 14 0 0 1 14 14Zm90-14a14 14 0 1 0 14 14a14 14 0 0 0-14-14Zm43.5-128.4L201.1 166a22.2 22.2 0 0 1-21.2 16H84.1a22.2 22.2 0 0 1-21.2-16L36.5 73.8v-.3l-9.8-34a1.9 1.9 0 0 0-1.9-1.5H8a6 6 0 0 1 0-12h16.8a14.1 14.1 0 0 1 13.5 10.2L46.8 66h174.9a6 6 0 0 1 4.8 2.4a6 6 0 0 1 1 5.2ZM213.8 78H50.2l24.3 84.7a10 10 0 0 0 9.6 7.3h95.8a10 10 0 0 0 9.6-7.3Z" />
                            </svg>
                        </span>
                        <span class="text-secondary text-[11px] leading-[10px]">Cart</span>
                        <span class="absolute bg-primary -top-1 -right-2 text-white text-[11px] w-[18px] h-[18px] leading-[18px] text-center rounded-full overflow-hidden">6</span>
                    </a>

                    <div class="absolute top-full right-0 bg-white z-20 p-4 w-[300px] rounded-b-[3px] mt-3.5 group-hover:mt-[5px] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                        <div class="mb-3 border-b border-[#d8d8d8]">
                            <h4 class="text-base text-secondary mb-2">2 Items</h4>
                        </div>
                        <div>
                            <a href="product-viewhtml" class="flex items-start pr-5 mb-4 relative">
                                <span class="absolute right-0 hover:text-primary transition duration-300"><svg width="18" height="18" viewBox="0 0 32 32">
                                        <path fill="currentColor" d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z" />
                                    </svg></span>
                                <div class="flex-shrink-0">
                                    <img src="./assets/images/shoes-5.png" class="w-[75px] h-[60px] object-contain" alt="product">
                                </div>

                                <div class="flex-grow pl-4">
                                    <h5 class="text-base text-secondary hover:text-primary transition duration-300">
                                        Men casual shoes
                                    </h5>
                                    <p class="text-[#464545] text-sm">x1 <span class="ms-2">$450</span></p>
                                </div>
                            </a>
                            <a href="product-viewhtml" class="flex items-start pr-5 mb-4 relative">
                                <span class="absolute right-0 hover:text-primary transition duration-300"><svg width="18" height="18" viewBox="0 0 32 32">
                                        <path fill="currentColor" d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z" />
                                    </svg></span>
                                <div class="flex-shrink-0">
                                    <img src="./assets/images/headphone-2.png" class="w-[75px] h-[60px] object-contain" alt="product">
                                </div>

                                <div class="flex-grow pl-4">
                                    <h5 class="text-base text-secondary hover:text-primary transition duration-300">
                                        Men casual shoes
                                    </h5>
                                    <p class="text-[#464545] text-sm">x1 <span class="ms-2">$450</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="mt-4 pt-4 border-t border-[#d8d8d8] flex justify-between">
                            <h4 class="text-base text-secondary">SUB TOTAL:</h4>
                            <h4 class="text-base ml-2">$980.00</h4>
                        </div>
                        <div class="flex mt-4 gap-4">
                            <a href="#" class="w-1/2 rounded-[3px] py-2 px-2.5 border border-primary bg-primary text-white inline-block text-center text-sm hover:bg-transparent hover:text-primary transition duration-300">VIEW
                                CART</a>
                            <a href="#" class="w-1/2 rounded-[3px] py-2 px-2.5 border border-primary hover:bg-primary bg-white hover:text-white inline-block text-center text-sm text-primary transition duration-300">CHECKOUT</a>
                        </div>
                    </div>
                </div>

                <!-- Account-->
                <div class="relative group py-2">
                    <a href="<?php echo $domain ?>user/dashboard/" class="relative block text-center ml-5">
                        <span class="text-secondary flex justify-center"><svg width="28" height="28" viewBox="0 0 256 256">
                                <path fill="currentColor" d="M230.2 213a118.3 118.3 0 0 0-70.5-54.6a70 70 0 1 0-63.4 0A118.3 118.3 0 0 0 25.8 213a5.9 5.9 0 0 0 2.2 8.2a6 6 0 0 0 8.2-2.2a106 106 0 0 1 183.6 0a6 6 0 0 0 5.2 3a6.4 6.4 0 0 0 3-.8a5.9 5.9 0 0 0 2.2-8.2ZM70 96a58 58 0 1 1 58 58a58 58 0 0 1-58-58Z" />
                            </svg>
                        </span>
                        <span class="text-secondary text-[11px] leading-[10px]">Account</span>
                    </a>

                    <div class="absolute top-full right-[1px] bg-white z-20 rounded-b-[3px] py-5 px-[15px] w-[205px] shadow-sm mt-3.5 group-hover:mt-[5px] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                        <div>
                            <p class="text-sm leading-[18px] font-medium mb-4 text-secondary text-center">Welcome to
                                <?php echo $sitename ?> Shop</p>
                            <div class="flex justify-between">
                                <a href="<?php echo $domain ?>user/login/" class="min-w-[85px] rounded-[3px] py-1 px-[15px] border border-primary bg-primary text-white inline-block text-center text-sm font-medium hover:bg-transparent hover:text-primary transition duration-300">JOIN</a>
                                <a href="<?php echo $domain ?>user/register/" class="min-w-[85px] rounded-[3px] py-1 px-2.5 border border-primary hover:bg-primary bg-white hover:text-white inline-block text-center text-sm font-medium text-primary transition duration-300">Signup</a>
                            </div>
                        </div>
                        <div class="pt-2.5">
                            <a href="<?php echo $domain ?>user/dashboard/" class="flex items-center relative w-full mt-[7px] text-[15px] pl-8 text-[#464545] hover:text-primary transition duration-200">
                                <svg class="absolute left-0 top-[1px]" width="22" height="22" viewBox="0 0 32 32">
                                    <path fill="currentColor" d="M5 6C3.355 6 2 7.355 2 9v14c0 1.645 1.355 3 3 3h22c1.645 0 3-1.355 3-3V9c0-1.645-1.355-3-3-3zm0 2h22c.566 0 1 .434 1 1v14c0 .566-.434 1-1 1H5c-.566 0-1-.434-1-1V9c0-.566.434-1 1-1zm6 2c-2.2 0-4 1.8-4 4c0 1.113.477 2.117 1.219 2.844A5.036 5.036 0 0 0 6 21h2c0-1.668 1.332-3 3-3s3 1.332 3 3h2a5.036 5.036 0 0 0-2.219-4.156C14.523 16.117 15 15.114 15 14c0-2.2-1.8-4-4-4zm7 1v2h8v-2zm-7 1c1.117 0 2 .883 2 2s-.883 2-2 2s-2-.883-2-2s.883-2 2-2zm7 3v2h8v-2zm0 4v2h5v-2z" />
                                </svg>
                                My Account
                            </a>
                            <a href="order-history.html" class="flex items-center relative w-full mt-[7px] text-[15px] pl-8 text-[#464545] hover:text-primary transition duration-200">
                                <svg class="absolute left-0 top-[1px]" width="21" height="21" viewBox="0 0 32 32">
                                    <path fill="currentColor" d="M12 5c-1.645 0-3 1.355-3 3c0 .353.073.684.188 1H4v6h1v13h22V15h1V9h-5.188c.115-.316.188-.647.188-1c0-1.645-1.355-3-3-3c-1.75 0-2.94 1.33-3.72 2.438c-.103.148-.188.292-.28.437c-.092-.145-.177-.29-.28-.438C14.94 6.33 13.75 5 12 5zm0 2c.626 0 1.436.67 2.063 1.563c.152.217.13.23.25.437H12c-.565 0-1-.435-1-1s.435-1 1-1zm8 0c.565 0 1 .435 1 1s-.435 1-1 1h-2.313c.12-.206.098-.22.25-.438C18.564 7.672 19.375 7 20 7zM6 11h20v2h-9v-1h-2v1H6v-2zm1 4h18v11h-8V16h-2v10H7V15z" />
                                </svg>
                                My Order
                            </a>
                            <a href="<?php echo $domain ?>user/wishlist/" class="flex items-center relative w-full mt-[7px] text-[15px] pl-8 text-[#464545] hover:text-primary transition duration-200">
                                <svg class="absolute left-0 top-[2px]" width="20" height="20" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M128 220.2a13.6 13.6 0 0 1-9.9-4.1L35 133a58 58 0 0 1 2.2-84.2a56.5 56.5 0 0 1 41.6-14a62.8 62.8 0 0 1 40.3 18.3L128 62l11-11a57.9 57.9 0 0 1 84.1 2.2a56.2 56.2 0 0 1 14.1 41.6a62.8 62.8 0 0 1-18.3 40.3l-81 81a13.6 13.6 0 0 1-9.9 4.1Zm5.6-8.3ZM75 46.7a44 44 0 0 0-29.7 11.1a45.8 45.8 0 0 0-1.8 66.7l83.1 83.1a1.9 1.9 0 0 0 2.8 0l81-81c18.2-18.2 19.9-47.5 3.8-65.3a45.8 45.8 0 0 0-66.7-1.8l-15.3 15.2a6.1 6.1 0 0 1-8.5 0l-13.1-13.1A50.3 50.3 0 0 0 75 46.7Z" />
                                </svg>
                                My Wishlist
                            </a>
                            <!-- <a href="login.html" class="flex items-center relative w-full mt-[7px] text-[15px] pl-8 text-[#464545] hover:text-primary transition duration-200">
                                <svg class="absolute left-0 top-[2px]" width="18" height="18" viewBox="0 0 32 32">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M6 6h24l-3 13H9m18 4H10L5 2H2" />
                                        <circle cx="25" cy="27" r="2" />
                                        <circle cx="12" cy="27" r="2" />
                                    </g>
                                </svg>
                                My Cart
                            </a> -->
                            <a href="#" class="flex items-center relative w-full mt-[7px] text-[15px] pl-8 text-[#464545] hover:text-primary transition duration-200">
                                <svg class="absolute left-0 top-[2px]" width="20" height="20" viewBox="0 0 32 32">
                                    <path fill="currentColor" d="M15 4v12h2V4zm-3 .688C7.348 6.34 4 10.785 4 16c0 6.617 5.383 12 12 12s12-5.383 12-12c0-5.215-3.348-9.66-8-11.313v2.157C23.527 8.39 26 11.91 26 16c0 5.516-4.484 10-10 10S6 21.516 6 16c0-4.09 2.473-7.61 6-9.156z" />
                                </svg>
                                Log out
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- header end -->

    <!-- navbar -->
    <nav class="bg-secondary hidden lg:block">
        <div class="container flex items-center justify-between">
            <a href="#" class="lg:hidden"><img src="./assets/images/logo-white.svg" class="w-[120px]" alt=""></a>
            <div class="flex items-center">
                <!-- All categories -->
                <!-- <div class="bg-primary py-1.5 w-[210px] relative hidden lg:block group-hbr mr-8">
                    <div class="py-2.5 px-4 flex items-center justify-center w-full">
                        <span class="text-white mr-2.5"><svg width="20" height="20" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg></span>
                        <span class="text-white text-base">All categories</span>
                    </div>

                    <div class="absolute top-full left-0 w-full py-4 bg-white shadow-md z-10 mt-2.5 opacity-0 invisible group-hvr-hover">

                        <a href="#" class="flex items-center pl-6 border-b border-[#C8C8CE] pr-4 py-3 w-full text-secondary transition duration-300 hover:bg-[#EFEFEF]">
                            <span class="w-11 text-[#f4cad0] font-black">
                                <svg width="20" height="20" viewBox="0 0 32 32">
                                    <path fill="currentColor" d="M10 3C7.805 3 6.203 4.605 5.281 6.5C4.36 8.395 3.961 10.68 4 12.688c.047 2.332 1.063 4.687 1.063 4.687l.28.625h8.407l.219-.75s.789-2.941 1-5.75c.082-1.105.047-3.027-.563-4.844c-.304-.91-.746-1.8-1.469-2.5C12.216 3.457 11.188 3 10 3zm12 0c-1.188 0-2.215.457-2.938 1.156c-.722.7-1.164 1.59-1.468 2.5c-.61 1.817-.645 3.739-.563 4.844c.211 2.809 1 5.75 1 5.75l.219.75h8.406l.282-.625S27.953 15.02 28 12.687c.04-2.007-.36-4.292-1.281-6.187C25.797 4.605 24.195 3 22 3zM10 5c.703 0 1.129.203 1.531.594c.403.39.762 1.011 1 1.718c.473 1.415.531 3.215.469 4.063c-.164 2.176-.684 3.996-.844 4.625H6.72c-.242-.684-.692-2.016-.719-3.344c-.035-1.695.355-3.761 1.094-5.281C7.832 5.855 8.77 5 10 5zm12 0c1.23 0 2.168.855 2.906 2.375c.739 1.52 1.125 3.586 1.094 5.281c-.027 1.328-.477 2.66-.719 3.344h-5.437c-.16-.629-.68-2.45-.844-4.625c-.063-.848-.004-2.648.469-4.063c.238-.707.597-1.328 1-1.718C20.87 5.204 21.297 5 22 5zM5 21v1c-.012 1.379.121 2.988.813 4.406C6.502 27.824 7.957 29 10 29c2.262 0 3.98-2.215 4-5c.004-.645-.023-1.402-.25-2.25l-.188-.75zm13.438 0l-.188.75c-.227.848-.254 1.605-.25 2.25c.02 2.785 1.738 5 4 5c2.043 0 3.496-1.176 4.188-2.594c.69-1.418.824-3.027.812-4.406v-1zM7.155 23h4.75c.035.328.098.664.094 1c-.016 2.023-1.07 3-2 3c-1.379 0-1.95-.535-2.406-1.469c-.328-.668-.367-1.629-.438-2.531zm12.938 0h4.75c-.07.902-.11 1.863-.438 2.531C23.95 26.465 23.38 27 22 27c-.93 0-1.984-.977-2-3c-.004-.336.059-.672.094-1z" />
                                </svg>
                            </span>
                            <span class="text-[15px] cursor-pointer text-secondary">Shoes</span>
                        </a>

                        <div class="flex items-center pl-6 border-b border-[#C8C8CE] pr-4 py-2.5 w-full text-secondary transition duration-300 hover:bg-[#EFEFEF] group">
                            <span class="w-11 text-[#f4cad0] font-black">
                                <svg width="20" height="20" viewBox="0 0 32 32">
                                    <path fill="currentColor" d="M16 2c-2.2 0-4 1.8-4 4a3.96 3.96 0 0 0 1.125 2.75C11.273 9.773 10 11.746 10 14v5.406l.281.313L12 21.437V30h2v-9.406l-.281-.313L12 18.563V14c0-2.219 1.781-4 4-4c2.219 0 4 1.781 4 4v4.563l-1.719 1.718l-.281.313V30h2v-8.563l1.719-1.718l.281-.313V14c0-2.254-1.273-4.227-3.125-5.25A3.958 3.958 0 0 0 20 6c0-2.2-1.8-4-4-4zm0 2c1.117 0 2 .883 2 2s-.883 2-2 2s-2-.883-2-2s.883-2 2-2z" />
                                </svg>
                            </span>
                            <span class="text-[15px] cursor-pointer text-secondary">Men</span>
                            <span class="group-hover:-mr-2 ml-auto transition-all duration-300"><svg width="15" height="15" viewBox="0 0 32 32">
                                    <path fill="currentColor" d="M12.969 4.281L11.53 5.72L21.812 16l-10.28 10.281l1.437 1.438l11-11l.687-.719l-.687-.719z" />
                                </svg></span>
                            <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible flex absolute top-0 left-[209px] bg-white border border-[#E9E4E4] rounded-md w-[770px] xl:w-[976px] h-full p-5 ml-2.5 group-hover:ml-0 transition-all duration-300">
                                <div class="w-1/4">
                                    <div class="mb-5">
                                        <h4 class="text-lg leading-[21px] mb-2.5 font-medium">Hot sale</h4>
                                        <div class="">
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Hoodies
                                                $ Sweatshirts</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">T-Shirt</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Men’s
                                                Sets</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Jacket</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Shoes</a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="text-lg leading-[21px] mb-2.5 font-medium">Bottoms</h4>
                                        <div>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Casual
                                                Pants</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Men’s
                                                Sleep & Lounge</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Jeans</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Shorts</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Towel</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-1/4">
                                    <div class="mb-5">
                                        <h4 class="text-lg leading-[21px] mb-2.5 font-medium">Outerwear $ Jackets</h4>
                                        <div class="">
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Jacket</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Sweaters</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Casual
                                                Faux Leather</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Parks</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Jeans</a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="text-lg leading-[21px] mb-2.5 font-medium">Underwear & Loun</h4>
                                        <div>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Boxes</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Berifs</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Long
                                                Johns</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Men’s
                                                Sleep & Lounge</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Parks</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-1/4">
                                    <div class="">
                                        <h4 class="text-lg leading-[21px] mb-2.5 font-medium">Accessories</h4>
                                        <div>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Scarves</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Skullies
                                                & Beanies</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Casual
                                                Faux Leather</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Prescription
                                                Glasses</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Belt</a>
                                        </div>
                                    </div>
                                    <div class="">
                                        <h4 class="text-lg leading-[21px] mb-2.5 font-medium">Novelty & Special</h4>
                                        <div>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Cosplay
                                                Costumes</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Stage
                                                & Dance Wear</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Exotic
                                                Apparel</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Scarves</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Men’s
                                                Sets</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-1/4">
                                    <div class="flex items-start flex-wrap -mx-[5px]">
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-1.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-2.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-3.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-4.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-5.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-6.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-7.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-8.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-9.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-10.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-11.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-12.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-13.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-14.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="flex items-center pl-6 border-b border-[#C8C8CE] pr-4 py-3 w-full text-secondary transition duration-300 hover:bg-[#EFEFEF]">
                            <span class="w-11 text-[#f4cad0] font-black">
                                <svg width="20" height="20" viewBox="0 0 32 32">
                                    <path fill="currentColor" d="M16 2c-2.2 0-4 1.8-4 4c0 1.129.488 2.145 1.25 2.875a4.531 4.531 0 0 0-.656.563c-.84.89-1.364 2.078-1.594 3.374h.031l-2 10L8.781 24H13v6h2v-6h2v6h2v-6h4.219l-.25-1.188l-2-10c-.23-1.234-.73-2.41-1.563-3.312a4.752 4.752 0 0 0-.687-.625C19.492 8.145 20 7.137 20 6c0-2.2-1.8-4-4-4zm0 2c1.117 0 2 .883 2 2s-.883 2-2 2s-2-.883-2-2s.883-2 2-2zm0 6c.828 0 1.422.316 1.938.875c.515.559.921 1.387 1.093 2.313L20.781 22H11.22l1.75-8.813H13c.176-1 .559-1.84 1.063-2.374c.503-.536 1.09-.813 1.937-.813z" />
                                </svg>
                            </span>
                            <span class="text-[15px] cursor-pointer text-secondary">Women</span>
                        </a>

                        <a href="#" class="flex items-center pl-6 border-b border-[#C8C8CE] pr-4 py-3 w-full text-secondary transition duration-300 hover:bg-[#EFEFEF]">
                            <span class="w-11 text-[#f4cad0] font-black">
                                <svg width="20" height="20" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M237.7 66.3a8.1 8.1 0 0 0-11.4 0L192 100.7L155.3 64l34.4-34.3a8.1 8.1 0 0 0-11.4-11.4L144 52.7l-26.3-26.4a8.1 8.1 0 0 0-11.4 11.4l6.4 6.3L61 95.7a40.1 40.1 0 0 0 0 56.6L76.7 168l-50.4 50.3a8.1 8.1 0 0 0 0 11.4a8.2 8.2 0 0 0 11.4 0L88 179.3l15.7 15.7a40.1 40.1 0 0 0 56.6 0l51.7-51.7l6.3 6.4a8.2 8.2 0 0 0 11.4 0a8.1 8.1 0 0 0 0-11.4L203.3 112l34.4-34.3a8.1 8.1 0 0 0 0-11.4ZM149 183.7a24 24 0 0 1-34 0L72.3 141a24.1 24.1 0 0 1 0-34L124 55.3l76.7 76.7Z" />
                                </svg>
                            </span>
                            <span class="text-[15px] cursor-pointer text-secondary">Electronisc</span>
                        </a>

                        <a href="#" class="flex items-center pl-6 border-b border-[#C8C8CE] pr-4 py-3 w-full text-secondary transition duration-300 hover:bg-[#EFEFEF]">
                            <span class="w-11 text-[#f4cad0] font-black">
                                <svg width="20" height="20" viewBox="0 0 28 28">
                                    <path fill="currentColor" d="M22 26h-3a1 1 0 0 1-.993-.883L18 25v-8a1 1 0 0 1 .883-.993L19 16h5.5v-2c0-5.799-4.701-10.5-10.5-10.5S3.5 8.201 3.5 14v2H9a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H6a4 4 0 0 1-4-4v-8C2 7.373 7.373 2 14 2s12 5.373 12 12v8a4 4 0 0 1-3.8 3.995L22 26h-3h3ZM8.5 17.5h-5V22A2.5 2.5 0 0 0 6 24.5h2.5v-7Zm16 0h-5v7H22a2.5 2.5 0 0 0 2.5-2.5v-4.5Z" />
                                </svg>
                            </span>
                            <span class="text-[15px] cursor-pointer text-secondary">Headphones</span>
                        </a>

                        <a href="#" class="flex items-center pl-6 border-b border-[#C8C8CE] pr-4 py-3 w-full text-secondary transition duration-300 hover:bg-[#EFEFEF]">
                            <span class="w-11 text-[#f4cad0] font-black">
                                <svg width="20" height="20" viewBox="0 0 48 48">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4">
                                        <path d="M34.956 31L31 44H17l-3.957-13m0-14L17 4h14l3.956 13" />
                                        <path d="M37 24c0 2.577-.75 4.98-2.044 7A12.99 12.99 0 0 1 24 37a12.99 12.99 0 0 1-10.956-6A12.94 12.94 0 0 1 11 24c0-2.577.75-4.98 2.044-7A12.99 12.99 0 0 1 24 11a12.99 12.99 0 0 1 10.956 6A12.94 12.94 0 0 1 37 24Z" />
                                        <path d="M24 17v7l4 4" />
                                    </g>
                                </svg>
                            </span>
                            <span class="text-[15px] cursor-pointer text-secondary">Watches</span>
                        </a>

                        <div class="flex items-center pl-6 border-b border-[#C8C8CE] pr-4 py-3 w-full text-secondary transition duration-300 hover:bg-[#EFEFEF] group">
                            <span class="w-11 text-[#f4cad0] font-black">
                                <svg width="20" height="20" viewBox="0 0 1024 1024">
                                    <path fill="currentColor" d="M960 95.808H64c-35.184 0-64 28.8-64 64V704c0 35.184 28.816 63.983 64 63.983h416v96.208H320c-17.664 0-32 14.336-32 32s14.336 32 32 32h384c17.664 0 32-14.336 32-32s-14.336-32-32-32H544v-96.208h416c35.184 0 64-28.8 64-63.983V159.808c0-35.2-28.816-64-64-64zM960 704H64V159.808h896V704z" />
                                </svg>
                            </span>
                            <span class="text-[15px] cursor-pointer text-secondary">Computer</span>
                            <span class=""></span>
                            <span class="group-hover:-mr-2 ml-auto transition-all duration-300"><svg width="15" height="15" viewBox="0 0 32 32">
                                    <path fill="currentColor" d="M12.969 4.281L11.53 5.72L21.812 16l-10.28 10.281l1.437 1.438l11-11l.687-.719l-.687-.719z" />
                                </svg></span>
                            <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible flex absolute top-0 left-[209px] bg-white border border-[#E9E4E4] rounded-md w-[770px] xl:w-[976px] h-full p-5 ml-2.5 group-hover:ml-0 transition-all duration-300">
                                <div class="w-1/4">
                                    <div class="mb-5">
                                        <h4 class="text-lg leading-[21px] mb-2.5 font-medium">Macbook</h4>
                                        <div class="">
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Mackbook
                                                m1</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Mackbook
                                                pro</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Mackbook
                                                air</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Mackbook
                                                2015</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Mackbook
                                                2020</a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="text-lg leading-[21px] mb-2.5 font-medium">Laptop</h4>
                                        <div>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Razer</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Hp
                                                Laptop</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Dell
                                                Notebook</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Asus</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Lenovo</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-1/4">
                                    <div class="mb-5">
                                        <h4 class="text-lg leading-[21px] mb-2.5 font-medium">Dasktop</h4>
                                        <div class="">
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Brand
                                                Dasktop</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">All
                                                in one pc</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Mini
                                                PC</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Customize
                                                PC</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Dasktop
                                                Accessories</a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="text-lg leading-[21px] mb-2.5 font-medium">Monitor</h4>
                                        <div>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Samsung</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Philips</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">LG</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">HP</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Xiaomi</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-1/4">
                                    <div class="">
                                        <h4 class="text-lg leading-[21px] mb-2.5 font-medium">Accessories</h4>
                                        <div>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Dasktop
                                                Ram</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Motherboard</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">SSD
                                                Card</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Hard
                                                disk</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Processor</a>
                                        </div>
                                    </div>
                                    <div class="">
                                        <h4 class="text-lg leading-[21px] mb-2.5 font-medium">Gaming</h4>
                                        <div>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Gaming
                                                console</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Gaming
                                                Chair</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Gaming
                                                Desk</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Gaming
                                                Controller</a>
                                            <a href="#" class="block text-[15px] text-[#453E3E] mb-[9px] hover:text-primary transition duration-300">Keyboard</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-1/4">
                                    <div class="flex items-start flex-wrap -mx-[5px]">
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-1.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-2.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-3.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-4.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-5.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-6.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-7.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-8.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-9.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-10.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-11.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-12.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-13.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                        <a href="#" class="w-1/2 px-[5px] mb-3">
                                            <img loading="lazy" src="./assets/images/brand-14.png" class="w-full h-[42px] object-contain shadow-lg" alt="brand">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="flex items-center pl-6 pr-4 py-3 w-full text-secondary transition duration-300 hover:bg-[#EFEFEF]">
                            <span class="w-11 text-[#f4cad0] font-black">
                                <svg width="20" height="20" viewBox="0 0 16 16">
                                    <path fill="currentColor" d="M12.25 0h-8.5A1.25 1.25 0 0 0 2.5 1.25v13.5A1.25 1.25 0 0 0 3.75 16h8.5a1.25 1.25 0 0 0 1.25-1.25V1.25A1.25 1.25 0 0 0 12.25 0zm0 14.75h-8.5V1.25h8.5z" />
                                    <ellipse cx="8" cy="12.75" fill="currentColor" rx=".8" ry=".75" />
                                </svg>
                            </span>
                            <span class="text-[15px] cursor-pointer text-secondary">Mobile</span>
                        </a>
                    </div>
                </div> -->

                <!-- left-content -->
                <ul class="flex items-center">

                <li><a href="<?php echo $domain ?>" class="text-white leading-[26px] flex items-center text-base font-medium px-2.5 py-[15px] transition duration-300">Home</a>
                </li>

                <li><a href="<?php echo $domain ?>pages/about_us/" class="text-white leading-[26px] flex items-center text-base font-medium px-2.5 py-[15px] transition duration-300">About</a>
                </li>
                    
                   
                  
                    <li><a href="<?php echo $domain ?>pages/contact/" class="text-white leading-[26px] flex items-center text-base font-medium px-2.5 py-[15px] transition duration-300">Contact</a>
                    </li>

                    <li><a href="<?php echo $domain ?>pages/product/" class="text-white leading-[26px] flex items-center text-base font-medium px-2.5 py-[15px] transition duration-300">Products</a>
                    </li>
                </ul>
                <!-- left-content end-->
            </div>

            <!-- right-content -->
            <div>
                <a href="tel:+18475555555" class="text-[#e1e1e1] text-sm py-[15px] flex items-center gap-2">
                    <span class="text-[#e1e1e1]"><svg width="16" height="16" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6.515 4.621L9 4l2 3.5L9.5 9c1 2 3.5 4.5 5.5 5.5l1.5-1.5l3.5 2l-.621 2.485c-.223.89-1.029 1.534-1.928 1.351c-5.213-1.06-11.228-7.074-12.287-12.287c-.183-.9.46-1.705 1.35-1.928Z" />
                        </svg></span>
                    <?php echo $sitephone ?></a>
            </div>
            <!-- right-content end-->
        </div>
    </nav>
    <!-- navbar end-->

    <!-- mobile bottom bar -->
    <div x-data class="fixed left-0 bottom-0 w-full bg-white border-t border-[#cacaca] p-3 z-20 lg:hidden">
        <div class="flex items-center justify-evenly">
            <!-- menu -->
            <button @click="$store.mobileMenu.isOpen=true" class="relative text-secondary flex flex-col justify-center items-center text-center transition-all">
                <span class="text-secondary">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </span>
                <span class="text-[11px] leading-[10px] mt-1 text-secondary">Menu</span>
            </button>

            <!-- Categories
            <button @click="$store.category.isCategory=true" class="relative text-secondary flex flex-col justify-center items-center text-center transition-all">
                <span class="text-secondary">
                    <svg width="22" height="22" viewBox="0 0 2048 2048">
                        <path fill="currentColor" d="M2048 384v128H512V384h1536zM512 896h1536v128H512V896zm0 512h1536v128H512v-128zM0 256h384v384H0V256zm128 256h128V384H128v128zM0 768h384v384H0V768zm128 256h128V896H128v128zM0 1280h384v384H0v-384zm128 256h128v-128H128v128z" />
                    </svg>
                </span>
                <span class="text-[11px] leading-[10px] mt-1 text-secondary">Categories</span>
            </button> -->

            <!-- Search -->
            <button @click="$store.search.isSearch=true" class="relative text-secondary flex flex-col justify-center items-center text-center">
                <span class="text-secondary">
                    <svg width="26" height="26" viewBox="0 0 28 28">
                        <path fill="currentColor" d="M11.5 2.75a8.75 8.75 0 0 1 6.695 14.384l6.835 6.836a.75.75 0 0 1-.976 1.133l-.084-.073l-6.836-6.835A8.75 8.75 0 1 1 11.5 2.75Zm0 1.5a7.25 7.25 0 1 0 0 14.5a7.25 7.25 0 0 0 0-14.5Z" />
                    </svg>
                </span>
                <span class="text-[11px] leading-[10px] mt-1 text-secondary">Search</span>
            </button>

            <!-- Cart -->
            <button @click="$store.cart.isCart=true" class="relative text-secondary flex flex-col justify-center items-center text-center">
                <span class="relative block text-secondary">
                    <svg width="22" height="22" viewBox="0 0 32 32">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <path d="M6 6h24l-3 13H9m18 4H10L5 2H2" />
                            <circle cx="25" cy="27" r="2" />
                            <circle cx="12" cy="27" r="2" />
                        </g>
                    </svg>
                </span>
                <span class="text-[11px] leading-[10px] mt-1 text-secondary">Cart</span>
                <span class="absolute text-white bg-primary text-[11px] rounded-full w-[18px] h-[18px] leading-[18px] -right-1 -top-[8px]">8</span>
            </button>
        </div>
    </div>
    <!-- mobile bottom bar -->

    <!-- mobile menu -->
    <div x-data x-show="$store.mobileMenu.isOpen" x-cloak class="lg:hidden fixed inset-0 w-full h-full z-30 overflow-hidden bg-[#00000070] cursor-default">

        <div x-show="$store.mobileMenu.isOpen" x-transition:enter="transition ease-in-out duration-500" x-transition:enter-start="-translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100" x-transition:leave="transition ease-in-out duration-500" x-transition:leave-end="-translate-x-full opacity-100" @click.outside="$store.mobileMenu.isOpen=false" class="relative w-[320px] h-full overflow-y-auto bg-white">
            <h5 class="text-center bg-primary text-white py-[14px] text-xl relative">
                Menu
                <button @click="$store.mobileMenu.isOpen=false" class="absolute top-[17px] right-[15px] text-white text-center cursor-pointer">
                    <svg width="20" height="20" viewBox="0 0 32 32">
                        <path fill="currentColor" d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z" />
                    </svg>
                </button>
            </h5>
            <ul x-data="menuModules">
                <template x-for="(menu, index) in menuModules.menuList">
                    <li>
                        <button @click="toggleMenu(index)" class="py-2.5 pr-[15px] pl-[25px] w-full text-secondary border-b border-dotted border-[#C8C8CE] hover:bg-[#efefef] transition-all duration-300 block text-left relative">
                            <span x-text="menu.name"></span>
                            <span :class="menu.isOpen ? 'rotate-180' : ''" class="absolute top-2.5 right-[15px] text-center text-secondary transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </span>
                        </button>

                        <div x-show="menu.isOpen" x-transition>
                            <template x-for="subMenu in menu.subMenus">
                                <a :href="subMenu.href" x-text="subMenu.name" class="pl-12 py-2.5 pr-[15px] w-full text-secondary  border-b border-dotted border-[#C8C8CE] block hover:bg-[#efefef]">
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
    <div x-data x-show="$store.category.isCategory" :class="$store.category.isCategory ? 'opacity-100 visible' : 'opacity-0 invisible'" x-cloak class="lg:hidden fixed left-0 top-0 w-full h-full z-30 overflow-hidden bg-[#00000070] cursor-default transition-all duration-500">

        <div x-show="$store.category.isCategory" x-transition:enter="transition ease-in-out duration-500" x-transition:enter-start="-translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100" x-transition:leave="transition ease-in-out duration-500" x-transition:leave-end="-translate-x-full opacity-100" @click.away="$store.category.isCategory=false" class="relative w-[320px] h-full overflow-y-auto bg-white transition-all duration-500">
            <h5 class="text-center bg-primary text-white py-[14px] text-xl relative mb-2">
                All categories
                <button @click="$store.category.isCategory=false" class="absolute top-[17px] right-[15px] text-white text-center cursor-pointer">
                    <svg width="20" height="20" viewBox="0 0 32 32">
                        <path fill="currentColor" d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z" />
                    </svg>
                </button>
            </h5>

            <!-- category wrapper -->
            <div x-data="categoryModules">
                <template x-for="(category, catIndex) in categoryList">
                    <div class="single-mobile-menu">
                        <!-- category -->
                        <button @click="openMainCat(catIndex)" class="mobile-submenu-open relative flex flex-wrap items-center border-b border-dotted border-[#C8C8CE] px-5 w-full text-[#222] transition duration-300 hover:bg-[#EFEFEF]">
                            <!-- icon -->
                            <span class="w-11 text-[#f4cad0] font-black" x-html="category.icon"></span>

                            <!-- name -->
                            <span class="text-[15px] cursor-pointer text-[#222] py-2.5" x-text="category.name"></span>

                            <!-- arrow down -->
                            <span x-show="category.subCategories" :class="category.isOpen ? 'rotate-180' : ''" class="mobile-menu-icon absolute top-2.5 right-[15px] text-center text-[#222]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="arrow-icon h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="">
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
                                            <button @click="openSubCat(catIndex, subCatIndex)" class="category-submenu-open text-left cursor-pointer w-full relative text-base font-normal text-[#424242] leading-[21px] mb-2.5">
                                                <span x-text="subCat.name"></span>
                                                <span x-show="!subCat.isOpen" class="plus absolute -right-1 top-[2px]"><svg width="14" height="14" viewBox="0 0 256 256">
                                                        <path fill="currentColor" d="M224 128a8 8 0 0 1-8 8h-80v80a8 8 0 0 1-16 0v-80H40a8 8 0 0 1 0-16h80V40a8 8 0 0 1 16 0v80h80a8 8 0 0 1 8 8Z" />
                                                    </svg>
                                                </span>
                                                <span x-show="subCat.isOpen" class="minus absolute -right-1 top-[2px]"><svg width="14" height="14" viewBox="0 0 256 256">
                                                        <path fill="currentColor" d="M216 136H40a8 8 0 0 1 0-16h176a8 8 0 0 1 0 16Z" />
                                                    </svg>
                                                </span>
                                            </button>

                                            <!-- mega menu -->
                                            <div x-show="subCat.isOpen" class="category-sub-menu pl-[15px]">
                                                <template x-for="mega in subCat.megaCategories">
                                                    <a href="#" x-text="mega.name" class="text-[15px] text-[#453E3E] mb-[9px] block hover:text-primary transition duration-300">
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
    <div x-data x-show="$store.search.isSearch" x-transition:enter="transition ease-in-out duration-500" x-transition:enter-start="-translate-y-full opacity-0" x-transition:enter-end="translate-y-0 opacity-100" x-transition:leave="transition ease-in-out duration-500" x-transition:leave-end="-translate-y-full opacity-100" :class="$store.search.isSearch ? 'opacity-100 visible' : 'opacity-0 invisible'" x-cloak class="fixed left-0 top-0 w-full h-full bg-white z-20 p-[30px] transition-all duration-500">
        <div class="relative">
            <p class="text-xs mb-3 text-[#8a8a8a]">WHAT YOU ARE LOOKING FOR?</p>
            <!-- close -->
            <button @click="$store.search.isSearch=false" class="absolute top-0 right-0 cursor-pointer text-secondary">
                <svg width="20" height="20" viewBox="0 0 32 32">
                    <path fill="currentColor" d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z" />
                </svg>
            </button>
        </div>
        <!-- search input -->
        <form class="relative">
            <div class="border-b border-[#c3c3c3] z-50">
                <input type="text" placeholder="search products..." class="w-full focus:outline-none  focus:ring-0 border-none pr-2.5 py-[5px] text-secondary text-lg">
            </div>
            <button class="absolute right-0 top-[8px] border-none bg-transparent">
                <svg width="20" height="20" viewBox="0 0 28 28">
                    <path fill="currentColor" d="M11.5 2.75a8.75 8.75 0 0 1 6.695 14.384l6.835 6.836a.75.75 0 0 1-.976 1.133l-.084-.073l-6.836-6.835A8.75 8.75 0 1 1 11.5 2.75Zm0 1.5a7.25 7.25 0 1 0 0 14.5a7.25 7.25 0 0 0 0-14.5Z">
                    </path>
                </svg>
            </button>
        </form>
        <!-- search product -->
        <div class="overflow-y-auto pt-4">
            <a href="product-viewhtml" class="flex items-center border-b border-[#ebebeb] py-2 hover:bg-[#f2f0f0] transition duration-300">
                <div class="w-[90px] p-2.5">
                    <img src="./assets/images/laptop-2.png" class="w-full h-[50px] object-contain flex-shrink-0" alt="product">
                </div>
                <div class="pl-2">
                    <h4 class="text-lg font-medium mb-1.5 text-secondary">HP Pavilion 15</h4>
                    <div>
                        <span class="text-primary mr-[5px] leading-[22px] text-base font-medium">$45.00</span>
                        <span class="text-sm text-[#687188] font-medium leading-[22px]">$55.45</span>
                    </div>
                </div>
            </a>
            <a href="product-viewhtml" class="flex items-center border-b border-[#ebebeb] py-2 hover:bg-[#f2f0f0] transition duration-300">
                <div class="w-[90px] p-2.5">
                    <img loading="lazy" src="./assets/images/phone-1.png" class="w-full h-[50px] object-contain flex-shrink-0" alt="product">
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
    <div x-data x-show="$store.cart.isCart" :class="$store.cart.isCart ? 'opacity-100 visible' : 'opacity-0 invisible'" x-cloak class="lg:hidden fixed inset-0 w-full h-full z-30 overflow-hidden bg-[#00000070] cursor-default transition-all duration-500">

        <div x-show="$store.cart.isCart" x-transition:enter="transition ease-in-out duration-500" x-transition:enter-start="-translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100" x-transition:leave="transition ease-in-out duration-500" x-transition:leave-end="-translate-x-full opacity-100" @click.away="$store.cart.isCart=false" class="relative w-[320px] h-full overflow-y-auto bg-white flex flex-col transition-all duration-500">
            <h5 class="text-center bg-primary text-white py-[14px] text-xl relative mb-2">
                Cart
                <button @click="$store.cart.isCart=false" class="absolute top-[17px] right-[15px] text-white text-center cursor-pointer" id="CartClose">
                    <svg width="20" height="20" viewBox="0 0 32 32">
                        <path fill="currentColor" d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z" />
                    </svg>
                </button>
            </h5>

            <div class="p-4 flex-grow flex flex-col">
                <div class="mb-3 border-b border-[#d8d8d8]">
                    <h4 class="text-base mb-1.5 font-medium text-secondary">Total 2 Items</h4>
                </div>
                <div>
                    <a href="product-viewhtml" class="flex relative pr-5 mb-4">
                        <span class="absolute right-0 cursor-pointer text-secondary hover:text-primary transition duration-300">
                            <svg width="16" height="16" viewBox="0 0 32 32">
                                <path fill="currentColor" d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z" />
                            </svg>
                        </span>
                        <div class="flex-shrink-0">
                            <img src="./assets/images/shoes-5.png" class="w-[75px] h-[60px] object-contain" alt="product">
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
                        <span class="absolute right-0 cursor-pointer text-secondary hover:text-primary transition duration-300">
                            <svg width="16" height="16" viewBox="0 0 32 32">
                                <path fill="currentColor" d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z" />
                            </svg>
                        </span>
                        <div class="flex-shrink-0">
                            <img src="./assets/images/headphone-2.png" class="w-[75px] h-[60px] object-contain" alt="product">
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
                        <a href="checkout.html" class="primary-btn px-2 py-[9px] w-1/2 bg-white hover:bg-primary text-primary hover:text-white text-sm">CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile cart end -->



    <script>
        let domain = "<?php echo $domain ?>";
    </script>