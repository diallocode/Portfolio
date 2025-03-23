<?php
require_once 'Database.php';
$db = Database::getInstance()->getConnection();

$search = isset($_GET['search']) ? htmlspecialchars(trim($_GET['search'])) : '';
$category = isset($_GET['category']) ? htmlspecialchars(trim($_GET['category'])) : '';

$query = "SELECT * FROM projects WHERE 1=1";
$params = [];

if (!empty($search)) {
    $query .= " AND (name LIKE :search OR description LIKE :search)";
    $params[':search'] = '%' . $search . '%';
}

if (!empty($category)) {
    $query .= " AND category = :category";
    $params[':category'] = $category;
}

$stmt = $db->prepare($query);
foreach ($params as $key => &$val) {
    $stmt->bindParam($key, $val);
}
$stmt->execute();
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($projects);