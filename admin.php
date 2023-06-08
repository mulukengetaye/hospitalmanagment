<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="admin.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin Login</title>
    <style>
        body {

            background-image: url("style/images/adminWalpaper.jpg");
            background-repeat: no-repeat;
            background-size: 100%;

        }

        .admindiv {
            position: absolute;
            background-color: #FBEAEB;
            left: 400px;
            align-items: center;
            height: 600px;
            width: 350px;
            display: flex;
            flex-direction: column;
            border-radius: 40px;
            margin: 10px;
            margin-top: 50px;
            padding: 10px;
            padding-top: 20px;
        }

        .labclass {
            position: relative;
            left: -75px;
            font-size: 20px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight: bold;
            margin-top: 20px;

        }

        .inputclass {
            /* background-color: rgb(134, 132, 132); */
            width: 250px;
            height: 30px;
            border-radius: 5px;
            border-bottom: solid 2px;
            border-top: none;
            border-left: none;
            border-right: none;
        }


        h3 {
            height: 20px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 40px;
            font-weight: bold;


        }

        .btnclass {
            position: relative;
            width: 250px;
            height: 40px;
            color: aquamarine;
            font-size: large;
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
            border-radius: 10px;
            margin-top: 10px;

            margin-top: 20px;
            background-color: rgb(124, 160, 160);
        }

        .btnclass:hover {
            background-color: rgba(24, 102, 30, 0.753);

            color: aquamarine;
        }

        .btncansel {
            position: relative;
            width: 250px;
            height: 40px;
            color: aquamarine;
            font-size: large;
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
            border-radius: 10px;
            margin-top: 10px;
            margin-top: 20px;
            background-color: rgb(204, 152, 92);
        }

        .btncansel:hover {
            background-color: rgba(175, 31, 6, 0.753);

            color: aquamarine;
        }

        .adminlogo {
            height: 150px;
            width: 250px;
            border-radius: 20px;
        }

        .admindiv {
            height: 490px;
            border-radius: 5px;
        }

        .div1 {
            display: flex;
            flex-direction: column;
        }

        .labclass {
            position: relative;
            left: 0px;
            color: #2F3C7E;
        }

        .error {
            color: red;
        }

        .div2 {
            height: 50px;
            width: 100px;
            padding: 20px;
            background-color: antiquewhite;
        }
    </style>

</head>

<body>
    <form id="form" name="form" method="post">
        <div class="admindiv">
            <div class="adm">
                <img src="style/images/adminlogin.jpg" alt="Admin logo" class="adminlogo">
            </div>
            <div class="div1">
                <label for="username" class="labclass">Email</label>
                <span><i class="fa fa-envelope-o" style="font-size:24px"></i>
                    <input type="email" name="email" class="inputclass" placeholder="username" id="username"></span>
                <div class="error"></div>
            </div>
            <div class="div1">
                <label for="password" class="labclass"> Password </label>
                <span><i class="fa fa-lock" style="font-size:24px"></i>
                    <input type="password" name="password" class="inputclass" placeholder="Password" id="password">
                </span>
                <div class="error"></div>
            </div>
            <button name="submit" class="btnclass">Login</button>
            <input type="reset" class="btncansel" value="Cansel">

        </div>

    </form>
    <?php

    if(isset($_POST['submit']))
    { 
      $count=0;
      $res=mysqli_query($conn,"SELECT * FROM emailandpassword WHERE emila='$_POST[email]' && passwd='$_POST[password]';");
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
        <script type="text/javascript"> 
             alert("username and password doesn't match");
             window.location="admin.php";
         </script>
        <?php
      }
      else
      {
        ?>
        <script type="text/javascript">
           window.location="homepage.php";
        </script>
       <?php
      }
    }
    $conn->close();
   ?>

</body>


</html>