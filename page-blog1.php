<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('include-header.php'); ?>
	<!--	<link rel="canonical" href="http://artine-photography.epizy.com/page-blog1.php">-->
	<!--	<link rel="prev" href="http://artine-photography.epizy.com/page-blog12.php">-->
	<!--	<link rel="next" href="http://artine-photography.epizy.com/page-blog2.php">-->
	<title>Jose and Maria's Wedding | Artine Photography</title>

</head>

<body>

	<!-- include pre-loader	-->


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

		<!--<div class="fotorama mx-auto">
			<a href="img/gallery/kendra-allen/img-1.webp" data-thumb="img/gallery/kendra-allen/thumb-1.webp"></a>
			<a href="img/gallery/kendra-allen/img-2.webp" data-thumb="img/gallery/kendra-allen/thumb-2.webp"></a>
			<a href="img/gallery/kendra-allen/img-3.webp" data-thumb="img/gallery/kendra-allen/thumb-3.webp"></a>
			<a href="img/gallery/kendra-allen/img-4.webp" data-thumb="img/gallery/kendra-allen/thumb-4.webp"></a>
			<a href="img/gallery/kendra-allen/img-5.webp" data-thumb="img/gallery/kendra-allen/thumb-5.webp"></a>
			<a href="img/gallery/kendra-allen/img-6.webp" data-thumb="img/gallery/kendra-allen/thumb-6.webp"></a>
		</div>-->

		<div class="fotorama mx-auto">
			<a href="https://pixboost.com/api/2/img/http://artine-photography.epizy.com/img/gallery/kendra-allen/img-1.jpg/resize?size=930&auth=MzM0ODY5MzE0OA__" data-thumb="https://pixboost.com/api/2/img/http://artine-photography.epizy.com/img/gallery/kendra-allen/thumb-1.jpg/fit?size=64x64&auth=MzM0ODY5MzE0OA__"></a>

			<a href="https://pixboost.com/api/2/img/http://artine-photography.epizy.com/img/gallery/kendra-allen/img-2.jpg/resize?size=930&auth=MzM0ODY5MzE0OA__" data-thumb="https://pixboost.com/api/2/img/http://artine-photography.epizy.com/img/gallery/kendra-allen/thumb-2.jpg/fit?size=64x64&auth=MzM0ODY5MzE0OA__"></a>

			<a href="https://pixboost.com/api/2/img/http://artine-photography.epizy.com/img/gallery/kendra-allen/img-3.jpg/resize?size=930&auth=MzM0ODY5MzE0OA__" data-thumb="https://pixboost.com/api/2/img/http://artine-photography.epizy.com/img/gallery/kendra-allen/thumb-3.jpg/fit?size=64x64&auth=MzM0ODY5MzE0OA__"></a>

			<a href="https://pixboost.com/api/2/img/http://artine-photography.epizy.com/img/gallery/kendra-allen/img-4.jpg/resize?size=930&auth=MzM0ODY5MzE0OA__" data-thumb="https://pixboost.com/api/2/img/http://artine-photography.epizy.com/img/gallery/kendra-allen/thumb-4.jpg/fit?size=64x64&auth=MzM0ODY5MzE0OA__"></a>

			<a href="https://pixboost.com/api/2/img/http://artine-photography.epizy.com/img/gallery/kendra-allen/img-5.jpg/resize?size=930&auth=MzM0ODY5MzE0OA__" data-thumb="https://pixboost.com/api/2/img/http://artine-photography.epizy.com/img/gallery/kendra-allen/thumb-5.jpg/fit?size=64x64&auth=MzM0ODY5MzE0OA__"></a>

			<a href="https://pixboost.com/api/2/img/http://artine-photography.epizy.com/img/gallery/kendra-allen/img-6.jpg/resize?size=930&auth=MzM0ODY5MzE0OA__" data-thumb="https://pixboost.com/api/2/img/http://artine-photography.epizy.com/img/gallery/kendra-allen/thumb-6.jpg/fit?size=64x64&auth=MzM0ODY5MzE0OA__"></a>

		</div>

		<div class="blog__info">
			<span class="block">Jose and Maria's Wedding</span>

			<span class="block">143 Love St., Cupid's Playground</span>

			<span class="block">September 24, 2020</span>
		</div>

		<div class="p-1">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi impedit aspernatur nostrum inventore facere beatae aperiam ullam tempore omnis, praesentium odio quaerat numquam autem accusamus ipsam ab velit nisi repudiandae.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi impedit aspernatur nostrum inventore facere beatae aperiam ullam tempore omnis, praesentium odio quaerat numquam autem accusamus ipsam ab velit nisi repudiandae.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi impedit aspernatur nostrum inventore facere beatae aperiam ullam tempore omnis, praesentium odio quaerat numquam autem accusamus ipsam ab velit nisi repudiandae.</p>
		</div>

		<div class="blog__nav">
			<a href="page-blog12.php" class="btn-outline btn-outline--dark btn--large blog__nav-link"><i class="fa fa-long-arrow-left"></i> Baby Moreira's Photoshoot</a>

			<a href="page-blog2.php" class="btn-outline btn-outline--dark btn--large blog__nav-link">Patricia's 7th Birthday <i class="fa fa-long-arrow-right"></i></a>
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
