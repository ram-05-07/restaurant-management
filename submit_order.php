<?php
// submit_order.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $quantity = intval($_POST['quantity']);
    $address = htmlspecialchars($_POST['address']);
    $dishes = $_POST['dish'] ?? [];

    $prices = [
        'pasta' => 12.99,
        'pizza' => 10.99,
        'burger' => 9.49,
        'salad' => 7.99,
        'steak' => 17.99,
        'dessert' => 5.99
    ];

    $ordered_items = [];
    $total_price = 0;

    foreach ($dishes as $dish_key) {
        if (isset($prices[$dish_key])) {
            $ordered_items[] = $dish_key;
            $total_price += $prices[$dish_key] * $quantity;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Confirmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-br from-lime-100 via-yellow-100 to-green-100 flex items-center justify-center p-4">

    <div class="bg-white bg-opacity-90 rounded-2xl shadow-2xl p-8 max-w-2xl w-full space-y-6">
        <h1 class="text-4xl font-extrabold text-green-700 text-center">🎉 Order Confirmed!</h1>

        <?php if (!empty($ordered_items)): ?>
            <p class="text-lg text-center text-gray-700">Hi <span class="font-bold text-green-800"><?php echo $name; ?></span>, thank you for your order!</p>

            <div class="bg-green-50 p-4 rounded-xl">
                <h2 class="text-xl font-semibold text-green-800 mb-2">Delivery Address</h2>
                <p class="text-gray-700"><?php echo nl2br($address); ?></p>
            </div>

            <div class="bg-yellow-50 p-4 rounded-xl">
                <h2 class="text-xl font-semibold text-yellow-700 mb-2">Ordered Items</h2>
                <ul class="list-disc list-inside space-y-1 text-gray-800">
                    <?php foreach ($ordered_items as $item): ?>
                        <li>
                            <span class="font-medium"><?php echo ucfirst($item); ?></span> × <?php echo $quantity; ?>
                            <span class="text-green-600 font-semibold"> - $<?php echo number_format($prices[$item] * $quantity, 2); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="text-center text-2xl font-bold text-green-700">
                Total: $<?php echo number_format($total_price, 2); ?>
            </div>
        <?php else: ?>
            <p class="text-red-600 text-center">⚠️ No dishes selected. Please go back and choose at least one dish.</p>
        <?php endif; ?>

        <div class="text-center pt-4">
            <a href="order.php" class="inline-block bg-green-600 text-white px-6 py-2 rounded-full font-medium shadow hover:bg-green-700 transition">🍽️ Place Another Order</a>
        </div>
    </div>

</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $dishes = $_POST["dish"] ?? [];
    $quantity = intval($_POST["quantity"]);
    $address = htmlspecialchars($_POST["address"]);
    $time = date("Y-m-d H:i:s");

    $dishNames = [
        'pasta' => 'Creamy Alfredo Pasta',
        'pizza' => 'Margherita Pizza',
        'burger' => 'Gourmet Beef Burger',
        'salad' => 'Fresh Garden Salad',
        'steak' => 'Grilled Sirloin Steak',
        'dessert' => 'Chocolate Lava Cake'
    ];

    $dishList = [];
    foreach ($dishes as $dish) {
        $dishLabel = $dishNames[$dish] ?? $dish;
        $dishList[] = $quantity . 'x ' . $dishLabel;
    }

    $orderText = "$name ordered: " . implode(", ", $dishList) . " at $time\n";
    file_put_contents("orders.txt", $orderText, FILE_APPEND | LOCK_EX);

    // Redirect to thank you or confirmation page
    header("Location: order_success.php");
    exit();
}
?>
