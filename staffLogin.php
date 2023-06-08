<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style></style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="style/userLogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .div1 {
            display: flex;
            flex-direction: column;
        }
        i{
            color: white;
        }
    </style>
</head>

<body>
    <form class="myform" id="form" method="post">
        <div class="divlogin">
            <div class="userlogindiv">
                <img src="style/images/staff_login.jpg" alt="User login logo" class="userlogo">
            </div>
            <div class="div1">
                <label for="proff" class="labal">Proffession </label>
                <span><i class="fa fa-envelope-o" style="font-size:24px"></i>
                <select name="proffession" class="input" id="proff">

<option value="doctor">Doctor</option>
<option value="Nurse">Nurse</option>
<option value="Pharamasist">Pharamasist</option>
<option value="Labortarist">Labortarist</option>
</select>
                </span>
                <div class="error"></div>
            </div>
            <div class="div1">
                <label for="empId" class="labal">Emp_Id </label>
                <span><i class="fa fa-lock" style="font-size:24px"></i>
                    <input type="text" name="empId" class="input" placeholder="empId" id="empId">
                </span>
                <div class="error"></div>
            </div>
            <button class="btnlogin" name="validate">Login</button>
            <input type="reset" class="btncansel" value="Cansel">
        </div>
    </form>

    <?php

if (isset($_POST['validate'])) {
    $count = 0;
    $proff2 = $_POST['proffession'];
    $res = mysqli_query($conn, "SELECT * FROM employee WHERE empId='$_POST[empId]';");
    $sql1= "SELECT * FROM employee where empId='$_POST[empId]'";
    $count = mysqli_num_rows($res);

    $result=$conn->query($sql1);
if($result->num_rows>0){

while($row=$result->fetch_assoc()){
    $proff=$row["proffession"];
    if ($count == 0) {
        ?>
        <script type="text/javascript">
             alert("username and password doesn't match");
             window.location="admin.php";
         </script>
        <?php
    } else {
        if ($proff2 == $proff && $proff2=="doctor") {
            ?>
        <script type="text/javascript">
           window.location="updatedoctor.php";
        </script>
       <?php
    } elseif($proff2 == $proff && $proff2=="Pharamasist"){
    ?>
    <script type="text/javascript">
       window.location="BillManagment.php";
    </script>
    <?php
    }
    elseif($proff2 == $proff && $proff2=="Labortarist"){
    ?>
    <script type="text/javascript">
       window.location="Labratory.php";
    </script>
    <?php
    }
    elseif($proff2 ==$proff && $proff2=="Nurse"){
    ?>
    <script type="text/javascript">
       window.location="PatientReg.php";
    </script>
    <?php
    }else
    {
    
    }
    }
}

}else{
    echo "0 resulttttttttttt";
}

}
$conn->close();
?>
</body>
 
</html>