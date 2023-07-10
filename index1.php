<?php

function logisticMap($x, $r) {
    return $r * $x * (1 - $x);
}

function generateKey($length, $seed, $r) {
    $key = [];
    $x = $seed;

    for ($i = 0; $i < $length; $i++) {
        $x = logisticMap($x, $r);
        $key[] = $x;
    }

    return $key;
}

function encryptFileChunk($inputFile, $outputFile, $key) {
    $input = fopen($inputFile, 'rb');
    $output = fopen($outputFile, 'wb');

    while (!feof($input)) {
        $data = fread($input, 8192);
        $encryptedData = '';

        for ($i = 0; $i < strlen($data); $i++) {
            $encryptedData .= chr(ord($data[$i]) ^ intval($key[$i % count($key)] * 255));
        }

        fwrite($output, $encryptedData);
    }

    fclose($input);
    fclose($output);
}

function decryptFileChunk($inputFile, $outputFile, $key) {
    $input = fopen($inputFile, 'rb');
    $output = fopen($outputFile, 'wb');

    while (!feof($input)) {
        $data = fread($input, 8192);
        $decryptedData = '';

        for ($i = 0; $i < strlen($data); $i++) {
            $decryptedData .= chr(ord($data[$i]) ^ intval($key[$i % count($key)] * 255));
        }

        fwrite($output, $decryptedData);
    }

    fclose($input);
    fclose($output);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>File Encryption Using Chaotic Map</title>
</head>
<body>
    <h1>File Encryption Using Chaotic Map</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['encrypt'])) {
        $keyLength = 1024;  // Key length in bytes
        $seed = 0.1;       // Initial seed value
        $r = 3.9;          // Chaotic map parameter

        $key = generateKey($keyLength, $seed, $r);

        $inputFile = $_FILES['file']['tmp_name'];
        $outputFile = 'encrypted_files/' . $_FILES['file']['name'];

        encryptFileChunk($inputFile, $outputFile, $key);

        echo '<p>File encrypted successfully!</p>';
	$keystring = implode($key);
	// Using echo statement
	echo "Generated Key: " . $keystring;
	//store key to a file
	$file = 'key.txt';
	file_put_contents($file,$key);
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['decrypt'])) {
        $keyLength = 1024;  // Key length in bytes
        $seed = 0.1;       // Initial seed value
        $r = 3.9;          // Chaotic map parameter

        $key = generateKey($keyLength, $seed, $r);

        $inputFile = $_FILES['file']['tmp_name'];
        $outputFile = 'decrypted_files/' . $_FILES['file']['name'];

        decryptFileChunk($inputFile, $outputFile, $key);

        echo '<p>File decrypted successfully!</p>';
    }
    ?>

    <h2>Encrypt File:</h2>

    <form method="POST" enctype="multipart/form-data">
        <label for="file">Select a file to encrypt:</label>
        <input type="file" name="file" id="file" required>
        <br><br>
        <input type="submit" name="encrypt" value="Encrypt">
    </form>

    <h2>Decrypt File:</h2>

    <form method="POST" enctype="multipart/form-data">
        <label for="file">Select an encrypted file to decrypt:</label>
        <input type="file" name="file" id="file" required>
        <br><br>
        <input type="submit" name="decrypt" value="Decrypt">
    </form>
</body>
</html>
