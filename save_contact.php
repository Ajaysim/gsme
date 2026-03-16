<?php
require_once("./config.php");

if (isset($_POST['name'])) {
    // 1. Collect data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $service = $_POST['service'];
    $project_location = $_POST['project_location'];
    $message = $_POST['message'];

    // 2. Use Prepared Statements to prevent SQL Injection
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, phone, company, service, project_location, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
    
    // "sssssss" means we are binding 7 strings
    $stmt->bind_param("sssssss", $name, $email, $phone, $company, $service, $project_location, $message);

    if ($stmt->execute()) {
        // 3. Success Handling
        echo "<script>
                alert('Message Sent Successfully');
                window.location.href='./pages/contact.php';
              </script>";
        // Note: header() won't work after echo/script tags, 
        // but the JS window.location above handles the redirect.
    } else {
        // 4. Error Handling
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>