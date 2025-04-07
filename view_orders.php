<?php
$orders = file_exists("orders.txt") ? file("orders.txt") : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - View Orders</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('./images/bg2.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-gray-100 p-6">

    <div class="max-w-5xl mx-auto">
        <h1 class="text-3xl font-bold text-center text-blue-800 mb-8">Order Notifications</h1>

        <?php if (!empty($orders)): ?>
            <div class="space-y-4">
                <?php foreach (array_reverse($orders) as $order): ?>
                    <div class="bg-white border-l-4 border-blue-500 shadow-md rounded p-4">
                        <p class="text-sm text-gray-700"><?php echo nl2br(htmlspecialchars($order)); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="text-center text-gray-600">No orders yet.</p>
        <?php endif; ?>
    </div>

</body>
</html>
