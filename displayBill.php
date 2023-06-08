<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display bill</title>
    <style>
table, th, td {
    border: 2px solid green;
  color:blue;
}
table{
    position: relative;
    left: 250px;
    top: 350px;
}
.empAdd2{
            background-color: green;
            top: 40px;
            height: 150px;
            width: 350px;
            display: flex;
            flex-direction: column;
            position: absolute;
            margin: 10px;
            left: 500px; 
            background-color: rgba(1, 1, 1, 0.3);
            padding: 10px;
            padding-top: 50px;
            border-radius: 10px;
        }
        .save{
           
  height: 25px;
  margin-left: 20px;
    border-bottom-color: red;
    border-top-color: green;
    background-color: rgba(1, 1, 1, 0.2);
    color: #CCF381;
    width: 80px;
    margin-right: 10px;
}

.save:hover {
    color: black;
    background-color: white;
}

     .btnclass22{
        position: absolute;
        left: 80px;
        top: 130px;

     }   
   
     .input{
        height: 25px;
width: 220px;
     }
  h3{
    position: relative;
    left: 100px;
font-size: 20px;
color: aquamarine;
top: 10px;
  }
  h2{
    position: absolute;
    left: 550px;
    top: 10px;
    font-size: 20px;
    color: aqua;
  }
  h3{
    position: absolute;
    left: 550px;
    top: 310px;
    font-size: 20px;
    color: aqua;
  }
  body {
    background-image: url("style/images/homepageback.jpg");
    /* background-repeat: no-repeat; */
    background-size: 100%;
    
}
</style>
</head>
<body>
<div class="both">
        <h2> Delete Bill Information</h2>
        
        <form id="form" method="post">
            <div class="empAdd2">

                <div class="staf2">
                    <label for="empId" class="label2">Items_ID</label>
                    <input type="text" name="empIdd" class="input" placeholder="employee id...." id="empId">
                    <div class="error"></div>
                </div>
                <div class="btnclass22">
                    <input type="submit" name="delete" value="DELETE" class="save">
                    <input type="reset" name="reset" value="CANCEL" class="save">
                </div>
            </div>
        </form>

    </div>
    
<!-- php file for delete task start -->
<?php
if (isset($_POST['delete'])) {
    $items_id = $_POST['empIdd'];
    $sql = "delete from billtable WHERE itemid ='$items_id'";
    // DELETE t1 FROM billtable AS t1 JOIN PATEINTS AS t2 ON t1.cardNo = t2.pateintCode WHERE pateintCode='535353';

    if ($conn->query($sql) === true) {
     
       echo'<script>alert("deleted succesfully")</script>';
      
    } else {
        echo'<script>alert("Not delete succesfully")</script>';
        
    }

}


?>
<?php 
$sql="select *from billtable";
$result=$conn->query($sql);
if($result->num_rows>0){


    //
    echo "<h3>Bill Information View</h3>";
echo "<table><tr><th>PATIENT_ID</th><th>ITEM_ID</th><th>AMOUT</th><th>PRICE</th>
<th>N_DAYS</th><th>TOTAL</th><th>ROOM_NO</th><th>ACC_NAME</th><th>REG_DATE</th>";

while($row=$result->fetch_assoc()){
    echo "<tr><td>".$row["cardNo"]."</td><td>".$row["itemid"]."</td><td>".$row["amount"]."</td>
    <td>".$row["price"]."</td><td>".$row["noday"]
    ."</td><td>".$row["total"]."</td><td>".$row["roomno"]."</td><td>".$row["nameacceptor"]."</td>
    <td>".$row["reg_date"]."</td></tr>";

}
echo "</table>";

}else{
    echo "0 result";
}
$conn->close();

?>  
</body>
</html>

