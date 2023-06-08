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
         
        if(isset($_POST['update'])){ 
            if( $conn->connect_error ) {
               die('Could not connect: ' .  $conn->connect_error );
            }
            else{    
               $pateintCode = $_POST['empId'];
            
             $sql = "DELETE FROM PATEINTS WHERE pateintCode = '$pateintCode'" ;
           
               
               if($conn->query($sql)===true){
                   echo '<script>alert("deleted succesfully")</script>' ;}
                   else {
                       echo '<script>alert("not deleted succesfully")</script>' ;
                   }
           
           }
           }
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>