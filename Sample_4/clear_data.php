<?php
session_start();
$item = array (
               array(1,0,"White Shoes",8000),
               array(2,0,"Perfume",6000),
               array(3,0,"Glasses",3000),
               array(4,0,"Football Shoes",10000),
               array(5,0,"Watch",5000),
               array(6,0,"Lamp",10000)
               );
           $_SESSION['data'] = $item;
           echo " <script> alert('Purchases has been Checked Out') </script>";
           header("Location: index.php");
                ?>

