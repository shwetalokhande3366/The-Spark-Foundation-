<!DOCTYPE html>
<html>
    <head>
        <title>Transaction Money</title>
        <link rel="stylesheet" type="text/css" href="./user.css">
    </head>
    <body>

    <?php
  
  $servername = "localhost";
  $username = "root";
  $databasename = "account";
  $password = "";
 $conn = mysqli_connect("localhost", "root", "", "account");
   
 // Check connection
 if($conn === false){
     die("ERROR: Could not connect. " 
         . mysqli_connect_error());
 }
   
 // Taking all 5 values from the form data(input)
 $name =  $_REQUEST['name'] ?? "";
 $number = $_REQUEST['number'] ?? "";
 $amount =  $_REQUEST['amount'] ?? "";
 
  // Performing insert query execution
       // here our table name is money
       $sql = "INSERT INTO user2 VALUES ('$name', 
           '.$number.','.$amount.')";
         
       if(mysqli_query($conn, $sql)){
         
       } 
         
       // Close connection
       mysqli_close($conn);
       ?>

        <div class="login-form">
            <h1>Transaction  </h1>
                <form action="#" method="post">
                    <p>Name</p>
                    <input type="text" name="name" id="name"  placeholder=" Name">
                   
                    <p>Account Number </p>
                    <input type="text" name="number" id="acc" placeholder="Account Number" require>
                    <p>Amount</p>
                    <input type="text" name="amount"  id="ammount " placeholder="Amount" require>
                   
                <button type="submit" value="Transfer" name="submit">Transfer</button>
                </form>
        </div>
    </body>
</html>