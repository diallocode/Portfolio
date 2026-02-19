<?php
require_once 'Database.php';

//  On démarre la session pour savoir dans quelle langue est l'utilisateur
if (session_status() === PHP_SESSION_NONE) { session_start(); }
$lang = $_SESSION['lang'] ?? 'en';


$tr = include __DIR__ . '/../lang/' . $lang . '.php'; 

$db = Database::getInstance()->getConnection();

// Récupérer le paramètre de recherche
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

// On boucle sur tous les projets trouvés pour traduire leurs titres et descriptions
foreach ($projects as &$project) {
    // Traduction du titre
    $dbName = trim($project['name']);
    $project['name'] = $tr[$dbName] ?? $dbName;

    // Traduction de la description
    $dbDesc = trim($project['description']);
    $project['description'] = $tr[$dbDesc] ?? $dbDesc;
}
unset($project); 

header('Content-Type: application/json');
echo json_encode($projects);