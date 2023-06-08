<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> DISPLAY ATTENDANCE </title>
    <style>
table, th, td {
    border: 2px solid green;
  color:blue;
}
table{
    position: relative;
    left: 250px;
}
h2{
    position: relative;
    left: 350px;
}
</style>
</head>
<body>
<?php 
$dbServerName="localhost";
$dbUserName="root";
$dbPassword="";
$dbName="HMS";
$conn=new mysqli($dbServerName,$dbUserName,$dbPassword,$dbName);
if($conn->connect_error){
    die("connection field".$conn->connect_error);
}
$sql="select start_day,symptom,reason,how_long,test,test_type,txt_view,reg_date from pateints";
$result=$conn->query($sql);
if($result->num_rows>0){


    //
    echo "<h2>DOCTORS Information View</h2>";
echo "<table><tr><th>START_DATE</th><th>SYMPTOM</th><th>REASON</th><th>HOW_LONG</th>
<th>TEST</th><th>TEST_TYPE</th><th>OTHER_INFO</th><th>REG_DATE</th>";

while($row=$result->fetch_assoc()){
    echo "<tr><td>".$row["start_day"]."</td><td>".$row["symptom"]."</td><td>".$row["reason"]."</td>
    <td>".$row["how_long"]."</td><td>".$row["test"]."</td>
    <td>".$row["test_type"]."</td><td>".$row["txt_view"]."</td><td>".$row["reg_date"]."</td></tr>";

}
echo "</table>";

}else{
    echo "0 result";
}
$conn->close();

?>  
</body>
</html>

