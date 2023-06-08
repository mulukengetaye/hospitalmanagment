const form2 = document.getElementById('form');
const pateintcode = document.getElementById('pateintCode');
const age = document.getElementById('age');
const disease = document.getElementById('disease');
const appdate = document.getElementById('appdate');
const address = document.getElementById('address');
const city = document.getElementById('city');
const contact = document.getElementById('contact');
const alldoctor = document.getElementById('alldoctor');

form2.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const div1 = element.parentElement;
    const errorDisplay = div1.querySelector('.error');

    errorDisplay.innerText = message;
    div1.classList.add('error');
    div1.classList.remove('success')
}

const setSuccess = element => {
    const div1 = element.parentElement;
    const errorDisplay = div1.querySelector('.error');

    errorDisplay.innerText = '';
    div1.classList.add('success');
    div1.classList.remove('error');
};

const validateInputs = () => {
    const pateintcode2 = pateintcode.value.trim();
    const age2 = age.value.trim();
    const disease2 = disease.value.trim();
    const appdate2 = appdate.value.trim();
    const address2 = address.value.trim();
    const city2 = city.value.trim();
    const contact2 = contact.value.trim();
    const alldoctor2 = alldoctor.value.trim();

    var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var regName = /^[A-Za-z]+$/;
        var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
        var numbers = /^[0-9]+$/;
        var regAge = /^[0-9]\w{1,2}$/;
        var passw = /^[A-Za-z]\w{7,14}$/;
    if(pateintcode2 === '') {
        setError(pateintcode, 'Pateint Id is required');
    } else {
        setSuccess(pateintcode);
    }


    if(age2 === '') {
        setError(age, 'Age is required');
    } else if(!age2.match(regAge)){
        setError(age, 'Age must be less than two digit');
    }
    
    else {
        setSuccess(age);
    }


    if(disease2 === '') {
        setError(disease, 'Disease is required');
    } else  {
        setSuccess(disease);
    } 
    if(appdate2 === '') {
        setError(appdate, 'App date is required');
    } else  {
        setSuccess(appdate);
    }  
    if(address2 === '') {
        setError(address, 'Address is required');
    } else  {
        setSuccess(address);
    } 

    if(contact2 === '') {
        setError(contact, 'Contact is required');
    } else if(!contact2.match(phoneno)){
        setError(contact, 'Provide correct phone no.');
    }
    
    else  {
        setSuccess(contact);
    }
    
    if(alldoctor2=== '') {
        setError(alldoctor, 'Allocator doctor is required');
    } 
    else if(!alldoctor2.match(regName)){
        setError(alldoctor, 'Name must be character only.');
    }
    else  {
        setSuccess(alldoctor);
    }
    if(city2=== '') {
        setError(city, 'Allocator doctor is required');
    } else  {
        setSuccess(city);
    }
};
