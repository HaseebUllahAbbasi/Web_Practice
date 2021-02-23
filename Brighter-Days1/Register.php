
<html>
	<head>
		<title>Brighter Days</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="index.html" class="logo">Brighter Days</a>
				<nav class="right">
					<a href="#" class="button alt">Log in</a>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
                                        <li><a href="log.php">Login</a></li>
                                        <li><a href="Register.php">Register</a></li>
				</ul>
				<ul class="actions vertical">
                                    <li><a href="Login.php" class="button fit">Login</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<section id="main" class="wrapper">
                            
                            <form action="reg.php" method="post">
                          <div class="container">
                            <h1>Register</h1>
                            <p>If you are new to the Website please fill in the fields below to create an account</p>
                            <hr>
                            
                            <label for="fname"><b>First Name</b></label>
                            <input type="text" placeholder="Enter First Name" name="fname" id="fname" required>
                            
                            <label for="sname"><b>Surname</b></label>
                            <input type="text" placeholder="Enter Surname" name="sname" id="sname" required>

                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" name="email" id="email" required>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

                            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                             <button class="submit-btn form-control" input name='requestregister' type='submit' id="form-submit">Register</button>
                          </div>

                          <div class="container login">
                              <p>Already have an account? <a href="Login.php">Log in</a>.</p>
                          </div>
                        </form>
				
                         </section                       

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>Get In Touch</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">028 90522764</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">www.BrighterDays.co.uk</a></li>
						<li><span class="icon fa-map-marker"></span> 123 Somewhere Road, Belfast, Northern Ireland</li>
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

	</body>
</html>