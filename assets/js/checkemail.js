
$(document).ready(function(){
$("#emailid").blur(function(){
  const emailid = $(this).val();
  $.ajax({
    url:"./lib/checkemail.php",
    method: "POST",
    data: {email_id:emailid},
    datatype: "text",
    success:function(html)
    {
        $('#availablitiy').html(html);
        return false;
    }        
  });
});
});
/*$a = 'email is fine';
$b = 'Email already exists';
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
                //setErrorFor(emailid, 'email is fine');
                setSuccessFor( $a);
                return false
            } else {    
                setErrorFor($b);
                // setSuccessFor(emailid, 'email is');
                return true
            }
        }
    }
    xmlhttp.open("GET", "./lib/checkemail.php?emailid=" + emailid, true);
    xmlhttp.send();
}
function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-control error';
    small.innerText = message;
}

function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}*/
/*function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
	
}*/
/*function emailchk() {

    var emailid = document.getElementById('emailid').value.trim();
    if (emailid.length == 0)
        return;

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            const response = JSON.parse(xmlhttp.responseText);
            console.log(response);
            if (response.isEmailValid) {
                alert($b);
                return false
            } else {
                alert($a);
                return false
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
        return true
    }
    

    xmlhttp.open("GET", "./lib/checkemail.php?emailid=" + emailid, true);
    xmlhttp.send();
}*/

