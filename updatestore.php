

<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Store Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="staff.css"> -->
    <link rel="stylesheet" href="style/updateStore.css">
    <style>
   
    </style>

</head>

<body>
    <form name="myForm" id="form" method="post" onsubmit="return validateForm()">


        <div class="header">

        
            <a href="index.php" class="linkers"><i class="fa fa-home" style="font-size:24px"></i>HOME</a>
            <a href="store.php" class="linkers"><i class="fa fa-angle-double-left" style="font-size:24px"></i>BACK</a>
        

        </div>
        <div class="both">
            <h3> Drug Update Form</h3>
            <div class="empInfo" id="storeinfo">

                

                <div class="div1">
                    <label for="Itemid" class="label">Item ID</label>
                    <input type="text" name="itemid" id="Itemid" class="input" placeholder="items id">
                    <div class="error"></div>
                </div>

                <div class="div1">
                    <label for="ItemName" class="label">Item Name</label>
                    <input type="text" name="name" class="input" id="ItemName" placeholder="items name">
                    <div class="error"></div>
                </div>
                <div class="div1">
                    <label for="category" class="label">Category</label>
                    <select name="category" class="input" id="category">
                        <option value="Hypoglycemics ">Hypoglycemics</option>
                        <option value="Analgesics">Analgesics</option>
                        <option value="Anesthetics">Anesthetics</option>
                        <option value="Antibacterials">Antibacterials</option>
                        <option value="Antibiotics">Antibiotics</option>
                        <option value="Antifungals">Antifungals</option>
                    </select>
                    <div class="error"></div>
                </div>
            </div>
            <div class="empAdd" id="storempAdd">
               
                <div class="div2">
                    <label for="price" class="label">Price</label>
                    <input type="number" name="price" class="input" id="price" placeholder="items price for each">
                    <div class="error"></div>
                </div>
                <div class="div2">
                    <label for="amount" class="label">Amount</label>
                    <input type="number" name="amount" class="input" id="amount" placeholder="Items number">
                    <div class="error"></div>
                </div>
                <div class="div2">
                    <label for="recorded" class="label">Recorded by </label>
                    <input type="text" name="recorded" class="input" id="recorded" placeholder="Recorder name">
                    <div class="error"></div>
                </div>

            </div>

            <div class="btnclass" id="btnclassforStore">
                <button type="submit" name="submit" class="save">Save</button>
                <button  type="reset" class="save">Cansel</button>

            </div>

        </div>

    </form>
    <?php
   
        if(isset($_POST['submit'])){
$itemid = $_POST['itemid'];
$itemname = $_POST['name'];
$category = $_POST['category'];
$itemPrice = $_POST['price'];
$amount = $_POST['amount'];
$recorded = $_POST['recorded'];
$total = $amount * $itemPrice;

$sql = "update medicines set itemname='$itemname',category='$category',
itemPrice='$itemPrice',amount='$amount',recorded='$recorded',
total='$total' where itemid='$itemid'";

if($conn->query($sql)===TRUE){
  echo '<script>alert("INSERTED CORRECTLY")</script>' ;
  ?>
  <script type="text/javascript"> 
       window.location="store.php";
   </script>
  <?php
}
 else{
  echo '<script>alert("not INSERTED succesfully")</script>' ;
  ?>
  <script type="text/javascript"> 
       window.location="store.php";
   </script>
  <?php
}
}
        mysqli_close($conn);
        ?>
        <script>
        function validateForm() {
            // Get form inputs and trim leading/trailing whitespace
            var itemid = document.forms["myForm"]["itemid"].value.trim();
            var name = document.forms["myForm"]["name"].value.trim();
            var price = document.forms["myForm"]["price"].value.trim();
            var amount = document.forms["myForm"]["amount"].value.trim();
            var recorded = document.forms["myForm"]["recorded"].value.trim();

            // Define regular expression patterns for validation
            var itemidPattern = /^[a-zA-Z0-9]+$/;
            var namePattern = /^[a-zA-Z ]+$/;
            var pricePattern = /^\d+(\.\d{1,2})?$/;
            var amountPattern = /^\d+$/;

            // Validate item ID
            if (itemid == "") {
                alert("Item ID must be filled out");
                return false;
            }
            else if (!itemidPattern.test(itemid)) {
                alert("Please enter a valid item ID consisting of letters and/or numbers");
                return false;
            }

            // Validate item name
            if (name == "") {
                alert("Item name must be filled out");
                return false;
            }
            else if (!namePattern.test(name)) {
                alert("Please enter a valid item name consisting of letters and/or spaces");
                return false;
            }

            // Validate price
            if (price == "") {
                alert("Price must be filled out");
                return false;
            }
            else if (!pricePattern.test(price)) {
                alert("Please enter a valid price in format xx.xx");
                return false;
            }

            // Validate amount
            if (amount == "") {
                alert("Amount must be filled out");
                return false;
            }
            else if (!amountPattern.test(amount)) {
                alert("Please enter a valid amount consisting of digits only");
                return false;
            }

            // Validate recorded by
            if (recorded == "") {
                alert("Recorded by must be filled out");
                return false;
            }

            return true;
        }
    </script>
</body>


    



</html>