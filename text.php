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