<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table, th, td {
    border: 2px solid green;
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
$dbServerName="localhost";
$dbUserName="root";
$dbPassword="";
$dbName="HMS";
$conn=new mysqli($dbServerName,$dbUserName,$dbPassword,$dbName);
if($conn->connect_error){
    die("connection field".$conn->connect_error);
}
$sql="select *from PATEINTS";
$result=$conn->query($sql);
if($result->num_rows>0){
    echo "<h2>Patient Information</h2>";
echo "<table><tr><th>PATIENT ID</th><th>PATIENT NAME</th><th>DATE OF BIRTH</th><th>AGE</th><th>DISEASE</th><th>GENDER</th><th>BLOOD GROUP</th><th>CITY</th><th>ADDRESS</th><th>CONTACT</th><th>ALLOCATOR NAME</th></tr>";

while($row=$result->fetch_assoc()){
    echo "<tr><td>".$row["pateintCode"]."</td><td>".$row["pname"]."</td><td>".$row["dbrith"]
    ."</td><td>".$row["age"]."</td><td>".$row["disease"]."</td><td>".$row["gender"]."</td>
    <td>".$row["bgroup"]."</td><td>".$row["city"]."</td>
    <td>".$row["paddress"]."</td><td>".$row["contact"]."</td><td>".$row["allname"]."</td></tr>";

}
echo "</table>";

}else{
    echo "0 result";
}
$conn->close();

?>  
</body>
</html>

