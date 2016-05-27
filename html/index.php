<?php
	$name = 'Bytes Conference, Brighton';
	$title = 'Bytes Conference Brighton - A mini-conference in Brighton';
	$description = 'Bytes is an affordable, web-industry focused mini-conference hosted in the heart of Brighton raising money for local charities';

	include 'includes/header.php'; ?>
	<main>
		<header>
			<section>
				<a href=""><h1 class="logo"><img src="/assets/bytes/img/logo.png" alt="Bytes Conference, Brighton" /></h1></a>
				<h3 class="featured"><?php echo $date ?><br>Lighthouse, Kensington Street, Brighton, BN1 4AJ</h3>
				<h4 class="featured featured-sub">An affordable, web-industry focused mini-conference raising money for charities.</h4>
				<a href="/call-for-speakers.php" class="button">Submit your idea to talk at Bytes</a>
			</section>
		</header>
		<section>
			<h2>What is Bytes?</h2>
			<p class="featured featured-sub">Bytes is back and better than ever and we want you involved. Have you ever wanted the opportunity to speak or present? This is your chance. <a href="/call-for-speakers.php">Submit your talk idea</a> and you could be standing on our stage.
			<div class="intro">
				<p>Bytes is a web-industry focused mini-conference to be held at <b>Lighthouse</b>, a hub for creative industries in the centre of Brighton on <b><?php echo $date ?></b></p>
				<p>If you are just starting out, or an industry professional this affordable mini-conf will help you gain insight from our highly experienced key note speakers, with topics ranging from development and design to workflows and performance tips.</p>
				<p>Every penny raised will be dontated to charity. By attending this mini-conf you are helping these great causes.</p>
				<p>There will also be a chance for you to win some excellent swag - make sure you bring some extra pennies to be in with a chance of walking away with some prizes.</p>
			</div>
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
		<?php /*
		<div class="divider alt" id="charities">
			<section>
				<h2>Who are we raising money for?</h2>
				<ul class="set">
					<li>
						<div class="block">
							<a href="http://abandofbrothers.org.uk/">
								<img src="/assets/bytes/img/abob.png" alt="A Band of Brothers" />
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
								<img src="/assets/bytes/img/drop4drop.png" alt="drop4drop" />
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
		<section id="speakers">
			<h2>Who's speaking?</h2>
			<ul class="set">
				<li>
					<div class="block">
						<div class="top">
							<div class="cell">
								<img src="/assets/bytes/img/speakers/john-ellison.jpg" alt="John Ellison" />
							</div>
							<div class="cell">
								<h3>John Ellison</h3>
								<ul class="links">
									<li><a href="http://www.twitter.com/iamjohnellison">@iamjohnellison</a></li>
									<li><a href="http://john-ellison.com">john-ellison.com</a></li>
								</ul>
							</div>
						</div>
						<div class="text">
							<p>John is a user experience designer passionate about living a great story. He recently embarked on a 90-day journey at Clearleft, writing daily about his experience on his <a href="https://90days.john-ellison.com/">Blog</a>. John is currently working on helping to <a href="http://solvetherefugeecrisis.com/">solve the refugee crisis</a>.</p>
							<p><strong>Keynote</strong>: <a href="http://lanyrd.com/2015/bytesconf/sdrxbt/">What is the future that we want to build together?</a></p>
						</div>
					</div>
				</li>
				<li>
					<div class="block">
						<div class="top">
							<div class="cell">
								<img src="/assets/bytes/img/speakers/rosa-fox.jpg" alt="Rosa Fox" />
							</div>
							<div class="cell">
								<h3>Rosa Fox</h3>
								<ul class="links">
									<li><a href="http://www.twitter.com/rosaemerald">@rosaemerald</a></li>
									<li><a href="http://www.rosa-fox.com/">rosa-fox.com</a></li>
								</ul>
							</div>
						</div>
						<div class="text">
							<p>Rosa works remotely for Happy Bear Software as a Ruby developer. She has a background in music computing and co-organises two local events which encourage diversity in the tech industry: <a href="http://codebar.io/brighton">Codebar Brighton</a> and <a href="http://shecodesbtn.co.uk/">She Codes Brighton</a></p>
							<p><strong>Keynote</strong>: <a href="http://lanyrd.com/2015/bytesconf/sdrxbx/">Built by everyone</a></p>
						</div>
					</div>
				</li>
				<li>
					<div class="block">
						<div class="top">
							<div class="cell">
								<img src="/assets/bytes/img/speakers/charlotte-jackson.jpg" alt="Charlotte Jackson" />
							</div>
							<div class="cell">
								<h3>Charlotte Jackson</h3>
								<ul class="links">
									<li><a href="http://www.twitter.com/lottejackson">@lottejackson</a></li>
									<li><a href="http://www.lottejackson.com">lottejackson.com</a></li>
								</ul>
							</div>
						</div>
						<div class="text">
							<p>Charlotte is a front-end developer at Clearleft. She is passionate about the web and has a keen interest in the education of new developers. She regularly volunteers at meet ups like codebar.</p>
							<p><strong>Keynote</strong>: <a href="http://lanyrd.com/2015/bytesconf/sdrxbw/">From pages to patterns</a></p>
						</div>
					</div>
				</li>

				<li>
					<div class="block">
						<div class="top">
							<div class="cell">
								<img src="/assets/bytes/img/speakers/will-chidlow.jpg" alt="Will Chidlow" />
							</div>
							<div class="cell">
								<h3>Will Chidlow</h3>
								<ul class="links">
									<li><a href="http://www.twitter.com/terminallywill">@terminallywill</a></li>
									<li><a href="http://www.liquidlight.co.uk">liquidlight.co.uk</a></li>
								</ul>
							</div>
						</div>
						<div class="text">
							<p>Will is a designer at Liquid Light, specialising in making the web look and work better. When not designing, he can be found tinkering with a Raspberry Pi and drinking too much coffee.</p>
							<p><strong>Keynote</strong>: <a href="http://lanyrd.com/2015/bytesconf/sdrxbr/">The unsung skill</a></p>
						</div>
					</div>
				</li>
			</ul>
		</section> */ ?>
		<h2>Where is it?</h2>
		<div id="map"></div>
		<?php /*
		<section id="partners">
			<h2>With thanks to...</h2>
			<ul class="partners">
				<li>
					<a rel="nofollow" href="http://bisonbeer.co.uk/"><img src="/assets/bytes/img/partners/bison-beer.jpg" alt="Bison Beer"></a>
				</li>
				<li>
					<a rel="nofollow" href="http://www.bohogelato.co.uk/"><img src="/assets/bytes/img/partners/boho-gelato.jpg" alt="Boho Gelato"></a>
				</li>
				<li>
					<a rel="nofollow" href="http://www.drinkinbrighton.co.uk/deadwaxsocial"><img src="/assets/bytes/img/partners/deadwax.jpg" alt="Dead Wax Social"></a>
				</li>
				<li>
					<a rel="nofollow" href="http://www.life-water.co.uk/"><img src="/assets/bytes/img/partners/lifewater.jpg" alt="Lifewater"></a>
				</li>
				<li>
					<a rel="nofollow" href="http://brewedinbrighton.co.uk/"><img src="/assets/bytes/img/partners/north-laine.png" alt="North Laine"></a>
				</li>

			</ul>
			<ul class="partners">
				<li>
					<a rel="nofollow" href="http://bluebirdteaco.com/"><img src="/assets/bytes/img/partners/bluebird.jpg" alt="Bluebird Tea"></a>
				</li>
				<li>
					<a rel="nofollow" href="http://www.cybercandy.co.uk/"><img src="/assets/bytes/img/partners/cybercandy.jpg" alt="Cybercandy"></a>
				</li>
				<li>
					<a rel="nofollow" href="http://www.liquidlight.co.uk/"><img src="/assets/bytes/img/partners/liquid-light.jpg" alt="Liquid Light"></a>
				</li>
				<li>
					<a rel="nofollow" href="http://www.komedia.co.uk/brighton/"><img src="/assets/bytes/img/partners/komedia.jpg" alt="Komedia"></a>
				</li>
			</ul>
		</section>
	</main>*/?>
<?php include 'includes/footer.php';
