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
				<p class="featured featured-sub">Bytes 2016 is looking for speakers - are you interested?</p>
				<a href="http://goo.gl/forms/VJMSlIHWHsKVDPJG2" class="button">Submit your application</a>
			</section>
		</header>
		<section class="content">
			<p>Bytes is back and better than ever and we want you involved. Have you ever wanted the opportunity to speak or present? <b>This is your chance</b>.</p>
			<h4>We are looking for 4 keynote speakers for <?php echo $date ?></h4>
			<p>Bytes aims to create a relaxed, low-key atmosphere for newcomers to come and try their hand at giving a talk. The delegates are small in number, friendly and will always have a smile for you.</p>
			<p>As mentioned, we are looking for <b>4</b> speakers, with an extra <b>1 in reserve</b>. If you get selected as the reserve speaker for this year, you will get first refusal for the 2017 Bytes event.</p>
			<p>Talks should be about 20 minutes long, with some extra time at the end for questions from the attendees. As a speaker you must adhere to the Bytes <a href="/code-of-conduct.php">code of conduct</a>.</p>
			<p>Due to the charity focused nature of the event we are unfortunately unable to pay you for the talk. We can pay for travel expenses plus there are a few other perks for talking at Bytes:</p>
			<ul>
				<li>Ultimate kudos</li>
				<li>Help raise money for our chosen charities</li>
				<li>You get to practice public speaking in a relaxed environment</li>
				<li>You go into the Bytes archive as one of the best speakers ever</li>
				<li>Some cool photos for your social media profiles</li>
				<li>Lots of people telling you how good you were</li>
				<li>Some more Twitter followers (not guaranteed&hellip;)</li>
			</ul>
			<p>So if this tickles your fancy, <a href="http://goo.gl/forms/VJMSlIHWHsKVDPJG2">fill in the form</a> and cross your fingers! You have until the <b>1st July 2016</b> to submit your talk.</p>
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
