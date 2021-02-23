
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


/**
if(file_exists("upload/".$_FILES["fileToUpload"]["name"]))
{
    echo 'file is already there ';
}
 * 
 */
//else
{
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "upload/".$_FILES["fileToUpload"]["name"]);
    $id_view = $_SESSION['id_view']; 
    echo "$id_view";
    $sql = "UPDATE `abuse_form` SET `date_data`='$date_data', `abuse_type`='$type_abuse', `description`='$descr', `emotions`='$emotions', `picture`='$images' where `id`= $id_view";
    $res = $connection->query($sql);
    echo "$res";
    if($res)
    {
        echo "alert('Data Has been Updated');";
        header("Location: view_data.php");
    }
    else 
    {
        echo 'not inserted';
    }
    
}

?>