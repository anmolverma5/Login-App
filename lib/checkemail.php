<?php
include("database.php");
$db = new mysqli(
    'localhost',
    'root',
    '',
    'index'
);

$echeck = "SELECT emailid FROM users WHERE emailid = '" . $_GET['emailid'] . "'";
if (!$echeck) {
    echo 'could not work:';
    exit;
}
$echk = mysqli_query($db, $echeck);
$rows = mysqli_fetch_row($echk);

if ($rows) {
    $arr = array('isEmailValid' => false);
    echo json_encode($arr);
} else {
    $arr = array('isEmailValid' => true);
    echo json_encode($arr);
}
// var_dump($echeck);
/*var_dump($echk);
if ($echk) {
    $rows = mysqli_fetch_row($echk);
    $arr = array('isEmailValid' => false);
    echo json_encode($arr);
} else {
    $arr = array('isEmailValid' => true);
    echo json_encode($arr);
}*/



// $ecount = mysqli_num_rows($rows);
// if ($ecount != 0) {
// echo '0';
// exit();
// } else {
// echo '2';
// }