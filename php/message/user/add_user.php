<?php
require_once '../../Database.php';
$db = Database::getInstance()->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    // Validation des champs
    if (empty($username) || empty($password)) {
        echo json_encode(['status' => 'error', 'message' => 'Tous les champs sont requis.']);
        exit;
    }

    // Hachage du mot de passe
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insertion de l'utilisateur dans la base de données
    $stmt = $db->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hashedPassword);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Utilisateur ajouté avec succès.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => "Erreur lors de l'ajout de l'utilisateur."]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Méthode de requête invalide.']);
}