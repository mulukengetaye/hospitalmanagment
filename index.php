<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE </title>
    <link rel="stylesheet" href="style/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
  i{
    padding-right: 10px;
  }
  h1{
    padding: 50px;
    position: relative;
    left: 400px;
    color: rgb(9, 83, 243);
    font-size: 50px;
    font:italic;

  }
  h2{
    position: relative;
    left: 150px;
    color: rgb(13, 83, 235);
    font-size: 50px;
    font:italic; 
  }

body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 50%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: whitesmoke;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 0px;
  text-decoration: none;
  font-size: 15px;
  color: black;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: black;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 100px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
span{
  margin-top: 10px;
  color: aquamarine;

}
.linkers{
 position: relative; 
    display: flex;
    flex-direction: row;
    color: aquamarine;
    font-size: 20px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-style: normal;
     left: 60%; 
    margin: 20px;  
    text-decoration: none; 
} 

.linker {
  margin: 20px;  
}
.linker:hover{
  color:aquamarine ;
  background-color: darkcyan;
  border-radius: 10px;
  width: 130px;
  height: 30px;
}
    </style>
</head>

<body>

<div class="header">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="admin.php" class="linker"><i class="fa fa-user-circle-o" style="font-size:32px"></i>Admin login</a>
        <a href="staffLogin.php" class="linker"><i class="fa fa-user-circle-o" style="font-size:32px"></i>Staff login</a>
        <a href="UserLogin.php" class="linker">
            <i class="fa fa-users" style="font-size:32px"></i>User login</a>

    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Login</span>
    <a href="aboutus.php" class="linkers"><i class="fa fa-phone-square" style="font-size:32px"></i>ABOUT US</a>
        <a href="services.php" class="linkers"><i class="fa fa-wrench" style="font-size:32px"></i>SERVICES </a>
    </div>
<div class="con">
    <h1>WELCOME!!!!!!</h1>
    <h2>T2M SPEACIALIZED HOSPITAL</h2>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>

</html>