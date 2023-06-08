
const form = document.getElementById('form');
const pateintCode = document.getElementById('pateintCode');
const pateintName = document.getElementById('pateintName');
const dbrith = document.getElementById('dbrith');
const age = document.getElementById('age');
const disease = document.getElementById('disease');
const bloodgroup = document.getElementById('bloodgroup');
const email = document.getElementById('email');
const gender = document.getElementById('gender');
const address = document.getElementById('address');
const city = document.getElementById('city');
const contact = document.getElementById('contact');
const alldoctor = document.getElementById('alldoctor');
var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var regName = /^[A-Za-z]+$/;
var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
var numbers = /^[0-9]+$/;
var regAge = /^[0-9]\w{1,2}$/;
var passw = /^[A-Za-z]\w{7,14}$/;
form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const div2 = element.parentElement;
    const errorDisplay = div2.querySelector('.error');

    errorDisplay.innerText = message;
    div2.classList.add('error');
    div2.classList.remove('success')
}

const setSuccess = element => {
    const div2 = element.parentElement;
    const errorDisplay = div2.querySelector('.error');

    errorDisplay.innerText = '';
    div2.classList.add('success');
    div2.classList.remove('error');
};
const validateInputs = () => {
    const pateintcode2 = pateintCode.value.trim();
    const pateintName2 = pateintName.value.trim();
    const age2 = age.value.trim();
    const dbrith2 = dbrith.value.trim();
    const disease2 = disease.value.trim();
    const bloodgroup2 = bloodgroup.value.trim();
    const email2 = email.value.trim();
    const gender2 = gender.value.trim();
    const address2 = address.value.trim();
    const city2 = city.value.trim();
    const contact2 = contact.value.trim();
    const alldoctor2 = alldoctor.value.trim();

    if (pateintcode2 === '') {
        setError(pateintCode, 'Pateint Id is required');
    } else {
        setSuccess(pateintCode);
    }

    if (pateintName2 === '') {
        setError(pateintName, 'pateint name is required');
    } else if (!pateintName2.match(regName)) {

        setError(pateintName, 'Name must be character only');
    }
    else {
        setSuccess(pateintName);
    }

    if (age2 === '') {
        setError(age, 'Age is required');
    }
    else if (!age2.match(regAge)) {

        setError(age, 'Age must less than two digit.');
    }
    else {
        setSuccess(age);
    }

    if (dbrith2 === '') {
        setError(dbrith, 'Item catagory is required');
    } else {
        setSuccess(dbrith);
    }
    if (disease2 === '') {
        setError(disease, 'Disease is required');
    } else if (!disease2.match(regName)) {

        setError(disease, 'Disease must be character only');
    }
    else {
        setSuccess(disease);
    }
    if (bloodgroup2 === '') {
        setError(bloodgroup, 'Bloodgroup is required');
    }
    else if (!bloodgroup2.match(regName)) {

        setError(bloodgroup, 'bloodgroup must be character only');
    }
    else {
        setSuccess(bloodgroup);
    }
    if (email2 === '') {
        setError(email, 'Email is required');
    }
    else if (!email2.match(re)) {

        setError(email, 'Provide correct email.');
    }
    else {
        setSuccess(email);
    }
    if (gender2 === '') {
        setError(gender, 'Gender is required');
    } else {
        setSuccess(gender);
    }
    if (address2 === '') {
        setError(address, 'Address is required');
    } else {
        setSuccess(address);
    }
    if (city2 === '') {
        setError(city, 'city is required');
    } else {
        setSuccess(city);
    }
    if (contact2 === '') {
        setError(contact, 'Contact is required');
    } else if (!contact2.match(phoneno)) {

        setError(contact, 'Provide correct phone no.');
    }
    else {
        setSuccess(contact);
    }

    if (alldoctor2 === '') {
        setError(alldoctor, 'Allocator doctor is required');
    }
    else if (!alldoctor2.match(regName)) {

        setError(alldoctor, 'name must be character only.');
    }
    else {
        setSuccess(alldoctor);
    }
};