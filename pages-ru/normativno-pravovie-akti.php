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
	<title> Нормативно правовые акты | «УЗБЕКНЕФТГАЗ» АО </title>
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
												<h1><span> Нормативно правовые акты </span></h1>
											</div>
										</div>

										<div class="post-content">

<!--=== Main Documentation №-1 ===-->
											<div class="grid-box">

												<ul class="autor-list">
													<li>
														<div class="autor-box">
															<img src="images/pdf/pdf.png" alt="" />
															<div class="autor-content" style="height:286px;">
																<div class="autor-title">
																	<h1> Информация №-1 </h1>
																</div>
																<p> «Узбекнефтгаз» АО: О безопасности оборудования для эксплуатации во взрывоопасных средах. </p>
																<a class="read-more-button" style="margin-top: 20px;" href="../laravel-download-files/struktura.pdf" class="read-more-button"><i class="fa fa-arrow-circle-right"></i> Скачать Информация №-1 </a>
															</div>
														</div>
													</li>
												</ul>

											</div>
<!--=== Main Documentation №-1 ===-->

<!--=== Main Documentation №-2 ===-->
											<div class="grid-box">

												<ul class="autor-list">
													<li>
														<div class="autor-box">
															<img src="images/pdf/pdf.png" alt="" />
															<div class="autor-content" style="height:286px;">
																<div class="autor-title">
																	<h1> Информация №-2 </h1>
																</div>
																<p> «Узбекнефтгаз» АО: О требованиях к автомобильному и авиационному бензину, дизельному и морскому топливу, авиатопливу и мазуту. </p>
																<a class="read-more-button" style="margin-top: 20px;" href="../laravel-download-files/struktura.pdf" class="read-more-button"><i class="fa fa-arrow-circle-right"></i> Скачать Информация №-2 </a>
															</div>
														</div>
													</li>
												</ul>

											</div>
<!--=== Main Documentation №-2 ===-->

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