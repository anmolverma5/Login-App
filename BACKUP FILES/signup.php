<html>
<?php
include('./lib/config.php');
include('./lib/header.php') ?>

<body>
    <!–– Connection to navbar -->
        <?php require './lib/nav.php' ?>
        <!–– Using javascript validation -->
            <!--<script defer src="./assets/js/signup.js"> </script>-->
            <!–– Sign UP -->
                <div id="error"></div>
                <div class="container">
                    <form action="./lib/database.php" id="form" class="form" name="myForm" method="post" onsubmit="return validateForm()">
                        <div class="header">
                            <h2><b> Hello Welcome SignUp to Start Your Journey </h2>
                        </div>
                        <div class="form-control success">
                            <b> First Name:<input type="text" id="fname" name="fname" id="input-signup" placeholder="First Name"><br>
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small>
                        </div>
                        <div class="form-control error">
                            Last Name:<input type="text" id="lname" name="lname" id="input-signup" placeholder="Last Name"><br><br>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            Email Address:<br><input type="text" id="emailid" name="emailid" id="input-signup" placeholder="Enter Email Address" size="18" maxlength=50><br>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <button type="button" id="validation" name="validation" onclick="emailchk()">Email verify</button>
                        </div>
                        <div class="form-control">
                            Password:<input type="password" id="password" name="password" id="input-signup" placeholder="Enter Password"><br>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            Confirm Password:<input type="password" id="cpassword" name="cpassword" id="input-signup" placeholder="Confirm Password"><br>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <label for="DOB">Date of Birth:</label>
                            <input type="date" id="input-signup" id="DOB" name="DOB" value="2021-05-22" min="1901-01-01" max="2021-12-31"><br>
                        </div>
                        <div class="form-control">
                            <input type="radio" name="gender" value="male" checked> Male
                            <input type="radio" name="gender" value="female"> Female
                            <input type="radio" name="gender" value="other"> Other<br>
                        </div>
                        <div class="form-control">
                            <button type="submit" class="BTN" id="submit" onclick="myFunction()" name="submit">Signup</button>
                        </div>
                </div>
</body>
<?php include('./lib/footer.php') ?>


</html>