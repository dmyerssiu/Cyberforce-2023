<?php
session_start();

$adminEmail = 'admin@cfc.com';
$adminPassword = 'test1234';

if ($_POST['email'] === $adminEmail && $_POST['password'] === $adminPassword) {
    $_SESSION['admin'] = true;
    header('Location: admin.php');
} else {
    header('Location: login.php?error=1');
}
?>
