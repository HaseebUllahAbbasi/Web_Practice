<?php
$connection = mysqli_connect("localhost","root","","product_table");
$name =  $_GET['name'] ;
$pass =  $_GET['password'];

         $sql = "select * from users_table where Name = '$name' and password = '$pass'";
         $result = $connection ->query($sql);
         $num = $result->num_rows;
         if($num>0)
         {
             header("Location: index.php");    
         }
         else
         {
             header("Location: login.php");    
         }
         
?>
