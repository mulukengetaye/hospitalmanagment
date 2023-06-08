<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Page</title>
    <link rel="stylesheet" href="style/store.css">

   
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
</head>

<body>
    <form name="myForm" id="form" action="insertToStore.php" method="post">


        <div class="header">

            
            
            <a href="index.php" class="linkers"><i class="fa fa-home" style="font-size:24px"></i>HOME</a>
            <a href="displayDrug.php" class="linkers"><i class="fa fa-eye" style="font-size:24px"></i>VIEW </a>
            <a href="updatestore.php" class="linkers"><i class="fa fa-edit" style="font-size:24px"></i>UPDATE</a>
         

        </div>
        <div class="both">
            <h3> Drug Management Form</h3>
            <div class="empInfo" id="storeinfo">

                

                <div class="div1">
                    <label for="Itemid" class="label">Item ID</label>
                    <input type="text" name="itemid" id="Itemid" class="input" placeholder="items id">
                    <div class="error"></div>
                </div>

                <div class="div1">
                    <label for="ItemName" class="label">Item Name</label>
                    <input type="text" name="itemname" class="input" id="ItemName" placeholder="items name">
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
                    <input type="number" name="itemPrice" class="input" id="price" placeholder="items price for each">
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
                <button name="submit" class="save">Save</button>
                <button  type="reset" class="save">Cansel</button>

            </div>

        </div>

    </form>
</body>
<script type="text/javascript" src="javascript/validationStoreInput.js">

    

</script>

</html>