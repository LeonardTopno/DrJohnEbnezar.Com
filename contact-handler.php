<?php

declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

$name = trim((string) ($_POST['name'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$subject = trim((string) ($_POST['subject'] ?? 'Website enquiry'));
$message = trim((string) ($_POST['message'] ?? ''));

if ($name === '' || $email === '' || $message === '') {
    header('Location: contact.php');
    exit;
}

$to = 'sekram07@gmail.com';
$body = "From: {$name}\nE-Mail: {$email}\nSubject: {$subject}\nMessage:\n{$message}";
$headers = [
    'From: Orange Contact Form',
    'Reply-To: ' . $email,
    'Content-Type: text/plain; charset=UTF-8',
];

@mail($to, $subject, $body, implode("\r\n", $headers));
header('Location: thank-you.php');
exit;