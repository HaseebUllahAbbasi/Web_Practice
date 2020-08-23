<?php
require 'data.php';
$con = mysqli_connect("localhost","root","","sample");
if($con)
{
  $result  = mysqli_query($con, "Select * from user");
  if($result)
  {
    echo "success<br>"."Returned rows are: " . mysqli_num_rows($result);;
    echo "<br>";
    $user = $_POST["user"];
    $password = $_POST["password"];

/*
    while ($row = mysqli_fetch_assoc($result))
    {
    //  print_r($row); prints the array of object
    if($user==$row['Name'])
      print_r($row);
    }
    */
        echo "<br>";
        echo '<table border = "3px solid blue" style = "padding:10px 20px; margin:20px 10px; background-color:silver;"  >
        <tr>
        <th>Number</th>
        <th>User</th>
        <th>Password</th>
        <th>Age</th>
        </tr>
        ';
        while ($row = mysqli_fetch_assoc($result))
        {

          echo
          "<tr>
            <td>".$row["Number"]."</td>
            <td>".$row["Name"]."</td>
            <td>".$row["Password"]."</td>
            <td>".$row['Age']."</td>
          </tr> ";
        }
        echo "</table>";
  }
  else
  {
    echo "query was not executed";
  }
}
?>
