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
            <form>
                <div class="inputBox">
                    <input type="text" placeholder="Username">
                </div>
                <div class="inputBox">
                    <input type="password" placeholder="Password">
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
                    <input type="submit" value="Register">
                </div>
                <p class="forget">Already have an account? <a href="index.php">Sign In</a></p>       
</form>
</div>
</div>
</div>
    </section>
</body>
</html>