<!--=================================================
Laravel 7 PRO WEB APP CRUD - by AO «UZBEKNEFTGAZ»
=====================================================
This Laravel Codes is protected by AO «UZBEKNEFTGAZ»
=====================================================
Web site links https://www.ung.uz/
=====================================================
Copyright (c) 2020 AO «UZBEKNEFTGAZ»
==================================================-->
<!DOCTYPE html>
<html class="no-js" lang="uz">
<head>
	<title> Дивиденды | «УЗБЕКНЕФТГАЗ» АО </title>
	<?php
		include_once 'head/head.php';
	?>

</head>
<body>

<!--=== Main Container ===-->
	<div id="container">

		<div class="container">
			<?php
				include_once '../templates/UzbekNeftGaz-RU/modules/info-ru.tpl';
			?>

		</div>

		<div id="header">
			<header class="clearfix fifth-style">
				<?php
					include_once '../templates/UzbekNeftGaz-RU/modules/menu-ru.tpl';
				?>

			</header>
		</div>

		<!--=== Main History ===-->
		<section class="block-wrapper shadow-white" style="background-image: url(images/bg-orginal.png);background-repeat:no-repeat;background-size:68px;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
							<!-- Block content -->
							<div class="block-content">
								<!-- grid box -->
								<div class="grid-box">

									<div class="news-post very-large-post">
											<div class="title-post">
												<div class="title-section">
													<h1><span> Дивиденды </span></h1>
												</div>
											</div>

											<div class="post-content">

												<?php
													include_once 'error/error.php';
												?>

											</div>
									</div>
								</div>
							</div>
							<!-- End block content -->
					</div>
				</div>
			</div>
		</section>
		<!--=== Main History ===-->

	</div>
<!--=== Main Container ===-->

<!--=== Main Footer ===-->
	<footer>
		<?php
			include_once '../templates/UzbekNeftGaz-RU/modules/footer-ru.tpl';
		?>

	</footer>
<!--=== Main Footer ===-->

<!--=== Main Footer-JS-Links ===-->
<?php
	include_once 'footer/footer-js-links.php';
?>

<!--=== Main Footer-JS-Links ===-->

</body>
</html>