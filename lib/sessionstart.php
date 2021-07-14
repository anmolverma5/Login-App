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
            $_SESSION['emailid'] = $emailid;
            $_SESSION['id'] = $id;
            echo "<h2> Welcome $emailid</h2>";
            header("Location: ../welcome.php");
        } else {
            echo "<script>alert('Invalid Email or Password')</script>";
            echo "<script>location.href='../login.php'</script>";
        }
    } else {
        echo "<script>alert('Invalid Email or Password')</script>";
        echo "<script>location.href='../login.php'</script>";
    }
}
