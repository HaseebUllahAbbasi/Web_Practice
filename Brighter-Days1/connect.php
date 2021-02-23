<?php
session_start();

/*
$webserver = "bdavidson05.students.cs.qub.ac.uk";
$user = "bdavidson05";
$password = "z59cmrw5gyxfg2kr";
$db = "bdavidson05";
*/

    $connect= mysqli_connect('localhost', 'root', '', 'bdavidson05');
    
$_SESSION['connection_var'] = $connect;
//$connect = mysqli_connect($webserver, $user, $password, $db);
//error check to make sure it works
if ($connect -> connect_errno) {
echo "Failed to connect to database";
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

