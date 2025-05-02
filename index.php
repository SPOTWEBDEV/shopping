<?php
include('./server/connection.php');

$ch = curl_init("https://$shopUrl/admin/api/2025-01/graphql.json");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    "X-Shopify-Access-Token: $accessToken",
]);
// curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['query' => $query]));

$response = curl_exec($ch);
curl_close($ch);

// Decode and display result
$data = json_decode($response, true);
print_r($data);
?>
