<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing</title>
    <link rel="stylesheet" href="style/billPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
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

.header:hover {
    background-color: rgba(1, 1, 1, 1);
}

.linkers {
    position: relative;
    display: flex;
    flex-direction: row;
    color: aquamarine;
    font-size: 20px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-style: normal;
    left: 55%;
    margin: 20px;
    text-decoration: none;
}
i{
    margin-right: 10px;
}
</style>
<script>
function validateForm() {
  // Get form inputs
  var cardNo = document.forms["myForm"]["cardNo"].value;
  var itemId = document.forms["myForm"]["itemid"].value;
  var amount = document.forms["myForm"]["amount"].value;
  var price = document.forms["myForm"]["price"].value;
  var noDay = document.forms["myForm"]["noday"].value;
  var roomNo = document.forms["myForm"]["roomno"].value;
  var nameAcceptor = document.forms["myForm"]["nameacceptor"].value;

  // Define regular expression patterns for validation
  var cardNoPattern = /^\d{4}$/;
  var itemIdPattern = /^\d{4}$/;
  var amountPattern = /^\d+$/;
  var pricePattern = /^\d+$/;
  var noDayPattern = /^\d+$/;
  var roomNoPattern = /^\d+$/;
  var nameAcceptorPattern = /^[a-zA-Z ]+$/;

  // Validate cardNo
  if (cardNo == "") {
    alert("Patient code must be filled out");
    return false;
  } else if (!cardNoPattern.test(cardNo)) {
    alert("Please enter a valid patient code (4 digits)");
    return false;
  }

  // Validate itemId
  if (itemId == "") {
    alert("Item ID must be filled out");
    return false;
  } else if (!itemIdPattern.test(itemId)) {
    alert("Please enter a valid item ID (4 digits)");
    return false;
  }

  // Validate amount
  if (amount == "") {
    alert("Service price must be filled out");
    return false;
  } else if (!amountPattern.test(amount)) {
    alert("Please enter a valid service price (positive integer)");
    return false;
  }

  // Validate price
  if (price == "") {
    alert("Bed price must be filled out");
    return false;
  } else if (!pricePattern.test(price)) {
    alert("Please enter a valid bed price (positive integer)");
    return false;
  }

  // Validate noDay
  if (noDay == "") {
    alert("Number of days must be filled out");
    return false;
  } else if (!noDayPattern.test(noDay)) {
    alert("Please enter a valid number of days (positive integer)");
    return false;
  }

  // Validate roomNo
  if (roomNo == "") {
    alert("Room number must be filled out");
    return false;
  } else if (!roomNoPattern.test(roomNo)) {
    alert("Please enter a valid room number (positive integer)");
    return false;
  }

  // Validate nameAcceptor
  if (nameAcceptor == "") {
    alert("Acceptor name must be filled out");
    return false;
  } else if (!nameAcceptorPattern.test(nameAcceptor)) {
    alert("Please enter a valid acceptor name");
    return false;
  }

  return true;
}
</script>
</head>

<body>

    <div class="header">

        
        <a href="index.php" class="linkers"><i class="fa fa-home" style="font-size:24px"></i>HOME</a>
        <a href="displayBill.php" class="linkers"><i class="fa fa-eye" style="font-size:24px"></i>VIEW </a>
        <a href="updateBill.php" class="linkers"><i class="fa fa-edit" style="font-size:24px"></i>UPDATE</a>
       
    </div>
    <form action="insertbill.php" name="myForm" id="form" method="POST" onsubmit="return validateForm();">

        <div class="diveinfo">
   <h3>Bill Management Form</h3>
            <div class="div1">
                <label for="cardno">Pateint Code</label><br>
                <input type="text" name="cardNo" id="cardno" class="inptext" placeholder="Please Enter CardNo.....">
                <div class="error"></div>
            </div>
            <div class="div1">
                <label for="itemid">Item ID</label><br>
                <input type="text" name="itemid" id="itemid" class="inptext" placeholder="Please Enter item id.....">
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
                <input type="submit" name="insert" id="btnsubmit" class="button">
                <input type="reset" name="reset" class="button">
            </div>
        </div>

    </form>

</body>



    



</html>