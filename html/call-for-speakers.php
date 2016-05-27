<?php
	$name = 'Bytes Conference, Brighton';
	$title = 'Bytes Conference Brighton - A mini-conference in Brighton';
	$description = 'Bytes is an affordable, web-industry focused mini-conference hosted in the heart of Brighton raising money for local charities';

	include 'includes/header.php'; ?>
	<main>
		<header>
			<section>
				<a href="/"><h1 class="logo"><img src="/assets/bytes/img/logo.png" alt="Bytes Conference, Brighton" /></h1></a>
				<p class="featured"><?php echo $date ?></p>
				<p class="featured featured-sub">Bytes is looking for speakers for it's 2016 event - are you interested?</p>
				<a href="http://goo.gl/forms/VJMSlIHWHsKVDPJG2" class="button">Submit your application</a>
			</section>
		</header>
		<section class="content">
			<p>Bytes is back and better than ever and we want you involved. Have you ever wanted the opportunity to speak or present? <b>This is your chance</b>.</p>
			<h4>We are looking for 4 keynote speakers</h4>
			<p>Bytes aims to create a relaxed, low-key atmosphere for newcomers to come and try their hand at giving a talk. The delegates are small in numbers, friendly and will always have a smile for you.</p>
			<p>As mentioned, we are looking for <b>4</b> speakers, with an extra <b>1 in reserve</b>. If you get selected as the reserve speaker for this year, you will get first refusal for the 2017 Bytes event.</p>
			<p>Talks should be 20 minutes long, with some extra time at the end for questions and answersers from the attendees.</p>
			<p>Due to the nature of the event (completely charity focused) we are unfortunately unable to pay you for the talk. We can pay for travel expenses and also there are a few other perks for talking at Bytes:</p>
			<ul>
				<li>Ultimate kudos</li>
				<li>Help raise money for our chosen charities</li>
				<li>You get to practice in a relaxed environment</li>
				<li>You go into the Bytes archive as one of the best speakers ever</li>
				<li>Some cool photos for your social media profiles</li>
				<li>Lots of people telling you how good you were</li>
				<li>Some more twitter followers (not guaranteed&hellip;)</li>
			</ul>
			<p>So if this tickles your fancy, <a href="http://goo.gl/forms/VJMSlIHWHsKVDPJG2">fill in the form</a> and cross your fingers!</p>
			<p class="center"><a href="http://goo.gl/forms/VJMSlIHWHsKVDPJG2" class="button">Submit your application</a></p>
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
