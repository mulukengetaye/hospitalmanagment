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
        .laba{
            color: wheat;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <form class="myform" id="form" method="post">
        <div class="divlogin">
            <div class="userlogindiv">
                <img src="style/images/userlogin.jpg" alt="User login logo" class="userlogo">
            </div>
            <div class="div1">
                <label for="empId" class="laba">Patient_ID </label>
                <span><i class="fa fa-lock" style="font-size:24px"></i>
                    <input type="text" name="P_Id" class="input" placeholder="empId" id="empId">
                </span>
                <div class="error"></div>
            </div>
            <div class="div1">
                <label for="email" class="laba">Email </label>
                <span><i class="fa fa-envelope-o" style="font-size:24px"></i>
                    <input type="email" name="email" class="input" placeholder="email" id="email">
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
    $res = mysqli_query($conn, "SELECT * FROM  pateints WHERE pateintCode='$_POST[P_Id]' && email='$_POST[email]';");
    $count = mysqli_num_rows($res);
            if ($count == 0) {
                ?>
        <script type="text/javascript">
             alert("username and password doesn't match");
             window.location="UserLogin.php";
         </script>
        <?php
} else {
                
                    ?>
        <script type="text/javascript">
           window.location="userSearch.php";
        </script>
       <?php
}
        }


$conn->close();
?>
</body>


</html>