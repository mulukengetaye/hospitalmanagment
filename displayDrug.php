<?php 
include "connection.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drug Display</title>
    <style>
table, th, td {
    border: 1px solid green;
  color:blue;
}
table{
    position: relative;
    left: 100px;
}
h2{
    position: relative;
    left: 150px;
}
</style>
</head>
<body>
<?php 
$sql="select * from medicines";
$result=$conn->query($sql);
if($result->num_rows>0){


    //
    echo "<h2>Drug Information View</h2>";
echo "<table><tr><th>Item_ID</th><th>Item_Name</th><th>Catagory</th><th>Item_Price</th>
<th>Amout</th><th>Recorder</th><th>Total</th>";

while($row=$result->fetch_assoc()){
    echo "<tr><td>".$row["itemid"]."</td><td>".$row["itemname"]."</td><td>".$row["category"]."</td>
    <td>".$row["itemPrice"]."</td><td>".$row["amount"]."</td>
    <td>".$row["recorded"]."</td><td>".$row["total"]."</td></tr>";

}
echo "</table>";

}else{
    echo "0 result";
}
$conn->close();


?>  
</body>
</html>



