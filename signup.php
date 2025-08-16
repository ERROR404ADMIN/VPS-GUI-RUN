<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $package = $_POST['package'];
    $message = "สมัครสมาชิกเรียบร้อย: $name, $email, แพ็กเกจ: $package";
    echo "<script>alert('$message'); window.location.href='index.html';</script>";
}
$package = $_GET['package'] ?? 'small';
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>สมัคร VPS</title>
</head>
<body>
    <h1>สมัคร VPS แพ็กเกจ <?php echo ucfirst($package); ?></h1>
    <form method="post">
        ชื่อ: <input type="text" name="name" required><br>
        อีเมล: <input type="email" name="email" required><br>
        แพ็กเกจ: <input type="text" name="package" value="<?php echo $package; ?>" readonly><br>
        <button type="submit">สมัคร</button>
    </form>
</body>
</html>