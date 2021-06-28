<?php

/*$result = array('isEmailValid' => true);
echo json_encode($result);
die();*/

if (isset($_POST['submit'])) {

    if (isset($_POST['fname']) & empty($_POST['fname'])) {
        setcookie('fname', $_POST['fname']);
    }
}

// connection to database
// printf("hello world");
/*$fname = "";
$lname = "";
$emailid = "";
$password = "";
$DOB = "";
$gender = "";*/
//printf('hello world');
/*$con = new mysqli(
    'localhost',
    'root',
    '',
    'index'
);*/
//var_dump($con);
/*if (isset($_POST['submit'])) {
    $ok = true;
    if (isset($_POST['fname'])) {
        $ok === false;
    } else {
        $fname = $_POST['fname'];
    };
    if (isset($_POST['lname'])) {
        $ok === false;
    } else {
        $lname = $_POST['lname'];
    };
    if (isset($_POST['emailid'])) {
        $ok === false;
    } else {
        $emailid = $_POST['emailid'];
    };
    if (isset($_POST['password'])) {
        $ok === false;
    } else {
        $password = $_POST['password'];
    };
    if (isset($_POST['DOB'])) {
        $ok === false;
    } else {
        $DOB = $_POST['DOB'];
    };
    if (isset($_POST['gender'])) {
        $ok === false;
    } else {
        $gender = $_POST['gender'];
    };
    printf('hello world');
    if ($ok) {
        // data code is here
        $db = new mysqli(
            'localhost',
            'root',
            '',
            'index'
        );
        $sql = sprintf(
            "INSERT INTO users (first, last, emailid, password, dob, gender)  VALUES ( 
                           '%s','%s','%s','%s','%s','%s')",
            $db->real_escape_string($fname),
            $db->real_escape_string($lname),
            $db->real_escape_string($emailid),
            $db->real_escape_string($password),
            $db->real_escape_string($DOB),
            $db->real_escape_string($gender),
        );
        var_dump($sql);
        $db->query($sql);
        echo '<p>Register Completed. Now you are eligible to Login</p>';
        $db->close();
    }
}*/
/*$db = new mysqli('localhost', 'root', '', 'index');
$servername = "localhost";
$username = "root";
$password = "";
$database = "index";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    //     echo "success";
    // }
    // else{
    die("Error" . mysqli_connect_error());
}

//var_dump($conn);
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $emailid = $_POST['emailid'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $DOB = $_POST['DOB'];
    $gender = $_POST['gender'];
    $exists = false;
    var_dump($exists);
    if (isset($_POST['submit'])) {
        $sql = "INSERT INTO `users` ( `first` , `last` , `emailid` , `password` , `dob` , `gender`) VALUES ('$fname','$lname','$emailid','$password','$DOB', '$gender',)";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $exists = true;
            var_dump($sql);
            echo "Registered successfull";
        } else {
            echo "Registered";
        }
    }
}*/
if (isset($_POST['submit'])) {

    if (isset($_POST['fname']) & !empty($_POST['fname'])) {
        setcookie('fname', $_POST['fname']);
    }
}
// connection to database
$fname = "";
$lname = "";
$emailid = "";
$password = "";
$DOB = "";
$gender = "";
$con = new mysqli('localhost', 'root', '', 'index');
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
            "INSERT INTO users (first, last, emailid, password, dob, gender)  VALUES ( 
                           '%s','%s','%s','%s','%s','%s')",
            $db->real_escape_string($fname),
            $db->real_escape_string($lname),
            $db->real_escape_string($emailid),
            $db->real_escape_string($password),
            $db->real_escape_string($DOB),
            $db->real_escape_string($gender),
        );
        //$a = include('child.php');
        // $b = "http://localhost/anmol/login-app/login.php";
        // $c = $a . $b;
        var_dump($sql);
        $db->query($sql);
        $Message = urlencode('<p><h1 style="color:#9b59b6";;>You Signed Up Succesfully Now You Can Login With Your Registered ID</h1></p>');
        header("Location: http://localhost/anmol/login-app/login.php?Message=" . $Message);
        $db->close();
    }
}
