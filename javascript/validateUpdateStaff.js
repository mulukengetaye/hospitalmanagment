const form = document.getElementById('form');
const age = document.getElementById('age');
const phone = document.getElementById('phone');
const address = document.getElementById('address');
const empId = document.getElementById('id');
const proff = document.getElementById('proff');
const salary = document.getElementById('salary');
const Country = document.getElementById('country');
const date = document.getElementById('date');
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
    const diverror = element.parentElement;
    const errorDisplay = diverror.querySelector('.error');

    errorDisplay.innerText = message;
    diverror.classList.add('error');
    diverror.classList.remove('success')
}

const setSuccess = element => {
    const diverror = element.parentElement;
    const errorDisplay = diverror.querySelector('.error');

    errorDisplay.innerText = '';
    diverror.classList.add('success');
    diverror.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
  
    const age2 = age.value.trim();
    const address2 = address.value.trim();
    const proff2 = proff.value.trim();
    const phone2 = phone.value.trim();
    const empId2 = empId.value.trim();
    const salary2 = salary.value.trim();
    const country2 = country.value.trim();
    const date2 = date.value.trim();


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
    if (phone2=== '') {
        setError(phone, 'phone is required');
    } else if (!phone2.match(phoneno)) {

        setError(phone, 'Provide correct phone no.');
    }
    else {
        setSuccess(phone);
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
    if(date2=== '') {
        setError(date, 'Date is required');
    } 
    
    else  {
        setSuccess(date);
    }
};

