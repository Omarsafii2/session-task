<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['phone'] = $_POST['phone'];
    header("Location: final_step.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Step 2: Additional Information</title>
</head>
<body>
    <h2>Step 2: Additional Information</h2>
    <form action="" method="POST">
        Address: <input type="text" name="address" required><br>
        Phone: <input type="text" name="phone" required><br>
        <button type="submit">Next</button>
    </form>
</body>
</html>
