<?php
include('../../connection.php');

// Shopify GraphQL query to fetch products with variants and images
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

// Send the GraphQL query to Shopify
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
    exit;
}
curl_close($ch);

// Decode JSON and extract needed fields
$responseData = json_decode($response, true);

$products = $responseData['data']['products']['edges'];
$cleanedProducts = [];

foreach ($products as $product) {
    $node = $product['node'];
    $variantGID = $node['variants']['edges'][0]['node']['id'];

    // Extract numeric variant ID from the Shopify Global ID (gid://)
    preg_match('/(\d+)$/', $variantGID, $matches);
    $variantID = $matches[1] ?? null;

    $cleanedProducts[] = [
        'title' => $node['title'],
        'image' => $node['images']['edges'][0]['node']['src'] ?? '',
        'price' => $node['variants']['edges'][0]['node']['price'] ?? '',
        'variant_id' => $variantID,
    ];
}

// Return cleaned product data as JSON
header('Content-Type: application/json');
echo json_encode(['products' => $cleanedProducts]);
?>
