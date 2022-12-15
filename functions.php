<?php
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array();
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < $_GET['pass-leng']; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass);
};
if (!empty($_GET['pass-leng'])) {
    $length = $_GET['pass-leng'];
    $_SESSION['password'] = randomPassword($length);
    header("Location: http://localhost/php-strong-password-generator/password_generate.php");
};
?>