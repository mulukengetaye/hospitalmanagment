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
    left: 300px;
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
$sql="select *from attendance";
$result=$conn->query($sql);
if($result->num_rows>0){


    //
    echo "<h2>Attendance Information View</h2>";
echo "<table><tr><th>EMP_ID</th><th>DATE</th><th>MARK</th><th>PERMISSION</th>
<th>REASON</th>";

while($row=$result->fetch_assoc()){
    echo "<tr><td>".$row["empid"]."</td><td>".$row["date"]."</td><td>".$row["mark"]."</td>
    <td>".$row["permission"]."</td><td>".$row["reason"]."</td></tr>";

}
echo "</table>";

}else{
    echo "0 result";
}
$conn->close();

?>  
</body>
</html>

