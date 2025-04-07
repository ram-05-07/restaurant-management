<?php
// about.php - Enhanced Professional About Us Page with Background Image
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - ABC Restaurant</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('./images/bg4.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
        .backdrop {
            background-color: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(4px);
        }
    </style>
</head>
<body class="text-gray-800">

    <!-- Header Section -->
    <header class="relative h-80">
        <img src="./images/ban.jpg" alt="Restaurant Banner" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-white text-center">
                <h1 class="text-4xl font-bold">Welcome to ABC Restaurant</h1>
                <p class="text-lg mt-2">Where Taste Meets Perfection</p>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <div class="max-w-5xl mx-auto my-10 p-8 backdrop shadow-lg rounded-lg">
        <h2 class="text-3xl font-bold text-center">Our Story</h2>
        <p class="text-lg mt-4 text-center">
            Founded in 2010, <strong>ABC Restaurant</strong> has been a culinary destination for food lovers.
            We combine traditional flavors with innovative techniques to bring you a dining experience like no other.
        </p>
        <img src="./images/interior.jpg" alt="Restaurant Interior" class="mt-6 rounded-lg shadow-md w-full">
    </div>

    <!-- Mission & Vision Section -->
    <div class="max-w-5xl mx-auto flex flex-wrap gap-6 p-8">
        <div class="w-full md:w-1/2 backdrop p-6 rounded-lg shadow">
            <h3 class="text-xl font-bold">🌟 Our Mission</h3>
            <p class="mt-2">
                To provide a world-class dining experience that excites the senses, using fresh ingredients,
                innovative recipes, and exceptional service.
            </p>
        </div>
        <div class="w-full md:w-1/2 backdrop p-6 rounded-lg shadow">
            <h3 class="text-xl font-bold">🚀 Our Vision</h3>
            <p class="mt-2">
                To be recognized as the leading fine-dining restaurant, bringing people together through the
                love of food and hospitality.
            </p>
        </div>
    </div>

    <!-- Our Team Section -->
    <div class="max-w-5xl mx-auto my-10 p-8 backdrop shadow-lg rounded-lg">
        <h2 class="text-3xl font-bold text-center">Meet Our Team</h2>
        <div class="flex flex-wrap gap-6 justify-center mt-6">
            <div class="w-64 bg-white bg-opacity-90 p-4 rounded-lg shadow-md text-center">
                <img src="./images/chef.jpg" alt="Chef" class="mx-auto rounded-full w-32 h-32 object-cover">
                <h4 class="text-lg font-semibold mt-2">John Doe</h4>
                <p class="text-gray-500">Executive Chef</p>
            </div>
            <div class="w-64 bg-white bg-opacity-90 p-4 rounded-lg shadow-md text-center">
                <img src="./images/manger.jpg" alt="Manager" class="mx-auto rounded-full w-32 h-32 object-cover">
                <h4 class="text-lg font-semibold mt-2">Jane Smith</h4>
                <p class="text-gray-500">General Manager</p>
            </div>
            <div class="w-64 bg-white bg-opacity-90 p-4 rounded-lg shadow-md text-center">
                <img src="./images/pastery.jpg" alt="Pastry Chef" class="mx-auto rounded-full w-32 h-32 object-cover">
                <h4 class="text-lg font-semibold mt-2">Emily Rose</h4>
                <p class="text-gray-500">Pastry Chef</p>
            </div>
        </div>
    </div>

    <!-- Awards & Achievements Section -->
    <div class="max-w-5xl mx-auto my-10 p-8 backdrop shadow-lg rounded-lg">
        <h2 class="text-3xl font-bold text-center">🏆 Awards & Recognition</h2>
        <ul class="list-disc list-inside mt-4">
            <li>Best Fine Dining Restaurant - 2022 (Foodie's Choice Awards)</li>
            <li>Michelin Star - 2021</li>
            <li>Top 10 Restaurants in Chennai - Times Food Guide</li>
        </ul>
    </div>

    <!-- Contact Section -->
    <div class="max-w-5xl mx-auto my-10 p-8 backdrop shadow-lg rounded-lg">
        <h2 class="text-3xl font-bold text-center">📍 Contact Us</h2>
        <p class="text-center mt-2">Have questions? Reach out to us!</p>
        <div class="flex flex-wrap justify-between mt-6 text-center">
            <div class="w-full md:w-1/3">
                <h4 class="font-semibold">📞 Phone</h4>
                <p>+91 8919315672</p>
            </div>
            <div class="w-full md:w-1/3">
                <h4 class="font-semibold">📧 Email</h4>
                <p>abcd123@gourmetdelight.com</p>
            </div>
            <div class="w-full md:w-1/3">
                <h4 class="font-semibold">📍 Location</h4>
                <p>Anna Nagar, Thrivallur, Chennai</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white text-center p-4">
        <p>&copy; <?php echo date("Y"); ?> ABC Restaurant. All Rights Reserved.</p>
    </footer>

</body>
</html>
