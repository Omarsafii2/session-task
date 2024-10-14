<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $address = $_SESSION['address'];
    $phone = $_SESSION['phone'];


    echo "<h2>Form Submitted Successfully!</h2>";
    echo "<p>Thank you, $name. Your information has been saved.</p>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Final Step: Review Information</title>
</head>
<body>
    <h2>Final Step: Review Your Information</h2>
    <form action="" method="POST">
        <p>Name: <?php echo $_SESSION['name']; ?></p>
        <p>Email: <?php echo $_SESSION['email']; ?></p>
        <p>Address: <?php echo $_SESSION['address']; ?></p>
        <p>Phone: <?php echo $_SESSION['phone']; ?></p>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
