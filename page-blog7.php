<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('include-header.php'); ?>
	<!--	<link rel="canonical" href="http://artine-photography.epizy.com/page-blog7.php">-->
	<!--	<link rel="prev" href="http://artine-photography.epizy.com/page-blog6.php">-->
	<!--	<link rel="next" href="http://artine-photography.epizy.com/page-blog8.php">-->
	<title>Baby Joven's Photoshoot | Artine Photography</title>

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
			<a href="img/gallery/minnie-zhou-2/img-1.webp" data-thumb="img/gallery/minnie-zhou-2/thumb-1.webp"></a>
			<a href="img/gallery/minnie-zhou-2/img-2.webp" data-thumb="img/gallery/minnie-zhou-2/thumb-2.webp"></a>
			<a href="img/gallery/minnie-zhou-2/img-3.webp" data-thumb="img/gallery/minnie-zhou-2/thumb-3.webp"></a>
			<a href="img/gallery/minnie-zhou-2/img-4.webp" data-thumb="img/gallery/minnie-zhou-2/thumb-4.webp"></a>
			<a href="img/gallery/minnie-zhou-2/img-5.webp" data-thumb="img/gallery/minnie-zhou-2/thumb-5.webp"></a>
		</div>

		<div class="blog__info">
			<span class="block">Baby Joven's Photoshoot</span>

			<span class="block">Vienna, Austria</span>

			<span class="block">August, 08, 2020</span>
		</div>

		<div class="p-1">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi impedit aspernatur nostrum inventore facere beatae aperiam ullam tempore omnis, praesentium odio quaerat numquam autem accusamus ipsam ab velit nisi repudiandae.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi impedit aspernatur nostrum inventore facere beatae aperiam ullam tempore omnis, praesentium odio quaerat numquam autem accusamus ipsam ab velit nisi repudiandae.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi impedit aspernatur nostrum inventore facere beatae aperiam ullam tempore omnis, praesentium odio quaerat numquam autem accusamus ipsam ab velit nisi repudiandae.</p>
		</div>

		<div class="blog__nav">
			<a href="page-blog6.php" class="btn-outline btn-outline--dark btn--large blog__nav-link"><i class="fa fa-long-arrow-left"></i> Vitor and Jillian's Pre-nuptial</a>

			<a href="page-blog8.php" class="btn-outline btn-outline--dark btn--large blog__nav-link">Kian and Rose's Pre-Nuptial <i class="fa fa-long-arrow-right"></i></a>
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
