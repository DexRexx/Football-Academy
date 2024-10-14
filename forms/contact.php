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
        // Retrieve and sanitize form inputs
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $subject = htmlspecialchars(trim($_POST['subject']));
        $message = htmlspecialchars(trim($_POST['message']));

        // Prepare an SQL statement to insert the data
        $sql = "INSERT INTO contact (name, email, subject, message) VALUES (:name, :email, :subject, :message)";
        $stmt = $pdo->prepare($sql);

        // Bind parameters to prevent SQL injection
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':message', $message);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<div class='sent-message'>Your message has been sent. Thank you!</div>";
        } else {
            echo "<div class='error-message'>There was an error sending your message. Please try again.</div>";
        }
    }
} catch (PDOException $e) {
    // Handle any connection errors
    echo "Error: " . $e->getMessage();
}

// Close the PDO connection
$pdo = null;
?>
