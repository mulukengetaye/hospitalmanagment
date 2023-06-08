<?php
include "connection.php";
?>


<!DOCTYPE html>
<html>
 
<head>
    <title>Insert  page</title>
</head>
 
<body>
    <center>
        <?php
    
       
        if(isset($_GET['submit'])){
//
$staffcode2 = $_GET['staffcode2'];
$date2 = $_GET['date2'];
$mark2 = $_GET['mark2'];
$perm2 = $_GET['perm2'];
$reason2 = $_GET['reason2'];

$sql2 ="UPDATE ATTENDANCE SET date='$date2',mark='$mark2',
permission='$perm2', reason='$reason2' WHERE empid='$staffcode2'";

if($conn->query($sql2)===TRUE){
    echo '<script>alert("UPDATED CORRECTLY")</script>' ;
    ?>
    <script type="text/javascript"> 
         window.location="staffregister.php";
     </script>
    <?php
}
   else{
    echo '<script>alert("not UPDATED succesfully")</script>' ;
    ?>
    <script type="text/javascript"> 
         window.location="attendance.php";
     </script>
    <?php
    
  }
}
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>