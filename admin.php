<?php
// Clear notifications if requested
if (isset($_GET['clear']) && ($_GET['clear'] === 'orders' || $_GET['clear'] === 'reservations')) {
    $file = $_GET['clear'] === 'orders' ? "orders.txt" : "reservations.txt";
    file_put_contents($file, "");
    header("Location: admin_dashboard.php");
    exit();
}

$orderNotifications = file_exists("orders.txt") ? file("orders.txt", FILE_IGNORE_NEW_LINES) : [];
$reservationNotifications = file_exists("reservations.txt") ? file("reservations.txt", FILE_IGNORE_NEW_LINES) : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-cover bg-center min-h-screen" style="background-image: url('./images/admin2.jpg');">
    <div class="bg-blue-800 text-white text-center py-5 text-2xl font-bold">Admin Dashboard</div>

    <div class="max-w-4xl mx-auto mt-10 space-y-10">

        <!-- Orders Section -->
        <div class="bg-white shadow-md rounded-lg p-6 border-l-4 border-green-600">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-semibold text-green-700">New Food Orders</h2>
                <a href="?clear=orders" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-sm">Clear</a>
            </div>
            <?php if (!empty($orderNotifications)): ?>
                <ul class="space-y-2">
                    <?php foreach ($orderNotifications as $order): ?>
                        <li class="border-b pb-2 text-gray-800"><?php echo htmlspecialchars($order); ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p class="text-gray-600">No recent food orders.</p>
            <?php endif; ?>
        </div>

        <!-- Reservations Section -->
        <div class="bg-white shadow-md rounded-lg p-6 border-l-4 border-blue-600">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-semibold text-blue-700">New Table Reservations</h2>
                <a href="?clear=reservations" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-sm">Clear</a>
            </div>
            <?php if (!empty($reservationNotifications)): ?>
                <ul class="space-y-2">
                    <?php foreach ($reservationNotifications as $reservation): ?>
                        <li class="border-b pb-2 text-gray-800"><?php echo htmlspecialchars($reservation); ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p class="text-gray-600">No recent reservations.</p>
            <?php endif; ?>
        </div>

    </div>
</body>
</html>  