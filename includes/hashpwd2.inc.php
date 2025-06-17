<?php

$pwdSignup = "Shenan";

$options = [
    'cost' => 12 //this cost factor makes it harder to break the passwords using brute force attack
    // A number between 10-12 is recommended.
];

$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);

$pwdLogin = "Shenan";

if (password_verify($pwdLogin, $hashedPwd)) {
    echo "They are the same";
} else {
    echo "They are not the same";
}

