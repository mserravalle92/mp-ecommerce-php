
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>
        Hubo un error al procesar el pago! por favor intente nuevamente!
    </h1>
    <hr>
    <table>
        <tr> <th style="text-align:left"> Collection ID: </th> <td><?php echo $_GET['collection_id'] ?></td> </tr>
        <tr> <th style="text-align:left"> Collection Status: </th> <td><?php echo $_GET['collection_status'] ?></td> </tr>
        <tr> <th style="text-align:left"> External Reference: </th> <td><?php echo $_GET['external_reference'] ?></td> </tr>
        <tr> <th style="text-align:left"> Payment Type: </th> <td><?php echo $_GET['payment_type'] ?></td> </tr>
        <tr> <th style="text-align:left"> Preference ID: </th> <td><?php echo $_GET['preference_id'] ?></td> </tr>
        <tr> <th style="text-align:left"> Site ID: </th> <td><?php echo $_GET['site_id'] ?></td> </tr>
        <tr> <th style="text-align:left"> Processing Mode: </th> <td><?php echo $_GET['processing_mode'] ?></td> </tr>
        <tr> <th style="text-align:left"> Merchant Account ID: </th> <td><?php echo $_GET['merchant_account_id'] ?></td> </tr>
    </table>

    <a href="http://mserravalle-mp-ecommerce-php.herokuapp.com/">Volver al catalogo</a>
    <script src="https://www.mercadopago.com/v2/security.js" view="failure"></script>

</body>
</html>
