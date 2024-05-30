<?php
session_start();

// Define the root URL of your blog
define("ROOT_URL", "https://blog-brown-kappa.vercel.app/");

// Update database connection constants with the new credentials
define('DB_HOST', 'sql302.infinityfree.com');
define('DB_USER', 'if0_36636875');
define('DB_PASS', 'ycP8huyLHDS');
define('DB_NAME', 'if0_36636875_XXX');
define('DB_PORT', 3306); // Optional, but specifying for completeness

// Function to connect to the database
function connectDB() {
    $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
    
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    
    return $connection;
}

// Example usage
$connection = connectDB();
// Perform database operations...

// Close the connection when done
$connection->close();
?>
