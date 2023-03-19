const form=document.getElementById('signupForm');
const name1=document.getElementById('name');
const email=document.getElementById('email');
const nic=document.getElementById('nic');
const mobile=document.getElementById('mobile');
const city=document.getElementById('city');
const address=document.getElementById('address');
const password=document.getElementById('password');
const cPassword=document.getElementById('cPassword');

var valid=true;



form.addEventListener("submit",  (e) => {
    valid=true;
    e.preventDefault();
    inputChecker();
    if(valid===true) {
        form.submit();
    }
})


async function inputChecker() {
    //values from the inputs
    const nameVal = name1.value.trim();
    const nicVal = nic.value.trim();
    const emailVal = email.value.trim();
    const mobileVal = mobile.value.trim();
    const passwordVal = password.value.trim();
    const cPasswordVal = cPassword.value.trim();

    if (nameVal === "") {
        //error message
        displayError(name1, "First name can't be empty");
        
    } else {
        //display success tick
        displaySuccess(name1);
    }
     
    if (nicVal.length !== 10 && nicVal.length !== 12) {
        displayError(nic, "Enter a valid nic");
    } else {
        displaySuccess(nic);
    }
    if (emailVal === "") {
        displayError(email, "Email can't be empty");
    } else if (!checkEmail(emailVal)) {
        displayError(email, "Enter a valid email");
    }
    else {
        displaySuccess(email);
    }
    if (mobileVal.length !== 10) {
        displayError(mobile, "Enter a valid mobile number");
    } else {
        displaySuccess(mobile);
    }
    if (passwordVal.length < 8) {
        displayError(password, "Password must have at least 8 characters");
    } else if (!(/[a-zA-Z]/.test(passwordVal))) {
        displayError(password, "Password must contain at least one letter")
    } else if (!(/[0-9]/.test(passwordVal))) {
        displayError(password, "Password must contain at least one number");
    } else {
        displaySuccess(password);
    }
    if (passwordVal !== cPasswordVal) {
        displayError(cPassword, "Passwords do not match");
    }else if(cPasswordVal ===""){
        displayError(cPassword, "Password can't be empty");
    }
    else {
        displaySuccess(cPassword);
    }
    
}
function displayError(input, message) {
    const f = input.parentElement;
    const small = f.querySelector('small');
    
        f.className = "f error";    
    
    //add error message
    small.innerText = message;
    //add error class
    valid=false;
}
function displaySuccess(input) {
    const f = input.parentElement;
   
         f.className = "f success";
    
   
}
function checkEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}