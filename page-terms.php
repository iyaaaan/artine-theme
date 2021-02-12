<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('include-header.php'); ?>
	<!--	<link rel="canonical" href="http://artine-photography.epizy.com/page-terms.php">-->
	<title>Terms and Conditions | Artine Photography</title>

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

	<div class="container">
		<div class="terms">
			<!--	title -->
			<h2 class="title">Terms and Conditions</h2>
			<ul class="terms__item">
				<li>
					<p>The content of the pages of this website is for your general information and use only. It is subject to change without notice.</p>
				</li>
				<li>
					<p>This website uses cookies to monitor browsing preferences. If you do allow cookies to be used, the following personal information may be stored by us for use by third parties: [insert list of information].</p>
				</li>
				<li>
					<p>Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.</p>
				</li>
				<li>
					<p>Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.</p>
				</li>
				<li>
					<p>This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.</p>
				</li>
				<li>
					<p>All trade marks reproduced in this website which are not the property of, or licensed to, the operator are acknowledged on the website.</p>
				</li>
				<li>
					<p>Unauthorised use of this website may give rise to a claim for damages and/or be a criminal offence.</p>
				</li>
				<li>
					<p>From time to time this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).</p>
				</li>
				<li>
					<p>Your use of this website and any dispute arising out of such use of the website is subject to the laws of the Philippines.</p>
				</li>
			</ul> <!-- ./terms__item -->
		</div> <!-- ./terms -->
	</div> <!-- ./container -->

	<!-- include footer -->
	<?php include('include-footer.php') ?>

	<!-- footer active state -->
	<script>
		$(document).ready(function() {
			$('.sub-footer__legalities-link:eq(0)').addClass('is-active');
		});

	</script>

</body>

</html>
