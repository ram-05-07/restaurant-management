<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION["admin"])) {
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - ABC Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('./images/admin.jpg'); /* optional background */
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="min-h-screen bg-black bg-opacity-60 flex items-center justify-center">

    <div class="bg-white bg-opacity-95 p-10 rounded-xl shadow-xl max-w-4xl w-full">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">📊 Admin Dashboard</h1>

        <div class="text-center text-gray-700 mb-4">
            <p>Welcome, <strong><?php echo $_SESSION["admin"]; ?></strong>! You are logged in as admin.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
            <a href="view_orders.php" class="bg-indigo-600 text-white text-center py-4 rounded-lg font-bold hover:bg-indigo-700 transition">📦 View Orders</a>
            <a href="view_reservations.php" class="bg-green-600 text-white text-center py-4 rounded-lg font-bold hover:bg-green-700 transition">📅 View Reservations</a>
            <a href="view_contacts.php" class="bg-yellow-500 text-white text-center py-4 rounded-lg font-bold hover:bg-yellow-600 transition">📨 View Contact Messages</a>
            <a href="menu_admin.php" class="bg-purple-600 text-white text-center py-4 rounded-lg font-bold hover:bg-purple-700 transition">🍽️ Manage Menu</a>
        </div>

        <div class="mt-8 text-center">
            <a href="logout.php" class="text-red-600 font-semibold hover:underline">🔓 Logout</a>
        </div>
    </div>

</body>
</html>
