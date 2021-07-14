<?php
/*$conn = mysqli_connect('localhost', 'root', '', 'index');
$emailid = $_POST['emailid'];
$first = $_POST['fname'];
//$first = isset($_POST['fname']) ? $_POST['fname'] : '';
//$emailid = isset($_POST['emailid']) ? $_POST['emailid'] : '';
$sql = "SELECT * FROM users WHERE emailid='$emailid' AND first='$first'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $sql = "INSERT INTO profileimage (emailid, status) VALUES ('$emailid', 1)";
        mysqli_query($conn, $sql);
        header("Location: profile.php");
    }
} else {
    echo '<p style="color:red">You have an error!</p>';
}
var_dump($sql);
