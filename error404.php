<!DOCTYPE html>
<html lang="en">

<head>
	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
	<title>Page Not Found | Artine Photography</title>

	<style>
		.error {
			background: url(../img/banners/error404.jpg);
			background-attachment: fixed;
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			color: var(--white);
			text-align: center;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			position: relative;
			height: 100vh;
			width: 100%;
			max-height: 100vh;
			padding: 1.5rem;
		}

		.error__header {
			color: var(--white);
			font-size: 40px;
			font-family: var(--font-header);
			line-height: 1;
			margin-top: -50px;
			margin-bottom: 30px;
		}

		@media screen and (min-width: 768px) {
			.error__header {
				font-size: var(--font-large);
			}
		}

	</style>

</head>

<body>

	<div class="error">
		<h1 class="error__header">404! Looks like we didn't capture that one!</h1>
		<p>Kindly check your link and make sure it's the right one. ;)</p>

		<a href="index.php" class="btn-outline btn-outline--light btn--large mt-5">Go Home</a>
	</div>

</body>

</html>
