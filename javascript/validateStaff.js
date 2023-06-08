const form = document.getElementById('form');
const fname = document.getElementById('fname');
const mname = document.getElementById('mname');
const lname = document.getElementById('lname');
const age = document.getElementById('age');
const dbrith = document.getElementById('dbrith');
const phone = document.getElementById('phone');
const email = document.getElementById('email');
const region = document.getElementById('region');
const address = document.getElementById('address');
const empId = document.getElementById('id');
const password = document.getElementById('pass');
const passconf = document.getElementById('passconf');
const proff = document.getElementById('proffession');
const salary = document.getElementById('salary');
const country = document.getElementById('country');

var regName = /^[A-Za-z]+$/;
var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
var numbers = /^[0-9]+$/;
var regAge = /^[0-9]\w{1,2}$/;
var passw=  /^[A-Za-z]\w{7,14}$/;
form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const staf = element.parentElement;
    const errorDisplay = staf.querySelector('.error');

    errorDisplay.innerText = message;
    staf.classList.add('error');
    staf.classList.remove('success')
}

const setSuccess = element => {
    const staf = element.parentElement;
    const errorDisplay = staf.querySelector('.error');

    errorDisplay.innerText = '';
    staf.classList.add('success');
    staf.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const fname2 = fname.value.trim();
    const lname2 = lname.value.trim();
    const mname2 = mname.value.trim();
    const age2 = age.value.trim();
    const region2 = region.value.trim();
    const email2 = email.value.trim();
    const passconf2 = passconf.value.trim();
    const password2 = password.value.trim();
    const address2 = address.value.trim();
    const proff2 = proff.value.trim();
    const phone2 = phone.value.trim();
    const dbrith2 = dbrith.value.trim();
    const empId2 = empId.value.trim();
    const salary2 = salary.value.trim();
    const country2 = country.value.trim();

    if(fname2 === '') {
        setError(fname, 'Frist Name is required');
    } 
    else if(!fname2.match(regName)){
        setError(fname, 'Name must be character only.');
    }else {
        setSuccess(fname);
    }
    if(mname2 === '') {
        setError(mname, 'Middle name is required');
    }
    else if(!mname2.match(regName)){
        setError(mname, 'Middle must be character only.');
    } else {
        setSuccess(mname);
    }
    if(lname2 === '') {
        setError(lname, 'Last name is required');
    }  else if(!lname2.match(regName)){
        setError(lname, 'Last must be character only.');
    } else {
        setSuccess(lname);
    }
    if(dbrith2=== '') {
        setError(dbrith, 'Date of brith is required');
    } else  {
        setSuccess(dbrith);
    } 

    if(age2 === '') {
        setError(age, 'Age is required');
    }
    else if(!age2.match(regAge)){
        setError(age, 'Age must be number only.');
    } else if(age2.length >=3){
        setError(age, 'Age must be less than two digit.');
    }
    
    else  {
        setSuccess(age);
    } 
    // gender place
    if(phone2=== '') {
        setError(phone, 'Phone no. is required');
    } 
    else if (!phone2.match(phoneno)) {
        setError(phone, 'Provide a valid number');
    } 
    else  {
        setSuccess(phone);
    } 
    if(email2 === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(email2)) {
        setError(email, 'Provide a valid email address');
    }else  {
        setSuccess(email);
    } 
    //country palce 
    if(country2=== '') {
        setError(country, 'Please select yuor country');
    } else if(!country2.match(regName)){
        setError(country, 'Country must be character only.');
    }
    else  {
        setSuccess(country);
    } 
    if(region2=== '') {
        setError(region, 'Region is required');
    } else if(!region2.match(regName)){
        setError(region, 'Region must be character only.');
    }
    else  {
        setSuccess(region);
    } 
  
    if(address2 === '') {
        setError(address, 'Address is required');
    } 
    else if(!address2.match(regName)){
        setError(address, 'Address must be character only.');
    }else  {
        setSuccess(address);
    } 

    if(empId2=== '') {
        setError(empId, 'Employee Id is required');
    } else  {
        setSuccess(empId);
    } 
    if(password2=== '') {
        setError(password, 'Password is required');
    } 
    else if(!password2.match(passw)){
        setError(password, 'Please enter valid password.');
    }else  {
        setSuccess(password);
    } 
     if(passconf2 != password2){
        setError(passconf, 'password mismatch.');
    }else  {
        setSuccess(passconf);
    } 
    if(proff2=== '') {
        setError(proff, 'Please select your proffession');
    } else  {
        setSuccess(proff);
    } 
    if(salary2=== '') {
        setError(salary, 'Employee salary is required');
    } 
    if(!salary2.match(numbers)){
        setError(salary, 'Salary must be number only.');
    }
    else  {
        setSuccess(salary);
    }
};
