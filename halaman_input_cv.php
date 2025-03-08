<?php
// form.php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $birthplace = $_POST['birthplace'];
    $dob = $_POST['dob'];
    $education = $_POST['education'];
    $_SESSION['cv'] = compact('name', 'birthplace', 'dob', 'education');
    header('Location: cv.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Input CV</title>
</head>
<body>
    <h2>Form Input CV</h2>
    <form method="POST">
        <label>Nama:</label>
        <input type="text" name="name" required>
        <br>
        <label>Tempat, Tanggal Lahir:</label>
        <input type="text" name="birthplace" required>
        <br>
        <label>Tanggal Lahir:</label>
        <input type="date" name="dob" required>
        <br>
        <label>Riwayat Pendidikan:</label>
        <textarea name="education" required></textarea>
        <br>
        <button type="submit" name="submit">Simpan</button>
    </form>
</body>
</html>
