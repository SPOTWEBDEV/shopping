<?php
include('../../connection.php');

// Order data (you can dynamically get these from your frontend)
$orderData = [
         "order" => [
                  "line_items" => [
                           [
                                    "variant_id" => 45926726205595, // Replace with actual variant ID
                                    "quantity" => 1
                           ]
                  ],
                  "customer" => [
                           "first_name" => "John",
                           "last_name" => "Doe",
                           "email" => "john.doe@example.com"
                  ],
                  "financial_status" => "paid", // Options: pending, authorized, paid
                  "shipping_address" => [
                           "first_name" => "John",
                           "last_name" => "Doe",
                           "address1" => "123 Elm St",
                           "city" => "Los Angeles",
                           "province" => "CA",
                           "country" => "US",
                           "zip" => "90001"
                  ]
         ]
];

// API URL
$url = "https://$shopUrl/admin/api/2024-07/orders.json";

// Setup cURL
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
         'Content-Type: application/json',
         "X-Shopify-Access-Token: $accessToken"
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($orderData));

// Execute request
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// Error check
if (curl_errno($ch)) {
         echo 'cURL error: ' . curl_error($ch);
} elseif ($httpCode >= 400) {
         echo "HTTP error $httpCode: " . $response;
} else {
         echo "Order placed successfully: " . $response;
}

curl_close($ch);
