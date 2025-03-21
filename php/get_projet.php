<?php
require_once 'Database.php';
$db = Database::getInstance()->getConnection();

$stmt = $db->query("SELECT * FROM projects");
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($projects);