<?php
include('connection.php');

$id = $_GET['id'];
$sql = "DELETE FROM `Patients` WHERE id = $id";
$result = mysqli_query($conn,$sql);
header('Location:listofPatientsByRecp.php');

?>