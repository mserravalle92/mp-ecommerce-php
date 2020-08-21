<?php

require __DIR__ .  '/vendor/autoload.php';
require __DIR__ . '/env.php';

MercadoPago\SDK::setAccessToken(ACCESS_TOKEN);

$entityBody = file_get_contents('php://input');

switch($_POST["type"]) {
    case "payment":
        $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
        break;
    case "plan":
        $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
        break;
    case "subscription":
        $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
        break;
    case "invoice":
        $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
        break;
}

file_put_contents('webhookResponse.json',$entityBody);

?>

<script src="https://www.mercadopago.com/v2/security.js" view="webhook"></script>
