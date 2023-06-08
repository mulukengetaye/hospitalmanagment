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
      
        if(isset($_POST['insert'])){
$pcode = $_POST['cardNo'];
$itemid = $_POST['itemid'];
$sprice = $_POST['amount'];
$bprice = $_POST['price'];
$ndays = $_POST['noday'];
$rno = $_POST['roomno'];
$accpname = $_POST['nameacceptor'];
$total2= $bprice * $ndays;
$total1 = $total2 + $sprice;
$sql = "INSERT into BILLTABLE(cardNo,itemid,amount,price,noday,total,roomno,nameacceptor)
values('$pcode','$itemid','$sprice','$bprice','$ndays','$total1','$rno','$accpname')";

if($conn->query($sql)===TRUE){
  echo '<script>alert("INSERTED CORRECTLY")</script>' ;
  ?>
  <script type="text/javascript"> 
       window.location="BillManagment.php";
   </script>
  <?php
}
 else{
  echo '<script>alert("not INSERTED succesfully")</script>' ;

  ?>
  <script type="text/javascript"> 
       window.location="BillManagment.php";
   </script>
  <?php
}
}
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>