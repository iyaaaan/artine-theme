<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('include-header.php'); ?>
	<!--	<link rel="canonical" href="http://artine-photography.epizy.com/page-blog9.php">-->
	<!--	<link rel="prev" href="http://artine-photography.epizy.com/page-blog8.php">-->
	<!--	<link rel="next" href="http://artine-photography.epizy.com/page-blog10.php">-->
	<title>Hanna's Debut | Artine Photography</title>

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
			<a href="img/gallery/hanna-busing/img-1.webp" data-thumb="img/gallery/hanna-busing/thumb-1.webp"></a>
			<a href="img/gallery/hanna-busing/img-2.webp" data-thumb="img/gallery/hanna-busing/thumb-2.webp"></a>
			<a href="img/gallery/hanna-busing/img-3.webp" data-thumb="img/gallery/hanna-busing/thumb-3.webp"></a>
			<a href="img/gallery/hanna-busing/img-4.webp" data-thumb="img/gallery/hanna-busing/thumb-4.webp"></a>
		</div>

		<div class="blog__info">
			<span class="block">Hanna's Debut</span>

			<span class="block">Kuala Lumpur, Malaysia</span>

			<span class="block">September 16, 2020</span>
		</div>

		<div class="p-1">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi impedit aspernatur nostrum inventore facere beatae aperiam ullam tempore omnis, praesentium odio quaerat numquam autem accusamus ipsam ab velit nisi repudiandae.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi impedit aspernatur nostrum inventore facere beatae aperiam ullam tempore omnis, praesentium odio quaerat numquam autem accusamus ipsam ab velit nisi repudiandae.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi impedit aspernatur nostrum inventore facere beatae aperiam ullam tempore omnis, praesentium odio quaerat numquam autem accusamus ipsam ab velit nisi repudiandae.</p>
		</div>

		<div class="blog__nav">
			<a href="page-blog8.php" class="btn-outline btn-outline--dark btn--large blog__nav-link"><i class="fa fa-long-arrow-left"></i> Kian and Rose's Pre-Nuptial</a>

			<a href="page-blog10.php" class="btn-outline btn-outline--dark btn--large blog__nav-link">Jake and Joanna's Wedding <i class="fa fa-long-arrow-right"></i></a>
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
