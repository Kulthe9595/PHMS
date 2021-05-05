<?php
include('recpnavbar.php');
include('connection.php');

// php code 

if(isset($_POST['save'])){
    $pname = $_POST['pname'];
    $pcity = $_POST['pcity'];
    $pmob= $_POST['pmob'];
    $page = $_POST['age'];
    $pgender = $_POST['genderrediobtn'];

    if($pname !="" && $pcity != "" && $pmob !="" && $pgender !=""){

        $sql = "INSERT INTO `Patients`(`name`, `city`, `mobile`, `age`, `gender`) VALUES ('$pname','$pcity','$pmob','$page','$pgender')";
        $result=  mysqli_query($conn,$sql);
    
        if($result){
            echo"Patient saved";
        }else{
            echo"Patient NOt saved";
        }
    }else{
        echo"Please enter all details";
    }
}else{
    // echo"btn  not pressed";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/recp.css">
    <title>Add Patients</title>
</head>
<body>
<div class="Glasscontainner">

<u><h3>Patients Basic Information:</h3></u><br>
<!-- Add Patitents detils  -->
<form method="POST">
    <div class="form">
        <div class="inputBox">
            <label>Name</label>
            <input type="text" name="pname" require>
        

            <label>City</label>
            <input type="text" name="pcity" require>

            <label>Mobile</label>
            <input type="number" name="pmob" require pattern="[789][0-9]{9}">
            <br><br>

            <label>Age</label>
            <input type="number" name="age" require>
    
            <input type="radio" name="genderrediobtn" value="Male">Male
            <input type="radio" name="genderrediobtn" value="Female">Female
        </div>

        <!-- btn -->
        <div class="inputBox">
            <input type="submit" name ="save">
        </div>
</form>
</div>
<!-- Glass container close -->
</div>



    <!-- second containner -->
    <div class="Glasscontiner2">
        <u><h3>Patients History</h3></u>
        

    </div>

</body>
</html>