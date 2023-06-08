
<?php
include "connection.php";
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

        .both22{
            width: 900px;
            height: 400px;

            position: absolute;
            display: flex;
            left: 170px;
            top: 250px;
            flex-direction: column;
            /* background-color: rgba(1, 1, 1, 0.3); */
          /* background-color: rgb(60, 88, 62); */
            border-radius: 20px;
        }
        .empInfo{
            height: 200px;
            width: 350px;
            display: flex;
            flex-direction: column;
            position: relative;
            top: 20px;
            margin: 10px;
            left: 50px;
            background-color: rgba(1, 1, 1, 0.3);
          padding: 10px;
          padding-top: 50px;

          border-radius: 10px;
        }
        .empAdd{
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
        .save22{

  height: 25px;
  margin-left: 20px;
    border-bottom-color: red;
    border-top-color: green;
    background-color: rgba(1, 1, 1, 0.2);
    color: #CCF381;
    width: 80px;
    margin-right: 10px;
}

.save22:hover {
    color: black;
    background-color: white;
}

     .btnclass2{
        position: absolute;
        left: 100px;
        top: 150px;

     }
     .btnclass{
        position: absolute;
        left: 100px;
        top: 150px;

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

  .body2 {
    background-image: url("style/images/homepageback.jpg");
    /* background-repeat: no-repeat; */
    background-size: 100%;

}
.staf2{
    display: flex;
    flex-direction: row;
}
.label{
    padding: 10px;
    color: aqua;
}
i{

 margin-right: 10px;
}
table, th, td {
    border: 1px solid green;
  color:blue;


}
table{
    position: relative;
    left: 250px;
}
    </style>

</head>

<body class="body2">
    <div class="header">


        <a href="index.php" class="linkers"><i class="fa fa-home" style="font-size:24px"></i>HOME</a>
        <a href="PatientReg.php" class="linkers"><i class="fa fa-angle-double-left" style="font-size:24px"></i>BACK</a>
       
    </div>

    <div class="both22">
        <h3> Search pateint Information</h3>
        <h2> Delete pateint Information</h2>
        <form id="form" name="myForm2" method="post">

            <div class="empInfo">

                <div class="staf2">
                    <label for="empId" class="label">PATIENT ID</label>
                    <input type="text" name="empId" class="input" placeholder="patient id...." id="empId" required>
                    <div class="error"></div>
                </div>

                <div class="btnclass">
                    <input type="submit" name="search" value="SEARCH" class="save22" >
                    <input type="reset" name="reset" value="CANCEL" class="save22" onclick="searchPatient.php">

                </div>

            </div>
        </form>
        <form id="form2" name="form2" method="post">
            <div class="empAdd">

                <div class="staf2">
                    <label for="empId" class="label">PATIENT ID</label>
                    <input type="text" name="empIdd" class="input" placeholder="patient id...." id="empId" required>
                    <div class="error"></div>
                </div>
                <div class="btnclass2">
                    <input type="submit" name="delete" value="DELETE" class="save22">
                    <input type="reset" name="reset" value="CANCEL" class="save22">
                </div>
            </div>
        </form>

    </div>
    <?php
if (isset($_POST['search'])) {

    $pateintCode = $_POST['empId'];

    $sql = "select pateintCode,pname,disease,email,paddress,contact,allname from PATEINTS WHERE pateintCode='$pateintCode'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table><tr><th>PATIENT ID</th><th>PATIENT NAME</th><th>DISEASE</th><th>EMAIL</th><th>ADDRESS</th><th>CONTACT</th><th>ALLOCATOR NAME</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["pateintCode"] . "</td><td>" . $row["pname"] . "</td><td>" . $row["disease"] . "</td><td>" . $row["email"] . "</td>
    <td>" . $row["paddress"] . "</td><td>" . $row["contact"] . "</td><td>" . $row["allname"] . "</td></tr>";
        }
    }
    echo "</table>";

}


?>
<!-- php file for delete task start -->
    <?php
if (isset($_POST['delete'])) {
    $pateintCode = $_POST['empIdd'];
    $sql = "delete from PATEINTS WHERE pateintCode='$pateintCode'";
    // DELETE t1 FROM billtable AS t1 JOIN PATEINTS AS t2 ON t1.cardNo = t2.pateintCode WHERE pateintCode='535353';

    if ($conn->query($sql) === true) {
        echo '<script>alert("deleted succesfully")</script>';
    } else {
        echo '<script>alert("not deleted succesfully")</script>';
    }

}
$conn->close();

?>
</body>


</html>