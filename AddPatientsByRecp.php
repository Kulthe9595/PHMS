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
            echo '<script>alert("New Patient Saved.")</script>';
        }else{
            echo '<script>alert("New Patient Is Not Saved.")</script>';
        }
    }else{
        echo '<script>alert("Please Enter All details.")</script>';
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
<h3>Patients Basic Information :</h3><br>
<!-- Add Patitents detils  -->
<form method="POST">
    <div class="form">
        <div class="inputBox">
            <label>Name</label>&nbsp;
            <input type="text" name="pname" require>&emsp;
        

            <label>City</label>&nbsp;
            <input type="text" name="pcity" require>&emsp;

            <label>Mobile</label>&nbsp;
            <input type="number" name="pmob" require pattern="[789][0-9]{9}">&emsp;
            <br><br>&emsp;

            <label>Age</label>&nbsp;
            <input type="number" name="age" require>&emsp;

            <input type="radio" name="genderrediobtn" value="Male">&emsp;Male 
            <input type="radio" name="genderrediobtn" value="Female">&emsp;Female

        </div>

        <!-- btn -->
        <div class="inputBox" style="float: right;"><br>
            <input type="submit" name ="save">&emsp;
        </div>
</form>
</div>
<!-- Glass container close -->
</div>



    <!-- second containner -->
    <div class="Glasscontiner2">
    <h3>Patients History : </h3><br> 
    <form method="POST">
    <div class="form">
        <div class="inputBox">
            <label>Today's date</label>&nbsp;
            <input type="date" name="pname" value="<?php echo date('Y-m-d'); ?>" require>&emsp;
        

            <label>Next Date Of Visit</label>&nbsp;
            <input type="date" name="pcity" require>&emsp;

            <!-- <label>Mobile</label>&nbsp;
            <input type="number" name="pmob" require pattern="[789][0-9]{9}">&emsp;
            <br><br>&emsp;

            <label>Age</label>&nbsp;
            <input type="number" name="age" require>&emsp;

            <input type="radio" name="genderrediobtn" value="Male">&emsp;Male 
            <input type="radio" name="genderrediobtn" value="Female">&emsp;Female -->

        </div>

        <!-- btn -->
        <div class="inputBox" style="float: right;"><br>
            <input type="submit" name ="save" value="Add">&emsp;
        </div>
</form>

    </div>
    <!-- javascript -->
    <script src="main.js"></script>
</body>
</html>