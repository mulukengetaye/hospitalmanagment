<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pateint Registration Page</title>
    <link rel="stylesheet" href="style/pateint.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
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

.header:hover {
    background-color: rgba(1, 1, 1, 1);
}

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
</style>
<script>
    function validateForm() {
        // Get form inputs
        var pateintCode = document.forms["myForm"]["pateintCode"].value;
        var pateintName = document.forms["myForm"]["Pateintname"].value;
        var dbrith = document.forms["myForm"]["date"].value;
        var age = document.forms["myForm"]["age"].value;
        var disease = document.forms["myForm"]["disease"].value;
        var bloodgroup = document.forms["myForm"]["bloodgroup"].value;
        var gender = document.forms["myForm"]["gender"].value;
        var address = document.forms["myForm"]["address"].value;
        var city = document.forms["myForm"]["City"].value;
        var email = document.forms["myForm"]["email"].value;
        var contact = document.forms["myForm"]["contact"].value;
        var Allocatedoctor = document.forms["myForm"]["Allocatedoctor"].value;

        // Define regular expression patterns for validation
        var namePattern = /^[a-zA-Z ]+$/;
        var phonePattern = /^\d{2}-\d{4}-\d{4}$/;
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        // Validate pateint code
        if (pateintCode == "") {
            alert("Pateint code must be filled out");
            return false;
        }

        // Validate pateint name
        if (pateintName == "") {
            alert("Pateint name must be filled out");
            return false;
        }
        else if (!namePattern.test(pateintName)) {
            alert("Please enter a valid pateint name");
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

        // Validate disease
        if (disease == "") {
            alert("Disease must be filled out");
            return false;
        }

        // Validate blood group
        if (bloodgroup == "") {
            alert("Blood group must be filled out");
            return false;
        }

        // Validate gender
        if (gender == "") {
            alert("Gender must be filled out");
            return false;
        }

        // Validate address
        if (address == "") {
            alert("Address must be filled out");
            return false;
        }

        // Validate city
        if (city == "") {
            alert("City must be filled out");
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

        // Validate contact
        if (contact == "") {
            alert("Contact number must be filled out");
            return false;
        }
        else if (!phonePattern.test(contact)) {
            alert("Please enter a valid contact number in format xx-xxxx-xxxx");
            return false;
        }

        // Validate allocated doctor
        if (Allocatedoctor == "") {
            alert("Allocated doctor must be filled out");
            return false;
        }

        return true;
    }
</script>

</head>

<body>

    <div class="header">

        
     
        <a href="index.php" class="linkers"><i class="fa fa-home" style="font-size:24px"></i>HOME</a>
        <a href="displayPatient.php" class="linkers"><i class="fa fa-eye" style="font-size:24px"></i>VIEW </a>
        <a href="updatePateint.php" class="linkers"><i class="fa fa-edit" style="font-size:24px"></i>UPDATE</a>
      
    </div>
    <form name="myForm" id="form" action="insert.php" method="post" onsubmit="return validateForm()">


        <div class="forboth" id="id02">
            <h3>Pateint Registration Form</h3>
            <div class="empInfo" id="storeinfo">
                <div class="div2">
                    <label for="pateintCode" class="label">Pateint code</label>
                    <input type="text" name="pateintCode" id="pateintCode" class="input" placeholder="Pateint code">
                    <div class="error"></div>
                </div>

                <div class="div2">
                    <label for="pateintName" class="label">Pateint Name</label>
                    <input type="text" name="Pateintname" class="input" id="pateintName" placeholder="Pateint name">
                    <div class="error"></div>
                </div>

                <div class="div2">
                    <label for="dbrith" class="label">Date of brith</label>
                    <input type="date" name="date" class="input" id="dbrith" placeholder="Date of brith">
                    <div class="error"></div>
                </div>
                <div class="div2">
                    <label for="age" class="label">Age </label>
                    <input type="number" name="age" class="input" id="age" placeholder="Age of pateint">
                    <div class="error"></div>
                </div>

                <div class="div2">
                    <label for="disease" class="label">Disease </label>
                    <input type="text" name="disease" class="input" id="disease" placeholder="disease of pateint">
                    <div class="error"></div>
                </div>
                <div class="div2">
                    <label for="bloodgroup" class="label">Blood Group </label>
                    <input type="text" name="bloodgroup" class="input" id="bloodgroup"
                        placeholder="blood group of pateint">
                    <div class="error"></div>
                </div>
            </div>

            <div class="empAdd" id="storempAdd">
                <div class="div2">
                    <label for="gender" class="label">Gender</label>
                    <select name="gender" class="input" id="gender">
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                        <option value="Other">Other</option>

                    </select>
                    <div class="error"></div>
                </div>
                <div class="div2">
                    <label for="address" class="label">Address</label>
                    <input type="text" name="address" class="input" id="address" placeholder=" Pateint Address" autocomplete="off">
                    <div class="error"></div>
                </div>
                <div class="div2">
                    <label for="city" class="label">City</label>
                    <input type="text" name="City" class="input" id="city" placeholder=" Pateint City">
                    <div class="error"></div>
                </div>
                <div class="div2">
                    <label for="email" class="label">Email Address </label>
                    <input type="email" name="email" class="input" id="email" placeholder=" Email address" autocomplete="off">
                    <div class="error"></div>
                </div>
                <div class="div2">
                    <label for="contact" class="label">Contact No </label>
                    <input type="text" name="contact" class="input" id="contact" placeholder="xx-xxxx-xxxx ">
                    <div class="error"></div>
                </div>

                <div class="div2">
                    <label for="alldoctor" class="label">Allocate Doctor </label>
                    <input type="text" name="Allocatedoctor" class="input" id="alldoctor"
                        placeholder="Allocate doctor ">
                    <div class="error"></div>
                </div>

            </div>

            <div class="btnclass" id="btnclass">

                <input type="submit" name="submit" class="save" value="Save">
                <input type="reset" name="reset" class="save" value="Cansel">


            </div>

        </div>

    </form>
    
   
</body>


    


</html>