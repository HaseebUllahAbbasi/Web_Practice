
<!DOCTYPE HTML>

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
                <style>
                    .donate-now {
                                    list-style-type: none;
                                  }

                                  .donate-now li {
                                    float:none;
                                    margin : 1em;
                                    width: 10%;
                                    
                                  }

                                  .donate-now label,
                                  
                                  .donate-now input {
                                    
                                  }

                                  .donate-now input[type="radio"]  {
                                    opacity: 0.01;
                                    z-index: 100;
                                  }
                                  
                                  .donate-now input[type="checkbox"]  {
                                    opacity: 0.01;
                                    z-index: 100;
                                  }

                                  .donate-now input[type="radio"]:checked+label,
                                  .Checked+label {
                                    background: #25a2c3;
                                  }
                                  .donate-now input[type="checkbox"]:checked+label,
                                  .Checked+label {
                                    background: #25a2c3;
                                  }
                                  
                                  

                                  .donate-now label {
                                    padding: 5px;
                                    cursor: pointer;
                                  }

                                  .donate-now label:hover {
                                    background: #DDD;
                                  }
                </style>    
</head>
	<body>
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
                <!-- one -->
                <div class="align-right">        
                    <a href="index.html" class="button small" style="margin-top: 1em; margin-right: 1em;">safe Zone</a>                     
                     <br>
                    </br>
                </div>
                
         <section id="two" class="wrapper style1 special" style="margin: 3em; margin-bottom: 1em;">
                    <div class="inner">
                        <h1>Abuse Logging Form</h1>
                        <p>Please complete the form below to add a new incident to you calender</p>
                    </div>
        </section>
         
             <section style="margin: 5em; margin-top: 2em;">
                 <form style="margin: 2em;" action="upload_data.php"  method="post" enctype="multipart/form-data">
                        <di>
                            <h1>Date of Assault</h1>
                            <input required="" style="width :30%; height: 3em; " type="date" name="date_data" value="" placeholder="Date"   />
                        </di>
                         <div style=" ">
                             <h1 style="margin:1em; margin-left: 0;" >Type of Abuse </h1>    
                         <ul class="donate-now" style="">
                                <li>
                                    <input type="radio" id="Physical" name="amount" value="Physical" />
                                  <label for="Physical" >Physical</label>
                                </li>
                                <li>
                                  <input type="radio" id="Psychological" name="amount" value="Psychological" />
                                  <label for="Psychological">Psychological</label>
                                </li>
                                
                                
                                <li>
                                  <input type="radio" id="Emotional" name="amount" checked="checked"  value="Emotional"  />
                                  <label for="Emotional">Emotional</label>
                                </li>
                                <li>
                                    <input  type="radio" id="Sexual" name="amount" value="Sexual" />
                                  <label for="Sexual">Sexual</label>
                                </li>
                              </ul>
                        </div>
                     <div style="">
                         <h1 >Description</h1>
                            <input style="width :30%" type="text" name="descrp" value="" placeholder="Description"   />
                     </div>
                     <h1>Emotions</h1>    
                         <ul class="donate-now" style="">
                                <li>
                                    <input  type="checkbox" id="Scared" value="Scared" name="emotions" />
                                  <label for="Scared" >Scared</label>
                                </li>
                                <li>
                                  <input type="checkbox" id="Lonely" value="Lonely" name="emotions" />
                                  <label for="Lonely">Lonely</label>
                                </li>
                                <li>
                                  <input type="checkbox" id="Anxious"  value="Anxious" name="emotions" />
                                  <label for="Anxious">Anxious</label>
                                </li>
                                <li>
                                  <input type="checkbox" id="Depressed"  value="Depressed" name="emotions" />
                                  <label for="Depressed">Depressed</label>
                                </li>
                                <li>
                                  <input type="checkbox" id="Angry"  value="Angry" name="emotions" />
                                  <label for="Angry">Angry</label>
                                </li>
                              </ul>
                        </div>
                        <div>
                            <h1 style="margin:1em; margin-left: 0;">Images</h1>
                            <input required="" type="file" name="fileToUpload"  accept="image/*" >
                        </div>
                        <input style="margin:2em; margin-left: 0;" type="submit" >
                 </form>            
                </section>
                
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