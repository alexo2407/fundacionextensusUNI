<?php 

/** Rutas principales  */

//define('RUTA_DOMAIN','//'.$_SERVER['SERVER_NAME'].'/');   
define('RUTA_DOMAIN','//'.$_SERVER['SERVER_NAME'].'/analitica'.'/');


$url= $_SERVER["SERVER_NAME"];
$protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';

define('URL_DOMAIN',$protocol . $url.'/analitica');
/* 
 * Stripe API configuration 
 * Remember to switch to your live publishable and secret key in production! 
 * See your keys here: https://dashboard.stripe.com/account/apikeys 
 */ 
define('STRIPE_API_KEY', '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'); 
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51KF4BXImi12KU7iswCsfnsmJA3K9fP7eHyBvvHw6DRIiHueqWyNOJFqcXdT1fLSSvumtbOm8cC6RvbxBBXZPIH0o00VKySvOKR'); 
define('STRIPE_PRODUCT_ID', 'price_1JrAZAJiQci0RwPjcIBS4PNr'); 
    

//https://stripe.com/docs/payments/checkout/migration

