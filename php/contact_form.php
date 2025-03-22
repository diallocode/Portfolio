<?php
require_once 'Database.php';
$db = Database::getInstance()->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['Nom']));
    $email = htmlspecialchars(trim($_POST['Email']));
    $message = htmlspecialchars(trim($_POST['besoin']));

    // Validation des champs
    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(['status' => 'error', 'message' => 'Tous les champs sont requis.']);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Adresse email invalide.']);
        exit;
    }

    // Insertion du message dans la base de données
    $stmt = $db->prepare("INSERT INTO messages (name, email, message) VALUES (:name, :email, :message)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Message enregistré avec succès.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => "Erreur lors de l'enregistrement du message."]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Méthode de requête invalide.']);
}