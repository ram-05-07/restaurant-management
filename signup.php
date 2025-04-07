<?php
// order.php - Place an Order Page
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Order - Restaurant</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex flex-col min-h-screen text-gray-800" style="background-image: url('./images/bg.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">

    <!-- Hero Section -->
    <section class="relative h-64 sm:h-80">
        <img src="./images/order banner.jpg" alt="Order Banner" class="w-full h-full object-cover rounded-b-xl shadow-lg">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <h1 class="text-4xl sm:text-5xl font-bold text-white drop-shadow-lg">Place an Order</h1>
        </div>
    </section>

    <!-- Intro -->
    <div class="max-w-4xl mx-auto text-center py-10 bg-gradient-to-r from-yellow-100 to-pink-100 rounded-xl shadow-md mt-6 px-4">
        <h2 class="text-3xl font-extrabold mb-3 text-purple-700">Order your favorite dishes with ease 🍽️</h2>
        <p class="text-gray-700 text-lg">Fill in your details and we’ll take care of the rest. Fast delivery and fresh food guaranteed!</p>
    </div>

    <!-- Order Form -->
    <div class="max-w-3xl mx-auto bg-white bg-opacity-95 shadow-2xl rounded-2xl p-8 mt-10 mb-10 border-2 border-purple-300 px-6 sm:px-10">
        <form action="submit_order.php" method="POST" class="space-y-6">

            <!-- Name -->
            <div>
                <label class="block text-purple-800 font-semibold mb-2">Full Name</label>
                <input type="text" name="name" required class="w-full border border-purple-300 focus:ring-2 focus:ring-purple-500 rounded-lg p-3 shadow-sm">
            </div>

            <!-- Dishes -->
            <div>
                <label class="block text-pink-700 font-semibold mb-4">Select Dishes</label>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <?php
                    $dishes = [
                        'pasta' => 'Creamy Alfredo Pasta',
                        'pizza' => 'Margherita Pizza',
                        'burger' => 'Gourmet Beef Burger',
                        'salad' => 'Fresh Garden Salad',
                        'steak' => 'Grilled Sirloin Steak',
                        'dessert' => 'Chocolate Lava Cake'
                    ];
                    foreach ($dishes as $key => $label): ?>
                        <label class="flex items-center space-x-2 bg-pink-50 p-3 rounded-lg shadow-sm hover:bg-pink-100 transition-all duration-200 cursor-pointer">
                            <input type="checkbox" name="dish[]" value="<?php echo $key; ?>" class="accent-pink-500">
                            <span class="text-gray-800"><?php echo $label; ?></span>
                        </label>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Quantity -->
            <div>
                <label class="block text-green-700 font-semibold mb-2">Quantity</label>
                <input type="number" name="quantity" min="1" value="1" required class="w-full border border-green-300 focus:ring-2 focus:ring-green-500 rounded-lg p-3 shadow-sm">
            </div>

            <!-- Address -->
            <div>
                <label class="block text-blue-700 font-semibold mb-2">Delivery Address</label>
                <textarea name="address" rows="3" required class="w-full border border-blue-300 focus:ring-2 focus:ring-blue-500 rounded-lg p-3 shadow-sm resize-none"></textarea>
            </div>

            <!-- Submit -->
            <div class="text-center">
                <button type="submit"
                        class="bg-gradient-to-r from-purple-500 to-pink-500 text-white font-semibold px-8 py-3 rounded-xl shadow-md hover:shadow-lg hover:scale-105 transform transition duration-300 ease-in-out">
                    🛒 Place Order
                </button>
            </div>

        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white text-sm py-4 px-6 mt-auto">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center">
            <p>&copy; <?php echo date("Y"); ?> Your Restaurant. All rights reserved.</p>
            <div class="flex space-x-4 mt-2 sm:mt-0">
                <a href="res.php" class="hover:text-pink-400 transition">Home</a>
                <a href="menu.php" class="hover:text-pink-400 transition">Menu</a>
                <a href="contact.php" class="hover:text-pink-400 transition">Contact</a>
            </div>
        </div>
    </footer>

</body>
</html>  