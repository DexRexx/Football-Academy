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
        $phone = htmlspecialchars(trim($_POST['phone']));
        $appointment_date = htmlspecialchars(trim($_POST['date']));
        $level = htmlspecialchars(trim($_POST['level']));
        $program = htmlspecialchars(trim($_POST['program']));
        $message = htmlspecialchars(trim($_POST['message']));

        // Prepare an SQL statement to insert the data
        $sql = "INSERT INTO appointments (name, email, phone, appointment_date, level, program, message) 
                VALUES (:name, :email, :phone, :appointment_date, :level, :program, :message)";
        $stmt = $pdo->prepare($sql);

        // Bind parameters to prevent SQL injection
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':appointment_date', $appointment_date);
        $stmt->bindParam(':level', $level);
        $stmt->bindParam(':program', $program);
        $stmt->bindParam(':message', $message);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<div class='sent-message'>Your appointment request has been sent successfully. Thank you!</div>";
        } else {
            echo "<div class='error-message'>There was an error sending your request. Please try again.</div>";
        }
    }
} catch (PDOException $e) {
    // Handle any connection errors
    echo "Error: " . $e->getMessage();
}

// Close the PDO connection
$pdo = null;
?>
