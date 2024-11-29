<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Simple validation
    if (!empty($name) && !empty($email) && !empty($message)) {
        echo "Thank you, $name! Your message has been sent.";
    } else {
        echo "All fields are required.";
    }
}
?>
