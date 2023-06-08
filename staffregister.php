<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Page</title>
    <link rel="stylesheet" href="style/staff.css">
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
  left: 55%;
  margin: 20px;
  text-decoration: none;
}
i{
    margin-right: 10px;
}
.header {
  background-color: rgba(1, 1, 1, 1);
  height: 70px;
  width: 100%;
  display: flex;
  flex-direction: row;
  margin-top: 0px;
  margin-left: 0px;

  padding-left: 20px;


}
    </style>
        <script>
        function validateForm() {
            // Get form inputs
            var fname = document.forms["myForm"]["fname"].value;
            var lname = document.forms["myForm"]["lname"].value;
            var dbrith = document.forms["myForm"]["dbrith"].value;
            var age = document.forms["myForm"]["age"].value;
            var phone = document.forms["myForm"]["phone"].value;
            var email = document.forms["myForm"]["email"].value;
            var region = document.forms["myForm"]["region"].value;
            var address = document.forms["myForm"]["address"].value;
            var empid = document.forms["myForm"]["empid"].value;
            var password = document.forms["myForm"]["password"].value;
            var passwordConf = document.forms["myForm"]["passwordConf"].value;
            var salary = document.forms["myForm"]["salary"].value;

            // Define regular expression patterns for validation
            var namePattern = /^[a-zA-Z ]+$/;
            var phonePattern = /^\d{2}-\d{4}-\d{4}$/;
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+}{":;'?/>.<,])(?!.*\s).{8,}$/;

            // Validate first name
            if (fname == "") {
                alert("First name must be filled out");
                return false;
            }
            else if (!namePattern.test(fname)) {
                alert("Please enter a valid first name");
                return false;
            }

            // Validate last name
            if (lname == "") {
                alert("Last name must be filled out");
                return false;
            }
            else if (!namePattern.test(lname)) {
                alert("Please enter a valid last name");
                return false;
            }

            // Validate date of birth
            if (dbrith == "") {
                alert("Date of birth must be filled out");
                return false;
            }

            // Validate age
            if (age == "") {
                alert("Age must be filled out");
                return false;
            }
            else if (age < 18 || age > 65) {
                alert("Please enter a valid age between 18 and 65");
                return false;
            }

            // Validate phone number
            if (phone == "") {
                alert("Phone number must be filled out");
                return false;
            }
            else if (!phonePattern.test(phone)) {
                alert("Please enter a valid phone number in format xx-xxxx-xxxx");
                return false;
            }

            // Validate email
            if (email == "") {
                alert("Email must be filled out");
                return false;
            }
            else if (!emailPattern.test(email)) {
                alert("Please enter a valid email address");
                return false;
            }

            // Validate region
            if (region == "") {
                alert("Region must be filled out");
                return false;
            }

            // Validate address
            if (address == "") {
                alert("Address must be filled out");
                return false;
            }

            // Validate employee ID
            if (empid == "") {
                alert("Employee ID must be filled out");
                return false;
            }

            // Validate password
            if (password == "") {
                alert("Password must be filled out");
                return false;
            }
            else if (!passwordPattern.test(password)) {
                alert("Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character");
                return false;
            }

            // Validate password confirmation
            if (passwordConf == "") {
                alert("Password confirmation must be filled out");
                return false;
            }
            else if (password != passwordConf) {
                alert("Passwords do not match");
                return false;
            }

            // Validate salary
            if (salary == "") {
                alert("Salary must be filled out");
                return false;
            }
            else if (isNaN(salary) || salary <= 0) {
                alert("Please enter a valid salary");
                return false;
            }

            return true;
        }
    </script>

</head>

<body>
    <div class="header">

        
        <a href="index.php" class="linkers"><i class="fa fa-home" style="font-size:24px"></i>HOME</a>
        <a href="displayStaff.php" class="linkers"><i class="fa fa-eye" style="font-size:24px"></i>VIEW</a>
        <a href="updateStaff.php" class="linkers"><i class="fa fa-edit" style="font-size:24px"></i>UPDATE</a>
        <a href="searchStaffUI.php" class="linkers"><i class="fa fa-trash-o" style="font-size:24px"></i>DELETE</a>
    </div>
    <form id="form" name="myForm" action="insertToStaff.php" method="post" onsubmit="return validateForm()">
        <div class="empInfo">

            <h3> Employee Information</h3>

            <div class="staf">
                <label for="fname" class="label">First Name</label>
                <input type="text" name="fname" class="input" placeholder="first name" id="fname">
                <div class="error"></div>
            </div>
            <div class="staf">
                <label for="mname" class="label">Middle Name</label>
                <input type="text" name="mname" class="input" placeholder="middle name" id="mname">
                <div class="error"></div>
            </div>
            <div class="staf">
                <label for="lname" class="label">Last Name</label>
                <input type="text" name="lname" class="input" placeholder="last name" id="lname">
                <div class="error"></div>
            </div>
            <div class="staf">
                <label for="dbrith" class="label">Date of brith</label>
                <input type="date" name="dbrith" class="input" placeholder="date of brith" id="dbrith">
                <div class="error"></div>
            </div>
            <div class="staf">
                <label for="age" class="label">Age</label>
                <input type="number" name="age" class="input" placeholder="age" id="age">
                <div class="error"></div>
            </div>
            <div class="staf">
                <label for="male" class="label">Gender</label>
                <p class="sex" id="gender">
                    <input type="radio" name="gender" value="Male" class="rad" id="male">
                    <label for="male" class="label">Male</label>
                    <input type="radio" name="gender" value="Female" class="rad" id="female">
                    <label for="female" class="label">Female</label>
                </p>
                <div class="error"></div>
            </div>
        </div>

        <div class="empAdd">

            <h3>Employee Address</h3>
            <div class="staf">
                <label for="phone" class="label">Phone</label>
                <input type="text" name="phone" class="input" placeholder="xx-xxxx-xxxx" id="phone" autocomplete="off">
                <div class="error"></div>
            </div>
            <div class="staf">
                <label for="email" class="label">Email</label>
                <input type="email" name="email" class="input" placeholder="email address" id="email" autocomplete="off">
                <div class="error"></div>
            </div>
            <div class="staf">
                <label for="country" class="label">Country</label>
                <select name="country" class="input" id="country" autocomplete="off">
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="USA">USA</option>
                    <option value="India">India</option>
                    <option value="Pakstan">Pakstan</option>
                </select>
                <div class="error"></div>
            </div>
            <div class="staf">
                <label for="region" class="label">Region</label>
                <input type="text" name="region" class="input" placeholder="region" id="region" autocomplete="off">
                <div class="error"></div>
            </div>
            <div class="staf">
                <label for="address" class="label">Address</label>
                <input type="text" name="address" class="input" placeholder="address" id="address" autocomplete="off">
                <div class="error"></div>
            </div>
        </div>

        <div class="japp">

            <h3>Job Application</h3>
            <div class="staf">
                <label for="id" class="label">Employee Id</label>
                <input type="text" name="empid" class="input" placeholder="employee id" id="id">
                <div class="error"></div>
            </div>
            <div class="staf">
                <label for="pass" class="label">Password</label>
                <input type="password" name="password" class="input" placeholder="password" id="pass">
                <div class="error"></div>
            </div>
            <div class="staf">
                <label for="passconf" class="label">Password-confirm</label>
                <input type="password" name="passwordConf" class="input" placeholder="Password-confirm" id="passconf">
                <div class="error"></div>
            </div>
            <div class="staf">
                <label for="proffession" class="label">Proffession</label>
                <select name="proffession" id="proffession" class="input">

                    <option value="Doctor">Doctor</option>
                    <option value="Nurse">Nurse</option>
                    <option value="Pharamasist">Pharamasist</option>
                    <option value="Labortarist">Labortarist</option>
                </select>
                <div class="error"></div>
            </div>
            <div class="staf">
                <label for="salary" class="label">Salary</label>
                <input type="text" name="salary" class="input" placeholder="payment" id="salary">
            <div class="error"></div>
            </div>

        </div>
        <div class="btnclass">
            <input type="submit" name="submit" value="Save" class="save">
            <input type="reset" name="reset" value="New" class="save">
            <!-- <button type="submit" name="submit" class="save">Save</button> -->
     

        </div>


    </form>
</body>


</html>