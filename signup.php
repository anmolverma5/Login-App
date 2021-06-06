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
                <form action="./lib/database.php" id="form" name="myForm" method="post" onsubmit="return validateForm()">
                    <h1><b> Hello Welcome SignUp to Start Your Journey </h1>
                    <b> First Name:<input type="text" id="fname" name="fname" id="input-signup" placeholder="First Name"><br>
                        Last Name:<input type="text" id="lname" name="lname" id="input-signup" placeholder="Last Name"><br><br>
                        User Name:<input type="text" id="username" name="username" id="input-signup" placeholder="User Name"><br>

                        Email Address:<br><input type="text" id="emailid" name="emailid" id="input-signup" placeholder="Enter Email Address" size="18" maxlength=50 required><br>

                        <button type="button" id="validation" name="validation" onclick="emailchk()">verify</button>


                        Password:<input type="password" id="password" name="password" id="input-signup" placeholder="Enter Password"><br>
                        <label for="DOB">Date of Birth:</label>
                        <input type="date" id="input-signup" id="DOB" name="DOB" value="2021-05-22" min="1901-01-01" max="2021-12-31"><br>
                        <input type="radio" name="gender" value="male" checked> Male
                        <input type="radio" name="gender" value="female"> Female
                        <input type="radio" name="gender" value="other"> Other<br>
                        <button type="submit" class="BTN" name="submit">Signup</button>


                        <script>
                            function emailchk() {

                                var emailid = document.getElementById('emailid').value.trim();
                                if (emailid.length == 0)
                                    return;

                                var xmlhttp = new XMLHttpRequest();
                                xmlhttp.onreadystatechange = function() {

                                    if (this.readyState == 4 && this.status == 200) {

                                        const response = JSON.parse(xmlhttp.responseText);
                                        console.log(response);
                                        if (response.isEmailValid) {
                                            alert('email is fine')
                                        } else {
                                            alert('Email already exists')
                                        }

                                        // if (xmlhttp.responseText === true) {
                                        //     document.getElementById('emailid').value = '';
                                        //     alert('Email already exists');
                                        // } else if (xmlhttp.responseText === false) {
                                        //     document.getElementById('emailid').value = '';
                                        //     alert('Invalid Email');
                                        //     console.log("valid");
                                        // } else {
                                        //     console.log("tatti kha");
                                        // }


                                        //   var jsonResponse = JSON.parse(xmlhttp.responseText);
                                        // console.log(jsonResponse)
                                        //console.log(this.readyState)
                                    }

                                }

                                xmlhttp.open("GET", "./lib/checkemail.php?emailid=" + emailid, true);
                                xmlhttp.send();
                            }
                        </script>

</body>
<?php include('./lib/footer.php') ?>


</html>