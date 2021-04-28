<?php
include('connection.php');
$id = $_GET['id'];

$sql = "SELECT * FROM `Patients` WHERE id = $id";
$result =mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)){
    $name = $row['name'];
    $city = $row['city'];
    $mobile = $row['mobile'];
    $age = $row['age'];
    $gender = $row['gender'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>edit page</h1>
    <form method="POST">
    <label>Name</label>
    <input type="text" name="pname" value="<?php echo$name?>">
    <label>City</label>
    <input type="text" name="pcity" value="<?php echo$city?>">
    <label>Mobile</label>
    <input type="number" name="pmob" value="<?php echo$mobile?>">
    <label>Age</label>
    <input type="number" name="age" value="<?php echo$age?>">
    <!-- gender redio butn -->

    <input type="radio" name="genderrediobtn" value="Male">Male
    <input type="radio" name="genderrediobtn" value="Female">Female

    <!-- btn -->
    <input type="submit" name ="save" value="Update">
    </form>
</body>
</html>