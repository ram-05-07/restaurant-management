<?php
// menu.php - Restaurant Menu Page
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Restaurant</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Hero Section -->
    <section class="relative h-72">
        <img src="./images/menu.jpg" alt="Menu Banner" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <h1 class="text-4xl font-bold text-white">Our Menu</h1>
        </div>
    </section>

    <!-- Menu Intro -->
    <div class="max-w-6xl mx-auto py-8 text-center">
        <h2 class="text-3xl font-bold mb-4">Delicious Dishes Just For You</h2>
        <p class="text-gray-600 text-lg">Explore our curated selection of flavors, crafted with passion and premium ingredients.</p>
    </div>

    <!-- Menu Grid -->
    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 pb-12">
        <!-- Dish 1 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
            <img src="./images/pasta.jpg" alt="Pasta" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold">Creamy Alfredo Pasta</h3>
                <p class="text-gray-600 mt-2">Rich creamy sauce with garlic, herbs, and parmesan.</p>
                <span class="text-green-600 font-bold block mt-2">$12.99</span>
            </div>
        </div>

        <!-- Dish 2 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
            <img src="./images/pizzza.jpg" alt="Pizza" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold">Margherita Pizza</h3>
                <p class="text-gray-600 mt-2">Classic delight with fresh basil and mozzarella.</p>
                <span class="text-green-600 font-bold block mt-2">$10.99</span>
            </div>
        </div>

        <!-- Dish 3 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
            <img src="./images/burger.jpg" alt="Burger" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold">Gourmet Beef Burger</h3>
                <p class="text-gray-600 mt-2">Juicy patty, cheddar cheese, fresh veggies & sauce.</p>
                <span class="text-green-600 font-bold block mt-2">$9.49</span>
            </div>
        </div>

        <!-- Dish 4 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
            <img src="./images/salad.jpg" alt="Salad" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold">Fresh Garden Salad</h3>
                <p class="text-gray-600 mt-2">Crisp greens with tomatoes, cucumbers, and vinaigrette.</p>
                <span class="text-green-600 font-bold block mt-2">$7.49</span>
            </div>
        </div>

        <!-- Dish 5 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
            <img src="./images/steak.jpg" alt="Steak" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold">Grilled Sirloin Steak</h3>
                <p class="text-gray-600 mt-2">Perfectly grilled with herbs and served with garlic butter.</p>
                <span class="text-green-600 font-bold block mt-2">$18.99</span>
            </div>
        </div>

        <!-- Dish 6 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
            <img src="./images/cake.jpg" alt="Dessert" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold">Chocolate Lava Cake</h3>
                <p class="text-gray-600 mt-2">Warm gooey center served with vanilla ice cream.</p>
                <span class="text-green-600 font-bold block mt-2">$6.99</span>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center p-4">
        <p>&copy; <?php echo date("Y"); ?> Restaurant Management System. All Rights Reserved.</p>
    </footer>

</body>
</html>
