<?php
// ob_start — Activa el almacenamiento en búfer de la salida
ob_start();
require 'vendor/autoload.php';


// API key.
\Stripe\Stripe::setApiKey(STRIPE_API_KEY);
// header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$YOUR_DOMAIN =  URL_DOMAIN;
$productName = "Pago uni mensualidad";
// $priceID = STRIPE_PRICE_ID;
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

// var_dump($checkout_session->url);


// header("HTTP/1.1 303 See Other");
// header("Location:$checkout_session->url");
//header('Location:'.$checkout_session->url,true,303);
echo("<script>location.href = '".$checkout_session->url."';</script>");

ob_end_flush();