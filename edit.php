<?php
require_once "config/database.php";

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    $sql = "UPDATE users SET name = '$name', gender = '$gender', dob = '$dob' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <h1>Edit User</h1>
        <form method="POST">
    <label>Name:</label>
    <input type="text" name="name" id="name" required><br>

    <label>Gender:</label>
    <select name="gender" id="gender" required>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select><br>

    <label>Date of Birth:</label>
    <input type="date" name="dob" id="dob" required><br>

    <button type="submit">Add User</button>
</form>

        <a href="index.php">Back to Home</a>
    </div>
</body>
</html>
