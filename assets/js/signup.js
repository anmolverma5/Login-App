const form = document.getElementById('form');
const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const emailid = document.getElementById('emailid');
const password = document.getElementById('password');
const cpassword = document.getElementById('cpassword');
const dob = document.getElementById('DOB');
const submitBtn = document.getElementById('submit');
function subchk() {
 if(checkInputs()){
	submitBtn.click()
 }
}
function subchk() {
	// trim to remove the whitespaces
   const fnameValue = fname.value.trim();
   const lnameValue = lname.value.trim();
	const emailidValue = emailid.value.trim();
	const passwordValue = password.value.trim();
	const cpasswordValue = cpassword.value.trim();
	const dobValue = dob.value.trim();
	if(fnameValue === '') {
		setErrorFor(fname, 'First Name cannot be blank');
		return false;
	} else if (fnameValue.length < 3){
		setErrorFor(fname, 'First Name must be atleast 3 charactrs long, Please Try Again');
		return false;
	}else {
		setSuccessFor(fname);
	}
	if(lnameValue === '') {
		setErrorFor(lname, 'Last Name cannot be blank');
		return false;
	}else if (lnameValue.length < 3){
		setErrorFor(lname, 'Last Name must be atleast 3 charactrs long, Please Try Again');
		return false;
	} else {
		setSuccessFor(lname);
	}
	if(emailidValue === '') {
		setErrorFor(emailid, 'Email cannot be blank');
		return false;
	} else if (!isEmail(emailidValue)) {
		setErrorFor(emailid, 'Not a valid email');
		return false;
	} /*else if (emailidValue ) {
        setErrorFor(emailid, 'First you should check email is fine or not');
		return false;
	}*/  else {
		setSuccessFor(emailid);
	}
	if(passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
		return false;
	} else {
		setSuccessFor(password);
	}
	if(cpasswordValue === '') {
		setErrorFor(cpassword, 'Confirm Password cannot be blank');
		return false;
	} else if(passwordValue !== cpasswordValue) {
		setErrorFor(cpassword, 'Comfirm Password does not match');
		return false;
	} else{
		setSuccessFor(cpassword);
	}
	if(dobValue === '') {
		setErrorFor(dob, 'Date of Birth cannot be blank');
		return false;
	} else {
		setSuccessFor(dob);
	}
	return true;
}
//console.log(checkInputs())
function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
	
}
/*function isdob(dob) {
	return /^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;test(dob);
}	*/
function isEmail(emailid) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(emailid);
}

