const form = document.forms["myForm"];
const empId = form["empId"];
const age = form["age"];
const phone = form["phone"];
const country = form["country"];
const address = form["address"];
const date = form["date"];
const profession = form["profession"];
const salary = form["salary"];

form.addEventListener('submit', e => {
    e.preventDefault();

    validateForm();
});

const validateForm = () => {
    // Define regular expression patterns for validation
    const empIdPattern = /^[a-zA-Z0-9]+$/;
    const agePattern = /^\d+$/;
    const phonePattern = /^\d{2}-\d{4}-\d{4}$/;
    const countryPattern = /^[a-zA-Z ]+$/;
    const addressPattern = /^[a-zA-Z0-9\s,'-]*$/;
    const datePattern = /^\d{4}-\d{2}-\d{2}$/;
    const professionPattern = /^[a-zA-Z ]+$/;
    const salaryPattern = /^\d+(\.\d{1,2})?$/;

    // Validate employee ID
    if (empId.value.trim() === "") {
        alert("Employee ID must be filled out");
        return false;
    }
    else if (!empIdPattern.test(empId.value.trim())) {
        alert("Please enter a valid Employee ID consisting of letters and/or numbers");
        return false;
    }

    // Validate age
    if (age.value.trim() === "") {
        alert("Age must be filled out");
        return false;
    }
    else if (!agePattern.test(age.value.trim())) {
        alert("Please enter a valid age consisting of digits only");
        return false;
    }

    // Validate phone number
    if (phone.value.trim() === "") {
        alert("Phone number must be filled out");
        return false;
    }
    else if (!phonePattern.test(phone.value.trim())) {
        alert("Please enter a valid phone number in format xx-xxxx-xxxx");
        return false;
    }

    // Validate country
    if (country.value.trim() === "") {
        alert("Country must be filled out");
        return false;
    }
    else if (!countryPattern.test(country.value.trim())) {
        alert("Please enter a valid country name consisting of letters and/or spaces");
        return false;
    }

    // Validate address
    if (address.value.trim() === "") {
        alert("Address must be filled out");
        return false;
    }
    else if (!addressPattern.test(address.value.trim())) {
        alert("Please enter a valid address consisting of letters, digits, spaces, commas, apostrophes, and/or hyphens");
        return false;
    }

    // Validate date
    if (date.value.trim() === "") {
        alert("Date must be filled out");
        return false;
    }
    else if (!datePattern.test(date.value.trim())) {
        alert("Please enter a valid date in format yyyy-mm-dd");
        return false;
    }

    // Validate profession
    if (profession.value.trim() === "") {
        alert("Profession must be filled out");
        return false;
    }
    else if (!professionPattern.test(profession.value.trim())) {
        alert("Please enter a valid profession consisting of letters and/or spaces");
        return false;
    }

    // Validate salary
    if (salary.value.trim() === "") {
        alert("Salary must be filled out");
        return false;
    }
    else if (!salaryPattern.test(salary.value.trim())) {
        alert("Please enter a valid salary in format xx.xx");
        return false;
    }

    return true;
}