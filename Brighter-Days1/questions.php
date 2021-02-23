

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
                <link rel="stylesheet" href="assets/css/angular_btn.css">
                
                
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
                <div class="align-right">
                    
                        <a href="index.html" class="button small" style="margin-top: 1em; margin-right: 1em;">safe Zone</a>                     
                     <br>
                    </br>
                </div>
                <?php 
                session_start();
                $user_1 =  $_SESSION['email'];
               // echo "$user_1";
                
              //  echo '';
                ?>                
                <section id="two" class="wrapper style1 special" style="margin-bottom: 2em" >
                    <div class="inner">
                        <h2>Question : <?php
                        
                            $counter =  $_SESSION['counter']+1;
                            
                            if($counter<=10)
                                echo "$counter";
                            
                        
                        ?> </h2>
                        <p>
                            <?php
                            $counter =  $_SESSION['counter'];
                            
                            if($counter==0)
                            {
                                $connect = new mysqli('localhost', 'root', '', 'bdavidson05');
                                $sql = "SELECT * FROM `responses` WHERE User = '$user_1'";
                                //$result = $connect ->query($sql);
                                $result = $connect->query($sql);
                                $rows=$result->num_rows;
                                if($rows==1)
                                {
                                    echo "<script> alert('Already Registerd , retake or can modify data');</script>";
                                    header("Location: yes_lite.php");
                                }   
                            }
                            
                            if($counter<10)
                            {
                            

                                $array_nums = $_SESSION['array_list'];
                                
                                //$sql = "SELECT * FROM 'question_table' WHERE id = $counter";
                                $connect = new mysqli('localhost', 'root', '', 'bdavidson05');
                                $num = $array_nums[$counter];
                                $_SESSION['col_num'] = $num;
                                $sql = "SELECT * FROM question_table WHERE id = $num ";
                                 
                                
                               // echo $num;
                                
                                $result = $connect ->query($sql);
                                $row = $result->fetch_assoc();
                                echo $row['question'];
                                $_SESSION['row_result'] = $row;
                              
                                 
                            }
                            
                            ?>  
                        </p>
                    </div>
                    
                </section>
                
        <center style="margin-bottom: 2em">
                <div>
                    <a <?php 
                    ?>  href="no_check.php" class="button small" style="margin-top: 1em; margin-right: 4em;">No</a>
                    <a href="yes_check.php" class="button small" style="margin-top: 1em; margin-right: 4em;">Yes</a>
                    
                </div>
            
        </center>
        
        <div> 
            <!--
            <div><//?php $counter =  $_SESSION['Yes_counter'];  echo "$counter options are made yes" ?> </div>   
            <div><//?php $counter =  $_SESSION['No_counter'];  echo "$counter options are made No" ?> </div>   
        

            --> 
        </div>
           
                
        	<!-- Footer -->
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