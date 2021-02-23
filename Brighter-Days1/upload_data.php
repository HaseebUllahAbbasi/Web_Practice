<?php

session_start();
$connection = mysqli_connect("localhost","root","","bdavidson05");

$username = $_SESSION['email'] ;
$descr = $_POST["descrp"];
$date_data = $_POST["date_data"];
$type_abuse = $_POST["amount"];
$emotions = $_POST["emotions"];
echo $emotions."<br>";
echo $descr ."<br>";
echo $type_abuse."<br>";
echo $date_data."<br>";


$images = $_FILES["fileToUpload"]['name'];
//check function
//

//echo "$images";



    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "upload/".$_FILES["fileToUpload"]["name"]);

    $sql = "INSERT INTO `abuse_form`( `username`, `date_data`, `abuse_type`, `description`, `emotions`, `picture`) VALUES ('$username','$date_data','$type_abuse','$descr','$emotions','$images')";
    $res = $connection->query($sql);
    if($res)
    {
        echo 'data inserted';
        header("Location: view_data.php");

    }
        
    else {
        echo 'not inserted';
    }
    


?>