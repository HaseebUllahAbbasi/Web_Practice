<?php
session_start();


$id = $_GET['id'];

$connection = mysqli_connect("localhost","root","","bdavidson05");
$query = "delete  from abuse_form where id = '$id'; ";
    header("Location: incident_log.php");
$result = $connection ->query($query);
    

?>
<html>
    
</html>
