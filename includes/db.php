<?php
$servername = "localhost";
$username = "root";  // Default MySQL username in XAMPP
$password = "";      // Default MySQL password in XAMPP (empty string)
$dbname = "gdp_project_db";  // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the database exists
$db_check_query = "SHOW DATABASES LIKE '$dbname'";
$result = $conn->query($db_check_query);

if ($result->num_rows === 0) {
    // If the database doesn't exist, create it by running the SQL script
    $sql = file_get_contents(__DIR__ . '/init_database.sql');  // Path to your SQL file

    if ($conn->multi_query($sql)) {
        // Flush the results of the multi_query to reset the connection state
        do {
            // This will handle all the result sets
            if ($result = $conn->store_result()) {
                $result->free();
            }
        } while ($conn->more_results() && $conn->next_result());

        //echo "Database and tables created successfully.";
    } else {
        //echo "Error creating database: " . $conn->error;
    }
} else {
    //echo "Database already exists.";
}

// Select the database
$conn->select_db($dbname);

// Check if the connection to the specific database was successful
if ($conn->connect_error) {
    die("Connection failed to the database: " . $conn->connect_error);
}

?>
