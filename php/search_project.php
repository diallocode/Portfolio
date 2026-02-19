<?php
require_once 'Database.php';

//  Initialisation de la langue
if (session_status() === PHP_SESSION_NONE) { session_start(); }
$lang = $_SESSION['lang'] ?? 'en';
$tr = include __DIR__ . '/../lang/' . $lang . '.php';

$db = Database::getInstance()->getConnection();

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

//  Traduction des résultats
foreach ($projects as &$project) {
    $dbName = trim($project['name']);
    $project['name'] = $tr[$dbName] ?? $dbName;

    $dbDesc = trim($project['description']);
    $project['description'] = $tr[$dbDesc] ?? $dbDesc;
}
unset($project);

//  Envoi du JSON traduit
header('Content-Type: application/json');
echo json_encode($projects);