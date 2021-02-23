<?php
    session_start();
    if($_SESSION['counter']<10)
    {
        $connection = mysqli_connect("localhost","root","","bdavidson05");
        $username = $_SESSION['email'] ;
        $col_no = $_SESSION['col_num'];

        
        if($_SESSION['counter']==0)
        {
            $date = date("d-m-Y");
            $sql = "INSERT INTO `responses`( `Date`, `User`, `$col_no`) VALUES ('$date','$username','no' )";
             $connection->query($sql);
        }
        else 
        {
            $sql = "UPDATE `responses` SET `$col_no`='no' where `User` = '$username'";
             $connection->query($sql);
          
            
        }
        
        
        if($_SESSION['No_counter']<10)
        {
            $_SESSION['No_counter']++;
        }
        $_SESSION['counter']++;
        
        if($_SESSION['counter']<10)
            header("Location: questions.php");
        else
        {
            header("Location: response.php");
        }
    }
    else
    {
        header("Location: response.php");
    }
?>
