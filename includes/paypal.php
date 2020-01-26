<?php

require 'paypal/autoload.php';
//en el video decia que reemplazaramos la url po http://127.0.0.1/phpMysql/gdlWebCamp, pero no funciona con esta
//Redireccionaba a pagina por defecto con http://127.0.0.1/paypal/paypal, la volvi a cambiar por la que sugeria el video y funciono :)
define('URL_SITIO', 'http://127.0.0.1/phpMysql/gdlWebCamp');

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(

        //Correo de paypal -> sb-xjrjs546939@personal.example.com
        //Cliente id
        'AXfP7LGyGtwaaD4W82qsSKN4mFqQeW-dPkQsPWKl7PLYPHB_jx5tNMpuWQmIu4o9nfp_1WROQbRhkiLy',
        //Secret
        'EL21kqAVaMiQe6xPLk3FUlEbILLJlxkC45YsZqTKzZLuGnpL8zb8a0Zm8UJZoQHP-grDRhuhhohntcFl'
    )
);
