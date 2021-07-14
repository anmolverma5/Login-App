<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'index');
$id = $_SESSION['id'];
$emailid = $_SESSION['emailid'];
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpname = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = "profile" . $id . "." . $fileActualExt;
                $fileDestination = './assets/images/upload/' . $fileNameNew;
                move_uploaded_file($fileTmpname, $fileDestination);
                $sql = "UPDATE  profileimage SET status =0 WHERE emailid='$id';";
                $result = mysqli_query($conn, $sql);
                var_dump($result);
                var_dump($sql);
                var_dump($fileSize);
                var_dump($fileError);
                var_dump($fileDestination);
                var_dump($fileTmpname);
                header("Location: profile.php?success");
            } else {
                echo "Your file is too big!";
            }
        } else {
            echo "there was an error uploading your file!";
        }
    } else {
        echo "you cannot upload files of this type!";
    }
}
