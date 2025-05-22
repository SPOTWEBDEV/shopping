<?php
include('../../connection.php');
require_once '../../config.php'; // Adjust path if needed

$projectRoot = dirname(__DIR__, 3);
loadEnv($projectRoot . '/.env');

$storefrontToken = getenv('STOREFRONT_TOKEN');
$storefrontEndpoint = getenv('STOREFRONT_ENDPOINT');

// GraphQL Query for Storefront API
$query = <<<GQL
{
  products(first: 100) {
    edges {
      node {
        id
        title
        description
        createdAt
        productType
        tags
        options {
          name
          values
        }
        images(first: 1) {
          edges {
            node {
              url
            }
          }
        }
        variants(first: 1) {
          edges {
            node {
              id
              price {
                amount
                currencyCode
              }
              compareAtPrice {
                amount
                currencyCode
              }
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
$ch = curl_init($storefrontEndpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  'Content-Type: application/json',
  "X-Shopify-Storefront-Access-Token: $storefrontToken",
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['query' => $query]));
$response = curl_exec($ch);

if (curl_errno($ch)) {
  echo 'cURL error: ' . curl_error($ch);
  exit;
}
curl_close($ch);

$responseData = json_decode($response, true);
$products = $responseData['data']['products']['edges'] ?? [];

$cleanedProducts = [];

foreach ($products as $product) {
  $node = $product['node'];
  $variant = $node['variants']['edges'][0]['node'] ?? [];

  $variantGID = $variant['id'] ?? null;
  preg_match('/(\d+)$/', $variantGID, $matches);
  $variantID = $matches[1] ?? null;

  $price = floatval($variant['price']['amount'] ?? 0);
  $compareAt = floatval($variant['compareAtPrice']['amount'] ?? 0);
  $isDiscounted = ($compareAt > $price);
  $discountPercentage = $isDiscounted ? round((($compareAt - $price) / $compareAt) * 100, 2) : 0;

  $options = [];
  foreach ($node['options'] as $option) {
    $options[$option['name']] = $option['values'];
  }

  $cleanedProducts[] = [
    'title' => $node['title'],
    'description' => $node['description'],
    'created_at' => $node['createdAt'],
    'image' => $node['images']['edges'][0]['node']['url'] ?? '',
    'price' => $price,
    'compare_at_price' => $compareAt,
    'discounted' => $isDiscounted,
    'discount_percentage' => $discountPercentage,
    'variant_id' => $variantID,
    'category' => $node['productType'],
    'tags' => $node['tags'] ?? [],
    'options' => $options,
    'target_gender' => '' // Not available via Storefront API
  ];
}

header('Content-Type: application/json');
echo json_encode(['products' => $cleanedProducts]);
