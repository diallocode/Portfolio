<?php
session_start();
require_once '../Database.php';

$db = Database::getInstance()->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = trim($_POST['password']); // Pas besoin de `htmlspecialchars()` ici

    if (empty($username) || empty($password)) {
        echo json_encode(['status' => 'error', 'message' => 'Tous les champs sont requis.']);
        exit;
    }

    $stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        echo json_encode(['status' => 'success', 'message' => 'Connexion réussie.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Nom d\'utilisateur ou mot de passe incorrect.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Méthode de requête invalide.']);
}
?>


<!-- Code php qui verifie si les login sont correct -->