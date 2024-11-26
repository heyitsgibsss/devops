<?php
require_once "config/database.php";

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="add.php">Add User</a></li>
        </ul>
    </div>

    <div class="content">
        <header>
            <h1>User Management</h1>
        </header>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['gender'] ?></td>
                        <td><?= $row['dob'] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
                            <a href="delete.php?id=<?= $row['id'] ?>" class="delete">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>
