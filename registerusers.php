<?php
// adding connection file 
include('connection.php');

// IF user click on register button then line 6 to 19 work
if(isset($_POST['registerbtn'])){
    $username = $_POST['username'];     // accepting user enter username  and store into $username php varible
    $password = $_POST['password'];     // accepting user enter password  and store into $password php varible
    $usertype = $_POST['Usertype'];     // accepting user enter usertype  and store into $usertype php varible

    $sql = "INSERT INTO `users`(`username`, `password`, `usertype`) VALUES ('$username','$password','$usertype')";      // writeing sql for store into db
    $result = mysqli_query($conn,$sql);

    if($result){    //checking user data is store in db or not
        echo"User Registered";  
    }else{
        echo"Sry...!!...User Not Registered...!!";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="Css/style.css">
</head>
<body>
<!-- <center><div class="branding"><h1>PATIENT HISTORY MANAGEMENT SYSTEM</h1></center></div> -->
    <section>
    <div class="color"></div>
    <div class="color"></div>
    <div class="color"></div>
    <div class="box">
        <div class="square" style="--i:0;"></div>
        <div class="square" style="--i:1;"></div>
        <div class="square" style="--i:2;"></div>
        <div class="square" style="--i:3;"></div>
        <div class="square" style="--i:4;"></div>
        <div class="container">
        <div class="form">
            <h2>Register Form</h2>
            <form method="POST">
                <div class="inputBox">
                    <input type="text" placeholder="Username" name="username">
                </div>
                <div class="inputBox">
                    <input type="password" placeholder="Password" name="password">
                </div>
                <div class="inputBox">
                <label >I am a:</label><br>
			    <div class="user">
				<label>
					<input type="radio" name="Usertype" id="Buyer" value="Doctor" >
					<span class="Buyer">Doctor</span>
				</label>
				<label>
					<input type="radio" name="Usertype" id="Seller" value="Receptionlist">
					<span class="Seller">Receptionlist</span>
				</label>
					</div>
				</div>
                <div class="inputBox">
                    <input type="submit" value="Register" name="registerbtn">
                </div>
                <p class="forget">Already have an account? <a href="index.php">Sign In</a></p>       
</form>
</div>
</div>
</div>
    </section>
</body>
</html>