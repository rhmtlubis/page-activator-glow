<?php
// This is a simple example of processing the RSVP form
// In a real application, you would save this data to a database

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $attendance = isset($_POST['attendance']) ? htmlspecialchars($_POST['attendance']) : '';
    $guest_count = isset($_POST['guest_count']) ? intval($_POST['guest_count']) : 0;
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
    
    // Validate data
    if (empty($name) || empty($attendance) || empty($message)) {
        // Redirect back with error
        header("Location: index.php?error=1");
        exit;
    }
    
    // In a real application, you would save to a database here
    // For example:
    // $conn = new mysqli("localhost", "username", "password", "database");
    // $stmt = $conn->prepare("INSERT INTO rsvp (name, attendance, guest_count, message) VALUES (?, ?, ?, ?)");
    // $stmt->bind_param("ssis", $name, $attendance, $guest_count, $message);
    // $stmt->execute();
    // $stmt->close();
    // $conn->close();
    
    // Redirect back with success
    header("Location: index.php?success=1");
    exit;
} else {
    // If not a POST request, redirect to the main page
    header("Location: index.php");
    exit;
}
?>

