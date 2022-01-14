<?php 

/** Rutas principales  */

define('RUTA_DOMAIN','//'.$_SERVER['SERVER_NAME'].'/');   
//define('RUTA_DOMAIN','//'.$_SERVER['SERVER_NAME'].'/analitica'.'/');


$url= $_SERVER["SERVER_NAME"];
$protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';

define('URL_DOMAIN',$protocol . $url);
/* 
 * Stripe API configuration 
 * Remember to switch to your live publishable and secret key in production! 
 * See your keys here: https://dashboard.stripe.com/account/apikeys 
 */ 
define('STRIPE_API_KEY', 'sk_test_51KF4BXImi12KU7isVlJmeb9hH3FMyZqmmDVyNMTngmH5fsqV2dWpTzAvr15usjDDNTr91iPpLF83Iy9UUOFWs8vG00yBmXUram'); 
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51KF4BXImi12KU7iswCsfnsmJA3K9fP7eHyBvvHw6DRIiHueqWyNOJFqcXdT1fLSSvumtbOm8cC6RvbxBBXZPIH0o00VKySvOKR'); 
define('STRIPE_PRODUCT_ID', 'prod_KvhyKstTNRBpIF'); 
    

//https://stripe.com/docs/payments/checkout/migration

