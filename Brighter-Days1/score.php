<?php 
include 'quizclass.php';
$db = new Quiz();
$score = 0;
foreach($_POST as $k=>$v)
{
	$answer = $db->answer($k);
	if($answer[0][2] == $v) { // option is correct
		$score++;
	}
}
$score = $score	/ 10 *100;
if($score < 50)
{
	echo '<h2>You are at a reduced risk</h2>';
}
else {
	echo '<h2>You are a high risk and shoud contact the police or view are resources section '.$score.'%.</h2>';
}
?>
