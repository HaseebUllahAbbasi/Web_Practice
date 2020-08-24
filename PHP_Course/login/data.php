<?php
$host = 'localhost';
$host_user = 'root';
$host_pw = '';

$connection =mysqli_connect($host,$host_user,$host_pw) or die("not found the user");
$database=mysqli_select_db($connection,'sample');
if(!$connection)
{
  echo "Connection not created";
}
else
{
  if(!$database)
  {
    echo "database not connected";
  }
  else
  {
    
  }

}


 ?>
