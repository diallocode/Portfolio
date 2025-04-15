<?php 
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}

require_once '../php/Database.php';
$db = Database::getInstance()->getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $show_more_link = $_POST['show_more_link']; // Define the variable

    $stmt = $db->prepare("INSERT INTO projects (name, description, image, show_more_link) VALUES (:name, :description, :image, :show_more_link)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':show_more_link', $show_more_link); // Bind the variable
    $stmt->execute();

    echo "Project added successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    
</head>
<body>
    <h1>Add New Project</h1>
    <form method="POST" action="admin_page.php">
        <label for="name">Project Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="image">Image URL:</label>
        <input type="text" id="image" name="image"><br><br>

        <label for="show_more_link">Show More Link:</label>
        <input type="text" id="show_more_link" name="show_more_link"><br><br>

        <input type="submit" value="Add Project">
    </form>

<!-- pour supprimer des projets -->
<h2>Liste des Projets</h2>
<div class="project-list">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stmt = $db->prepare("SELECT * FROM projects");
            $stmt->execute();
            while ($project = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($project['id']) . "</td>";
                echo "<td>" . htmlspecialchars($project['name']) . "</td>";
                echo "<td>" . htmlspecialchars($project['description']) . "</td>";
                echo "<td><a href='delete.php?id=" . htmlspecialchars($project['id']) . "' onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer ce projet ?\")'>Supprimer</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>