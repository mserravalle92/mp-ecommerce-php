<?php

require __DIR__ .  '/vendor/autoload.php';
require __DIR__ . '/env.php';

MercadoPago\SDK::setAccessToken(ACCESS_TOKEN);

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

?>
<script src="https://www.mercadopago.com/v2/security.js" view="webhook"></script>
