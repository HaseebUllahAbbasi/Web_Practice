
<?php
include 'header.php';
  $user =  $_POST["user"];
  $password =  $_POST["password"];
  //echo "$user"." this is password "."$password";
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Result of the from</title>
     <style media="screen">
     table
     {
       font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
       border-collapse: collapse;
       width: 100%;
     }
  table td, table th
  {
    border: 1px solid #ddd;
    padding: 8px;
  }

table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}

table th
{
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
     </style>
   </head>
   <body>
     <table>
       <tr>
         <th>Field</th>
         <th>Information</th>
       </tr>
       <tr>
         <td>Name</td>
         <td><?php if($_POST["user"]) { echo $_POST["user"];}
         else {
           echo "not set";
         }?></td>
       </tr>
       <tr>
         <td>Password</td>
         <td><?php if($_POST["password"]){ echo $_POST["password"];  }
         else {
           echo "not set";
         }?></td>
       </tr>
     </table>
   </body>
 </html>
