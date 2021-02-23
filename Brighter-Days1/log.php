
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
                                    <a href="Register.php.php" class="button alt">Register</a>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
                                        <li><a href="Log.php">Login</a></li>
                                        <li><a href="Register.php">Register</a></li>
				</ul>
				<ul class="actions vertical">
                                    <li><a href="Login.php" class="button fit">Login</a></li>
				</ul>
			</nav>

		<!-- Main -->
                <section id="main" class="wrapper">
                            <form action="processlogin.php" method="post">
                          <div class="container">
                            <h1>Login</h1>
                            <p>Please enter your details below to gain access to your account</p>
                            <hr>

                            <label for="email"><b>Email</b></label>
                            <input type="email" placeholder="Enter Email" name="email" id="email" required="">

                            <label for="password"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="password" id="password" required="">

                            <hr>

                       
    
                            <button class="submit-btn form-control" input name='requestlogin' type='submit' id="form-submit">Login</button>

                          </div>
                               
                          <div class="container register">
                              <p>Not Registered? <a href="Register.php">Register</a>.</p>
                          </div>
                        </form>
				
                         </section
                <!-- ABOUT -->
                <!--
                    <section id="about">
                    <div class="container">
                    <div class="row"><center>
                    <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="entry-form">
                        <form action="processlogin.php" method="post">
                    <h2>Welcome, login</h2>
                    <input type="text" name='username' class="form-control" placeholder="Username" required="">

                     <input type="password" name='mypass' class="form-control" placeholder="Password" required="">

                     <center> <a href="passwordreset.php"><span>Forgotten Password</span></a> </center>

                     <button class="submit-btn form-control" input name='requestlogin' type='submit' id="form-submit">Get started</button>

                     </center>
                    </center>

                    </form>
                    </div>
                        </div>
                            </div>
                        
                    </section>
               -->
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