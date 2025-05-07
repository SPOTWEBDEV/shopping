<?php
include('../../connection.php');

$query = <<<GQL
{
  products(first: 100) {
    edges {
      node {
        id
        title
        images(first: 1) {
          edges {
            node {
              src
            }
          }
        }
        variants(first: 1) {
          edges {
            node {
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


echo json_encode($response);

?>
