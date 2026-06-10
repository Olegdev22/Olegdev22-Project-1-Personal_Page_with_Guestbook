<?php

// CSRF protection
if (!validateCSRFToken($_POST['csrf_token'] ?? null)) {
    addFlashMessage('error', 'Sorry pleas send the form again!');
    redirect('/contact');
}

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if (empty($name) || empty($email) || empty($message)) {
    badRequest("All fields are required.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    badRequest("Email field is invalid.");
}

connectDB();

$inserted = insertMessage(
    connectDB(),
    name: $name,
    email: $email,
    message: $message
);

if ($inserted) {
    $safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    addFlashMessage('success', "Thank yuo, $safeName, for your message. It was stored");
    redirect('/guestbook');
}

addFlashMessage('error', "Could not store the message, sorry");
redirect('/guestbook');
