<?php

require 'vendor/autoload.php';

// API key.
\Stripe\Stripe::setApiKey(STRIPE_API_KEY);

header('Content-Type: application/json');

$YOUR_DOMAIN =  URL_DOMAIN;
$productName = "Pago uni mensualidad";
$productID = STRIPE_PRODUCT_ID;
// Monto minimo $0.50 US  
$productPrice = $_POST['quantity']; 
$currency = "USD"; 
$stripeAmount = round($_POST['quantity']*100, 2); 

// Detalles del producto

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    'price_data' => [ 
      'product_data' => [ 
          'name' => $productName, 
          'metadata' => [ 
              'pro_id' => $productID 
          ] 
      ], 
      'unit_amount' => $stripeAmount, 
      'currency' => $currency, 
  ], 
    'quantity' => 1,
  ]],
  'mode' => 'payment',
    'success_url' => $YOUR_DOMAIN.'/success',
    'cancel_url' => $YOUR_DOMAIN.'/cancel',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);