<?php

ini_set('session.use_only_cokkies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 1000,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);

session_start();

if (!isset($_SESSION['last_regeneration'])) {
    $_SESSION['last_regeneration'] = time();
    session_regenerate_id(true);
} else {
    $interval = 30 * 60; // 30 minutes
    if (time() - $_SESSION['last_regeneration'] >= $interval) {
        $_SESSION['last_regeneration'] = time();
        session_regenerate_id(true);
    }
}