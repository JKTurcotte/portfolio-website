<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Justin Turcotte - Portfolio</title>
		<link rel="logo icon" type="image/png" href="/imgs/logo.png" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Bootstrap & Stylesheet Links -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<!-- CSS Stylesheet -->
		<link rel="stylesheet" href="/css/style.css">
	</head>
		
	<body>
		<?php 
      require($_SERVER['DOCUMENT_ROOT'] . '/html/header.html'); 
    ?>

		<div class="container my-5">
			<div class="row">
				<div class="col-12 d-flex justify-content-center my-3 text-center">
					<h1>WAVE Project</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-start">
					<h1>Status</h1>
				</div>

				<div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end my-auto">
					<h5>January 2021 - August 2021</h5>
				</div>

				<div class="col">
					<p>
						This group project is currently paused, while I do want to continue working on it, there are other priorities that need tending to.
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-12 d-flex justify-content-center justify-content-md-start">
					<h1>Relevant Skills & Tools</h1>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>Python</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>PCB Design</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>Soldering</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>ESC/POS</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>Altium</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>CUPS</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>Raspberry Pi</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-12 d-flex justify-content-center justify-content-md-start">
					<h1>Summary</h1>
				</div>

				<div class="col">
					<p>
						WAVE was my college capstone project, the final project of engineering course at Conestoga College. 
						Teamed up with two classmates, we came up with WAVE: a replacement for paper receipts. 
						Using NFC (Near-field communication), we devised a way to receive receipts digitally.
					</p>

					<p>
						The below video is a semi-comedic elevator pitch of sorts, outlining what we aim to accomplish with WAVE. 
						There are also additional resources and documentation at the end of the page. 
						Also feel free to contact me at justin@kturcotte.me if you have any questions or want to get in touch.
					</p>
					<div class="d-flex justify-content-center my-2">
						<iframe src="https://www.youtube.com/embed/_rBCC7k05oE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12 d-flex justify-content-center justify-content-md-start">
					<h1>Details</h1>
				</div>

				<div class="col">
					<p>
						We divided WAVE into three primary components: the mobile application responsible for helping customers manage their receipts, 
						the NFC Transceiver Interface responsible for transmitting the receipt from the POS terminal to the mobile phone, 
						and the POS Switch Interface responsible for directing the receipt to the NFC Transceiver or Thermal Printer.
					</p>
					<div class="d-flex justify-content-center my-2">
						<img src="imgs/wave-fig-1.jpg" alt="WAVE System Components" class="col-12 col-md-8 col-lg-4">
					</div>

					<p>
						I was responsible for the POS Switch Interface. This component was important because it's responsible for receiving the receipt from the POS (Point of Sale) 
						software and directing it to the NFC Transceiver Interface. Our prototype used a Raspberry Pi that was setup to act as a pdf printer. The POS software is 
						setup to print to this Raspberry Pi through the local network. When the Pi detects a receipt it first reads the status of a physical switch. The state of 
						the switch determines if the receipt will be paper or digital. Preserving the paper option is important in case  customers do not wish to have a digital 
						receipt or are unable to access their phone. In the event of a paper receipt, the Raspberry Pi converts the pdf receipt into ESC/POS compatible format and 
						prints to an attached thermal printer. In the event of a digital receipt, the pdf receipt is copied over to the local storage of the attached NFC Transceiver 
						Interface, and is prepped for NFC transfer. 
					</p>
					<div class="d-flex justify-content-center my-2">
						<img src="imgs/wave-fig-2.jpg" alt="WAVE System Flow" class="col-12 col-lg-10">
					</div>

					<p>
						The physical switch circuit used in determining whether a receipt will be printed or sent digitally was designed in altium as a breakout board to fit 
						over the GPIO header of the Raspberry Pi.
					</p>
					<div class="d-flex justify-content-center my-2">
						<img src="imgs/wave-fig-3.jpg" alt="WAVE Switch Circuit" class="col-12 col-lg-10">
					</div>

					<p>
						The switch circuit gives the GPIO pin a high or a low based on the position of a switch. It's essentially a toggle between a voltage divider and a 
						short to ground. The resistors were calculated to keep current within specifications while also ensuring the voltage difference was enough to differentiate 
						between high and low states.
					</p>

					<p>
						Here's a quick demo of the POS Switch Interface:
					</p>
					<div class="d-flex justify-content-center my-2">
						<iframe src="https://www.youtube.com/embed/qXKvb0ORoqs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>

					<p>
						Here is an additional image showing the Raspberry Pi and breakout circuit:
					</p>
					<div class="d-flex justify-content-center my-2">
						<img src="imgs/wave-fig-4.jpg" alt="WAVE Raspberry Pi & Breakout Board" class="col-12 col-md-8 col-lg-4">
					</div>

					<p>
						Unfortunately the NFC Transceiver Interface had some complications and NFC transfer of a PDF file was not accomplished. The NFC Transceiver Interface used 
						a Raspberry Pi Pico setup in a way that allowed it to act like a flash storage device, making it easy for the POS Interface to copy the receipt over. 
						It also managed communication with an NFC chip used to send the receipt to the mobile device. Large file transfers have not been accomplished yet.
					</p>
					<p>
						Similarly, the mobile device component also had some complications. A rough application was created that could open PDF files and NFC communication is 
						currently a bit of a mystery since we don't have the NFC Transceiver Interface ready for testing.
					</p>
					<p>
						While this project is currently not complete, I have plans with one of my classmates to continue working on this project. 
						As the status changes, I'll update this page. 
					</p>
					<p>
						Going forward, there are a couple of changes we are contemplating. In the case of the NFC transfer, we are considering using the NFC communication to 
						establish a bluetooth connection between the customers mobile device and the WAVE system. This would allow us to transfer the receipt at a faster rate. 
					</p>
					<p>
						Another consideration is that since the POS Switch Interface is connected via local network, it would ideally be connected via ethernet. 
						In the event that the connection is Wi-fi, we would need to consider encryption. Using Bluetooth also means we would need to consider encrypting the 
						receipt data. This isn't an issue for NFC communications due to the distance limitation of NFC.
					</p>
					<p>
						Finally, we also want consider our receipt format. PDF is proprietary and hard to modify. Fortunately with Python, I was able to use a library to extract 
						the receipt text when needed, but this isn't a perfect system and doesn't allow me to extract images for example. Going forward, an advanced library would 
						need to be developed or a new format for the receipt would need to be considered.
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-12 d-flex justify-content-center justify-content-md-start">
					<h1>Documentation</h1>
				</div>

				<div class="col d-flex justify-content-center justify-content-md-start">
					<a href="https://github.com/koolohms/splitter" class="border border-2"><img src="/imgs/github.ico" alt="Github Link Icon" class="d-inline link-icons mx-1">Code Base</a>
				</div>

				<div class="col-12 d-flex justify-content-center justify-content-md-start my-2">
					<a class="btn btn-primary home-downloads" href="docs/wave-report.pdf" role="button">Project Report</a>
				</div>
			</div>
    </div>

		<?php 
      require($_SERVER['DOCUMENT_ROOT'] . '/html/footer.html'); 
    ?>
		
		<!-- Bootstrap JS & Dependencies Bundle -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>
