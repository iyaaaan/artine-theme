<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('include-header.php'); ?>
	<!--	<link rel="canonical" href="http://artine-photography.epizy.com/page-contact.php">-->
	<title>Contact Us | Artine Photography</title>

</head>

<body>

	<!-- include navigation bar	-->
	<?php include('include-navbar.php'); ?>

	<!-- anchor tag for back to top button-->
	<a name="top"></a>

	<!-- back to top button -->
	<a href="#top" class="back-to-top js-back-to-top">
		<i class="fa fa-chevron-up" aria-hidden="true"></i>
		<i class="fa fa-chevron-up" aria-hidden="true"></i>
	</a>

	<!-- contact-hero -->
	<div class="hero-banner">
		<img src="img/banners/contact-banner.webp" alt="Contact Banner" class="img-fit" width="1400px" height="800px">
	</div>

	<div class="container">
		<div class="contact-info">
			<div class="contact-info-wrap">
				<div class="contact-info__item">
					<div class="contact-info__icon">
						<i class="fa fa-phone"></i>
					</div>
					<div class="contact-info__title">Call Us</div>
					<div class="contact-info__text">+(63) 949 5548 663</div>
				</div>
			</div>

			<div class="contact-info-wrap">
				<div class="contact-info__item">
					<div class="contact-info__icon">
						<i class="fa fa-map-marker"></i>
					</div>
					<div class="contact-info__title">Our Location</div>
					<div class="contact-info__text">P-5 Brgy. Ilumilo, Daet, Camarines Norte</div>
				</div>
			</div>

			<div class="contact-info-wrap">
				<div class="contact-info__item">
					<div class="contact-info__icon">
						<i class="fa fa-envelope"></i>
					</div>
					<div class="contact-info__title">Mail Us</div>
					<div class="contact-info__text">chrispratty96@gmail.com</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container" id="contact">
		<div class="contact-form-wrap">
			<!--	title -->
			<h2 class="title">How Can We Help?</h2>

			<form action="send-email.php" method="POST" class="contact-form">
				<div class="form-fields">
					<div class="form-fields__col">
						<div class="input-wrap">
							<input type="text" id="name" name="name" placeholder="Name" class="capitalize" pattern="[A-Za-z0-9\s]{2,36}" autocomplete="off" required>
							<label for="name">Name <span>*</span></label>
						</div>

						<div class="input-wrap">
							<input type="email" id="email" name="email" placeholder="your@email.com" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" autocomplete="off" required>
							<label for="email">E-mail <span>*</span></label>
						</div>

						<div class="input-wrap">
							<input type="text" id="number" name="number" placeholder="Contact Number" minlength="7" maxlength="13" pattern="^(09|\+639)\d{9}$" autocomplete="off">
							<label for="number">Contact Number</label>
						</div>
					</div> <!-- ./form-fields__col -->

					<div class="form-fields__col">
						<div class="input-wrap">
							<input type="text" id="event" name="event" placeholder="Type of Event" class="capitalize" autocomplete="off" required>
							<label for="event">Event <span>*</span></label>
						</div>

						<div class="input-wrap">
							<input type="text" id="date" name="date" class="datepicker" placeholder="Date of Event" autocomplete="off" required>
							<label for="date">Date <span>*</span></label>
						</div>

						<div class="input-wrap">
							<input type="text" id="venue" name="venue" placeholder="Event's Venue" class="capitalize" autocomplete="off" required>
							<label for="venue">Venue <span>*</span></label>
						</div>
					</div> <!-- ./form-fields__col -->
				</div> <!-- ./form-fields -->

				<div class="input-wrap">
					<textarea name="message" id="message" placeholder="Message" autocomplete="off" required></textarea>
					<label for="message">Message <span>*</span></label>
				</div>

				<input type="submit" name="submit" value="Send Message" class="btn-outline btn--large btn-outline--dark mb-1 w-100">

				<label>Note: <span>*</span> indicates required.</label>
			</form>
		</div>
	</div> <!-- container -->

	<!-- Google Map -->
	<div class="google-map-wrap">
		<iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d575.2331195487097!2d122.94623537237507!3d14.095365370009759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3398aef000000003%3A0x7485dbb588ce057b!2sD%20House%20Hotel%20Camarines%20Norte!5e0!3m2!1sen!2sph!4v1614324921638!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div> <!-- ./map -->

	<?php include('include-footer.php') ?>

	<!-- navbar active state -->
	<script>
		$(document).ready(function() {
			$('.navbar__link:eq(4)').addClass('is-active');
			$('.footer__nav-link:eq(5)').addClass('is-active');
		});

	</script>

</body>

</html>
