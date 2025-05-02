<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function checkUrlProtocol($url)
{
    $parsedUrl = parse_url($url);
    return isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : 'invalid';
}

// Automatically get the current URL
$currentUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")
    . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Get the protocol from the current URL
$request = checkUrlProtocol($currentUrl);

// Default configurations
define("HOST", "localhost");

// Determine if online or offline
$isLocalhost = ($_SERVER['HTTP_HOST'] === 'localhost');

// Database connection (Only use one based on environment)
$connection = '';

if ($isLocalhost) {
    // Offline (Localhost)
    $domain = "http://localhost/shopping/";

    define("USER", "root");
    define("PASSWORD", "");
    define("DATABASE", "bencofashion");

    // Database connection
    $connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

  
} else {
    // Online (Live Server)
    $domain = "https://quanstofy.com/";

    define("USER", "quanstof_billz-crypto");
    define("PASSWORD", "quanstof_billz-crypto");
    define("DATABASE", "quanstof_billz-crypto");

    // Database connection
    $connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

   
}

// Site configurations
$sitename = "Benco Fashion";

// Email Config 
$siteemail = "support@quanstofy.com";
$emailpassword  = "support@quanstofy.com";
$host = 'mail.quanstofy.com';
$sitephone  = "+44 776 0957 798";
$siteaddress  = "Weston, New York";


$accessToken = 'aa56414f2389c17f22b29e993cec8456';
$secretKey = 'c738f9c3081e2d5b051c94f14f9723c0';
$shopUrl = 'https://admin.shopify.com/store/931mb2-by';

session_start();
