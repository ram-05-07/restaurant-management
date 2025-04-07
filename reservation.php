<?php
// reservation.php - Table Reservation Page
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reserve a Table - Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-yellow-100 via-lime-100 to-green-100 min-h-screen text-gray-800">

    <!-- Hero Section -->
    <section class="relative h-64">
        <img src="./images/resevation.jpg" alt="Reservation Banner" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <h1 class="text-4xl font-bold text-white">Reserve a Table</h1>
        </div>
    </section>

    <!-- Reservation Form -->
    <div class="max-w-3xl mx-auto bg-white bg-opacity-90 p-8 rounded-2xl shadow-lg mt-10 mb-20">
        <h2 class="text-2xl font-bold text-center mb-6">Book your table in seconds</h2>

        <!-- Reservation Submission Alerts -->
        <?php if (isset($_GET['success'])): ?>
            <div class="bg-green-100 text-green-700 p-3 mb-6 rounded text-center font-semibold">
                ✅ Reservation submitted successfully!
            </div>
        <?php elseif (isset($_GET['error'])): ?>
            <div class="bg-red-100 text-red-700 p-3 mb-6 rounded text-center font-semibold">
                ❌ Failed to submit reservation. Please try again.
            </div>
        <?php endif; ?>

        <form action="submit_reservation.php" method="POST" class="space-y-6">
            <div>
                <label class="block font-medium text-gray-700 mb-1">Full Name</label>
                <input type="text" name="name" required class="w-full p-2 border border-gray-300 rounded-md">
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" required class="w-full p-2 border border-gray-300 rounded-md">
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-1">Phone</label>
                <input type="tel" name="phone" required class="w-full p-2 border border-gray-300 rounded-md">
            </div>

            <div class="grid md:grid-cols-2 gap-4">
                <div>
                    <label class="block font-medium text-gray-700 mb-1">Date</label>
                    <input type="date" name="date" required class="w-full p-2 border border-gray-300 rounded-md">
                </div>
                <div>
                    <label class="block font-medium text-gray-700 mb-1">Time</label>
                    <input type="time" name="time" required class="w-full p-2 border border-gray-300 rounded-md">
                </div>
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-1">Number of Guests</label>
                <input type="number" name="guests" min="1" max="20" required class="w-full p-2 border border-gray-300 rounded-md">
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-1">Select Table</label>
                <select name="table" required class="w-full p-2 border border-gray-300 rounded-md">
                    <option value="">-- Select Table --</option>
                    <option value="T1">Table 1 (2-seater)</option>
                    <option value="T2">Table 2 (4-seater)</option>
                    <option value="T3">Table 3 (6-seater)</option>
                    <option value="T4">Window Table</option>
                    <option value="T5">Outdoor Table</option>
                    <option value="T6">VIP Lounge</option>
                </select>
            </div>

            <div class="text-center">
                <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-full hover:bg-green-700 transition">
                    Book Now
                </button>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center p-4">
        <p>&copy; <?php echo date("Y"); ?> Restaurant Management System. All Rights Reserved.</p>
    </footer>

</body>
</html>
            