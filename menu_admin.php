<?php
session_start();

// Protect page - only for logged-in admins
// Uncomment below if admin login session is needed
// if (!isset($_SESSION['admin'])) {
//     header("Location: admin_login.php");
//     exit();
// }

$menu_file = "menu.txt";

// Add new item
if (isset($_POST['add'])) {
    $name = trim($_POST['name']);
    $price = trim($_POST['price']);
    $category = trim($_POST['category']);

    if ($name && $price && $category) {
        $entry = "$name|$price|$category\n";
        file_put_contents($menu_file, $entry, FILE_APPEND);
        header("Location: menu_admin.php");
        exit();
    }
}

// Delete item
if (isset($_GET['delete'])) {
    $index = (int)$_GET['delete'];
    $lines = file($menu_file);
    if (isset($lines[$index])) {
        unset($lines[$index]);
        file_put_contents($menu_file, implode("", $lines));
    }
    header("Location: menu_admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Menu Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">

<div class="max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold text-center text-purple-700 mb-8">🍽️ Menu Management - Admin Panel</h1>

    <!-- Add Menu Form -->
    <div class="bg-white p-6 rounded-lg shadow-md mb-8">
        <h2 class="text-xl font-semibold mb-4 text-green-600">Add New Dish</h2>
        <form method="POST" class="space-y-4">
            <input type="text" name="name" placeholder="Dish Name" required class="w-full p-3 border border-gray-300 rounded">
            <input type="text" name="price" placeholder="Price (e.g., 10.99)" required class="w-full p-3 border border-gray-300 rounded">
            <input type="text" name="category" placeholder="Category (e.g., Starter, Main, Dessert)" required class="w-full p-3 border border-gray-300 rounded">
            <button type="submit" name="add" class="bg-purple-600 hover:bg-purple-700 text-white py-2 px-6 rounded shadow">Add Dish</button>
        </form>
    </div>

    <!-- Menu List -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4 text-blue-600">Current Menu</h2>
        <?php
        if (file_exists($menu_file) && filesize($menu_file) > 0):
            $menu_items = file($menu_file);
        ?>
            <table class="w-full table-auto border-collapse">
                <thead>
                    <tr class="bg-gray-200 text-left">
                        <th class="p-2">#</th>
                        <th class="p-2">Dish Name</th>
                        <th class="p-2">Price</th>
                        <th class="p-2">Category</th>
                        <th class="p-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($menu_items as $index => $line): 
                    list($name, $price, $category) = explode("|", trim($line)); ?>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-2"><?php echo $index + 1; ?></td>
                        <td class="p-2"><?php echo htmlspecialchars($name); ?></td>
                        <td class="p-2"><?php echo htmlspecialchars($price); ?></td>
                        <td class="p-2"><?php echo htmlspecialchars($category); ?></td>
                        <td class="p-2">
                            <a href="?delete=<?php echo $index; ?>" onclick="return confirm('Are you sure you want to delete this dish?')" class="text-red-600 font-semibold hover:underline">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="text-gray-600">Menu is currently empty.</p>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
