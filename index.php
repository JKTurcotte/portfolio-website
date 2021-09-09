<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Justin Turcotte - Portfolio</title>
		<link rel="logo icon" type="image/png" href="imgs/logo.png" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Bootstrap & Stylesheet Links -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<!-- CSS Stylesheet -->
		<link rel="stylesheet" href="css/style.css">
	</head>
		
	<body>
    <header>
      <?php 
        require('html/header.html'); 
      ?>
    </header>

		<div class="container my-5">
			<div class="row w-75 mx-auto my-5">
				<div class="col text-center">
						<p id="home-intro-text">Hey, I'm <b>Justin!</b> <br />
							I obtained a Bachelors in Electronic Systems Engineering
							from Conestoga College in the Kitchener-Waterloo area. <br />
							It's so nice to meet you!
						</p>
				</div>
			</div>
			<div class="row mx-auto my-5">
				<div id="carouselFeatured" class="carousel slide carousel-dark" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselFeatured" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselFeatured" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselFeatured" data-bs-slide-to="2" aria-label="Slide 3"></button>
					</div>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<a href="/projects/wave.html"><img src="/imgs/wave-caption.png" class="d-block w-100 mx-auto portfolio-img"></a>
							<div class="carousel-caption d-none">
								<h5>WAVE: Paper receipt alternative.</h5>
							</div>
						</div>
						<div class="carousel-item">
							<a href="/projects/web-portfolio.html"><img src="/imgs/web-portfolio-caption.png" class="d-block w-100 mx-auto portfolio-img"></a>
							<div class="carousel-caption d-none">
								<h5>Web Portfolio: A website to showcase my abilities.</h5>
							</div>
						</div>
						<div class="carousel-item">
							<a href="/projects/coded-messaging.html"><img src="/imgs/coded-messaging-caption.png" class="d-block w-100 mx-auto portfolio-img"></a>
							<div class="carousel-caption d-none">
								<h5>Coded Messaging System: Compressed transmission through UART.</h5>
							</div>
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselFeatured" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselFeatured" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
			
			<div class="row text-center text-md-start">
				<div class="col-12">
					<h1>About Me</h1>
				</div>
			</div>
			
			<div class="row">
				<div class="col-12">
					<div class="clearfix">
						<img src="imgs/self-portrait.jpg" alt="Justin's Portrait" class="col-6 col-lg-4 float-end">
						<p>
							Hi! My name is Justin Turcotte. I am a newly graduated student who obtained a Bachelors degree in Electronic Systems Engineering from Conestoga College.
							I'm familiar with embedded systems and have personally worked with Nucleo boards, Arduino, and Raspberry Pi for various projects. Although I was taught
							embedded programming in C, I have personally been expanding my skillset to encompass a wider field such as: object oriented programming, 
							web development (this website for example), game development, and algorithms. Please feel free to take a look at the various projects I've posted here. 
							They will all have an associated github link. There will also be appropriate demonstration images or videos when possible. Also feel free to click the 
							buttons below to download a copy of my resume and/or cover letter.
						</p>
					</div>
				</div>
				
				<div class="col col-md-12 text-center text-md-start order-md-3">
					<a class="btn btn-primary home-downloads" href="/docs/cover-letter.pdf" role="button">Cover Letter</a>
					<a class="btn btn-primary home-downloads" href="/docs/resume.pdf" role="button">Resume</a>
				</div>
			</div>
		</div>

    <footer>
      <?php 
        require('html/footer.html'); 
      ?>
    </footer>
		
		<!-- Bootstrap JS & Dependencies Bundle -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>