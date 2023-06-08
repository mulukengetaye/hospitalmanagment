<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display staff</title>
    <style>
table, th, td {
    border: 2px solid green;
  color:blue;
}
table{
    position: relative;
    left: 50px;
}
h2{
position: relative;
left: 450px;
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
$sql="select *from employee";
$result=$conn->query($sql);
if($result->num_rows>0){
    echo "<h2>Staff Information View</h2>";
echo "<table><tr><th>EMP_ID</th><th>F_NAME</th><th>M_NAME</th><th>L_NAME</th>
<th>D_BRITH</th><th>AGE</th><th>GENDER</th><th>CONTACT</th><th>COUNTRY</th>
<th>REGION</th><th>EMP_ADDRESS</th><th>PROFFESSION</th><th>SALARY</th><th>REG_DATE</th></tr>";

while($row=$result->fetch_assoc()){
    echo "<tr><td>".$row["empId"]."</td><td>".$row["firstname"]."</td><td>".$row["middlename"]."</td><td>".$row["lastname"]."</td><td>".$row["dbrith"]
    ."</td><td>".$row["age"]."</td><td>".$row["gender"]."</td><td>".$row["phone"]."</td><td>".$row["country"]."</td>
    <td>".$row["region"]."</td><td>".$row["stffaddress"]."</td><td>".$row["proffession"]."</td>
    <td>".$row["salary"]."</td><td>".$row["reg_date"]."</td></tr>";

}
echo "</table>";

}else{
    echo "0 result";
}
$conn->close();

?>  
</body>
</html>

