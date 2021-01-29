<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('include-header.php'); ?>
	<!--	<link rel="canonical" href="http://artine-photography.epizy.com/page-blog11.php">-->
	<!--	<link rel="prev" href="http://artine-photography.epizy.com/page-blog10.php">-->
	<!--	<link rel="next" href="http://artine-photography.epizy.com/page-blog12.php">-->
	<title>William and Stelle's Pre-Nuptial | Artine Photography</title>

</head>

<body>

	<!-- include pre-loader	-->
	<?php include('include-preloader.php');  ?>

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
		<a href="page-blog.php" class="btn-outline btn-outline--light btn--large my-2"><i class="fa fa-long-arrow-left"></i> More Blogs</a>

		<div class="fotorama mx-auto">
			<a href="img/gallery/kendra-allen-2/img-1.jpg" data-thumb="img/gallery/kendra-allen-2/thumb-1.jpg"></a>
			<a href="img/gallery/kendra-allen-2/img-2.jpg" data-thumb="img/gallery/kendra-allen-2/thumb-2.jpg"></a>
			<a href="img/gallery/kendra-allen-2/img-3.jpg" data-thumb="img/gallery/kendra-allen-2/thumb-3.jpg"></a>
			<a href="img/gallery/kendra-allen-2/img-4.jpg" data-thumb="img/gallery/kendra-allen-2/thumb-4.jpg"></a>
			<a href="img/gallery/kendra-allen-2/img-5.jpg" data-thumb="img/gallery/kendra-allen-2/thumb-5.jpg"></a>
			<a href="img/gallery/kendra-allen-2/img-6.jpg" data-thumb="img/gallery/kendra-allen-2/thumb-6.jpg"></a>
		</div>

		<div class="blog__info">
			<span class="block">William and Stelle's Pre-Nuptial</span>

			<span class="block">Vancouver, Canada</span>

			<span class="block">May 27, 2020</span>
		</div>

		<div class="p-1">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi impedit aspernatur nostrum inventore facere beatae aperiam ullam tempore omnis, praesentium odio quaerat numquam autem accusamus ipsam ab velit nisi repudiandae.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi impedit aspernatur nostrum inventore facere beatae aperiam ullam tempore omnis, praesentium odio quaerat numquam autem accusamus ipsam ab velit nisi repudiandae.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi impedit aspernatur nostrum inventore facere beatae aperiam ullam tempore omnis, praesentium odio quaerat numquam autem accusamus ipsam ab velit nisi repudiandae.</p>
		</div>

		<div class="blog__nav">
			<a href="page-blog10.php" class="btn-outline btn-outline--dark btn--large blog__nav-link"><i class="fa fa-long-arrow-left"></i> Jake and Joanna's Wedding</a>

			<a href="page-blog12.php" class="btn-outline btn-outline--dark btn--large blog__nav-link">Baby Moreira's Photoshoot <i class="fa fa-long-arrow-right"></i></a>
		</div>
	</div>


	<?php include('include-footer.php'); ?>

	<!-- navbar active state -->
	<script>
		$(document).ready(function() {
			$('.navbar__link:eq(2)').addClass('is-active');
			$('.footer__nav-link:eq(3)').addClass('is-active');
		});

	</script>


</body>

</html>
