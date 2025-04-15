<?php
session_start();

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    if (in_array($lang, ['en', 'fr'])) {
        $_SESSION['lang'] = $lang;
    }
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
