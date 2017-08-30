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
				<a href="<?php echo $tickets ?>" class="button"><?php echo $ticket_text ?></a>
			</section>
		</header>
		<section>
			<h2>More about Bytes</h2>
			<div class="intro">
				<p>Bytes mini-conf is bringing together web industry professionals from Brighton and all over the country for an evening of ideas and insights from 7pm - 10.30pm on <b><?php echo $date ?></b>. </p>
				<p>Hosted at Lighthouse – a hub for creative organisations in the vibrant North Laines – this affordable conference features four keynote speakers, covering topics ranging from development and design, through to marketing and performance tips.</p>
				<p>Whether you’re an experienced designer, developer, a pro-webmaster, or you’re just starting out, Bytes is a great opportunity to engage with your digital peers.</p>
				<p>This is a not-for-profit event, with all money raised donated to <a href="https://codebar.io/">Codebar</a>, a non-profit initiative that facilitates the growth of a diverse tech community by running regular programming workshops.</p>
				<p>This conference also includes a raffle, so make sure you bring extra pennies for the chance to win some of the swag, which has been generously donated by our range of sponsors.<br>(Drinks, however, are free!)</p>

				<p><a href="/Bytes.ics">Add Bytes to your calendar</a> | <a href="<?php echo $tickets ?>"><?php echo $ticket_text ?></a></p>
			</div>
		</section>
		<?php include './includes/signup.php'; ?>

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
		<?php /*
		<section id="speakers">
			<h2>Who's speaking?</h2>

			<ul class="set">
				<li>
					<div class="block">
						<div class="top">
							<div class="cell">
								<a href="http://www.twitter.com/poshaughnessy">
									<img src="/assets/bytes/img/speakers/peter.jpg" alt="Peter O'Shaughnessy" />
								</a>
							</div>
							<div class="cell">
								<h3>Peter O'Shaughnessy</h3>
								<ul class="outbound">
									<li><a href="http://www.twitter.com/poshaughnessy">@poshaughnessy</a></li>
									<li><a href="http://peteroshaughnessy.com/">peteroshaughnessy.com</a></li>
								</ul>
							</div>
						</div>
						<div class="text">
							<h4>Progressive Web Apps and the biggest browser you’ve probably never thought of</h4>
							<p>Samsung Internet, the third most popular mobile browser in Europe, is helping to push Progressive Web Apps forwards and the team are contributors to many of the specs.</p>
							<p>This talk will explore what is possible to achieve with Web APIs today and what’s coming up next, not just for Samsung Internet, but across mobile browsers and beyond.</p>
						</div>
					</div>
				</li>
				<li>
					<div class="block">
						<div class="top">
							<div class="cell">
								<a href="https://twitter.com/webguildseal">
									<img src="/assets/bytes/img/speakers/lisa.jpg" alt="Lisa Freeman" />
								</a>
							</div>
							<div class="cell">
								<h3>Lisa Freeman</h3>
								<ul class="outbound">
									<li><a href="https://twitter.com/webguildseal">@webguildseal</a></li>
									<li><a href="http://www.thewebguild.org/">thewebguild.org</a></li>
								</ul>
							</div>
						</div>
						<div class="text">
							<h4>Regulation and privacy: what might be coming?</h4>
							<p>This talk explores the reactions to the EU's ePrivacy review; the process, what we think might be changing and the forthcoming GDPR (General Data Protection Regulation). However, given the referendum results, ePrivacy in the UK might need to have completely fresh rules drawn up.</p>
						</div>
					</div>
				</li>
				<li>
					<div class="block">
						<div class="top">
							<div class="cell">
								<a href="http://www.twitter.com/grobiwebdesign">
									<img src="/assets/bytes/img/speakers/graeme.jpg" alt="Graeme Robinson" />
								</a>
							</div>
							<div class="cell">
								<h3>Graeme Robinson</h3>
								<ul class="outbound">
									<li><a href="http://www.twitter.com/grobiwebdesign">@grobiwebdesign</a></li>
									<li><a href="http://grwebdesign.co.uk/">grwebdesign.co.uk</a></li>
								</ul>
							</div>
						</div>
						<div class="text">
							<h4>Autism and The Web</h4>
							<p>This talk addresses the challenges faced by users and web developers on the Autistic Spectrum. Graeme will highlight why it's not a bad thing, clear up some misunderstandings about the spectrum and how UX improves learning.</p>
						</div>
					</div>
				</li>

				<li>
					<div class="block">
						<div class="top">
							<div class="cell">
								<a href="http://www.twitter.com/mikestreety">
									<img src="/assets/bytes/img/speakers/mike.jpg" alt="Mike Street" />
								</a>
							</div>
							<div class="cell">
								<h3>Mike Street</h3>
								<ul class="outbound">
									<li><a href="http://www.twitter.com/mikestreety">@mikestreety</a></li>
									<li><a href="http://www.liquidlight.co.uk">liquidlight.co.uk</a></li>
								</ul>
							</div>
						</div>
						<div class="text">
							<h4>The Digital Bucket List for People in the Web</h4>
							<p>We are all so busy ploughing through CSS and HTML that we forget to sometimes lift our head up and see what else is going on in the world that can benefit us. From side projects to expanding your repertoire, this talk gives you ideas to add to your bucket list to not only make you a better developer, but richer one too.</p>
						</div>
					</div>
				</li>
				<li>
					<div class="block">
						<div class="top">
							<div class="cell">
								<img src="/assets/bytes/img/speakers/candi.jpg" alt="Candi Underwood" />
							</div>
							<div class="cell">
								<h3>Candi Underwood</h3>
								<ul class="outbound">
									<li><a href="http://www.bytesconf.co.uk">bytesconf.co.uk</a></li>
								</ul>
							</div>
						</div>
						<div class="text">
							<p>Your MC for the evening, Candi will be introducing our speakers, warming up the crowd and telling bad jokes (jokes not guaranteed).</p>
						</div>
					</div>
				</li>
				<li class="alt">
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
				</li>
			</ul>
		</section>
		*/ ?>
		<?php /*
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
						<h4>Speaker 1</h4>
						<h5></h5>
					</td>
				</tr>
				<tr>
					<td>
						8:00pm
					</td>
					<td>
						<h4>Speaker 1</h4>
						<h5></h5>
					</td>
				</tr>
				<tr>
					<td>
						8:30pm
					</td>
					<td>
						Short talk from [CHARITY]
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
						<h4>Speaker 3</h4>
						<h5></h5>
					</td>
				</tr>
				<tr>
					<td>
						9:30pm
					</td>
					<td>
						<h4>Speaker 4</h4>
						<h5></h5>
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
		*/ ?>
<?php include 'includes/map.php'; ?>
	<?php if($tickets_on_sale) : ?>
	<section id="tickets">
		<div style="width:100%; text-align:left;">
			<iframe src="//eventbrite.com/tickets-external?eid=37126523431&ref=etckt" frameborder="0" height="360" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe>
		</div>
	</section>
	<?php endif; ?>
		<section id="partners">
			<h2>With thanks to...</h2>
			<ul class="partners">
				<li>
					<a rel="nofollow" href="http://www.liquidlight.co.uk/"><img src="/assets/bytes/img/partners/liquid-light.png" alt="Liquid Light"></a>
				</li>
			</ul>
			<p class="featured featured-sub">Want to sponsor Bytes? <a href="mailto:hello@bytesconf.co.uk?subject=Bytes 2017 Sponsorship">Get in touch</a></p>
		</section>
	</main>
<?php include 'includes/footer.php';
