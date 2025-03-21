<?php
require_once 'Database.php';
$db = Database::getInstance()->getConnection();

// Récupère l'offset (combien de projets ont déjà été affichés)
$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 3; 

$stmt = $db->prepare("SELECT * FROM projects LIMIT 3 OFFSET :offset");
$stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($projects);
?>
