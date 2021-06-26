<html>
<?php
include('./lib/config.php');
include('./lib/header.php') ?>
<?php
$emailid = $_POST['emailid'];
$password = $_POST['password'];
// database connection
$con = new mysqli('localhost', 'root', '', 'index');
if ($con->connect_error) {
    die("Failed to connect:" . $con->connect_error);
} else {
    $stmt = $con->prepare("SELECT * FROM users WHERE emailid=?");
    $stmt->bind_param("s", $emailid);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if ($data['password'] === $password) {
            session_start();
            $_SESSION['loggedin'] = true;
            echo "<h2> Welcome $emailid</h2>";
        } else {
            echo "<h2> Invalid Email or Password</h2>";
        }
    } else {
        echo "<h2> Invalid Email or Password</h2>";
    }
}
?>

<body>
    <!–– Connection to navbar -->
        <?php require './lib/nav.php' ?>
</body>
<?php include('./lib/footer.php') ?>

</html>