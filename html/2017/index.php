<?php
	$name = 'Bytes Conference, Brighton';
	$title = 'Bytes Conference Brighton - A mini-conference in Brighton';
	$description = 'Bytes is an affordable, web-industry focused mini-conference hosted in the heart of Brighton raising money for a local charity';

	include 'includes/header.php'; ?>
	<main>
		<header>
			<section>
				<a href=""><h1 class="logo"><img src="/assets/bytes/img/logo.png" alt="Bytes Conference, Brighton" /></h1></a>
				<h3 class="featured">Thursday <?php echo $date ?>, 7pm - 10:30pm<br>Lighthouse, Kensington Street, Brighton, BN1 4AJ</h3>
				<h4 class="featured featured-sub">An affordable, web-industry focused mini-conference raising money for charity.</h4>
				<!-- <a href="<?php echo $tickets ?>" class="button"><?php echo $ticket_text ?></a> -->
			</section>
		</header>

		<div class="divider alt">
			<section>
				<div class="thin" style="color: #fff; text-align: center;">
					<h3>How did we do?</h3>
					<p>Want to read about how we did in 2017? How much money we raised and watch the videos?</p>
					<p><a class="button" href="/the-morning-after.php">Read all about it</a></p>
				</div>
			</section>
		</div>

		<section>
			<h2>More about Bytes</h2>
			<div class="intro">
				<p>Bytes mini-conf is bringing together web industry professionals from Brighton and all over the country for an evening of ideas and insights from 7pm - 10.30pm on <b><?php echo $date ?></b>. </p>
				<p>Hosted at Lighthouse – a hub for creative organisations in the vibrant North Laines – this affordable conference features four keynote speakers, covering topics ranging from development and design, through to marketing and performance tips.</p>
				<p>Whether you’re an experienced designer, developer, a pro-webmaster, or you’re just starting out, Bytes is a great opportunity to engage with your digital peers.</p>
				<p>This is a not-for-profit event, with all money raised donated to <a href="https://codebar.io/">Codebar</a>, a non-profit initiative that facilitates the growth of a diverse tech community by running regular programming workshops.</p>
				<p>This conference also includes a raffle, so make sure you bring extra pennies for the chance to win some of the swag, which has been generously donated by our range of sponsors.<br>(Drinks, however, are free!)</p>

				<!-- <p><a href="/Bytes.ics">Add Bytes to your calendar</a> | <a href="<?php echo $tickets ?>"><?php echo $ticket_text ?></a></p> -->
			</div>
		</section>

		<div class="divider alt" id="charity">
			<section>
				<h2>Nominated charity</h2>
				<div class="block image-text">
					<a href="https://codebar.io" class="icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="311" height="254" viewBox="44.5 73.5 311 254">
							<g fill="#FFF">
								<path d="M227.9 174.7c-24.2 0-43.9-19.7-43.9-43.9s19.7-43.9 43.9-43.9c24.199 0 43.899 19.7 43.899 43.9.001 24.2-19.699 43.9-43.899 43.9zm0-83.8c-22 0-39.9 17.9-39.9 39.9s17.9 39.9 39.9 39.9 39.899-17.9 39.899-39.9S249.9 90.9 227.9 90.9z"/>
								<path d="M179 181.6c-.5 0-1-.2-1.4-.6l-48.8-48.8c-.4-.4-.6-.9-.6-1.4s.2-1 .6-1.4l48.8-48.8c.8-.8 2-.8 2.8 0l48.8 48.8c.8.8.8 2 0 2.8L180.5 181c-.4.4-.9.6-1.5.6zm-45.9-50.8l46 46 46-46-46-46-46 46z"/>
								<path d="M200.6 233.6c-.3 0-.7-.1-1-.3l-41.7-24.1c-.6-.4-1-1-1-1.7v-48.1c0-.7.4-1.4 1-1.7l41.7-24c.6-.4 1.4-.4 2 0l41.7 24c.601.4 1 1 1 1.7v48.1c0 .7-.399 1.4-1 1.7l-41.7 24c-.4.3-.7.4-1 .4zm-39.7-27.2l39.7 22.899 39.7-22.899v-45.8l-39.7-22.9-39.7 22.9v45.8z"/>
								<path d="M227.9 174.7c-1.101 0-2-.9-2-2s.899-2 2-2c22 0 39.899-17.9 39.899-39.9 0-1.1.9-2 2-2 1.101 0 2 .9 2 2 .001 24.2-19.699 43.9-43.899 43.9zM205.3 155.4c-.5 0-1-.2-1.399-.6-.801-.8-.801-2 0-2.8l22.5-22.5c.8-.8 2-.8 2.8 0s.8 2 0 2.8l-22.5 22.5c-.401.4-.901.6-1.401.6zM50.6 298.8v-.2c0-11.399 9.1-21.399 20.8-21.399 7.5 0 12.2 3.3 16 7.2.2.199.2.5 0 .699l-2.1 2.2c-.2.2-.5.2-.7 0-3.4-3.399-7.4-6.399-13.2-6.399-9.3 0-16.5 7.8-16.5 17.5v.199c0 9.801 7.4 17.7 16.8 17.7 5.6 0 10-2.8 13.4-6.399.2-.2.5-.2.7 0l2 1.699c.2.2.2.5 0 .7-4.1 4.5-9 7.7-16.3 7.7-11.8 0-20.9-9.8-20.9-21.2zM93.5 298.8v-.2c0-11.399 8.9-21.399 21-21.399s20.9 9.8 20.9 21.2v.199c0 11.4-8.9 21.4-21 21.4s-20.9-9.8-20.9-21.2zm37.7 0v-.2c0-9.8-7.4-17.699-16.8-17.699-9.7 0-16.6 7.899-16.6 17.5v.199c0 9.801 7.4 17.7 16.8 17.7 9.6 0 16.6-7.9 16.6-17.5zM142.5 298.8v-.2c0-13.3 10-21.399 19.8-21.399 7.5 0 12.5 3.899 15.9 8.5.3.399.9.2.9-.3V261.1c0-.3.2-.5.5-.5h2.9c.3 0 .5.2.5.5v57.4c0 .3-.2.5-.5.5h-2.9c-.3 0-.5-.2-.5-.5v-7c0-.5-.6-.7-.9-.3-3.5 4.8-8.5 8.8-15.9 8.8-9.8 0-19.8-7.9-19.8-21.2zm36.9-.1v-.2c0-10.5-8.2-17.5-16.6-17.5-8.9 0-16 6.5-16 17.4v.199c0 10.7 7.4 17.601 16 17.601 8.4 0 16.6-7.1 16.6-17.5zM191.9 298.7v-.2c0-11.8 8.3-21.3 19.4-21.3 11.4 0 18.7 9.3 18.7 21.399v1.101c0 .3-.2.5-.5.5h-32.8c-.3 0-.5.3-.5.6.9 9.8 8.1 15.5 16 15.5 6.1 0 10.399-2.6 13.7-6.1.199-.2.5-.2.699 0l2 1.7c.2.199.2.5 0 .699-4.1 4.301-8.899 7.301-16.5 7.301-10.899.1-20.199-8.5-20.199-21.2zm33.3-2c.3 0 .5-.3.5-.5-.7-8-5.4-15.3-14.601-15.3-7.899 0-14.1 6.5-15 15.3 0 .3.2.6.5.6h28.6v-.1zM241.4 311.8v6.7c0 .3-.2.5-.5.5H238c-.3 0-.5-.2-.5-.5v-57.4c0-.3.2-.5.5-.5h2.9c.3 0 .5.2.5.5v24.6c0 .5.6.7.899.3 3.5-4.8 8.5-8.8 15.9-8.8 9.8 0 19.8 7.899 19.8 21.2v.199c0 13.301-10 21.4-19.8 21.4-7.5 0-12.5-3.9-15.9-8.5a.494.494 0 0 0-.899.301zm32.4-13v-.2c0-10.699-7.399-17.6-16-17.6-8.5 0-16.6 7.1-16.6 17.5v.2c0 10.5 8.2 17.5 16.6 17.5 8.8 0 16-6.4 16-17.4zM282.9 307.2v-.2c0-8.5 7.3-13.3 17.8-13.3 5.399 0 9.2.6 12.899 1.6.301.101.601-.2.601-.5v-1.1c0-8.2-5-12.5-13.4-12.5-4.8 0-8.7 1.2-12.3 3-.3.1-.6 0-.7-.3l-1-2.5c-.1-.301 0-.5.3-.7 4.301-2 8.601-3.3 14-3.3 5.5 0 9.9 1.5 12.9 4.5 2.7 2.699 4.2 6.5 4.2 11.5v24.9c0 .3-.2.5-.5.5h-2.8c-.301 0-.5-.2-.5-.5V312c-2.801 3.9-7.801 7.8-15.601 7.8-7.799.2-15.899-4.1-15.899-12.6zm31.4-3.4v-4.2c0-.199-.1-.399-.399-.5-3.4-.899-7.801-1.699-13.5-1.699-8.601 0-13.4 3.8-13.4 9.5v.199c0 5.9 5.6 9.4 11.8 9.4 8.399-.2 15.499-5.3 15.499-12.7zM331.3 302.3v16.2c0 .3-.2.5-.5.5h-2.9c-.301 0-.5-.2-.5-.5v-39.8c0-.3.199-.5.5-.5h2.899c.3 0 .5.2.5.5v9c0 .5.7.7.9.2 3.399-6.101 9.5-10.4 16.6-10.4.3 0 .5.2.5.5v3.3c0 .3-.2.5-.5.5-14.999.4-17.499 12.7-17.499 20.5z"/>
							</g>
						</svg>
					</a>
					<div class="text">
						<p><strong>codebar</strong> is a non-profit initiative that facilitates the growth of a diverse tech community by running regular programming workshops.</p>
						<p>Their goal is to enable underrepresented people to learn programming in a safe and collaborative environment and expand their career opportunities. To achieve this they run free regular workshops, regular one-off events and try to create opportunities for our students making technology and coding more accessible.
						<p><a href="https://codebar.io" class="button button-small">Visit the site</a></p>
					</div>
				</div>
			</section>
		</div>

		<section id="speakers">
			<h2>Who's speaking?</h2>

			<ul class="set">
				<li>
					<div class="block">
						<div class="top">
							<div class="cell">
								<a href="https://twitter.com/Alice_Reeves">
									<img src="/assets/bytes/img/speakers/alice.jpg" alt="Alice Reeves" />
								</a>
							</div>
							<div class="cell">
								<h3>Alice Reeves</h3>
								<ul class="outbound">
									<li><a href="https://twitter.com/Alice_Reeves">@alice_reeves</a></li>
									<li><a href="https://thejoyfulweb.com">thejoyfulweb.com</a></li>
								</ul>
							</div>
						</div>
						<div class="text">
							<h4>How To Set Your Business Up For Social Media Success</h4>
							<p>In this talk, Alice will provide her most important tips for setting yourself and your business up for social media success. While it's incredibly easy to set up a social media account (after all, even your Nan can do it) it's surprising how many businesses miss out these simple but key steps for optimising, integrating, and signalling to their social media presence. Alice will cover the most common things that get overlooked by businesses when setting up their social media, and share the changes you can make to your social media right now to have the biggest impact.</p>

							<h4 class="toggleAction">About Alice</h4>
							<p class="toggleTarget">Alice is Director of <a href="https://thejoyfulweb.com">The Joyful Web</a>, a social media and content marketing agency that works with purposeful, value-driven brands who want to genuinely connect with their customers online. Until the end of 2016, Alice was Social Media Director at international marketing agency Jellyfish where she developed social media strategies for a huge range of industries from finance and pharmaceuticals, to global sports brands and up-and-coming tech startups. Outside of work, she enjoys running, yoga, wine, gin, pyjamas, dinosaurs, and Doctor Who in no particular order. Alice is also founder of <a href="https://belongcon.com">BelongCon</a>, author of the <a href="http://www.truthandtails.com">Truth & Tails</a> series of children's books, and a gluten-free food blogger. </p>
						</div>
					</div>
				</li>

				<li>
					<div class="block">
						<div class="top">
							<div class="cell">
								<a href="http://www.twitter.com/ambrwlsn90">
									<img src="/assets/bytes/img/speakers/amber.jpg" alt="Amber Wilson" />
								</a>
							</div>
							<div class="cell">
								<h3>Amber Wilson</h3>
								<ul class="outbound">
									<li><a href="http://www.twitter.com/ambrwlsn90">@ambrwlsn90</a></li>
									<li><a href="https://amberwilson.co.uk">amberwilson.co.uk</a></li>
								</ul>
							</div>
						</div>
						<div class="text">
							<h4>Psychology and the Web</h4>
							<p>Amber has found that the skills and experiences she picked up studying and working within Psychology have guided her as a developer - sometimes in surprising ways, always in useful ways, and in some ways, she has yet to discover. She is excited to bring along her unique perspective on web development through the eyes of a discipline she knows so well. She'll talk to us about how folk that work on the web can be aware of other disciplines that surround us, embrace their lessons, and harness these to build both a stronger web and stronger bonds with each other.</p>

							<h4 class="toggleAction">About Amber</h4>
							<p class="toggleTarget">Amber is a budding designer continually getting excited about everything to do with the Web. With her background pursuing a Master's degree in Child Psychology, she'll bring a unique perspective on both where we've come from and where we'll go.</p>
						</div>
					</div>
				</li>

				<li>
					<div class="block">
						<div class="top">
							<div class="cell">
								<a href="http://www.twitter.com/matsaukeo">
									<img src="/assets/bytes/img/speakers/matt.jpg" alt="Matt Keogh" />
								</a>
							</div>
							<div class="cell">
								<h3>Matt Keogh</h3>
								<ul class="outbound">
									<li><a href="http://www.twitter.com/matsaukeo">@matsaukeo</a></li>
									<li><a href="http://www.liquidlight.co.uk">liquidlight.co.uk</a></li>
								</ul>
							</div>
						</div>
						<div class="text">
							<h4>This much I know: 15 years experience in 20 minutes.</h4>
							<p>Is there life on Mars? Will Brexit happen? Matt doesn't know either. But after 15 years of designing websites, he knows a few things about becoming a better designer which he’d like to share.</p>

							<h4 class="toggleAction">About Matt</h4>
							<p class="toggleTarget">Matt Keogh is a senior designer for Liquid Light and a fan of whitespace and typography. Matt’s design eye has been adding a little “pizzazz” to the internet for over 15 years. Matt’s family keep him entertained and out of trouble when he’s not staring at a screen.</p>
						</div>
					</div>
				</li>

				<li>
					<div class="block">
						<div class="top">
							<div class="cell">
								<a href="http://www.twitter.com/davshoward">
									<img src="/assets/bytes/img/speakers/davs.jpg" alt="Davs Howard" />
								</a>
							</div>
							<div class="cell">
								<h3>Davs Howard</h3>
								<ul class="outbound">
									<li><a href="http://www.twitter.com/davshoward">@davshoward</a></li>
									<li><a href="https://majordigital.com/">majordigital.com</a></li>
								</ul>
							</div>
						</div>
						<div class="text">
							<h4>The truth about "full-stack"</h4>
							<p>The term "full-stack" is an interesting term in the modern web dev world - often seen as a 'Jack of all trades, master of none' in an industry striving for excellence. This talk will dive into the life of someone who spans multiple disciplines, the struggles they face and the components of their personality and skill set that they consider vital to a fulfilling role.</p>

							<h4 class="toggleAction">About Davs</h4>
							<p class="toggleTarget">Head of Digital at Major Digital. Always player one. Cornetto lover. Meat popsicle. </p>
						</div>
					</div>
				</li>

				<li class="full">
					<div class="block">
						<div class="top">
							<div class="cell">
								<img src="/assets/bytes/img/speakers/mindi.jpg" alt="Mike and Candi" />
							</div>
							<div class="cell">
								<h3>Mike & Candi</h3>
								<ul class="outbound">
									<li><a href="http://www.bytesconf.co.uk">bytesconf.co.uk</a></li>
								</ul>
							</div>
						</div>
						<div class="text">
							<p>Your MCs for the evening, Mike and Candi are like the Ant and Dec of the web world. Introductions, jokes and general professional hilarity will ensue.</p>
						</div>
					</div>
				</li>
				<!-- <li class="alt">
					<div class="block">
						<div class="top">
							<div class="cell">
								<img src="/assets/bytes/img/speakers/raffle.jpg" alt="The Raffle" />
							</div>
							<div class="cell">
								<h3>The Raffle!</h3>
								<p>We've got some great prizes for you to win at Bytes, so make sure you bring your change.</p>
								<p>Prizes include books from Sitepoint, Smashing Magazine and A Book Apart and a brewery tour from Bedlam Beers!</p>
							</div>
						</div>
					</div>
				</li> -->
			</ul>
		</section>

		<section id="schedule">
			<h2>Schedule</h2>
			<table class="schedule">
				<tr>
					<td>
						7:00pm
					</td>
					<td>
						Doors open
					</td>
				</tr>
				<tr>
					<td>
						7:20pm
					</td>
					<td>
						Bytes 2017 starts
					</td>
				</tr>
				<tr class="keynote">
					<td>
						7:30pm
					</td>
					<td>
						<h4>Davs Howard</h4>
						<h5>The truth about "full-stack"</h5>
					</td>
				</tr>
				<tr>
					<td>
						8:00pm
					</td>
					<td>
						<h4>Amber Wilson</h4>
						<h5>Psychology and the Web</h5>
					</td>
				</tr>
				<tr>
					<td>
						8:30pm
					</td>
					<td>
						Short talk from Codebar
					</td>
				</tr>
				<tr class="keynote">
					<td>
						8:45pm
					</td>
					<td>
						Break
					</td>
				</tr>
				<tr class="keynote">
					<td>
						9:00pm
					</td>
					<td>
						<h4>Alice Reeves</h4>
						<h5>How To Set Your Business Up For Social Media Success</h5>
					</td>
				</tr>
				<tr>
					<td>
						9:30pm
					</td>
					<td>
						<h4>Matt Keogh</h4>
						<h5>This much I know: 15 years experience in 20 minutes.</h5>
					</td>
				</tr>
				<tr class="keynote">
					<td>
						10pm
					</td>
					<td>
						Raffle!
					</td>
				</tr>
				<tr>
					<td>
						10:30pm
					</td>
					<td>
						Doors close
					</td>
				</tr>
			</table>
		</section>
<?php include 'includes/map.php'; ?>
	<?php if ($tickets_on_sale) { ?>
	<section id="tickets">
		<div style="width:100%; text-align:left;">
			<iframe src="//eventbrite.com/tickets-external?eid=37126523431&ref=etckt" frameborder="0" height="410" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe>
		</div>
	</section>
	<?php } ?>
		<section id="partners">
			<h2>With thanks to...</h2>
			<ul class="partners partnersPlatinum">

			</ul>
			<ul class="partners partnersLower">
				<li>
					<a rel="nofollow" href="https://www.oreilly.com/"><img src="/assets/bytes/img/partners/orm.jpg" alt="O'Reilly"></a>
				</li>
				<li>
					<a rel="nofollow" href="http://www.liquidlight.co.uk/"><img src="/assets/bytes/img/partners/liquid-light.png" alt="Liquid Light"></a>
				</li>
				<li>
					<a rel="nofollow" href="https://www.packtpub.com/"><img src="/assets/bytes/img/partners/packt.png" alt="Packt Publishing"></a>
				</li>
			</ul>
			<ul class="partners">
				<li>
					<a rel="nofollow" href="https://www.brewdog.com/"><img src="/assets/bytes/img/partners/brewdog.svg" alt="Brewdog"></a>
				</li>
				<li>
					<a rel="nofollow" href="http://builtbybuffalo.com/"><img src="/assets/bytes/img/partners/buffalo-logo.svg" alt="Buffalo"></a>
				</li>
				<li>
					<a rel="nofollow" href="http://goodscary.com/"><img src="/assets/bytes/img/partners/goodscary-logo.svg" alt="Good Scary"></a>
				</li>
			</ul>
			<ul class="partners partnersLower">
				<li>
					<a rel="nofollow" href="http://www.bozboz.co.uk/"><img src="/assets/bytes/img/partners/bozboz.svg" alt="Bozboz"></a>
				</li>
				<li>
					<a rel="nofollow" href="http://www.confwall.co.uk/"><img src="/assets/bytes/img/partners/confwall.png" alt="Confwall"></a>
				</li>
				<li>
					<a rel="nofollow" href="http://www.laserzone.co.uk/"><img src="/assets/bytes/img/partners/laserzone.png" alt="Laserzone"></a>
				</li>
			</ul>
			<p class="featured featured-sub">Want to sponsor Bytes? <a href="mailto:hello@bytesconf.co.uk?subject=Bytes 2017 Sponsorship">Get in touch</a></p>
		</section>
	</main>
<?php include 'includes/footer.php';
