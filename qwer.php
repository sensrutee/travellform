<?php

$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $gender = $_POST['gender'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `email`, `phone`, `gender`, `other`, `date and time`) VALUES ('$name', '$age', '$email', '$phone', '$gender', '$desc', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for 
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>
            Travel form
        </title>
        <link rel="stylesheet" href="wwww.css">
    </head>
    <body>
        <img class="pg"src="uu.jpg" alt="univ">
        <div class ="container">
            <h3>UNIVERSITY OF KALYANI</h3>
            <h4>Travel form-</h4>
            <p>Enter your details here:  </p>
            <?php
            if($insert ==true)
            {
                echo "<p class= 'submitmsg'>Thanks for submitting...</p>";
            }
?>
            <form action="qwer.php" method="post">
                <div class="srutee">
                    <input type="text" name="name" id="name" placeholder="enter your name here"><br>
                    <input type="text" name="age" id="age" placeholder="enter your age here"><br>
                
                    <input type="email" name="email" id="email" placeholder="enter your emaid-id here"><br>
                    <input type="phone" name="phone" id="phone" placeholder="enter your phonenumber here"><br>
                </div>
                <div class="sen">
                    <legend >choose your gender</legend>
                    <input type="radio" name="gender" id="gender"  value="female">F<br>
                    <input type="radio" name="gender" id="gender"  value="male">M<br>
                    <br>
                </div>
                
                <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter any information here..."></textarea><br>
                <input type="submit" class="bton" value="Submit">
                <input type="reset" class="bton" value="Reset">

            </form>
        </div>
        <script src="srutee.js"></script>
        
    </body>
</html>