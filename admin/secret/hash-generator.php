<?php
// The password you want to hash
$password = 'admin123';

// Use PHP's password_hash() function to hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Output the hashed password
echo $hashedPassword;
?>
