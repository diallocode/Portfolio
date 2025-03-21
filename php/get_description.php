<?php
require_once 'Database.php';
$db = Database::getInstance()->getConnection();

$projectId = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($projectId <= 0) {
    echo json_encode(['error' => 'ID invalide']);
    exit;
}

$stmt = $db->prepare("SELECT description FROM projects WHERE id = :id");
$stmt->bindParam(':id', $projectId, PDO::PARAM_INT);
$stmt->execute();
$project = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$project) {
    echo json_encode(['error' => 'Projet non trouvé']);
    exit;
}

header('Content-Type: application/json');
echo json_encode($project);
