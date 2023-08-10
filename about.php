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
				<li><a href="home.php">HOME</a></li>
				<li class="active"><a href="about.php">ABOUT</a></li>
				<li><a href="skill.php">SKILL</a></li>
				<li><a href="contact.php">CONTACT</a></li>
			</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<u><a href="home.php">Home</a></u> / <u><a href="about.php">About</a></u>
		</div>
	</section>

	<!-- about -->
	<section class="about">
		<div class="container">
			<center>
				<video video playsinline autoplay muted loop controlsList=”nodownload” controls="controls" width="860" height="515">
					<source src="https://source-web-profile.s3.amazonaws.com/sample+video+company+profile.mp4" type="video/mp4">
				</video>
				<!-- <iframe width="860" height="515" src="https://www.youtube.com/embed/QyhwSYhX09s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
			</center>

			<br> <br> <br>
			<h3>ABOUT</h3>
			<p>Kami adalah sebuah perusahaan software house yang berdedikasi untuk memberikan solusi perangkat lunak yang inovatif dan berkualitas tinggi kepada klien kami. Dengan tim ahli yang terdiri dari pengembang, desainer, dan insinyur perangkat lunak yang berpengalaman, kami siap membantu mewujudkan visi dan tujuan bisnis Anda.</p>

			<p>Misi kami adalah untuk memberikan solusi perangkat lunak yang memadukan keahlian teknologi terkini dengan kebutuhan spesifik klien kami. Kami percaya bahwa setiap organisasi memiliki tantangan unik yang membutuhkan pendekatan yang sesuai. Oleh karena itu, kami berkomitmen untuk bekerja sama dengan Anda, memahami tujuan Anda, dan menciptakan solusi perangkat lunak yang sesuai dengan kebutuhan bisnis Anda.</p>

			<h3>VISI</h3>
			<p>Menjadi mitra terpercaya dalam pengembangan perangkat lunak inovatif yang mendorong transformasi digital dan kesuksesan bisnis klien kami di seluruh dunia.</strong></p>

			<h3>MISI</h3>
			<p>Memberikan solusi perangkat lunak yang berkualitas tinggi dan inovatif dengan memadukan keahlian teknologi terkini dengan kebutuhan spesifik klien kami.</strong></p>
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