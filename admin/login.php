<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // ⚠️ Pour une vraie appli, utilise une base de données + mot de passe hashé.
    $correct_username = 'admin';
    $correct_password = 'password';

    // Exemple de hash si tu veux utiliser password_verify un jour :
    // $correct_password_hash = password_hash('password', PASSWORD_DEFAULT);
    // if ($username === $correct_username && password_verify($password, $correct_password_hash)) { ... }

    if ($username === $correct_username && $password === $correct_password) {
        $_SESSION['loggedin'] = true;
        header('Location: admin_page.php');
        exit;
    } else {
        $error = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>
    <form method="POST" action="login.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
