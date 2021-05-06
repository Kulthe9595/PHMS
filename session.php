<?php

if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    echo$username;
   echo $adminCheckSql = "SELECT * from users where username = '$username'" ;
    $newdata  = mysqli_query($conn,$adminCheckSql);

    if(!mysqli_num_rows($newdata)>0){
      header("location: index.php");
      unset($_SESSION['username']);
    }
  }else{
    header("location: index.php");
  }


  echo"Test file";
  echo"work pendding...!!";
?>
