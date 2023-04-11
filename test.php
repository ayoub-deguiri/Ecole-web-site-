<?php


    // Set the encryption key (this should be a secure random string)
    $encryption_key = bin2hex(random_bytes(20));
    // Set the data to be encrypted
    $data_to_encrypt = 'ayoub123';
    // Encrypt the data using AES-256-CBC encryption
    $encrypted_data = openssl_encrypt($data_to_encrypt, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, '1234567890123456');
    // Decrypt the data
    $decrypted_data = openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, '1234567890123456');
    // Display the results
    echo 'Original data: ' . $data_to_encrypt . '<br>';
    echo 'Encrypted data: ' . base64_encode($encrypted_data) . '<br>';
    echo 'Decrypted data: ' . $decrypted_data . '<br>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    test
</body>
</html>