<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
        $servername ="localhost";
        $username = "root";
        $password = "";
        $database_name = "HMS"; 
        $conn = new mysqli($servername , $username,  $password, $database_name);
         
        if($conn -> connect_error){
            die("ERROR: Could not connect. "
                . $conn -> connect_error);
        }
    
        if(isset($_POST['submit'])){
$empId = $_POST['empid'];
$firstname = $_POST['fname'];
$middlename = $_POST['mname'];
$lastname = $_POST['lname'];
$dbrith = $_POST['dbrith'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$region = $_POST['region'];
$stffaddress = $_POST['address'];
$proffession = $_POST['proffession'];
$salary = $_POST['salary'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordConf = $_POST['passwordConf'];

$sql2 = "INSERT into emailandpassword(emila,passwd,passconf)
values('$email','$password','$passwordConf')";

$sql = "INSERT into employee(empId,firstname,middlename,lastname,dbrith,age,
gender,phone,country,region,stffaddress,proffession,salary)
values('$empId','$firstname','$middlename','$lastname','$dbrith','$age',
'$gender','$phone','$country','$region','$stffaddress','$proffession','$salary')";

if($conn->query($sql)===TRUE){
  echo '<script>alert("INSERTED CORRECTLY")</script>' ;
  ?>
  <script type="text/javascript"> 
       window.location="staffregister.php";
   </script>
  <?php
}
 
 else{
  echo '<script>alert("not INSERTED succesfully")</script>' ;
  ?>
  <script type="text/javascript"> 
       window.location="staffregister.php";
   </script>
  <?php
}
if($conn->query($sql2)===TRUE){
    echo '<script>alert("Password INSERTED CORRECTLY")</script>' ;
    ?>
    <script type="text/javascript"> 
         window.location="staffregister.php";
     </script>
    <?php
}
   else{
    echo '<script>alert("not INSERTED succesfully")</script>' ;
    ?>
    <script type="text/javascript"> 
         window.location="staffregister.php";
     </script>
    <?php
  }
}
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>