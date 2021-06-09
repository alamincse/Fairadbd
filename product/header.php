<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="It's a Garments Company in Bangladesh.">
    <meta name="author" content="Fairadbd in Bangladesh">
	<title>
		<?php
			// extract the filename
			$title = basename($_SERVER['SCRIPT_FILENAME'], '.php');
			// replace dashes with whitespace
			// $title = str_replace('-', ' ', $title);
			// check if the file is index, if so assign 'home' to the title instead of index
			if (strtolower($title) == 'index') {
				echo 'Fairadbd - It\'s a Garments Company in Bangladesh.';
			}else{
				// capitalize all words
				$title = ucwords($title);
				$title = $title.' - Fairadbd in Bangladesh.';
				echo $title;
			}
		?>
	</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/dropdown-nav.css">
	<link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="span12 content">
				<div class="row">
					<div class="span4">
						<h1 class="site-title">
							<a href="index.php"><span class="logo">Fairadbd</span></a>
						</h1> <!-- .site-title -->
					</div> <!-- .span4 -->

					<div class="span3 offset5">
						<ul class="nav social-icon">
							<li><a class="facebook" href="http://facebook.com/fairadbd" target="_blank"></a></li>
							<li><a class="twitter" href="http://twitter.com/fairadbd" target="_blank"></a></li>
							<li><a class="linked" href="http://linked.com/fairadbd" target="_blank"></a></li>
							<li><a class="google" href="http://plus.google.com/fairadbd" target="_blank"></a></li>
						</ul> <!-- .nav social-icon  -->

						<!-- <span>Call:01713-453422</span> -->
					</div> <!-- .span3 offset5 -->
				</div> <!-- .row -->

				<div class="row">
					<div class="span12">
						<?php require_once 'top_menu.php'; ?>
					</div>	<!-- .span12  -->
				</div> <!-- .row  -->