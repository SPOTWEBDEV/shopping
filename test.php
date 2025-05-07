<!DOCTYPE html>
<html lang="en">

<head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>
</head>

<body>


         <div id="products" class="products-grid"></div>

         <a href="."></a>

         <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>


         <script>
                  $(document).ready(function() {
                           $.ajax({
                                    url: "./server/clients/api/getProduct.php", // Change this to your actual PHP script path
                                    method: "GET",
                                    dataType: "json",
                                    success: function(response) {

                                             let data = JSON.parse(response)
                                             console.log(data)
                                             // const products = response.data.products.edges;

                                             //                                              let output = "";

                                             //                                              products.forEach(function(productEdge) {
                                             //                                                       const product = productEdge.node;
                                             //                                                       const title = product.title;
                                             //                                                       const price = product.variants.edges[0]?.node?.price || "N/A";
                                             //                                                       const image = product.images.edges[0]?.node?.src || "default.jpg";
                                             //                                                       const rating = Math.floor(Math.random() * 5) + 1; // Fake rating

                                             //                                                       output += `
                                             //           <div class="product-card">
                                             //             <img src="${image}" alt="${title}" />
                                             //             <h3>${title}</h3>
                                             //             <p>Price: $${price}</p>
                                             //             <p>Rating: ${"⭐".repeat(rating)}</p>
                                             //           </div>
                                             //         `;
                                             //                                              });

                                             //                                              $("#products").html(output);
                                    },
                                    error: function(xhr, status, error) {
                                             console.error("Error fetching products:", error);
                                    }
                           });
                  });
         </script>

</body>

</html>