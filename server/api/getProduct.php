<?php
include('../server/connection.php'); 

$query = <<<GQL
{
  products(first: 100) {
    edges {
      node {
        id
        title
        variants(first:10 ) {
          edges {
            node {
              id
              price
            }
          }
        }
      }
    }
  }
}
GQL;

$ch = curl_init("https://$shopUrl/admin/api/2025-01/graphql.json");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    "X-Shopify-Access-Token: $accessToken",
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['query' => $query]));

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'cURL error: ' . curl_error($ch);
}
curl_close($ch);

echo "<pre>";
print_r(json_decode($response, true));
echo "</pre>";
?>
