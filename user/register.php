<?php
// Include database connection
include_once '../includes/db.php';

$error = "";
$success = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $role = 'user';  // Set default role to 'user'

    // Check if the passwords match
    if ($password !== $confirmPassword) {
        $error = "Passwords do not match.";
    } else {
        // Check if username already exists
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $error = "Username already exists.";
        } else {
            // Hash the password before saving to the database
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insert new user into the database
            $sql = "INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $username, $email, $hashedPassword, $role);

            if ($stmt->execute()) {
                $success = "Registration successful. Please <a href='login.php'>login</a>.";
            } else {
                $error = "Error during registration. Please try again.";
            }
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | GDP Project</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen font-sans">
    <div class="max-w-md w-full bg-white p-6 rounded-lg shadow-lg text-center">
        <h2 class="text-2xl font-bold text-green-600 mb-6">Register for GDP Project</h2>
        
        <!-- Display success or error message -->
        <?php if ($error): ?>
            <p class="mt-4 text-sm text-red-500"><?php echo $error; ?></p>
        <?php endif; ?>
        
        <?php if ($success): ?>
            <p class="mt-4 text-sm text-green-500"><?php echo $success; ?></p>
        <?php endif; ?>

        <!-- Registration form -->
        <form action="register.php" method="POST" class="space-y-4">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                <input type="text" id="username" name="username" required 
                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-indigo-200 focus:border-indigo-500"/>
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" id="email" name="email" required 
                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-indigo-200 focus:border-indigo-500"/>
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" id="password" name="password" required 
                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-indigo-200 focus:border-indigo-500"/>
            </div>
            <div>
                <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required 
                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-indigo-200 focus:border-indigo-500"/>
            </div>
            <button type="submit" 
                class="w-full bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700 transition duration-200">
                Register
            </button>
        </form>
        <p class="mt-4 text-sm text-gray-600">
            Already have an account? <a href="login.php" class="text-indigo-600 hover:text-indigo-700">Login here</a>.
        </p>
    </div>
</body>
</html>
