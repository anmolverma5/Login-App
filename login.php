<html>

<?php
include('./lib/config.php');
include('./lib/header.php') ?>

<body>
    <!–– Connection to navbar -->
        <?php require './lib/nav.php' ?>
        <!–– Login System-->
            <div class="container">
                <div class="header">
                    <h2><b> Login </h2>
                </div>
                <form action="./lib/sessionstart.php" method="post" id="form" class="form">
                    <div class="form-control">
                        <label for="username">Email</label>
                        <input type="text" id="emailid" name="emailid" placeholder="Enter Email Address Or Username" size="18" maxlength=50>
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error message</small>
                    </div>
                    <div class="form-control">
                        <label for="username">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter Password">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error message</small>
                    </div>
                    <div>
                        <input type="submit" name="submit" id="submit" style="display:none;">
                        <button type="button" name="submit" value="submit" onclick="return subchk()">Submit</button>
                    </div>
                </form>
</body>

<!-- Connection of login javascript Validation-->
<script type="text/javascript" src="./assets/js/login.js"></script>
<?php include('./lib/footer.php') ?>
<?php
if (isset($_GET['Message'])) {
    echo $_GET['Message'];
} ?>

</html>