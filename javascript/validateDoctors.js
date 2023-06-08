
const form = document.getElementById('form');
const startDay = document.getElementById('startDay');
const Symptom = document.getElementById('Symptom');
const reason = document.getElementById('reason');
const howlong = document.getElementById('howlong');
const txtview = document.getElementById('txtview');

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

var regName = /^[A-Za-z]+$/;
var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
var numbers = /^[0-9]+$/;
var regAge = /^[0-9]\w{1,2}$/;
var passw = /^[A-Za-z]\w{7,14}$/;
const validateInputs = () => {
    const startDay2 = startDay.value.trim();
    const reason2 = reason.value.trim();
    const Symptom2 = Symptom.value.trim();
    const howlong2 = howlong.value.trim();
    const txtview2 = txtview.value.trim();


    if (startDay2 === '') {
        setError(startDay, 'Start day is required');
    }
    else {
        setSuccess(startDay);
    }
    if (Symptom2 === '') {
        setError(Symptom, 'Symptom is required');
    }
    else if (!Symptom2.match(regName)) {
        setError(Symptom, 'Symptom must be character only.');
    } else {
        setSuccess(Symptom);
    }
    if (reason2 === '') {
        setError(reason, 'Reason is required');
    } else if (!reason2.match(regName)) {
        setError(reason, 'Reason must be character only.');
    } else {
        setSuccess(reason);
    }
    if (txtview2 === '') {
        setError(txtview, 'Other info is required');
    } else {
        setSuccess(txtview);
    }

    if (howlong2 === '') {
        setError(howlong, 'how long is required');
    }

    else {
        setSuccess(howlong);
    }
    // gender place

};