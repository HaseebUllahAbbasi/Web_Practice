<?php

session_start();
if($_SESSION['Yes_counter']>=6)
{
    header("Location: yes_risk.php");
}
else if($_SESSION['Yes_counter']<6)
{
    header("Location: yes_lite.php");
}
?>
