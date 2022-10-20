<html>

<head>
    <title>Hello World</title>
</head>

<body>
    <?php
    // Create the keypair
    $res = openssl_pkey_new();

    // Get private key
    openssl_pkey_export($res, $privatekey);

    // Get public key
    $publickey = openssl_pkey_get_details($res);
    $publickey = $publickey["key"];

    $cleartext = 'Hola esto es una prueba';

    echo "Clear text:<br>$cleartext<BR><BR>";

    openssl_public_encrypt($cleartext, $crypttext, $publickey);

    echo "Crypt text:<br>$crypttext<BR><BR>";

    openssl_private_decrypt($crypttext, $decrypted, $privatekey);

    echo "Decrypted text:<BR>$decrypted<br><br>";
    ?>
</body>

</html>