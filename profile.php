<html>
<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    $_SESSION['id'];
    $_SESSION['emailid'];
    header("location : login.php");
    exit;
}
?>
<?php
include('./lib/config.php');
include('./lib/header.php') ?>
<!–– Connection to navbar -->
    <?php require './lib/loginnav.php' ?>
    <?php include('./lib/database.php') ?>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'index');
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $sqlImg = "SELECT * FROM profileimage WHERE emailid='$id'";
            $resultImg = mysqli_query($conn, $sqlImg);
            while ($rowImg = mysqli_fetch_assoc($resultImg)) {
                if ($rowImg['status'] == 0) {
                    echo "<img src='./assets/images/upload/profile" . $id . ".jpg'" . mt_rand() . ">";
                } else {
                    echo "<img src='./assets/images/upload/profiledefault.jpg'>";
                }
                echo $row['first'];
            }
        }
    } else {
        echo "there are no users yet!";
    }
    //var_dump($sql)
    ?>

    <body>
        <h1 style="color:#9b59b6;">Welcome - <?php echo $_SESSION['emailid'] ?></h1>
        <form action="./upload.php" method="post" enctype="multipart/form-data">
            <div style="color:#9b59b6;">
                <input type="file" name="file">
                <button type="submit" name="submit">UPLOAD </button>
            </div>
        </form>
    </body>
    <?php include('./lib/footer.php') ?>

</html>