<?php

require __DIR__ .  '/vendor/autoload.php';
require __DIR__ . '/env.php';

MercadoPago\SDK::setAccessToken(ACCESS_TOKEN);

$webhookNotification = file_get_contents('php://input');

switch($_POST["type"]) {
    case "payment":
        $payment = MercadoPago\Payment.find_by_id($_GET["id"]);
        break;
    case "plan":
        $plan = MercadoPago\Plan.find_by_id($_GET["id"]);
        break;
    case "subscription":
        $plan = MercadoPago\Subscription.find_by_id($_GET["id"]);
        break;
    case "invoice":
        $plan = MercadoPago\Invoice.find_by_id($_GET["id"]);
        break;
}

file_put_contents('webhookResponse.json',$webhookNotification);

?>

<script src="https://www.mercadopago.com/v2/security.js" view="webhook"></script>
