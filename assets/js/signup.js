
const form = document.getElementById('form');
const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const username = document.getElementById('username');
const emailid = document.getElementById('emailid');
const password = document.getElementById('password');
const cpassword = document.getElementById('cpassword');

form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});
function checkInputs() {
	// trim to remove the whitespaces
   const fnameValue = fname.value.trim();
   const lnameValue = fname.value.trim();
	const usernameValue = username.value.trim();
	const emailidValue = emailid.value.trim();
	const passwordValue = password.value.trim();
	const cpasswordValue = cpassword.value.trim();
	console.log("checkInputs");

   if(fnameValue === '') {
		setErrorFor(fname, 'First Name cannot be blank');
	} else {
		setSuccessFor(fname);
	}
   if(lnameValue === '') {
		setErrorFor(lname, 'Username cannot be blank');
	} else {
		setSuccessFor(lname);
	}
	if(usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank');
	} else {
		setSuccessFor(username);
	}
	
	if(emailidValue === '') {
		setErrorFor(emailid, 'Email cannot be blank');
	} else if (!isEmail(emailidValue)) {
		setErrorFor(emailid, 'Not a valid email');
	} else {
		setSuccessFor(emailid);
	}
	
	if(passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
	} else {
		setSuccessFor(password);
	}
	
	if(cpasswordValue === '') {
		setErrorFor(cpassword, 'Confirm Password cannot be blank');
	} else if(cpasswordValue !== cpasswordValue) {
		setErrorFor(cpassword, 'Confirm Passwords does not match');
	} else{
		setSuccessFor(cpassword);
	}
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
}
	
function isEmail(emailid) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}


