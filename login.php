<?php
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    
    $file = fopen("users.txt", "r");
    $found = false;

    if ($file) {
        while (($line = fgets($file)) !== false) {
            list($savedUser, $savedPass, $savedAddress) = explode("|", trim($line));
            if ($username === $savedUser && $password === $savedPass) {
                $found = true;
                $_SESSION["username"] = $username;
                header("Location: dashboard.php");
                exit();
            }
        }
        fclose($file);
    }

    if (!$found) {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - ABC Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .animated-bg {
            background: url('./images/bg2.jpg') no-repeat center center fixed;
            background-size: cover;
            position: fixed;
            top: 0; left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
            animation: moveBackground 30s linear infinite;
        }

        @keyframes moveBackground {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen flex items-center justify-center bg-black bg-opacity-40">

    <div class="animated-bg"></div>

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md z-10">
        <h2 class="text-2xl font-bold text-center text-blue-700 mb-6">🔐 Login to ABC Restaurant</h2>

        <?php if ($error): ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-center font-semibold">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <form method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Username</label>
                <input type="text" name="username" required class="w-full px-4 py-2 border rounded">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">Password</label>
                <input type="password" name="password" required class="w-full px-4 py-2 border rounded">
            </div>
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded transition">Login</button>
        </form>

        <div class="text-sm mt-4 text-center">
            <a href="signup.php" class="text-indigo-600 hover:underline">Don't have an account? Sign up</a><br>
            <a href="forgot_password.php" class="text-red-600 hover:underline mt-2 inline-block">Forgot Password?</a>
        </div>
    </div>

</body>
</html>
