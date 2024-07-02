<?php
session_start();
// Check if user is logged in
if (!isset($_SESSION['username'])) {
  header('Location: index.html');
  exit;
}

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome, <?php echo $username; ?></title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="home-container">
    <h2>Welcome, <?php echo $username; ?>!</h2>
    <p>This is your home page.</p>
    <a href="logout.php">Logout</a>
  </div>
</body>
</html>
