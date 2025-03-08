<?php
// cv.php
session_start();

if (!isset($_SESSION['email']) || !isset($_SESSION['cv'])) {
    header('Location: login.php');
    exit();
}

$cv = $_SESSION['cv'];
$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>CV Anda</title>
</head>
<body>
    <h2>CV Anda</h2>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
    <p><strong>Nama:</strong> <?php echo htmlspecialchars($cv['name']); ?></p>
    <p><strong>Tempat, Tanggal Lahir:</strong> <?php echo htmlspecialchars($cv['birthplace']); ?>, <?php echo htmlspecialchars($cv['dob']); ?></p>
    <p><strong>Riwayat Pendidikan:</strong> <?php echo nl2br(htmlspecialchars($cv['education'])); ?></p>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>
