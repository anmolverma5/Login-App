<html>
<?php
include('./lib/config.php');
include('./lib/header.php') ?>

<body class="flex">
    <!–– Connection to navbar -->
        <?php require './lib/nav.php' ?>
        <!–– Using javascript validation -->
            <!--<script defer src="./assets/js/signup.js"> </script>-->
            <!–– Sign UP -->
                <div class="container">
                    <form action="./lib/database.php" id="form" class="form" name="form" method="post">
                        <div class="header">
                            <h2 style="color:#9b59b6"><b> SignUp </h2>
                        </div>
                        <div class="form-control">
                            <label for="username">First Name</label>
                            <input type="text" id="fname" name="fname" placeholder="First Name" maxlength="20">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <label for="username">Last Name</label>
                            <input type="text" id="lname" name="lname" placeholder="Last Name">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <label for="username">Email</label>
                            <input type="text" id="emailid" name="emailid" placeholder="Enter Email Address" size="18" maxlength=50>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <button type="button" id="validation" name="validation" onclick="return emailchk()" required>Email verify</button>
                        </div>
                        <div class="form-control">
                            <label for="username">Password</label>
                            <input type="password" id="password" name="password" placeholder="Enter Password">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <label for="username">Confirm Password</label>
                            <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <label for="username">Date of Birth</label>
                            <input type="date" id="DOB" name="DOB" value="" min="1901-01-01" max="2021-12-31">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <label for="username">Gender</label><br>
                            <input id="male" name="gender" type="radio" value="Male" class="male" required>
                            <label>Male</label><br>
                            <label>Female</label>
                            <input id="female" name="gender" type="radio" value="Female" class="female">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div>
                            <input type="submit" name="submit" id="submit" style="display:none;">
                            <button type="button" name="submit" value="submit" onclick="return subchk()">Submit</button>
                        </div>
                </div>
                <!-- Connection of Sign Up javascript Validation-->
                <script type="text/javascript" src="./assets/js/signup.js"></script>
</body>
<?php include('./lib/footer.php') ?>


</html>