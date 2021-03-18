<?php
$connection = mysqli_connect("localhost","root","","product_table");
$name =  $_GET['name'] ;
$pass =  $_GET['password'] ;
$email =  $_GET['email'] ;         

         $sql = "INSERT INTO `users_table`( `Name`, `Password`, `Email`) VALUES ('$name','$pass','$email')";
         $result = $connection ->query($sql);
         if($result)
         {
             header("Location: index.php");    
         }
?>
