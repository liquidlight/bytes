<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Spark Conference Brighton - A mini-conference</title>
	<meta name="description" content="Spark is an affordable, web-industry focused mini-conference hosted in the heart of Brighton raising money for local charities">

	<link rel="shortcut icon" href="/assets/spark/img/favicon.ico">
	<link rel="apple-touch-icon" sizes="500x500" href="/assets/spark/img/spark-favicon.png">

	<meta itemprop="name" content="Spark Conference, Brighton">
	<meta itemprop="description" content="Spark is an affordable, web-industry focused mini-conference hosted in the heart of Brighton raising money for local charities">
	<meta itemprop="image" content="http://www.sparkconf.uk/assets/spark/img/spark-favicon.png">

	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@sparkbrighton">

	<meta property="og:title" content="Spark Conference, Brighton"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://www.sparkconf.uk" />
	<meta property="og:image" content="http://www.sparkconf.uk/assets/spark/img/spark-favicon.png"/>
	<meta property="og:description" content="Spark is an affordable, web-industry focused mini-conference hosted in the heart of Brighton raising money for local charities" />
	<meta property="og:site_name" content="Spark Conference" />

	<link rel="stylesheet" href="/assets/spark/css/screen.css">
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-62725695-1', 'auto');
		ga('send', 'pageview');
	</script>
</head>
<body>
	<main>
		<header>
			<section>
				<h1 class="logo"><img src="/assets/spark/img/logo.png" alt="Spark Conference, Brighton" /></h1>
				<p class="featured">Thursday 29th October, 7pm - 11pm<br>Lighthouse, Kensington Street, Brighton, BN1 4AJ</p>
				<p class="featured featured-sub">An affordable, web-industry focused mini-conference raising money for charities.</p>
				<a href="Spark_Conf.ics" class="button">Add Spark to your calendar</a>
			</section>
		</header>
		<section>
			<h2>What is Spark?</h2>
			<div class="intro">
				<p>Spark is a web-industry focused mini-conference to be held at <b>Lighthouse</b>, a hub for creative industries in the centre of Brighton, on <b>Thursday 29th October</b>.</p>
				<p>If you are just starting out, or an industry professional this affordable mini-conf will help you gain insight from our highly experienced key note speakers, with topics ranging from development and design to workflows and performance tips.</p>
				<p>Every penny raised will be divided between our two charities - <b>abandofbrothers</b> and <b>drop4drop</b>. By attenting this mini-conf you are helping these great causes.</p>
				<p>There will also be a chance for you to win some excellent swag - make sure you bring some extra pennies to be in with a chance of walking away with some prizes.</p>
			</div>
				<p class="sub-note">We are on the hunt for more speakers, sponsors and prizes - if you think you can help in any way, drop up as <a href="http://www.twitter.com/sparkbrighton">tweet</a> or an&nbsp;<a href="mailto:hello@sparkconf.uk">email</a>.</p>
		</section>
		<section>
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
		<div class="divider alt">
			<section>
				<h2>Who are we raising money for?</h2>
				<ul class="set">
					<li>
						<div class="block">
							<a href="http://abandofbrothers.org.uk/">
								<img src="/assets/spark/img/abob.png" alt="A Band of Brothers" />
							</a>
							<div class="text">
								<p>abandofbrothers is a charity established by men committed to positive social change through personal development and community building.</p>
								<p>The organisation was born out of concern at the continuing escalation of self-destructive and anti-social behaviour among young men from every section of society, together with the realisation that any meaningful and sustainable solution entails the reclamation of shared local responsibility.</p>
								<p><a href="http://abandofbrothers.org.uk/" class="button button-small">Visit the site</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="block">
							<a href="http://drop4drop.org/">
								<img src="/assets/spark/img/drop4drop.png" alt="drop4drop" />
							</a>
							<div class="text">
								<p>Established in 2006, drop4drop is an independent charity on a mission to help alleviate the global water crisis, by working with both individuals and businesses to deliver clean water projects to developing communities around the world. </p>
								<p>Drop4drop have already provided an estimated 160,000 people with clean drinking water through projects funded by vital donations from Life water and other partners, and are excited to have many more lined up for the future. </p>
								<p><a href="http://drop4drop.org/" class="button button-small">Visit the site</a></p>
							</div>
						</div>
					</li>
				</ul>
			</section>
		</div>
		<h2>Where is it?</h2>
		<div id="map"></div>
	</main>
	<footer>
		Spark - a mini-conference by <a href="http://www.liquidlight.co.uk">Liquid Light</a><br>
		<a href="mailto:hello@sparkconf.uk">Email Us</a>&nbsp; | &nbsp;<a href="http://www.twitter.com/sparkbrighton">Tweet Us</a>
	</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="assets/spark/js/core.js"></script>
</body>
</html>
