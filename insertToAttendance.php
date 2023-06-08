<!DOCTYPE html>
<html>
 
<head>
    <title>Insert  page</title>
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
$staffCode = $_POST['staffCode'];
$date = $_POST['date'];
$mark = $_POST['mark'];
$perm = $_POST['perm'];
$reason = $_POST['reason'];

$sql = "INSERT into ATTENDANCE(empid,date,mark,permission,reason)
values('$staffCode','$date','$mark','$perm','$reason')";

if($conn->query($sql)===TRUE){
  echo '<script>alert("INSERTED CORRECTLY")</script>' ;}
 else{
  echo '<script>alert("not INSERTED succesfully")</script>' ;

}

if($conn->query($sql2)===TRUE){
    echo '<script>alert("UPDATED CORRECTLY")</script>' ;}
   else{
    echo '<script>alert("not UPDATED succesfully")</script>' ;
  }
}
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>