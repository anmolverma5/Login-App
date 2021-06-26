const form = document.getElementById('form');
const emailid = document.getElementById('emailid');
const password = document.getElementById('password');
const submit = document.getElementById('submit');

function subchk(){
    if(checkInputs()){
        submit.click()
}
}
function checkInputs(){
    const emailidValue = emailid.value.trim();
    const passwordValue = password.value.trim();
    if (emailidValue === ''){
        setErrorFor(emailid, 'Email cannot be Blank');
        return false
    } else if (!isEmail(emailidValue)) {
		setErrorFor(emailid, 'Not a valid email');
		return false;
	}else{
        setSuccessFor(emailid);
    }
    if (passwordValue === ''){
        setErrorFor(password, 'Password cannot be Blank');
        return false
    }else{
        setSuccessFor(password);
    }
    return true
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	small.innerText = message;
    formControl.className = 'form-control error';
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';	
}
function isEmail(emailid) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(emailid);
}