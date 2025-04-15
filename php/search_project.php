<?php
require_once 'Database.php';
$db = Database::getInstance()->getConnection();

// Récupérer le bon paramètre envoyé par JS
$search = isset($_GET['search']) ? trim($_GET['search']) : '';

$query = "SELECT * FROM projects";
$params = [];

if (!empty($search)) {
    $query .= " WHERE name LIKE :search OR description LIKE :search";
    $params[':search'] = '%' . $search . '%';
}

$stmt = $db->prepare($query);
$stmt->execute($params);

$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($projects);
