<!DOCTYPE html>
<html>
    <head>
        <title>Create User</title>
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
  $email = $_REQUEST['email'] ?? "";
  $mobilenumber =  $_REQUEST['mobilenumber'] ?? "";
  $accountnumber = $_REQUEST['accountnumber'] ?? "";
  $bankname = $_REQUEST['bankname'] ?? "";
   // Performing insert query execution
        // here our table name is user
        $sql = "INSERT INTO  user  VALUES ('$name', 
            '$email','$mobilenumber','$accountnumber','$bankname')";
          
        if(mysqli_query($conn, $sql)){
           echo '<script>alert("Create Account Successfully")</script>' ;
        } 
          
        // Close connection
        mysqli_close($conn);
        ?>

        <div class="login-form">
            <h1>Create User </h1>
                <form>
                    <p>Name</p>
                    <input type="text" name="name" placeholder=" Name">
                   
                    <p>Email </p>
                    <input type="text" name="email" placeholder="Email">
                    <p>Mobile Number</p>
                    <input type="number" name="mobilenumber" placeholder="Mobile Number">
                    <p>Account Number</p>
                    <input type="number" name="accountnumber" placeholder="Account Number">
                    
                    <p>Bank Name</p>
                    <input type="text" name="bankname" placeholder="Bank Name">

                        <button type="submit" name="submit">Create Account </button>
                </form>
        </div>
       
        
    </body>
</html>