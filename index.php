<?php
$customCSS="";
$customTitle="";
include "inc/html-top.php";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<body>
	<?php include "inc/nav.php";?>
	<a href="#" id="scroll" style="display: none;"><span></span></a> <!-- TOP button -->
	<header class="head">
		<div class="grid">
			<div class="col-1-2-1">
				<div class="module">
					<div id="clear">clear</div>
					<img src="images/profile-backing.png" class="profile-backing" alt="Hello!" ondragstart="return false;">
					<img src="images/profile.png" class="profile-pic" alt="Hello!" ondragstart="return false;"> 
				</div>
			</div>

			<div class="col-1-2-2">
				<div class="module">

					<div id="head-content">
						<h1>Ben Lapidus</h1>
						<h2 id='greeting'>Aspiring Web Developer</h2>
					</div>
					<ul class="head-buttons">
						<li>
							<a href="assets/ben-lapidus-resume.pdf" target="_blank">
								<div class="resume-button">
									<img src="https://img.icons8.com/carbon-copy/100/000000/resume.png"/>
									<span>Resume</span>
								</div>
							</a>
						</li>
						<li>
							<a href="#portfolio">
								<div class="portfolio-button">
									<img src="https://img.icons8.com/windows/96/000000/portfolio.png"/>
									<span>Portfolio</span>
								</div>
							</a>
						</li>
						<li>
							<a href="https://www.linkedin.com/in/benjaminlapidus/" target="_blank">
								<div class="linkedin-button">
									<img src="https://img.icons8.com/android/96/000000/linkedin.png">
									<span>LinkedIn</span>
								</div>
							</a>
						</li>
					</ul>
					<div class="blob-container">
						<div class="blob"></div>
					</div>
				</div>
			</div>
		</div>

	</header>

	<section class="portfolio" id="portfolio">
		<div class="container">
			<div class="grid">
				<div class="col-1-3">
					<div class="module">
						<h3>Portfolio</h3>
					</div>
				</div>
				<div class="col-2-3">
					<div class="module">
						<p>I'm going to put all my projects here in a flexbox card layout.</p>
						<img src="smiley.gif" alt="Smiley face">
						<p>Hello</p>


					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="about" id="about">
		<div class="container">
			<div class="grid">
				<div class="col-1-3">
					<div class="module">
						<h3>About</h3>
						<a href="#">Resume</a>
					</div>
				</div>
				<div class="col-2-3">
					<div class="module">
						<p>I am an award-winning full-stack web developer and UI/UX javascript specialist. Check out my articles, React and React Native UI components at the code laboratory. Feel free to take a look at my latest projects on the web portfolio page. Remotely available UTC−1 to UTC+8. rafael@caferati.me</p>	
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="contact" id="contact">
		<div class="container">
			<div class="grid">
				<div class="col-1-3">
					<div class="module">
						<h3>Contact</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<div class="col-2-3">
					<div class="module">

						<div class="container-contact">
							<div class="wrapper-contact">
								<form class="contact-form validate-form">
									<div class="input-wrapper validate-input" data-validate="Please enter your name">
										<input class="input" type="text" name="name" placeholder="Name">
										<span class="focus-input"></span>
									</div>
									<div class="input-wrapper validate-input" data-validate="Please enter your email: email@abc.com">
										<input class="input" type="text" name="email" placeholder="Email">
										<span class="focus-input"></span>
									</div>
									<div class="input-wrapper validate-input" data-validate="Please enter your message">
										<textarea class="input" name="message" placeholder="Message"></textarea>
										<span class="focus-input"></span>
									</div>
									<div class="wrapper-contact-button">
										<button class="contact-button">
											Send
										</button>
									</div>
								</form>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<p>Ben Lapidus</p>
	</footer>

	<?php
	include "inc/home-scripts.php";
	?>

	<script>
		$(document).ready(function(){
			$('#xbutton, #overlay-content').click(function(){
				$(this).toggleClass('change');
			});
		});

	</script>

	<script>
		function toggleNav() {

			if (document.getElementById("myNav").style.height === "100%") {
				document.getElementById("myNav").style.height = "0%"
			} else {
				document.getElementById("myNav").style.height = "100%";
			}
		}
	</script>

</body>
</html>