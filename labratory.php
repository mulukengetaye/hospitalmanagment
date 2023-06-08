<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style></style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="style/userLogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
    margin: 0px;
    padding: 0px;
}

.header {
    background-color: rgba(1, 1, 1, 1);
    height: 70px;
    width: 100%;
    display: flex;
    flex-direction: row;
    margin-top: 0px;
    margin-left: 0px;
  color: aquamarine;
    padding-left: 20px;


}



.linkers {
    position: relative;
    display: flex;
    flex-direction: row;
    color: aquamarine;
    font-size: 20px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-style: normal;
    left: 65%;
    margin: 20px;
    text-decoration: none;
}

.linkers:hover {
    text-decoration: wavy;
    color: black;
    background-color: aquamarine;
    border-radius: 5px;
}

h3 {
    color: aquamarine;
    position: relative;
    left: 370px;
    font-size: 30px;
}
        .div1 {
            display: flex;
            flex-direction: column;
        }
        i{
            color: white;
        }
        .forphp{
    display: none;
    border-radius: 20px;
    padding: 20px;
    position: absolute;
    left: 950px;
    width: 350px;
    height: 400px;
  background-color: whitesmoke;
    color: black;
    top: 150px;
    font-size: 15px;
}
.both22{
    height: 650px;
    width: 900px;
    background-color: rgba(1, 1, 1, 0.2);
    position: absolute;
  left: 0px;
}
.result{
    margin-top: 30px;
    position: absolute;
    width: 150px;
    height: 30px;
    background-color: seagreen;
    color: white;
    left: 1050px;
}
.clear{
    margin-top: 30px;
    position: absolute;
    width: 150px;
    height: 30px;
    background-color: darkorange;
    color: white;
    /* left: 1100px;  */
    left: 100px;
    top: 350px;
}
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
i{
    margin-right: 10px;
}
h4{
    color: firebrick;
    font-size: 30px;
    position: relative;
    left: 70px;
}
.div2{
    display: flex;
    flex-direction: column;
}
.divlogin {
    padding: 15px;
    width: 350px;
    height: 520px;
    margin: auto;
    margin-top: 50px;
    border-width: 2px;
    display: flex;
    flex-direction: column;

    align-items: center;
    background-color: #072C50;
    border-radius: 5px;
    border-bottom-color: red;
    border-top-color: green;
    font-family: 'Gill Sans', 'Gill Sans MT', italic, 'Trebuchet MS', sans-serif;
    color: black;
    text-align: center;
}
    </style>
    <script>
function validateForm() {
  // Get form inputs and trim leading/trailing whitespace
  var patient_id = document.forms["myForm"]["patient_id"].value.trim();
  var blood = document.forms["myForm"]["blood"].value;
  var urine = document.forms["myForm"]["urine"].value;
  var x_ray = document.forms["myForm"]["x_ray"].value;
  var txtview = document.forms["myForm"]["txtview"].value.trim();

  // Define regular expression patterns for validation
  var patientIdPattern = /^[a-zA-Z0-9]+$/;

  // Validate patient ID
  if (patient_id == "") {
    alert("Patient ID must be filled out");
    return false;
  }
  else if (!patientIdPattern.test(patient_id)) {
    alert("Please enter a valid Patient ID consisting of letters and/or numbers");
    return false;
  }

  // Validate blood test
  if (blood == "") {
    alert("Blood test must be selected");
    return false;
  }

  // Validate urine test
  if (urine == "") {
    alert("Urine test must be selected");
    return false;
  }

  // Validate x-ray test
  if (x_ray == "") {
    alert("X-ray test must be selected");
    return false;
  }

  // Validate additional note
  if (txtview == "") {
    alert("Additional note must be filled out");
    return false;
  }

  return true;
}
</script>
</head>

<body>
<div class="header">

   
<a href="index.php" class="linkers"><i class="fa fa-home" style="font-size:24px"></i>HOME</a>
<a href="" class="linkers"><i class="fa fa-eye" style="font-size:24px"></i>VIEW</a>
</div>
<div class="forphp" id="divForPhp">
  
  <?php
 echo" <h4>Lab Required </h4>";
 echo "<b>Patient Code:</b>  ". $_SESSION['pcode']."<br>" ;
 echo"<b>Start day:</b>  ". $_SESSION['startday']."<br>" ;
 echo"<b>Syptom:</b>  ". $_SESSION['syptom']."<br>" ;
 echo"<b>Reason:</b>  ". $_SESSION['reason']."<br>" ;
 echo "<b>Test:</b>  ".$_SESSION['test'] ."<br>";
 echo"<b>How long:</b>  ". $_SESSION['howlong'] ."<br>";
 echo "<b>Test Type:</b>  ".$_SESSION['testtype']."<br>";
 echo "<b>Other info: </b> ".$_SESSION['txtview1'];
  ?>
  <button onclick="document.getElementById('divForPhp').style.display='none'" class="clear">Clear</button>
  </div>
  <button onclick="document.getElementById('divForPhp').style.display='block'" class="result">Lab Required</button>
    <form class="" id="form" method="post" name="myForm" onsubmit="return validateForm()">
        <div class="divlogin">
           
            <div class="div1">
                <label for="patient_id" class="labal">Patient_ID</label>
              
                    <input type="text" name="patient_id" class="input" placeholder="patient_id" id="patient_id">
               
                <div class="error"></div>
            </div>

            <div class="div2">
                    <label for="blood" class="labal">Blood Test</label>
                    <select name="blood" class="input" id="blood">
                        <option value="Normal">Normal</option>
                        <option value="Abnormal">Abnormal</option>
                    </select>
                    <div class="error"></div>
                </div>
                <div class="div2">
                    <label for="urine" class="labal">Urine Test</label>
                    <select name="urine" class="input" id="urine">
                        <option value="Normal">Normal</option>
                        <option value="Abnormal">Abnormal</option>
                    </select>
                    <div class="error"></div>
                </div>
                <div class="div2">
                    <label for="x_ray" class="labal">X-ray Test</label>
                    <select name="x_ray" class="input" id="x_ray">
                        <option value="Normal">Normal</option>
                        <option value="Abnormal">Abnormal</option>
                    </select>
                    <div class="error"></div>
                </div>
                
                <div class="div2">
                <label for="txtview" class="labal">Additional Note</label>
                  <textarea name="txtview" id="txtview" cols="35" rows="10"></textarea>
                    <div class="error"></div>
                </div>
            <button name="submit" class="btnlogin">Submit Report</button>
          
        </div>
    </form>

    <?php
if(isset($_POST['submit'])){
   
    $_SESSION['patient_id']= $_POST['patient_id'];
    $_SESSION['blood'] = $_POST['blood'];
    $_SESSION['urine']= $_POST['urine'];
    $_SESSION['x_ray'] = $_POST['x_ray'];
    $_SESSION['txtview']= $_POST['txtview'];
    ?>
    <script type="text/javascript"> 
         alert("The report is send seccussfully!!");
     </script>
    <?php
}

?>
<?php
 if(isset($_POST['submit'])){
$patient_id = $_POST['patient_id'];
$bloodTest = $_POST['blood'];
$urineTest = $_POST['urine'];
$x_ray = $_POST['x_ray'];
$OtherInfo = $_POST['txtview'];

$sql = "INSERT into laboratory(patient_id,bloodTest,urineTest,x_ray,OtherInfo)
values('$patient_id','$bloodTest','$urineTest','$x_ray','$OtherInfo')";

if($conn->query($sql)===TRUE){
  echo '<script>alert("INSERTED CORRECTLY")</script>' ;
  ?>
  <script type="text/javascript"> 
       window.location="labratory.php";
   </script>
  <?php
}
 
 else{
  echo '<script>alert("not INSERTED succesfully")</script>' ;
  ?>
  <script type="text/javascript"> 
       window.location="laboratory.php";
   </script>
  <?php
}
}
        mysqli_close($conn);
        ?>

</body>


</html>