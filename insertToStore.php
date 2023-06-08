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
$itemid = $_POST['itemid'];
$itemname = $_POST['itemname'];
$category = $_POST['category'];
$itemPrice = $_POST['itemPrice'];
$amount = $_POST['amount'];
$recorded = $_POST['recorded'];
$total = $amount * $itemPrice;

$sql = "INSERT into medicines(itemid,itemname,category,itemPrice,amount,recorded,total)
values('$itemid','$itemname','$category','$itemPrice','$amount','$recorded','$total')";

if($conn->query($sql)===TRUE){
  echo '<script>alert("INSERTED CORRECTLY")</script>' ;
  ?>
  <script type="text/javascript"> 
       window.location="store.php";
   </script>
  <?php
}
 else{
  echo '<script>alert("not INSERTED succesfully")</script>' ;
  ?>
  <script type="text/javascript"> 
       window.location="store.php";
   </script>
  <?php
}
}
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>