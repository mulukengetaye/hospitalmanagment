
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
            left: 80%;
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
            width: 400px;
            display: flex;
            flex-direction: column;
            position: relative;
            top: 20px;
            margin: 10px;
            left: 300px;
            /* background-color: rgba(1, 1, 1, 0.3); */
            background-color: #8BD8BD;
          padding: 10px;
          padding-top: 50px;

          border-radius: 10px;
        }
      
        .save22{

  height: 35px;
  margin-left: 20px;
    border-bottom-color: red;
    border-top-color: green;
    background-color: rgba(1, 1, 1, 0.2);
    color: #CCF381;
    width: 100px;
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
width: 250px;
     }
  h3{
    position: relative;
    left: 400px;
font-size: 20px;
background-color: blue;
color: aquamarine;
width: 240px;
height: 30px;
top: 10px;
  }
  h2{
    position: absolute;
    left: 850px;
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
    color: #2F3C7E;
}
i{

 margin-right: 10px;
}
table, th, td {
    border: 1px solid green;
  color:#FAD744;
  background-color: #2B3252;


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
       
    </div>

    <div class="both22">
        <h3> Search pateint Information</h3>
      
        <form id="form" name="myForm2" method="post">

            <div class="empInfo">

                <div class="staf2">
                    <label for="empId" class="label">PATIENT ID</label>
                    <input type="text" name="empId" class="input" placeholder="patient id...." id="empId" required>
                    <div class="error"></div>
                </div>

                <div class="btnclass">
                    <input type="submit" name="search" value="SEARCH" class="save22" >
                    <input type="reset" name="reset" value="CANCEL" class="save22">

                </div>

            </div>
        </form>
      

    </div>
    <?php
if (isset($_POST['search'])) {

    $pateintCode = $_POST['empId'];

    $sql = "select pname,disease,email,paddress,contact,allname from PATEINTS WHERE pateintCode='$pateintCode'";
    $sql2 = "select amount,price,noday,total,roomno,reg_date from billtable WHERE cardNo='$pateintCode'";
    $result = $conn->query($sql );
    $result2 = $conn->query($sql2);
    if (mysqli_num_rows($result) == 0){
        ?>
        <script type="text/javascript">
             alert("The patient id does't exist!!!");
             window.location="userSearch.php";
         </script>
        <?php
    }
    else if ($result->num_rows > 0) {
        echo "<table><tr><th>PATIENT NAME</th><th>DISEASE</th><th>EMAIL</th><th>ADDRESS</th><th>CONTACT</th><th>ALLOCATOR NAME</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["pname"] . "</td><td>" . $row["disease"] . "</td><td>" . $row["email"] . "</td>
    <td>" . $row["paddress"] . "</td><td>" . $row["contact"] . "</td><td>" . $row["allname"] . "</td></tr>";
        }
    }
    echo "</table>";
    ///
    if (mysqli_num_rows($result2) == 0){
        ?>
        <script type="text/javascript">
             alert("The patient id does't exist!!!");
             window.location="userSearch.php";
         </script>
        <?php
    }
    else if ($result2->num_rows > 0) {
        echo "<table><tr><th>SERVICE PRICE</th><th>BED PRICE</th><th>NO.DAYS</th><th>TOTAL</th><th>REG_DATE</th></tr>";

        while ($row = $result2->fetch_assoc()) {
            echo "<tr><td>" . $row["amount"] . "</td><td>" . $row["price"] . "</td><td>" . $row["noday"] . "</td>
    <td>" . $row["total"] . "</td><td>" . $row["reg_date"] . "</td></tr>";
        }
    }
    echo "</table>";



}

$conn->close();
?>




</body>


</html>