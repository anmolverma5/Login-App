const form = document.getElementById('form');
const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const emailid = document.getElementById('emailid');
const password = document.getElementById('password');
const cpassword = document.getElementById('cpassword');

form.addEventListener('submit', (e) =>{
     e.preventDefault();

     checkInputs();
});
function  checkInputs(){
    const fnameValue = fname.value.trim();
    const lnameValue = lname.value.trim();
    const emailidValue = emailid.value.trim();
    const passwordValue = password.value.trim();
    const cpasswordValue = cpassword.value.trim();
    if(fnameValue === ''){
       setErrorFor(fname, 'First name cannot be blank')
    }else{
       setSuccessFor(fname);
    }
}