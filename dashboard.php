<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION["username"];

// Retrieve user details from file
$address = "N/A";
$file = fopen("users.txt", "r");
if ($file) {
    while (($line = fgets($file)) !== false) {
        list($savedUser, $savedPass, $savedAddress) = explode("|", trim($line));
        if ($username === $savedUser) {
            $address = $savedAddress;
            break;
        }
    }
    fclose($file);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - ABC Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-image: url('./images/bg.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-opacity-90 backdrop-blur-sm flex flex-col items-center justify-center p-6">

    <div class="bg-white bg-opacity-90 p-10 rounded-2xl shadow-2xl w-full max-w-xl text-center">
        <h1 class="text-3xl font-bold text-blue-700 mb-4">🍽️ Welcome to ABC Restaurant</h1>
        <p class="text-lg text-gray-800 mb-2"><strong>User:</strong> <?= htmlspecialchars($username) ?></p>
        <p class="text-lg text-gray-800 mb-4"><strong>Address:</strong> <?= htmlspecialchars($address) ?></p>

        <div class="space-y-3">
            <a href="menu.php" class="inline-block px-6 py-2 bg-green-600 text-white rounded-full font-semibold hover:bg-green-700 transition">📖 View Menu</a>
            <a href="order.php" class="inline-block px-6 py-2 bg-yellow-500 text-white rounded-full font-semibold hover:bg-yellow-600 transition">🛒 Place Order</a>
            <a href="reservation.php" class="inline-block px-6 py-2 bg-purple-500 text-white rounded-full font-semibold hover:bg-purple-600 transition">📅 Reserve Table</a>
            <a href="logout.php" class="inline-block px-6 py-2 bg-red-500 text-white rounded-full font-semibold hover:bg-red-600 transition">🚪 Logout</a>
        </div>
    </div>

</body>
</html>
