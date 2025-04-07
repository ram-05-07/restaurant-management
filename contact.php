<?php
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    $timestamp = date("Y-m-d H:i:s");

    $entry = "[$timestamp] $name <$email>: $message\n";

    file_put_contents("contacts.txt", $entry, FILE_APPEND | LOCK_EX);
    $success = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-tr from-pink-100 via-yellow-100 to-purple-100 flex items-center justify-center p-6">
    <div class="max-w-lg w-full bg-white p-8 rounded-2xl shadow-2xl transition-all duration-300 hover:shadow-pink-300">
        <h2 class="text-4xl font-extrabold text-center text-pink-600 mb-2">📬 Contact Us</h2>
        <p class="text-center text-gray-500 mb-6">We'd love to hear from you!</p>

        <?php if ($success): ?>
            <div class="bg-green-100 text-green-800 p-4 rounded-lg mb-4 text-center border border-green-300">
                ✅ Your message has been sent successfully!
            </div>
        <?php endif; ?>

        <form action="" method="POST" class="space-y-5">
            <div>
                <label class="block font-semibold text-gray-700 mb-1">Your Name</label>
                <input type="text" name="name" required
                       class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-pink-400 transition-all duration-200">
            </div>
            <div>
                <label class="block font-semibold text-gray-700 mb-1">Email Address</label>
                <input type="email" name="email" required
                       class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-yellow-400 transition-all duration-200">
            </div>
            <div>
                <label class="block font-semibold text-gray-700 mb-1">Message</label>
                <textarea name="message" rows="5" required
                          class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-400 transition-all duration-200"></textarea>
            </div>
            <button type="submit"
                    class="w-full bg-gradient-to-r from-pink-500 to-red-500 text-white font-semibold py-3 rounded-lg hover:from-pink-600 hover:to-red-600 transition-all duration-200">
                🚀 Send Message
            </button>
        </form>
    </div>
</body>
</html>
