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
	<title> Youth Center News | «UZBEKNEFTEGAZ» JSC </title>
	<?php
		include_once 'head/head.php';
	?>

</head>
<body>

<!--=== Main Container ===-->
	<div id="container">

		<div class="container">
			<?php
				include_once '../templates/UzbekNeftGaz-EN/modules/info-en.tpl';
			?>

		</div>

		<div id="header">
			<header class="clearfix fifth-style">
				<?php
					include_once '../templates/UzbekNeftGaz-EN/modules/menu-en.tpl';
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
													<h1><span> Youth Center News </span></h1>
												</div>
											</div>

											<div class="post-content">

												<!--===<div class="col4 workall worknews">
													<div class="b-img">
														<a href="http://test.ung.uz/pages-ru/news-slider-pages/yoshlar-ittifoqi.php">
															<img style="border-radius: 5px 5px 0px 0px;" src="images/youth/0.jpg" alt="" />
														</a>
													</div>
													<a href="http://test.ung.uz/pages-uz/news-slider-pages/yoshlar-ittifoqi.php">
														<h5 style="margin-top:0px;">	 Ёшлар иттифоқи томонидан қуйидаги ... 	</h5>
													</a>
													<p></p>
													<br>
												</div>===-->

												<div class="col4 workall worknews">
													<div class="b-img">
														<a href="http://test.ung.uz/pages-en/news-slider-pages/university-students.php">
															<img style="border-radius: 5px 5px 0px 0px;" src="images/youth/1.jpg" alt="" />
														</a>
													</div>
													<a href="http://test.ung.uz/pages-en/news-slider-pages/university-students.php">
														<h5 style="margin-top:0px;">	Inha University students ...	</h5>
													</a>
													<p></p>
													<br>
												</div>

												<div class="col4 workall worknews">
													<div class="b-img">
														<a href="http://test.ung.uz/pages-en/news-slider-pages/el-yurt-umidi.php">
															<img style="border-radius: 5px 5px 0px 0px;" src="images/youth/2.jpg" alt="" />
														</a>
													</div>
													<a href="http://test.ung.uz/pages-en/news-slider-pages/el-yurt-umidi.php">
														<h5 style="margin-top:0px;">	Foundation "El-Yurt Umidi"	</h5>
													</a>
													<p></p>
													<br>
												</div>

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
			include_once '../templates/UzbekNeftGaz-EN/modules/footer-en.tpl';
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