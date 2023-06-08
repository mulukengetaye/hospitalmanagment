<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Page</title>
    <link rel="stylesheet" href="style/attendance.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

.linkers {
    position: relative;
    display: flex;
    flex-direction: row;
    color: aquamarine;
    font-size: 20px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-style: normal;
    left: 75%;
    margin: 20px;
    text-decoration: none;
}
i{
    margin-right: 10px;
}
    </style>

</head>

<body>
    <div class="header">

           
        <a href="index.php" class="linkers"><i class="fa fa-home" style="font-size:24px"></i>HOME</a>
        <a href="displayAttendance.php" class="linkers"><i class="fa fa-eye" style="font-size:24px"></i>VIEW </a>

    </div>
    <form name="myForm" id="form" action="insertToAttendance.php" method="post">
       
        <div class="forboth">
            <h3>Staff Attendance  Form</h3>
            <div class="empInfo" id="storeinfo">
                <div class="div1">
                    <label for="staffcode" class="label">Employee ID</label>
                    <input type="text" name="staffCode" id="staffcode" class="input" placeholder="staff code">
                    <div class="error"></div>
                </div>
                <div class="div1">
                    <label for="date" class="label">Date </label>
                    <input type="date" name="date" class="input" id="date" placeholder="Date.....">
                    <div class="error"></div>
                </div>

                <div class="div1">
                    <label for="mark" class="label">Mark </label>
                    <select name="mark" class="input" id="mark">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <div class="error"></div>
                </div>

                <div class="div1">
                    <label for="perm" class="label">Permition </label>
                    <select name="perm" class="input" id="perm">
                        <option value="Absent">Absent</option>
                        <option value="Present">Present</option>
                    </select>
                    <div class="error"></div>
                </div>
                <div class="div1">
                    <label for="reason" class="label">Reason</label>
                    <input type="text" name="reason" class="input" id="reason" placeholder="Reason ">
                    <div class="error"></div>
                </div>
            </div>

            <div class="btnclass" id="btnclass">
                <input type="submit" name="submit" class="save" value="Save"> 
                <input type="reset" name="reset" class="save" value="Cansel"> 
                <!-- <button type="submit" name="submit" class="save">Save</button> -->
            

            </div>

        </div>

    </form>
</body>
<script type="text/javascript">

const form = document.getElementById('form');
const empid = document.getElementById('staffcode');
const date = document.getElementById('date');
const mark = document.getElementById('mark');
const perm = document.getElementById('perm');
const reason = document.getElementById('reason');


form.addEventListener('submit', e => {
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
const empid2 = empid.value.trim();
const perm2 = perm.value.trim();
const mark2 = mark.value.trim();
const reason2 = reason.value.trim();
const date2 = date.value.trim();

if(empid2 === '') {
    setError(empid, 'Employee Id is required');
} else {
    setSuccess(empid);
}

if(date2 === '') {
    setError(date, 'Date is required');
}  else {
    setSuccess(date);
}

if(perm2 === '') {
    setError(perm, 'permition is required');
} else {
    setSuccess(perm);
}

if(mark2 === '') {
    setError(mark, 'Mark is required');
} else  {
    setSuccess(mark);
} 
if(reason2 === '') {
    setError(reason, 'Reason is required');
} else  {
    setSuccess(reason);
} 

};

</script>

</html>