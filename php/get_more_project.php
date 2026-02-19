<?php
require_once 'Database.php';

//  Initialisation de la langue
if (session_status() === PHP_SESSION_NONE) { session_start(); }
$lang = $_SESSION['lang'] ?? 'en';
$tr = include __DIR__ . '/../lang/' . $lang . '.php';

$db = Database::getInstance()->getConnection();

// Récupère l'offset (combien de projets ont déjà été affichés)
$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 3; 

$stmt = $db->prepare("SELECT * FROM projects LIMIT 3 OFFSET :offset");
$stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

//  Traduction des résultats avant de les envoyer
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