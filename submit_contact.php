<?php
// Process contact form (later can be expanded to email or DB insert)
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-green-50 flex items-center justify-center min-h-screen text-center p-6">
    <div class="bg-white p-8 rounded shadow-md max-w-md">
        <h2 class="text-2xl font-bold text-green-700 mb-4">Message Sent!</h2>
        <p class="mb-2">Thank you, <strong><?php echo htmlspecialchars($name); ?></strong>, for contacting us.</p>
        <p>We’ll get back to you shortly at <strong><?php echo htmlspecialchars($email); ?></strong>.</p>
        <a href="contact.php" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Back</a>
    </div>
</body>
</html>
