<?php


$username = $_POST["email"];
$mypass = $_POST["password"];
include("connect.php");
//checks to see if the details entered in the login are the same as the details stored in the database
$checkuser = "SELECT * FROM login WHERE username='$username' AND mypass='$mypass'";

$userresult = mysqli_query($connect, $checkuser) or die(mysqli_error($connect));
$_SESSION['email'] = $username;
$counter = 0;
$Yes_counter = 0;
$No_counter = 0;


$_SESSION['counter'] = $counter;
$_SESSION['Yes_counter'] = $Yes_counter;
$_SESSION['No_counter'] = $No_counter;


$i = 0;
$array_nums=array();

while($i<10)
{
        $num = rand(1,12);
    if(!in_array($num,$array_nums))
    {
     	array_push($array_nums,$num);
		//echo($num."\n" );
		$i++; 	
    }
    else
    {
        
     //echo "alraedy there "."\n";
    }
}

$_SESSION['array_list'] = $array_nums;

//echo "$_SESSION";

$result = $connect->query($checkuser);
?>

<?php
$num = $result->num_rows;

 if ($num > 0) 
 {
    echo "<b>You are a Registered User";
    $_SESSION['bdavidsonlogin'] = $username;
    header("Location: SecureHome.php");
}
?>

<!-- Help -->
<section id="about">
<div class="container">
<div style="text-align:center">
<p><i><b>Please check your email or password, and re-enter the correct details</b></i></p>
<p></p>
<i> <center><a href='log.php'>Return to Login</a></center> </i>


</div>
</div>
</section>
