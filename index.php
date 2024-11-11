<?php
// Include the setup script to create the database if it doesn't exist
//include 'setup_db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GDP Project Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen font-sans">
    <div class="max-w-md w-full bg-white p-6 rounded-lg shadow-lg text-center">
        <h1 class="text-3xl font-bold text-green-600 mb-4">Welcome to the GDP Project</h1>
        <p class="text-gray-600 mb-6">Choose an option to get started:</p>
        <div class="flex flex-col space-y-4">
            <a href="user/login.php" class="bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition duration-200">
                Login
            </a>
            <a href="user/register.php" class="bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700 transition duration-200">
                Register
            </a>
        </div>
    </div>
</body>
</html>
