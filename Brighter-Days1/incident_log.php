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
                <style>
                    .btn-group  
                    {
                            background-color: #25a2c3; /* Green background */
                            border: 1px solid #25a2c3; /* Green border */
                            color: white; /* White text */
                            padding: 10px 24px; /* Some padding */
                            cursor: pointer; /* Pointer/hand icon */
                            margin: 1em;
                            margin-top: 0.5em;
                    }

                          /* Clear floats (clearfix hack) */
                          /* Add a background color on hover */
                          .btn-group :hover {
                            background-color: lightblue;
                          }

                </style>
</head>
	<body>

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
                            <a href="SecureHome.php" class="logo">Brighter Days</a>
			
			</header>

                
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
                <div class="align-right">
                    
                    <a  href="index.html" class="button small">safe Zone</a>
                     
                     <br>
                    </br>
                </div>
                
                <section id="two" class="wrapper style1 special" style="margin-bottom: 2em" >
                    <div class="inner">
                        <h2>Incident Log </h2>
                        <p>Browse below to view all your previously created Logs  </p>
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
                
                
                 <?php
                 /*
                 $username = $_SESSION['email'] ;
                 $connection = mysqli_connect("localhost","root","","bdavidson05");
                 $sql = "SELECT * FROM `abuse_form` where username = '$username'";
                  $graph_res = $connection ->query($sql);
                 $count = 1;
                 $var = "";
                  while(
                    $graph_row = $graph_res->fetch_assoc())
                 {
                  * 
                  */
                      
                      /*
                      echo " <br>
                
                <div  >
                    <center>
                        <div style=' background-color: #f6755e;'>".$graph_row['date_data']."  </div>
                    </center>
                        <div class='btn-group'>
                            <span style ='margin:1em;'>".$count++."</span>
                          <button onClick = ".$count."> View</button>
                          <button>Modify</button>
                          <button>Delete</button>
                        </div>
                </div>   ";
                      
                       * 
                       */
                 /*      
                 echo ' <br>
                
                <div>
                    <center>
                        <div style=" background-color: #f6755e;"> '.$graph_row["date_data"].'  </div>
                                 
                        </center>
                        <div class="btn-group">
                            <span style ="margin:1em;">'.$count++.'</span>
                                <button onClick = "alert( \'ok\' )" > View</button>
                           <button onClick = " <?php header(\'Location: index.html\'); ?> " >Modify</button>
                          
                            <button>Delete</button>
                        </div>   
                </div> ';
                
                 }
                  * 
                  */
                 
                $username = $_SESSION['email'] ;
                $connection = mysqli_connect("localhost","root","","bdavidson05");
                $sql = "SELECT * FROM `abuse_form` where username = '$username'";
                $result = $connection ->query($sql);
                $row = $result->fetch_all();
                
                $count = 1;    
                            
                ?>
                
                    
                        
                        
                        <?php foreach ($row as $value): ?>
                
                <div style="margin: 2em;">
                    <center>
                        <div style=" background-color: #f6755e; margin-bottom: 1em;"><?php echo $value['2'] ?></div>
                    </center> 
                            <?php echo $count++ ?>
                    <a href="view.php?id= <?php echo $value['0'] ?>"  class="btn-group"  >View </a>  
                            <!-- <td><?php// echo $value['0'] ?>    </td> -->
                    <a href="modify_data.php?id= <?php echo $value['0'] ?> " class="btn-group"   >Modify</a>  
                            <a href="delete.php?id= <?php  echo $value['0'] ?> "  class="btn-group"  >Delete</a> 
                    
                </div>
                            
                            
                
                       <?php endforeach; ?>
                    
                
                
                <!--
                <br>
                
                
                
                
                
                <div  >
                    <center>
                        <div style=" background-color: #f6755e;"> Date</div>
                    </center>
                        <div class="btn-group">
                          <button>View</button>
                          <button>Modify</button>
                          <button>Delete</button>
                        </div>
                </div>
                <br>
                
                <div  >
                    <center>
                        <div style=" background-color: #f6755e;"> Date</div>
                    </center>
                        <div class="btn-group">
                          <button>View</button>
                          <button>Modify</button>
                          <button>Delete</button>
                        </div>
                </div>
                
                
                -->
                <div class="align-right" style="margin-top:2em">
                    <a  href="abuse_log.php" class="button small">Add new Record</a>
                    <br>
                    </br>
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

