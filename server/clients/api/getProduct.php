<?php
include('../../connection.php');

// Shopify GraphQL query
$query = <<<GQL
{
  products(first: 100) {
    edges {
      node {
        id
        title
        productType         # Category
        tags
        options {
          name
          values
        }
        collections(first: 1) {
          edges {
            node {
              title
              metafield(namespace: "custom", key: "target_gender") {
                value
              }
            }
          }
        }
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
              selectedOptions {
                name
                value
              }
            }
          }
        }
      }
    }
  }
}
GQL;

// Send the GraphQL request
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

// Decode the JSON response
$responseData = json_decode($response, true);
$products = $responseData['data']['products']['edges'] ?? [];

$cleanedProducts = [];

foreach ($products as $product) {
  $node = $product['node'];
  $variantGID = $node['variants']['edges'][0]['node']['id'] ?? null;
  preg_match('/(\d+)$/', $variantGID, $matches);
  $variantID = $matches[1] ?? null;

  // Extract options (Size, Color, etc.)
  $options = [];
  foreach ($node['options'] as $option) {
    $options[$option['name']] = $option['values'];
  }

  // Extract collection & target gender
  $collection = $node['collections']['edges'][0]['node'] ?? null;
  $category = $collection['title'] ?? $node['productType'] ?? '';
  $targetGender = $collection['metafield']['value'] ?? '';

  $cleanedProducts[] = [
    'title' => $node['title'],
    'image' => $node['images']['edges'][0]['node']['src'] ?? '',
    'price' => $node['variants']['edges'][0]['node']['price'] ?? '',
    'variant_id' => $variantID,
    'category' => $category,
    'tags' => $node['tags'] ?? [],
    'options' => $options,
    'target_gender' => $targetGender
  ];
}

// Output JSON
header('Content-Type: application/json');
echo json_encode(['products' => $cleanedProducts]);
