
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CyberCode</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>
	<!-- Loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>
	<!--header-->
	<div class="medsos">
		<div class="container">
			<ul>
				<li>
					<div class="logout">
						<a href="logout.php">Logout</a>
					</div>
				</li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="home.php">CyberCode Profile</a></h1>
			<ul>
				<li class="active"><a href="home.php">HOME</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="skill.php">SKILL</a></li>
				<li><a href="contact.php">CONTACT</a></li>
			</ul>
		</div>
	</header>

	<!-- banner -->
	<section class="banner">
		<h2><a href="game.php">Play Mini Game</a></h2>
	</section>

	<!-- about -->
	<section class="about">
		<div class="container">
			<h3>ABOUT</h3>
			<p>Kami adalah sebuah perusahaan software house yang berdedikasi untuk memberikan solusi perangkat lunak yang inovatif dan berkualitas tinggi kepada klien kami. Dengan tim ahli yang terdiri dari pengembang, desainer, dan insinyur perangkat lunak yang berpengalaman, kami siap membantu mewujudkan visi dan tujuan bisnis Anda. Misi kami adalah untuk memberikan solusi perangkat lunak yang memadukan keahlian teknologi terkini dengan kebutuhan spesifik klien kami. Kami percaya bahwa setiap organisasi memiliki tantangan unik yang membutuhkan pendekatan yang sesuai.</p>
		</div>
	</section>

	<!-- skill -->
	<section class="skill">
		<div class="container">
			<h3>SKILL</h3>
			<div class="box">
				<div class="col-4">
					<div class="icon"><i class="fab fa-java"></i></div>
					<h4>JAVA</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fab fa-python"></i></div>
					<h4>PYTHON</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fab fa-swift"></i></div>
					<h4>SWIFT</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fab fa-js"></i></div>
					<h4>JAVASCRIPT</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fab fa-android"></i></div>
					<h4>MOBILE DEVELOPMENT</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-shield-alt"></i></div>
					<h4>CYBER SECURITY</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fab fa-figma"></i></div>
					<h4>UI/UX DESIGN</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-cloud"></i></div>
					<h4>CLOUD ARCHITECT</h4>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2023 - CyberCode. All Rights Reserved.</small>
		</div>
	</footer>

	<script type="text/javascript">
		$(document).ready(function() {
			$(".bg-loader").hide();
		})
	</script>

</body>

</html>