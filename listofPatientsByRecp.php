<?php
include('recpnavbar.php');
include('connection.php');
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Dr.css">
    <title>Document</title>
</head>
<body>
    <div class="bgGlass">
    <table>
    <form method="POST">
    <table class="content-table1">
    <thead>
    <th>Name</th>
    <th>City</th>
    <th>Mob</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Action</th>
    </thead>
    <?php

        $sql = "SELECT * FROM `Patients`";
        $result = mysqli_query($conn,$sql);

        while($row = mysqli_fetch_array($result)){
           echo"<tr>";
           echo"<td>".$row['name']."</td>";
           echo"<td>".$row['city']."</td>";
           echo"<td>".$row['mobile']."</td>";
           echo"<td>".$row['age']."</td>";
           echo"<td>".$row['gender']."</td>";
           echo "<td><a href=\"editPatientsByRecp.php?id=$row[id]\" class=\"fas fa-edit\"> Edit</a> &nbsp <a class=\"fa fa-trash\" href=\"deletePatientsByRecp.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"> Delete</a></td>";		
           echo"</tr>";
        }
    ?>
    </form>
    </table>
    </div>
</body>
</html>