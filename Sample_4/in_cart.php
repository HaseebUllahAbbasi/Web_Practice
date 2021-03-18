<?php
session_start();
 $data = $_SESSION['data'];
 $row = $data[$_GET['id']];
 echo ++$row[1];
    $data[$_GET['id']] = $row;
    $_SESSION['data'] =  $data; 
    header("Location: index.php"); 
    ?>
