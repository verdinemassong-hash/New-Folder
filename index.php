<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Contact Form</h1>

    <form class="card" action="submit.php" method="POST">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your full name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="you@example.com" required>

        <label for="contact">Contact</label>
        <textarea id="contact" name="contact" rows="5" placeholder="Phone number or message" required></textarea>

        <button type="submit">Submit</button>
    </form>

    <a class="link" href="dashboard.php">View Dashboard &rarr;</a>
</body>
</html>
