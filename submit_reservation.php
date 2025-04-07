<?php
// Check if the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Sanitize and validate input
    $name     = trim(htmlspecialchars($_POST["name"]));
    $email    = trim(htmlspecialchars($_POST["email"]));
    $phone    = trim(htmlspecialchars($_POST["phone"]));
    $date     = htmlspecialchars($_POST["date"]);
    $time     = htmlspecialchars($_POST["time"]);
    $guests   = (int) $_POST["guests"];
    $table    = htmlspecialchars($_POST["table"]);
    $timestamp = date("Y-m-d H:i:s");

    // Validate required fields (optional: add email/phone format checks)
    if (empty($name) || empty($email) || empty($phone) || empty($date) || empty($time) || empty($table) || $guests < 1) {
        header("Location: reservation.php?error=1");
        exit();
    }

    // Format the entry
    $entry = "[$timestamp] Name: $name | Email: $email | Phone: $phone | Date: $date | Time: $time | Guests: $guests | Table: $table\n";

    // File to store reservations
    $file = 'reservations.txt';

    // Write to file
    if (file_put_contents($file, $entry, FILE_APPEND | LOCK_EX)) {
        header("Location: reservation.php?success=1");
        exit();
    } else {
        header("Location: reservation.php?error=1");
        exit();
    }
}

// If not accessed via POST, redirect to form
header("Location: reservation.php");
exit();
?>
