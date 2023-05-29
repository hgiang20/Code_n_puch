<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $password = isset($_POST['password']) ? $_POST['password'] : "";
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Redirect the user to a different page after the form submission
    header("Location: welcome.php");
    exit();
}
?>
