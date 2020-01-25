<?php

require 'paypal/autoload.php';

define('URL_SITIO', '/http://127.0.0.1/phpMysql/gdlWebCamp');

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(

        //Correo de paypal -> sb-xjrjs546939@personal.example.com
        //Cliente id
        'AXfP7LGyGtwaaD4W82qsSKN4mFqQeW-dPkQsPWKl7PLYPHB_jx5tNMpuWQmIu4o9nfp_1WROQbRhkiLy',
        //Secret
        'EL21kqAVaMiQe6xPLk3FUlEbILLJlxkC45YsZqTKzZLuGnpL8zb8a0Zm8UJZoQHP-grDRhuhhohntcFl'
    )
);
