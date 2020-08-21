<?php

require __DIR__ .  '/vendor/autoload.php';
require __DIR__ . '/env.php';

MercadoPago\SDK::setAccessToken(ACCESS_TOKEN);

$webhookNotification = file_get_contents('php://input');

file_put_contents('webhookResponse.json',$webhookNotification);

?>

<script src="https://www.mercadopago.com/v2/security.js" view="webhook"></script>
