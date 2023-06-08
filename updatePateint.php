<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pateint Updatev Page</title>
    <link rel="stylesheet" href="style/updatePateint.css">
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
    left: 80%;
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
    var age = document.forms["myForm"]["age"].value;
    var disease = document.forms["myForm"]["disease"].value;
    var appdate = document.forms["myForm"]["appdate"].value;
    var address = document.forms["myForm"]["address"].value;
    var city = document.forms["myForm"]["City"].value;
    var contact = document.forms["myForm"]["contact"].value;
    var Alldoctor = document.forms["myForm"]["Alldoctor"].value;

    // Define regular expression patterns for validation
    var pateintCodePattern = /^\d{4}$/;
    var agePattern = /^\d+$/;
    var diseasePattern = /^[a-zA-Z ]+$/;
    var appdatePattern = /^\d{4}-\d{2}-\d{2}$/;
    var addressPattern = /^[a-zA-Z0-9\s,'-]*$/;
    var cityPattern = /^[a-zA-Z\s]*$/;
    var contactPattern = /^\d{2}-\d{4}-\d{4}$/;
    var AlldoctorPattern = /^[a-zA-Z\s]*$/;

    // Validate pateintCode
    if (pateintCode == "") {
      alert("Patient code must be filled out");
      return false;
    } else if (!pateintCodePattern.test(pateintCode)) {
      alert("Please enter a valid patient code (4 digits)");
      return false;
    }

    // Validate age
    if (age == "") {
      alert("Age must be filled out");
      return false;
    } else if (!agePattern.test(age)) {
      alert("Please enter a valid age (positive integer)");
      return false;
    }

    // Validate disease
    if (disease == "") {
      alert("Disease must be filled out");
      return false;
    } else if (!diseasePattern.test(disease)) {
      alert("Please enter a valid disease name");
      return false;
    }

    // Validate appdate
    if (appdate == "") {
      alert("Appointment date must be filled out");
      return false;
    } else if (!appdatePattern.test(appdate)) {
      alert("Please enter a valid appointment date (YYYY-MM-DD)");
      return false;
    }

    // Validate address
    if (address == "") {
      alert("Address must be filled out");
      return false;
    } else if (!addressPattern.test(address)) {
      alert("Please enter a valid address");
      return false;
    }

    // Validate city
    if (city == "") {
      alert("City must be filled out");
      return false;
    } else if (!cityPattern.test(city)) {
      alert("Please enter a valid city name");
      return false;
    }

    // Validate contact
    if (contact == "") {
      alert("Contact number must be filled out");
      return false;
    } else if (!contactPattern.test(contact)) {
      alert("Please enter a valid contact number (xx-xxxx-xxxx)");
      return false;
    }

    // Validate Alldoctor
    if (Alldoctor == "") {
      alert("Allocated doctor name must be filled out");
      return false;
    } else if (!AlldoctorPattern.test(Alldoctor)) {
      alert("Please enter a valid allocated doctor name");
      return false;
    }

    return true;
  }
</script>

</head>

<body>
    <form name="myForm" id="form" method="post" onsubmit="return validateForm()">


        <div class="header">

          
       
            <a href="index.php" class="linkers"><i class="fa fa-home" style="font-size:24px"></i>HOME</a>
            <a href="PatientReg.php" class="linkers"><i class="fa fa-angle-double-left" style="font-size:24px"></i>BACK</a>
           <i class="fa fa-angle-double-left" style="font-size:24px"></i>

        </div>
        <div class="forboth">
            <h3>Pateint Data Update </h3>
            <div class="empInfo" id="storeinfo">
                <div class="div1">
                    <label for="pateintCode" class="label">Pateint code</label>
                    <input type="text" name="pateintCode" id="pateintCode" class="input" placeholder="Pateint code">
                    <div class="error"></div>
                </div>
                <div class="div2">
                    <label for="age" class="label">Age </label>
                    <input type="number" name="age" class="input" id="age" placeholder="Age of pateint">
                    <div class="error"></div>
                </div>

                <div class="div2">
                    <label for="disease" class="label">Disease </label>
                    <input type="text" name="disease" class="input" id="disease" placeholder="Disease of pateint">
                    <div class="error"></div>
                </div>

                <div class="div2">
                    <label for="appdate" class="label">Appointment date </label>
                    <input type="date" name="appdate" class="input" id="appdate" placeholder="Appointment date">
                    <div class="error"></div>
                </div>
            </div>

            <div class="empAdd" id="storempAdd">


                

                <div class="div1">
                    <label for="address" class="label">Address</label>
                    <input type="text" name="address" class="input" id="address" placeholder="Pateint Address" autocomplete="name">
                    <div class="error"></div>
                </div>
                <div class="div1">
                    <label for="city" class="label">City</label>
                    <input type="text" name="City" class="input" id="city" placeholder="Pateint City">
                    <div class="error"></div>
                </div>
                <div class="div2">
                    <label for="contact" class="label">Contact No </label>
                    <input type="text" name="contact" class="input" id="contact" placeholder="xx-xxxx-xxxx">
                    <div class="error"></div>
                </div>

                <div class="div2">
                    <label for="alldoctor" class="label">Allocate Doctor </label>
                    <input type="text" name="Alldoctor" class="input" id="alldoctor"
                        placeholder="Allocate doctor ">
                    <div class="error"></div>
                </div>

            </div>

            <div class="btnclass" id="btnclass">
                <input type="submit" name="submit" class="save" value="Save" >
                <input type="reset" name="reset" class="save" value="Cansel">

            </div>

        </div>

    </form>

    <?php
if (isset($_POST['submit'])) {

    $pateintCode = $_POST['pateintCode'];
    $disease = $_POST['disease'];
    $appdate = $_POST['appdate'];
    $address = $_POST['address'];
    $City = $_POST['City'];
    $contact = $_POST['contact'];
    $Alldoctor = $_POST['Alldoctor']; 
    $age = $_POST['age'];
    $sql ="UPDATE PATEINTS SET age='$age',disease='$disease',city='$City',paddress='$address',
    contact='$contact',allname='$Alldoctor', reg_date='$appdate' WHERE pateintCode='$pateintCode'";
             if ($conn->query($sql) === TRUE) {
                echo '<script>alert("UPDATED CORRECTLY")</script>';
                ?>
                <script type="text/javascript"> 
                     window.location="updatePateint.php";
                 </script>
                <?php
 } else {
                 echo '<script>alert("NOT UPDATED SUCCESSFULLY")</script>';
                 ?>
                 <script type="text/javascript"> 
                      window.location="updatePateint.php";
                  </script>
                 <?php
             }

}


?>
   
</body>





</html>