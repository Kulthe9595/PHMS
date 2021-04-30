<?php
include('Drnavbar.php');
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Dr.css">
    <title>List Of Patients</title>
</head>
<body>
    <div class="bgGlass">
    
    <div class="pageheading"><h1>List of Patients</h1></div>

    <form method="POST">

    <table class="content-table1">
        <thead>
        <tr>
        <th>Name</th>
        <th>City</th>
        <th>Mob</th>
        <th>Action</th>
        </tr>
    </thead>
    <?php

        $sql = "SELECT * FROM `Patients`";
        $result = mysqli_query($conn,$sql);

        while($row = mysqli_fetch_array($result)){
           echo"<tr>";
           echo"<td>".$row['name']."</td>";
           echo"<td>".$row['city']."</td>";
           echo"<td>".$row['mobile']."</td>";
           echo "<td><a href=\"ViewPatientsByDR.php?id=$row[id]\"class=\"btn\">View</a></td>";		
           echo"</tr>";
        }
    ?>
    </form>
    <!-- Glass div end -->
    </div>          
    </table>
</body>
</html>