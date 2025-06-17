<?php

//Code below is a small hashing script made to practise hashing in PHP

$sensitiveData = "Shenan";
$salt = bin2hex(random_bytes(16)); // Generate random salt
$pepper = "ASecretPepperString";

$dataToHash = $sensitiveData . $salt . $pepper;
$hash = hash("sha256", $dataToHash);

/*----*/

$sensitiveData = "Shenan";
$storedSalt = $salt;
$storedHash = $hash;
$pepper = "ASecretPepperString";

$dataToHash = $sensitiveData . $salt . $pepper;

$verificationHash = hash("sha256", $dataToHash);

if ($storedHash === $verificationHash) {
    echo "The data are the same!";
    echo "<br>";
    echo $storedHash;
    echo "<br>";
    echo $verificationHash;
} else {
    echo "The data are not the same";
}

//Visit this url to confirm 
// http://localhost/website/includes/hashpwd.inc.php