<?php
// adding connection file 
include('connection.php');



// IF user click on register button then line 6 to 19 work
if(isset($_POST['Loginbtn'])){
    $username = $_POST['username'];     // accepting user enter username  and store into $username php varible
    $password = $_POST['password'];     // accepting user enter password  and store into $password php varible


    $sql = "SELECT * FROM `users` WHERE username = '$username' && password = '$password'";
    $result = mysqli_query($conn,$sql);
    $row = $result->fetch_assoc();
    // print_r($row);
    session_start();
    $_SESSION['username']= $row['username'];
    if($row['usertype'] == 'Doctor'){ 
        echo"Docotor logined"; 
        header("location: Drhomepage.php");
    }else if($row['usertype'] == "Receptionist"){
        echo"Receptionist Logged "; 
        header("location: ReceptionistHomepage.php");
    }else{
        echo"Sry you are not able to login";
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
            <h2>Login Form</h2>
            <form method="POST">
                <div class="inputBox">
                    <input type="text" placeholder="Username" name="username">
                </div>
                <div class="inputBox">
                    <input type="password" placeholder="Password" name="password">
                </div>
                <div class="inputBox">
                    <input type="submit" value="Login" name="Loginbtn">
                </div>
                <!-- <p class="forget">Forget Password?<a href="#">click here</a></p> -->
                <p class="forget">Don't have an account? <a href="registerusers.php">Sign up</a></p>       
</form>
</div>
</div>
</div>
    </section>
</body>
</html>