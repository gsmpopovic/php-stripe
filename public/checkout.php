<?php

require_once './config.php';

\Stripe\Stripe::setApiKey($config['stripe_secret_key']);
header('Content-Type: application/json');

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price' => $config['product_id'],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $config['domain']. '/success.html',
  'cancel_url' => $config['domain']. '/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);

?>