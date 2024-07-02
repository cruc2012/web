<?php
// Simulated user credentials for demonstration
$valid_username = 'user';
$valid_password = 'password';

// Retrieve user input
$username = $_POST['username'];
$password = $_POST['password'];

// Check if credentials are valid
if ($username === $valid_username && $password === $valid_password) {
  // Start session and redirect to home page
  session_start();
  $_SESSION['username'] = $username;
  header('Location: home.php');
  exit;
} else {
  // Redirect back to login page with error message
  header('Location: index.html?error=1');
  exit;
}
?>
