<?php
require_once '../php/Database.php';
$db = Database::getInstance()->getConnection();

if (isset($_GET['id'])) {
    $projectId = intval($_GET['id']);

    // Vérifier si l'ID est valide
    if ($projectId > 0) {
        $stmt = $db->prepare("DELETE FROM projects WHERE id = :id");
        $stmt->bindParam(':id', $projectId, PDO::PARAM_INT);

        if ($stmt->execute()) {
            header('Location: admin_page.php?message=Project deleted successfully');
            exit;
        } else {
            echo "Erreur lors de la suppression du projet.";
        }
    } else {
        echo "ID invalide.";
    }
} else {
    echo "Aucun ID fourni.";
}