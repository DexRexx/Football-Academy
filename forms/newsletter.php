<?php
// Database credentials
$host = 'localhost';
$dbname = 'academy'; // The academy database
$username = 'root';
$password = '';

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and sanitize the email input
        $email = htmlspecialchars(trim($_POST['email']));

        // Check if the email is valid
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Prepare an SQL statement to insert the email
            $sql = "INSERT INTO newsletter (email) VALUES (:email)";
            $stmt = $pdo->prepare($sql);

            // Bind the email parameter
            $stmt->bindParam(':email', $email);

            // Execute the statement
            if ($stmt->execute()) {
                echo "<div class='sent-message'>Your subscription request has been sent. Thank you!</div>";
            } else {
                echo "<div class='error-message'>There was an error processing your request. Please try again.</div>";
            }
        } else {
            echo "<div class='error-message'>Please enter a valid email address.</div>";
        }
    }
} catch (PDOException $e) {
    // Handle any connection errors
    echo "Error: " . $e->getMessage();
}

// Close the PDO connection
$pdo = null;
?>
