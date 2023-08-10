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
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="skill.php">SKILL</a></li>
				<li class="active"><a href="contact.php">CONTACT</a></li>
			</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<u><a href="home.php">Home</a></u> / <u><a href="contact.php">Contact</a></u>
		</div>
	</section>

	<!-- skill -->
	<section class="skill">
		<div class="container">
			<h3>CONTACT INFO</h3>
			<div class="box">
				<div class="col-4">
					<h4>Address</h4>
					<p>Jl. Pahlawan, Alun-alun Contong, Kec. Bubutan, Surabaya, Jawa Timur 60174</p>
				</div>
				<div class="col-4">
					<h4>Email</h4>
					<p>cybercode.official@gmail.com</p>
				</div>
				<div class="col-4">
					<h4>Telp.</h4>
					<p>(021) 22986630</p>
				</div>
				<div class="col-4">
					<h4>Hp.</h4>
					<p>082017081945</p>
				</div>
			</div>
			<br> <br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.9560659854105!2d112.73524277470655!3d-7.245840392760591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f93fc001bc5d%3A0x110e38d8a6c23fbe!2sMonumen%20Tugu%20Pahlawan%20dan%20Museum%20Sepuluh%20Nopember%20Surabaya!5e0!3m2!1sid!2sid!4v1685594033441!5m2!1sid!2sid" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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