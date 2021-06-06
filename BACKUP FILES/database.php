<?php

/*$result = array('isEmailValid' => true);
echo json_encode($result);


die();
*/
if (isset($_POST['submit'])) {

    if (isset($_POST['username']) & !empty($_POST['username'])) {
        setcookie('username', $_POST['username']);
    }
}
// connection to database
$fname = "";
$lname = "";
$username = "";
$emailid = "";
$password = "";
$DOB = "";
$gender = "";
$con = new mysqli('localhost', 'root', '', 'index');
var_dump($con);
if (isset($_POST['submit'])) {
    $ok = true;
    if (!isset($_POST['fname']) || $_POST['fname'] === '') {
        $ok === false;
    } else {
        $fname = $_POST['fname'];
    };
    if (!isset($_POST['lname']) || $_POST['lname'] === '') {
        $ok === false;
    } else {
        $lname = $_POST['lname'];
    };
    if (!isset($_POST['username']) || $_POST['username'] === '') {
        $ok === false;
    } else {
        $username = $_POST['username'];
    };
    if (!isset($_POST['emailid']) || $_POST['emailid'] === '') {
        $ok === false;
    } else {
        $emailid = $_POST['emailid'];
    };
    if (!isset($_POST['password']) || $_POST['password'] === '') {
        $ok === false;
    } else {
        $password = $_POST['password'];
    };
    if (!isset($_POST['DOB']) || $_POST['DOB'] === '') {
        $ok === false;
    } else {
        $DOB = $_POST['DOB'];
    };
    if (!isset($_POST['gender']) || $_POST['gender'] === '') {
        $ok === false;
    } else {
        $gender = $_POST['gender'];
    };
    if ($ok) {
        // data code is here
        $db = new mysqli(
            'localhost',
            'root',
            '',
            'index'
        );

        $sql = sprintf(
            "INSERT INTO users (first, last, username, emailid, password, dob, gender)  VALUES ( 
                           '%s','%s','%s','%s','%s','%s','%s')",
            $db->real_escape_string($fname),
            $db->real_escape_string($lname),
            $db->real_escape_string($username),
            $db->real_escape_string($emailid),
            $db->real_escape_string($password),
            $db->real_escape_string($DOB),
            $db->real_escape_string($gender),
        );
        $db->query($sql);
        echo '<p>Register Completed. Now you are eligible to Login!</p>';
        $db->close();
    }

    if (!filter_var($_GET['emailid'], FILTER_VALIDATE_EMAIL)) {
        echo '1';
        exit();
    }
    $db = new mysqli(
        'localhost',
        'root',
        '',
        'index'
    );
    $echeck = "select emailid from users where emailid=" . $_GET['emailid'];
    var_dump($echeck);
    $echk = mysqli_query($db, $echeck);
    $ecount = mysqli_num_rows($echk);
    if ($ecount != 0) {
        echo '0';
        exit();
    } else {
        echo '2';
    }
}
