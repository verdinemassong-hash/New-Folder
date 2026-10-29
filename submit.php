<?php
require "db.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

// Get the POST data
$name    = trim($_POST["name"]);
$email   = trim($_POST["email"]);
$contact = trim($_POST["contact"]);

// Insert into the database (prepared statement prevents SQL injection)
$stmt = $conn->prepare("INSERT INTO my_contact (name, email, contact) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $contact);

if ($stmt->execute()) {
    $message = "Data saved successfully!";
    $class = "success";
} else {
    $message = "Error: " . htmlspecialchars($stmt->error);
    $class = "error";
}

$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Submitted</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card message <?= $class ?>">
        <h2 style="color: inherit;"><?= $message ?></h2>
        <a class="btn" href="index.php">Back to form</a>
        <a class="btn" href="dashboard.php">View Dashboard</a>
    </div>
</body>
</html>
