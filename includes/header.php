<?php 
// Start the session if it's not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
        // Set the page title dynamically based on the logged-in user's role
        if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
            echo "Admin Dashboard";
        } elseif (isset($_SESSION['role']) && $_SESSION['role'] == 'user') {
            echo "User Dashboard";
        } else {
            echo "GDP Project Dashboard";
        }
        ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans flex flex-col min-h-screen">

<header class="bg-green-600 text-white p-6 flex justify-between items-center">
    <!-- Title: changes based on user role -->
    <h1 class="text-3xl font-bold">
        <?php 
        // Display Dashboard title based on user role
        if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
            echo "Admin Dashboard";
        } elseif (isset($_SESSION['role']) && $_SESSION['role'] == 'user') {
            echo "User Dashboard";
        } else {
            echo "GDP Project Dashboard";
        }
        ?>
    </h1>
    
    <!-- Logout Button (Visible only when user is logged in) -->
    <?php if (isset($_SESSION['username'])): ?>
        <a href="logout.php" class="text-white text-xl hover:text-red-500 flex items-center">
            Logout <span role="img" aria-label="logout" class="ml-2">🚪</span>
        </a>
    <?php endif; ?>
</header>

<main class="flex-grow container mx-auto px-4"> <!-- Added container and padding for aesthetics -->
