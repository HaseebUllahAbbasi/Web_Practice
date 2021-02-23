<?php
session_start();
$username = $_SESSION['email'] ;
$connection = mysqli_connect("localhost","root","","bdavidson05");
$query = "select * from abuse_form where username = '$username';";
//$result = $connection->query($query);
//$row = $result->fetch_assoc();
$result = $connection ->query($query);
$row = $result->fetch_assoc();
                               
?>

<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Brighter Days</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
                <link rel="stylesheet" href="assets/css/style.css">
        <a href="SecureHome.php"></a>
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
                            <a href="SecureHome.php" class="logo">Brighter Days</a>
			
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
                                    <li><a href="SecureHome.php">Home</a></li>
                                    <li><a href="question1.php">Questionnaire</a></li>
					<li><a href="">Calender</a></li>
                                        <li><a href="Resources.php">Resources</a></li>
					<li><a href="">Alerts</a></li>
				</ul>
                                <ul class="actions vertical">
                                    <li><a href="index.html" class="button fit">Logout</a></li>
				</ul>
				
			</nav>
                <!-- one -->
                <div class="align-right" style="margin: 1em;">
                    
                     <a href="index.html" class="button small">safe Zone</a>
                       
                </div>
                <section id="two" class="wrapper style1 special">
			<div class="inner">
			<h2>Collected Data</h2>
			
                        <p>The Data is Collected from the previous Form .</p>
                        	
                        </div>
                </section>
                <section>
                    <?php
                    
                    $sql_query  = "SELECT COUNT(abuse_type) as nums from abuse_form where abuse_type = 'Physical';";
                    $graph_res = $connection ->query($sql_query);
                    $graph_row = $graph_res->fetch_assoc();
                    $_SESSION["Physical"] = $graph_row["nums"];
                    
                    $sql_query  = "SELECT COUNT(abuse_type) as nums from abuse_form where abuse_type = 'Psychological';";
                    $graph_res = $connection ->query($sql_query);
                    $graph_row = $graph_res->fetch_assoc();
                    $_SESSION["Psychological"] = $graph_row["nums"];
                    
                    
                    $sql_query  = "SELECT COUNT(abuse_type) as nums from abuse_form where abuse_type = 'Sexual';";
                    $graph_res = $connection ->query($sql_query);
                    $graph_row = $graph_res->fetch_assoc();
                    $_SESSION["Sexual"] = $graph_row["nums"];
                    
                    $sql_query  = "SELECT COUNT(abuse_type) as nums from abuse_form where abuse_type = 'Emotional';";
                    $graph_res = $connection ->query($sql_query);
                    $graph_row = $graph_res->fetch_assoc();
                    $_SESSION["Emotional"] = $graph_row["nums"];
                    

                    $dataPoints = array( 
                            array("label"=>"Physical", "y"=> $_SESSION["Physical"]),
                            array("label"=>"Psychological", "y"=>$_SESSION["Psychological"]),
                            array("label"=>"Emotional", "y"=>$_SESSION["Emotional"]),
                            array("label"=>"Sexual", "y"=>$_SESSION["Sexual"])
                        )
                            ?>
                
                    <div>
                        <script>
                        window.onload = function() 
                        {
                            var chart = new CanvasJS.Chart("chartContainer", {
                                animationEnabled: true,
                                title: {
                                        text: "Assualt Attacks"
                                },
                                subtitles: [{
                                        text: ""
                                }],
                                data: [{
                                        type: "pie",
                                        yValueFormatString: "#,##0.00\"%\"",
                                        indexLabel: "{label} ({y})",
                                        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                                }]
                        });
                        chart.render();

                        }
                        
</script>
<div id="chartContainer" style="height: 370px; width: 100% ; margin: 2em"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                    </div>
                </section>
                
                
                
                
                 <section style="margin: 5em; margin-top: 2em;">
                     <div>
                         
                         
                         <h1>Email :  <span> <?php echo  $row['username'];  ?> </span></h1>
                     </div>
                     <div>
                         
                         <h1>Abuse Type : <span>  <?php echo $row['abuse_type']; ?> </span> </h1>
                     </div>
                     <div>
                         <h1>Emotions :  </span>  <?php echo $row['emotions']; ?> </span>  </h1>
                     </div>
                     <div>
                         <h1>Description : </span>  <?php echo $row['description']; ?> </span> </h1>
                     </div>
                     
                     <div>
                         <div>
                             <h1>Images :</h1>
                         </div>
                        <?php echo '<img src="upload/'.$row['picture'].'">'  ?> 
                     </div>
                     <center>
                         <div  style="margin: 1em;">
                    
                             <a href="modify_data.php" class="button small" style="margin: 2em">Modify Data</a>
                       
                        </div>
                     
                         
                     </center>   
                 </section>
                
                        <?php //echo "$username";
                            $_SESSION['id_view'] =   $row['id'];
                         $_SESSION['username'] =   $row['username'];
                         $_SESSION['abuse_type'] =   $row['abuse_type'];
                         $_SESSION['emotions'] =   $row['emotions'];
                         $_SESSION['description'] =   $row['description'];
                         $_SESSION['picture'] =   $row['picture'];
                         
                       // echo $row['id'].$row['username'].$row['date_data'].$row['abuse_type'].$row['emotions'].$row['picture'];
                        
                     //   echo '<img src="upload/'.$row['picture'].'">' ?>
                
                
                <div class="align-right" style="margin:2em">
                    
                           <a href="incident_log.php" class="button small" style="margin-top: 1em; margin-right: 1em;">Incident Log</a>                     
                    
                    
                </div>
                
                <footer id="footer">
				<div class="inner">
					<h2>Get In Touch</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">028 90522764</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">www.BrighterDays.co.uk</a></li>
						<li><span class="icon fa-map-marker"></span> 123 Somewhere Road, Belfast, Northern Ireland </li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Untitled. Design <a href="https://templated.co">TEMPLATED</a>. Images <a href="https://unsplash.com">Unsplash</a>.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
                        <script src="assets/js/main1.js"></script>

	</body>
</html>
