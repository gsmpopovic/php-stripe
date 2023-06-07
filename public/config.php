<?php 

require_once '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = [];

// Secret Key provided by Stripe
$config['stripe_secret_key'] = $_ENV['STRIPE_SECRET'];

// Test Product ID
$config["product_id"] = $_ENV['PRODUCT_ID'];

// Domain 
$config['domain'] = $_ENV['DOMAIN'];


?>