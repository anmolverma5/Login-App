<html>

<?php
include('./lib/config.php');
include('./lib/header.php') ?>

<body>
    <!–– Connection to navbar -->
        <?php require './lib/nav.php' ?>
        <!–– Login System-->
            <h2 style="text-align:center;"><b>Login</h2>

            <form action="welcome.php" method="post" name="loginform" onsubmit="return validateForm()">
                <div class="container">
                    <label for="uname"><b>Username or Email ID</b></label>
                    <input type="text" placeholder="Enter Username or Email ID" name="emailid">

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password">

                    <button type="submit" class="BTN">Login</button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>


</body>
<?php include('./lib/footer.php') ?>

</html>