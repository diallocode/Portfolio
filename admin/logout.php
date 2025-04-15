<?php
session_start();
$_SESSION = []; // ← Vide le tableau de session
session_destroy();
header('Location: login.php');
exit;