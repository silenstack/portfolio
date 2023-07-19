<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Validate input
    if (empty($name) || empty($email) || empty($message)) {
        // Handle validation error
        header('Location: index.html#contact');
        exit;
    }
    
    // Send email
    $to = 'contact@jowatechs.com';
    $subject = 'New message from Jowa Technologies website';
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    
    if (mail($to, $subject, $body)) {
        // Handle success
        header('Location: index.html#contact');
        exit;
    } else {
        // Handle error
        header('Location: index.htm#contact');
        exit;
    }
} else {
    header('Location: index.html#contact');
    exit;
}
?>
