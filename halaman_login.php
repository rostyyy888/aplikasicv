<?php
// login.php
session_start();
include_once 'includes/db.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $domain = substr(strrchr($email, "@"), 1); // Ambil domain email

    if ($password === $domain) {
        $_SESSION['email'] = $email;
        header('Location: form.php');
        exit();
    } else {
        $error = "Password tidak sesuai dengan domain email.";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST">
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit" name="login">Login</button>
    </form>
    <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
</body>
</html>
