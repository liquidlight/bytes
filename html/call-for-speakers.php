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


		<section id="signup">
			<div class="divider spaced">
				<h2>Sign up to the mailing list</h2>
				<form action="signup-process.php" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" novalidate>
					<span class="field">
						<input type="text" name="name" class="required name" id="name" />
						<label for="name">
							<span>Name</span>
						</label>
					</span>
					<span class="field">
						<input type="email" name="email" class="required email" id="email" />
						<label for="email">
							<span>Email Address</span>
						</label>
					</span>
					<span class="field last">
						<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
					</span>
					<div class="error msg js-error"></div>
				</form>
			</div>
		</section>
		<h2>Where is it?</h2>
		<div id="map"></div>
<?php include 'includes/footer.php';
