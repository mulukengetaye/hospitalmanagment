<?php
include "connection.php";
?>

<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
       
        if(isset($_POST['submit'])){
            $pcode = $_POST['pateintCode'];
            $pname = $_POST['Pateintname'];
$date = $_POST['date'];
$age = $_POST['age'];
$disease = $_POST['disease'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$bloodgroup = $_POST['bloodgroup'];
$City = $_POST['City'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$Allocatedoctor = $_POST['Allocatedoctor'];

$sql = "INSERT into PATEINTS(pateintCode,pname,dbrith,age,disease,email,gender,bgroup,city,paddress,contact,allname)
values('$pcode','$pname','$date','$age','$disease','$email','$gender','$bloodgroup','$City','$address','$contact','$Allocatedoctor')";

if($conn->query($sql)===TRUE){
  echo '<script>alert("INSERTED CORRECTLY")</script>' ;
  ?>
  <script type="text/javascript"> 
       window.location="PatientReg.php";
   </script>
  <?php
}
 else{
  echo '<script>alert("not INSERTED succesfully")</script>' ;
  ?>
  <script type="text/javascript"> 
       window.location="PatientReg.php";
   </script>
  <?php

}
}
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>