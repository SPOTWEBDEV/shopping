
async function fetchAndRenderProducts(limit = 20) {
         return new Promise((resolve, reject) => {
                  $.ajax({
                           url: domain + "server/clients/api/getProduct.php",
                           method: "GET",
                           dataType: "json",
                           success: function (response) {
                                    const allProducts = response.products;
                                    const shuffled = allProducts.sort(() => 0.5 - Math.random());
                                    const limitedProducts = shuffled.slice(0, limit);

                                    
                                    resolve(limitedProducts); // ✅ Proper return
                           },
                           error: function (xhr, status, error) {
                                    console.error("Error fetching products:", error);
                                    reject(error); // ✅ Allow async/await to catch errors
                           }
                  });
         });
}


export default fetchAndRenderProducts