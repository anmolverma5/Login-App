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
