if (window.location.href == 'http://localhost/market/shopping-cart.php') {

         let cartId = JSON.parse(localStorage.getItem('site-cart'))

         // cardID = [35,d2]

         $.ajax({
                  url: 'http://localhost/market/server/landing/cart.php',
                  method: 'POST',
                  data: { cartId: cartId, from: window.location.href },
                  success: function (response) {
                           const data = JSON.parse('[' + response.trim().replace(/}{/g, '},{') + ']');


                           if (data && data[0].length > 0) {

                                    for (let i = 0; i < data[0].length; i++) {

                                             const { id, product_front_photo, product_price, product_type, product_name } = data[0][i];
                                             const html = `<div class="border md:flex gap-24 lg:gap-28 items-center py-2 mt-6">
                                             <div style="gap:20px" class="md:flex items-center gap-x-4">
                                                 <div class="max-w-[150px] flex mx-auto">
                                                     <img loading="lazy" src="./uploads/products/${product_front_photo}" alt="product">
                                                 </div>
                                                 <div class="pl-10 lg:pl-0">
                                                     <a href="product-view.html">
                                                         <h5>${product_name}</h5>
                                                     </a>
                                                     <p class="text-primary font-medium">${formate_number(product_price)}</p>
                                                     <p class="size mb-0">Types: ${product_type}</p>
                                                 </div>
                                             </div>
                                             <div class="flex justify-center gap-20 lg:gap-24 items-center">
                                                 <!-- quantity -->
                                                 <div class="flex">
                                                     <div price="${product_price}" id="desincrease"
                                                         class="border w-8 h-8 flex justify-center items-center hover:bg-[#dadada] cursor-pointer">
                                                         <svg width="12" height="12" viewBox="0 0 24 24">
                                                             <path fill="currentColor" d="M19 12.998H5v-2h14z" /></svg>
                                                     </div>
                                                     <div id="view"  class="border w-8 h-8 flex justify-center items-center">1</div>
                                                     <div price="${product_price}" id="increase"
                                                         class="border w-8 h-8 flex justify-center items-center hover:bg-[#dadada] cursor-pointer">
                                                         <svg width="12" height="12" viewBox="0 0 24 24">
                                                             <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                                                         </svg>
                                                     </div>
                                                 </div>
                                                 <div class="flex gap-12 lg:gap-16">
                                                     <p class="text-primary font-semibold total">${formate_number(product_price)}</p>
                                                     <div class="hover:text-primary cursor-pointer">
                                                         <svg width="20" height="20" viewBox="0 0 24 24">
                                                             <path fill="currentColor"
                                                                 d="M7 21q-.825 0-1.412-.587Q5 19.825 5 19V6q-.425 0-.713-.287Q4 5.425 4 5t.287-.713Q4.575 4 5 4h4q0-.425.288-.713Q9.575 3 10 3h4q.425 0 .713.287Q15 3.575 15 4h4q.425 0 .712.287Q20 4.575 20 5t-.288.713Q19.425 6 19 6v13q0 .825-.587 1.413Q17.825 21 17 21ZM7 6v13h10V6Zm2 10q0 .425.288.712Q9.575 17 10 17t.713-.288Q11 16.425 11 16V9q0-.425-.287-.713Q10.425 8 10 8t-.712.287Q9 8.575 9 9Zm4 0q0 .425.288.712q.287.288.712.288t.713-.288Q15 16.425 15 16V9q0-.425-.287-.713Q14.425 8 14 8t-.712.287Q13 8.575 13 9ZM7 6v13V6Z" />
                                                         </svg>
                                                     </div>
                                                 </div>
                     
                                             </div>
                                         </div>`

                                             document.querySelector('.cart_holder').insertAdjacentHTML('beforeend', html);


                                    }
                                    //       let view = document.querySelector('#view');
                                    let increase = document.querySelectorAll('#increase')
                                    increase.forEach(el => {

                                             el.addEventListener('click', (e) => {
                                                      console.log();
                                                      el.previousElementSibling.innerHTML = Number(el.previousElementSibling.innerHTML) + 1;
                                                      changePrice(el, el.previousElementSibling.innerHTML, el.getAttribute('price'))
                                             })
                                    })

                                    let desincrease = document.querySelectorAll('#desincrease')
                                    desincrease.forEach(el => {

                                             el.addEventListener('click', (e) => {
                                                      if (el.nextElementSibling.innerHTML > 0) {
                                                               el.nextElementSibling.innerHTML = Number(el.nextElementSibling.innerHTML) - 1;

                                                               changePrice(el, el.nextElementSibling.innerHTML, el.getAttribute('price'))
                                                      }

                                             })
                                    })

                                    function changePrice(target, quality, price) {


                                             let total = quality * price;
                                             target.parentElement.parentElement.children[1].children[0].innerHTML = total
                                             changeOverPrice()

                                    }
                                   
                                    function changeOverPrice() {
                                             let overtotal = document.querySelectorAll('.total')
                                             console.log(overtotal);
                                             console.log('hh');
                                             let ran = 0; // Ensure that ran is initialized

                                             for (let i = 0; i < overtotal.length; i++) {
                                                      
                                                      ran += parseFloat(overtotal[i].innerHTML); // Convert to float and add
                                             }

                                           


                                             document.querySelector('.overview').innerHTML = `${formate_number(ran)}`
                                    }
                                    changeOverPrice()
                           }
                  },
                  error: function (xhr, status, error) {
                           // Handle errors
                           console.error(status, error);
                  }
         })



}

function formate_number(number) {
         let options = { style: 'currency', currency: 'USD' }; // Format as currency (US Dollar)
         let formattedCurrency = number.toLocaleString('en-US', options); // Format currency based on en-US locale
         return formattedCurrency;
}


if (window.location.href == 'http://localhost/market/' || window.location.href == 'http://localhost/market/index.php' || window.location.href == 'http://localhost/market/#') {
         let add_to_cart = document.querySelectorAll('#add_to_cart')
         let cart = []
         add_to_cart.forEach(el => {

                  el.addEventListener('click', () => {
                           value = el.getAttribute('product_id')
                           let data = JSON.parse(localStorage.getItem('site-cart'))
                           if (data && data != null) {
                                    data.push(value)
                                    localStorage.setItem('site-cart', JSON.stringify(data))
                           } else {
                                    cart.push(value)
                                    localStorage.setItem('site-cart', JSON.stringify(cart))
                           }
                  })

         })
}


