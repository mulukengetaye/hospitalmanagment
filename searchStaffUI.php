<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <!-- <link rel="stylesheet" href="style/updatedoctor.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .linkers {
            position: relative;
            display: flex;
            flex-direction: row;
            color: aquamarine;
            font-size: 20px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-style: normal;
            left: 65%;
            margin: 20px;
            text-decoration: none;
        }

        * {
            margin: 0px;
            padding: 0px;
        }

        .header {
            background-color: rgba(1, 1, 1, 1);
            height: 70px;
            width: 100%;
            display: flex;
            flex-direction: row;
            margin-top: 0px;
            margin-left: 0px;

            padding-left: 20px;


        }


        .linkers {
            position: relative;
            display: flex;
            flex-direction: row;
            color: aquamarine;
            font-size: 20px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-style: normal;
            left: 70%;
            margin: 20px;
            text-decoration: none;
        }

        .linkers:hover {
            text-decoration: wavy;
            color: black;
            background-color: aquamarine;
            border-radius: 5px;
        }

        .both{
            width: 900px;
            height: 400px;
           /* background-color: white; */
            position: absolute;
            display: flex;
            left: 170px;
            top: 250px;
            flex-direction: column;
            
          /* background-color: rgb(60, 88, 62); */
            border-radius: 20px;
        }
        .empInfo2{
            height: 200px;
            width: 350px;
            display: flex;
            flex-direction: column;
            position: relative;
            top: 20px;
            margin: 10px;
            
            background-color: red;
            left: 50px;
            background-color: rgba(1, 1, 1, 0.3);
          padding: 10px;
          padding-top: 50px;
          border-radius: 10px;
        }
        .empAdd2{
            background-color: green;
            top: 40px;
            height: 200px;
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
        top: 200px;

     }   
     .btnclass2{
        position: absolute;
        left: 80px;
        top: 200px;

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

  .body22 {
    background-image: url("style/images/homepageback.jpg");
    /* background-repeat: no-repeat; */
    background-size: 100%;
    
}
.staf2{
    display: flex;
    flex-direction: row;
}
.label2{
    padding: 10px;
    color: aqua;
}
i{
 
    margin-right: 10px;
}
table, th, td {
    border: 2px solid green;
  color:blue;


}
table{
    position: relative;
    left: 250px;
}
    </style>

</head>

<body class="body22">
    <div class="header">


        <a href="index.php" class="linkers"><i class="fa fa-home" style="font-size:24px"></i>HOME</a>
        <a href="staffregister.php" class="linkers"><i class="fa fa-angle-double-left" style="font-size:24px"></i>BACK</a>
    </div>

    <div class="both">
        <h3> Search Staff Information</h3>
        <h2> Delete Staff Information</h2>
        <form  method="post" id="form" name="form">
            
            <div class="empInfo2">

                <div class="staf2">
                    <label for="empId" class="label2">Emp_ID</label>
                    <input type="text" name="empId" class="input" placeholder="employee id...." id="empId">
                    <div class="error"></div>
                </div>

                <div class="btnclass2">
                    <input type="submit" name="search" value="SEARCH" class="save">
                    <input type="reset" name="reset" value="CANCEL" class="save">
                </div>

            </div>
        </form>
        <form id="form" method="post">
            <div class="empAdd2">

                <div class="staf2">
                    <label for="empId" class="label2">Emp_ID</label>
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
    <?php 
if(isset($_POST['search'])){
   
   
       $emp_Id = $_POST['empId'];

$sql="select empId,firstname,middlename,phone,stffaddress,proffession,salary from employee WHERE empId ='$emp_Id'";
$result=$conn->query($sql);
if (mysqli_num_rows($result) == 0){
    ?>
    <script type="text/javascript">
         alert("The patient id does't exist!!!");
         window.location="searchStaffUI.php";
     </script>
    <?php
}
if($result->num_rows>0){
echo "<table><tr><th>EMP_ID</th><th>EMP_FIRST_NAME</th><th>EMP_MIDDLE_NAME</th>
<th>PHONE</th><th>ADDRESS</th><th>PROFFESSION</th><th>SALARY</th></tr>";

while($row=$result->fetch_assoc()){
    echo "<tr><td>".$row["empId"]."</td><td>".$row["firstname"]."</td>
    <td>".$row["middlename"]."</td><td>".$row["phone"]."</td>
    <td>".$row["stffaddress"]."</td><td>".$row["proffession"]."</td><td>".$row["salary"]."</td></tr>";
}
}
echo "</table>";

}


?>  
<!-- php file for delete task start -->
<?php
if (isset($_POST['delete'])) {
    $empId = $_POST['empIdd'];
    $sql = "delete from employee WHERE empId='$empId'";
    if ($conn->query($sql) === true) {
        ?>
        <script type="text/javascript"> 
             alert("deleted succesfully");
             window.location="searchStaffUI.php";
         </script>
        <?php
      
    } else {
        ?>
        <script type="text/javascript"> 
             alert("not deleted succesfully");
             window.location="searchStaffUI.php";
         </script>
        <?php
        
    }

}
$conn->close();

?>
</body>


</html>