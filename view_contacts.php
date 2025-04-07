<?php
$contacts = file("contacts.txt", FILE_IGNORE_NEW_LINES);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Contact Messages</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('./images/bg2.jpg');
            background-size: cover;
            background-position: center;
        }
    </style></head>
<body class="bg-gray-100 p-6">
    <h1 class="text-2xl font-bold text-center text-blue-700 mb-4">Contact Messages</h1>
    <div class="max-w-3xl mx-auto bg-white p-6 rounded-xl shadow space-y-2">
        <?php
        if (!empty($contacts)) {
            foreach (array_reverse($contacts) as $line) {
                echo "<p class='border-b pb-2 mb-2'>$line</p>";
            }
        } else {
            echo "<p>No contact messages yet.</p>";
        }
        ?>
    </div>
</body>
</html>
