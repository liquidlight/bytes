<?php
	$name = 'Bytes Conference, Brighton';
	$title = 'Bytes Conference Brighton - A mini-conference in Brighton';
	$description = 'Bytes is an affordable, web-industry focused mini-conference hosted in the heart of Brighton raising money for local charities';

	include 'includes/header.php'; ?>
	<main>
		<header>
			<section>
				<a href="/"><h1 class="logo"><img src="/assets/bytes/img/logo.png" alt="Bytes Conference, Brighton" /></h1></a>
				<p class="featured"><?php echo $date ?>, 7pm - 11pm</p>
				<p class="featured featured-sub">Bytes 2016 call for speakers is now closed</p>
			</section>
		</header>
		<section class="content">
			<p>The Bytes call for speakers application is now closed. Thanks to all those that submitted thier proposals!</p>
			<p>Make sure you sign up to the newsletter below to be kept up to date with Bytes news!</p>
		</section>


<?php
	include 'includes/signup.php';
	include 'includes/map.php';
	include 'includes/footer.php';
