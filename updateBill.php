<?php
include "connection.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Bill</title>
    <link rel="stylesheet" href="style/billPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    
</style>
</head>

<body>

    <div class="header">

        <a href="index.php" class="linkers"><i class="fa fa-home" style="font-size:24px"></i>HOME</a>
        <a href="BillManagment.php" class="linkers"><i class="fa fa-angle-double-left" style="font-size:24px"></i>BACK</a>
        

    </div>
    <form name="myForm" id="form" method="POST" onsubmit="return validateForm()">

        <div class="diveinfo">
            <h3>Update Bill Form</h3>
            <div class="div1">
                <label for="cardno">Pateint Code</label><br>
                <input type="text" name="cardNo" id="cardno" class="inptext" placeholder="Please Enter CardNo.....">
                <div class="error"></div>
            </div>
            <div class="div1">
                <label for="amount">Service Price</label><br>
                <input type="number" name="amount" id="amount" class="inptext"
                    placeholder="please enter the amount......">
                <div class="error"></div>
            </div>
            <div class="div1">
                <label for="price">Bed Price</label><br>
                <input type="number" name="price" id="price" class="inptext" placeholder="Bed Price......">
                <div class="error"></div>
            </div>
            <div class="div1">
                <label for="noday">Number of Days</label><br>
                <input type="number" name="noday" id="noday" class="inptext" placeholder="Number of days......">
                <div class="error"></div>
            </div>

            <div class="div1">
                <label for="roomno">Room Number </label><br>
                <input type="number" name="roomno" id="roomno" class="inptext" placeholder="Room Number ......">
                <div class="error"></div>
            </div>
            <div class="div1">
                <label for="nameacceptor"> Acceptor Name</label><br>
                <input type="text" name="nameacceptor" id="nameacceptor" class="inptext"
                    placeholder=" Price Acceptor......">
                <div class="error"></div>
            </div>

            <div class="div2">
                <input type="submit" name="update" id="btnsubmit" class="button">
                <input type="reset" name="reset" class="button">
            </div>
        </div>

    </form>
    <?php
if (isset($_POST['update'])) {

    $cardNo  = $_POST['cardNo'];
    $amount = $_POST['amount'];
    $roomno = $_POST['roomno'];
    $price = $_POST['price'];
    $noday = $_POST['noday']; 
    $nameacceptor = $_POST['nameacceptor'];
    $total = $amount+( $price * $noday);

    $sql ="UPDATE billtable SET nameacceptor='$nameacceptor',amount='$amount',
    	price='$price',noday='$noday',total='$total', roomno=$roomno WHERE cardNo ='$cardNo '";
             if ($conn->query($sql) === TRUE) {
                echo '<script>alert("UPDATED CORRECTLY")</script>';
                ?>
                <script type="text/javascript"> 
                     window.location="updateBill.php";
                 </script>
                <?php
 } else {
                 echo '<script>alert("NOT UPDATED SUCCESSFULLY")</script>';
                 ?>
                 <script type="text/javascript"> 
                      window.location="updateBill.php";
                  </script>
                 <?php
             }

}


?>
<script>
    function validateForm() {
        // Get form inputs and trim leading/trailing whitespace
        var cardno = document.forms["myForm"]["cardNo"].value.trim();
        var amount = document.forms["myForm"]["amount"].value.trim();
        var price = document.forms["myForm"]["price"].value.trim();
        var noday = document.forms["myForm"]["noday"].value.trim();
        var roomno = document.forms["myForm"]["roomno"].value.trim();
        var nameacceptor = document.forms["myForm"]["nameacceptor"].value.trim();

        // Define regular expression patterns for validation
        var cardNoPattern = /^[a-zA-Z0-9]+$/;

        // Validate cardNo
        if (cardno == "") {
            document.getElementById("cardno-error").innerHTML = "Patient Code must be filled out";
            return false;
        } else if (!cardNoPattern.test(cardno)) {
            document.getElementById("cardno-error").innerHTML = "Please enter a valid Patient Code consisting of letters and/or numbers";
            return false;
        }

        // Validate amount
        if (amount == "") {
            document.getElementById("amount-error").innerHTML = "Service Price must be filled out";
            return false;
        }

        // Validateprice
        if (price == "") {
            document.getElementById("price-error").innerHTML = "Bed Price must be filled out";
            return false;
        }

        // Validate noday
        if (noday == "") {
            document.getElementById("noday-error").innerHTML = "Number of Days must be filled out";
            return false;
        }

        // Validate roomno
        if (roomno == "") {
            document.getElementById("roomno-error").innerHTML = "Room Number must be filled out";
            return false;
        }

        // Validate nameacceptor
        if (nameacceptor == "") {
            document.getElementById("nameacceptor-error").innerHTML = "Acceptor Name must be filled out";
            return false;
        }

        return true;
    }
</script>
</body>









</html>