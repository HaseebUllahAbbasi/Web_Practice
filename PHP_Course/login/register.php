<?php
if(($_POST["Name"]!="") && ($_POST["UName"]!="") && ($_POST["password"]!="") &&
 ($_POST["age"]!=""))
 {
  $Uname =($_POST["UName"]);
  $password =($_POST["password"]);
  $age =($_POST["age"]);
  $Name =($_POST["Name"]);
  $connection = mysqli_connect("localhost","root","","sample");
  if($connection)
  {
    $query = "select * from user";
    $result = mysqli_query($connection,$query);
    if($result)
    {
      $number = mysqli_num_rows($result)+1;
      //$query = "insert INTO user (Number,Name,Password,age) values ("."$number".",".'$Uname'.,.'$password'.,.'$age'.)";
      //$result2 = mysqli_query($connection,$query);

      $stmt = $connection->prepare("insert INTO user (Number,Name,Password,age) values (?,?,?,?)");
      $stmt->bind_param("issi", $number,$Name,$password,$age);
      $result2  =$stmt->execute();

      /*
      i - integer
d - double
s - string
b - BLOB
      */
      if($result2)
      {
        echo "$Name is Added to DB";

              $stmt->close();
              $connection->close();
      }
      else {
        echo "$Name is not added to db";
      }
    }
    else {
      echo "query error";
    }
  }
  else {
    echo "connection not set";
  }
 }
 else {
   echo "not set ";
 }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="index.html">
      <button type="button" name="button">Home</button>
    </a>
  </body>
</html>
