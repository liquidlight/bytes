<?php
	$name = 'Bytes Conference, Brighton';
	$title = 'Bytes Conference Brighton - A mini-conference in Brighton';
	$description = 'Bytes is an affordable, web-industry focused mini-conference hosted in the heart of Brighton raising money for a local charity';

	include 'includes/header.php'; ?>
	<main>
		<header>
			<section>
				<a href=""><h1 class="logo"><img src="/assets/bytes/img/logo.png" alt="Bytes Conference, Brighton" /></h1></a>
				<h3 class="featured">Thursday <?php echo $date ?>, 7pm - 11pm<br>Lighthouse, Kensington Street, Brighton, BN1 4AJ</h3>
				<h4 class="featured featured-sub">An affordable, web-industry focused mini-conference raising money for charity.</h4>
				<a href="https://www.eventbrite.com/e/bytes-tickets-25970938777" class="button">Buy Tickets</a>
			</section>
		</header>
		<section>
			<h2>What is Bytes?</h2>
			<div class="intro">
				<p>Bytes is a web-industry focused mini-conference to be held at <b>Lighthouse</b>, a hub for creative industries in the centre of Brighton on <b><?php echo $date ?></b>.</p>
				<p>If you are just starting out, or an industry professional, this affordable mini-conf will help you gain insight from our four keynote speakers, with topics ranging from development and design to workflows and performance tips.</p>
				<p>Every penny raised will be donated to charity. By attending this mini-conf you are helping a great cause. Go you!</p>
				<p>There will also be a chance for you to win some excellent swag - make sure you bring some extra pennies to be in with a chance of walking away with some prizes.</p>
				<p><a href="/Bytes.ics">Add Bytes to your calendar</a> | <a href="https://www.eventbrite.com/e/bytes-tickets-25970938777">Buy tickets</a></p>
			</div>
		</section>
<?php include 'includes/signup.php'; ?>
		<div class="divider alt" id="charity">
			<section>
				<h2>Who are we raising money for?</h2>
				<div class="block image-text">
					<a href="http://www.codeclub.org.uk/" class="icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500"><g fill="#FFF"><path d="M250 0C111.93 0 0 111.93 0 250s111.93 250 250 250 250-111.93 250-250S388.07 0 250 0zm-95.5 175.7c8.35-1 15.65 1.42 21.86 7.12 1.01.92 1.71 2.01 1.87 3.39.36 3.02-1.83 5.7-4.96 6.05-2.29.25-4.22-.37-5.95-2.01-3.91-3.71-8.55-4.8-13.72-3.24-4.25 1.28-7.11 4.17-8.87 8.17-2.51 5.7-1.19 12.69 3.17 17.09 5.27 5.32 13.89 5.44 19.49.17 1.92-1.81 4.02-2.42 6.52-1.84 2.1.48 3.58 1.71 4.16 3.81.56 2 .05 3.79-1.46 5.25-3.95 3.83-8.65 6.17-14.07 7.15-11.4 2.06-22.79-3.57-28.1-13.41-2.04-3.79-3.09-7.83-3.03-12.41-.11-12.46 9.89-23.71 23.09-25.29zm-28.67-29.12c-.15 1.81-1.01 2.61-2.88 2.96-1.76.33-3.54.29-5.32.41-3.76.24-7.46.76-11.03 2.1-4.05 1.52-6.42 4.48-7.6 8.52-.89 3.06-1.28 6.19-1.28 9.38.01 16.85.03 33.7-.01 50.55-.01 4.49-.58 8.93-1.61 13.32-1.14 4.87-3.88 8.6-7.81 11.56-1.63 1.23-3.38 2.27-5.43 3.48 1.35.89 2.39 1.57 3.42 2.26 6.05 4.05 9.59 9.67 10.65 16.88.51 3.46.8 6.93.8 10.43-.01 16.25 0 32.51-.01 48.76 0 2.99.4 5.93.99 8.84 1.18 5.8 4.76 9.22 10.53 10.45 3.17.68 6.37 1.05 9.61 1.12 1.45.03 2.89.12 4.32.43 1.42.31 2.2 1.16 2.34 2.56.16 1.58.21 3.18-.09 4.74-.41 2.06-1.61 3.31-3.76 3.83-2.32.56-4.59.22-6.89.11-4.51-.21-8.91-1.04-13.13-2.66-6.29-2.41-10.56-6.84-12.94-13.11-1.82-4.8-2.71-9.78-2.88-14.89-.57-17.37-.09-34.74-.26-52.11-.04-3.98-.47-7.9-1.84-11.68-1.28-3.51-3.67-6.07-6.87-7.89-1.49-.85-3.07-1.53-4.72-2.05-2.92-.92-4.84-3.51-4.91-6.51-.07-2.92 1.85-5.64 4.75-6.62 2.01-.68 3.97-1.45 5.72-2.68 3.33-2.33 5.38-5.57 6.59-9.38.91-2.85 1.29-5.8 1.29-8.78.01-16.72-.06-33.43.02-50.15.02-4.68.57-9.33 1.86-13.88 2.63-9.25 8.71-14.85 17.91-17.2 5.14-1.32 10.39-1.78 15.69-1.66 2.78.06 4.38 1.63 4.78 4.8.14 1.24.11 2.52 0 3.76zM176.82 316c-4.73 4.53-11.68 7.33-18.51 7.36-11.17.06-21.25-6.68-25.25-16.88-4.03-10.28-.58-22.49 8.25-29.15 10.51-7.93 24.32-7.68 34.45.63.51.42 1.01.86 1.46 1.34 2.77 2.98 1.63 7.57-2.27 8.75-2.52.76-4.97.53-6.98-1.48-4.56-4.56-11.18-5.05-15.76-2.84-5.8 2.8-8.63 7.61-8.57 14.02.06 6.77 4.19 12.38 10.4 14.12 5.15 1.44 9.83.36 13.75-3.35 1.67-1.58 3.56-2.22 5.78-1.96 2.35.28 4.12 1.43 4.91 3.74.76 2.23.02 4.09-1.66 5.7zm52.48 5.59c-9.51-.08-19.02-.05-28.53-.02-3.6.01-5.39-2.77-5.4-4.93-.01-3.37 2.6-5.28 5.26-5.3 2.44-.02 4.89.01 7.33-.02 1.5-.02 1.53-.06 1.53-1.56.01-13.87.01-27.74 0-41.6 0-1.53-.04-1.57-1.54-1.59-2.18-.03-4.36.01-6.54-.02-.92-.01-1.84-.02-2.72-.38-2.17-.9-3.63-3.23-3.29-5.32.42-2.53 2.31-4.38 4.79-4.52 1.78-.1 3.56-.02 5.35-.03 3.17 0 6.34-.02 9.51.01 3.45.03 5.56 2.12 5.57 5.56.03 7.92.01 15.85.01 23.77v23.18c0 .46.04.93-.01 1.39-.09.9.38 1.14 1.18 1.13 1.58-.02 3.17 0 4.75 0 .99 0 1.98-.04 2.97.02 2.95.19 5.11 2.53 5 5.33-.09 2.59-2.51 4.92-5.22 4.9zm-12.73-94.32c-13.31-.1-25.93-11.15-25.95-25.86-.02-14.87 12.77-26.04 26.18-25.74 14.46 0 26.21 11.54 26.29 25.69.08 14.22-12.3 26.01-26.52 25.91zm79.4 92.65c-.89 2.25-3.29 3.67-5.71 3.32-2.57-.37-4.46-2.38-4.58-4.92-.04-.84-.01-1.69-.01-2.72-.94.26-1.22.83-1.56 1.28-2.67 3.48-6.25 5.48-10.51 6.13-4.78.74-9.46.3-13.94-1.73-5.78-2.62-8.97-7.16-10.04-13.31-.27-1.56-.46-3.13-.46-4.72 0-8.52-.06-17.05-.02-25.57.02-3.81 3.37-6.41 6.97-5.57 2.65.62 4.41 2.96 4.41 5.83 0 7.33-.02 14.67 0 22 .01 2.18.08 4.35.76 6.46 1.13 3.5 3.47 5.51 7.07 6.1 1.77.29 3.53.33 5.33.12 5.17-.62 8.41-3.5 9.99-8.35.8-2.46 1.18-5.01 1.19-7.6.02-6.34 0-12.68.05-19.03.03-3.48 3.03-6.06 6.46-5.63 2.61.33 4.73 2.52 4.96 5.15.06.66.04 1.32.04 1.98v37.46c0 1.13.02 2.24-.4 3.32zm9.31-99.37c0 .79-.06 1.59-.25 2.35-.54 2.18-2.52 3.78-4.7 3.89-2.28.11-4.39-1.36-5.16-3.55-.29-.81-.31-1.67-.49-2.86-2.1 2.15-4.11 3.81-6.56 4.9-8.16 3.63-19.01 2.41-26.16-5.35-5.73-6.22-7.82-13.59-6.97-21.9.65-6.45 3.37-11.86 8.07-16.3 7.87-7.42 20.89-8.13 29.01-1.8.57.45 1.14 1.43 1.95.95.63-.37.25-1.35.25-2.05.03-4.56.01-9.11.02-13.67 0-1.26.09-2.48.79-3.62 1.17-1.88 3.29-3.02 5.32-2.73 2.26.33 4.2 2.08 4.66 4.29.16.77.22 1.57.22 2.36.02 18.37.02 36.73 0 55.09zm52.57 98.81c-8.48 5.91-21.47 5.16-28.46-2.1-.18-.18-.35-.41-.79-.39-.43.39-.22 1.02-.31 1.56-.48 3-2.84 5.12-5.5 4.91-2.94-.23-4.99-2.44-5-5.59-.03-10.96-.01-21.92-.01-32.88 0-8.12.01-16.24-.01-24.36 0-1.72.37-3.27 1.63-4.51 1.53-1.5 3.33-2.1 5.44-1.5 2.16.61 3.51 2.06 3.99 4.23.19.83.19 1.71.19 2.56.02 4.75 0 9.51.01 14.26 0 .51-.16 1.05.22 1.63.55.06.83-.25 1.13-.51 8.04-6.84 21.2-6.42 29.44.55 13 11.02 12.03 32.39-1.97 42.14zm7.37-114.4c-1.08.48-2.19.44-3.31.44H330.56c-.14 1.68.61 2.93 1.33 4.17 1.17 1.99 2.83 3.54 4.93 4.45 5.92 2.58 11.88 2.78 17.81-.04 1.2-.57 2.19-1.46 3.24-2.27 2.18-1.7 5.44-1.62 7.54.12 2.62 2.17 2.86 5.8.41 8.18-2.84 2.76-6.23 4.74-10.01 5.82-7.21 2.07-14.54 2.31-21.56-.52-9.56-3.85-14.81-11.13-15.66-21.44-.62-7.48 1.55-14.06 6.62-19.68 8.05-8.93 21.47-11.29 31.64-5.29 7.02 4.14 11.07 10.44 12.38 18.45.56 3.49-1.02 6.28-4.01 7.61zm64.51 49.61c-.8.32-1.62.58-2.42.87-6.22 2.31-9.67 6.85-10.78 13.3-.52 3-.75 6.02-.75 9.06.02 14.93.02 29.87 0 44.8 0 4.82-.27 9.63-1.26 14.37-.72 3.44-1.76 6.77-3.48 9.86-3.23 5.79-8.38 9.02-14.59 10.73-4.61 1.27-9.32 1.83-14.1 1.7-2.07-.06-4.07-.36-5.81-1.63-1.73-1.27-2.5-3.06-2.67-5.1-.16-1.91.95-3.38 2.87-4.03 1.83-.62 3.76-.69 5.66-.75 4.31-.14 8.55-.55 12.65-1.99 3.56-1.25 5.89-3.67 7.09-7.21 1.29-3.79 1.73-7.72 1.73-11.7.01-16.52-.05-33.04.03-49.56.02-5.02.48-10.02 2.25-14.8 1.29-3.47 3.32-6.41 6.12-8.86 1.99-1.74 4.19-3.17 6.52-4.63-.43-.8-1.05-.92-1.56-1.21-3.82-2.2-7.25-4.83-9.57-8.69-1.84-3.07-2.51-6.51-3.06-9.97-.57-3.52-.75-7.08-.74-10.65.02-16.19.01-32.38.02-48.57 0-3.26-.4-6.45-1.3-9.58-1.22-4.23-3.8-7.14-8.02-8.6-3.53-1.22-7.18-1.76-10.88-1.9-1.65-.06-3.29-.2-4.93-.35-2.04-.18-3.99-.74-4.81-2.89-.83-2.18-.13-4.17 1.27-5.91 1.12-1.39 2.59-2.33 4.4-2.4 7.18-.29 14.24.27 20.98 3.11 5.79 2.44 9.78 6.62 12.18 12.36 1.36 3.25 2.09 6.66 2.53 10.15.42 3.35.46 6.72.47 10.08.02 15.4.01 30.79.01 46.19 0 3.12.35 6.2 1.21 9.2 1.77 6.17 5.65 10.35 11.82 12.27 1.23.38 2.3.94 3.21 1.86 3.52 3.57 2.37 9.2-2.29 11.07z"/><path d="M216.99 186.25c-8.43-.08-15.2 7.51-15.23 15.15-.03 7.77 6.74 15.21 14.98 15.19 9.28-.03 15.55-8.11 15-15.06.61-8.3-7.06-15.21-14.75-15.28zM341.95 283.09c-4.83.23-8.62 2.25-11.18 6.37-1.54 2.47-2.24 5.2-1.97 8.14.08 1.43-.14 2.88.32 4.31 2.72 8.5 9.93 11.43 17.91 9.38 10.39-2.67 12.8-15.64 6.94-22.97-3.07-3.82-7.14-5.45-12.02-5.23zM294.41 200.13c.16-5.18-3.63-11.32-10.15-12.77-1.7-.38-3.42-.14-5.13-.21-1.63-.07-3.13.38-4.57 1.09-7.74 3.81-9.5 12.61-6.88 19.14 1.95 4.86 7.14 8.6 12.73 8.47 4.06-.1 7.51-1.27 10.3-4.23 2.71-2.89 4.04-6.3 3.69-9.94 0-.76-.01-1.16.01-1.55zM348.91 187.56c-2.13-.6-4.31-.41-6.47-.41-4.84.01-8.4 2.24-10.82 6.39-.26.45-.51.92-.7 1.41-.24.6-.1 1.04.65 1.05.46.01.92.01 1.38.01h11.07V196c3.88 0 7.76.02 11.65-.01 1.53-.01 1.71-.32 1.08-1.79-1.51-3.52-4.21-5.62-7.84-6.64z"/></g></svg>
					</a>
					<div class="text">
						<p>Code Club is a nationwide network of volunteer-led after school coding clubs for children aged 9-11. Run by volunteers, Code Clubs focus on giving 9-11 year olds the opportunity to make things with computers and is part of the Raspberry Pi Foundation.</p>
						<p><a href="http://www.codeclub.org.uk/" class="button button-small">Visit the site</a></p>
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
						Bytes 2016 starts
					</td>
				</tr>
				<tr class="keynote">
					<td>
						7:30pm
					</td>
					<td>
						<h4>Peter O'Shaughnessy</h4>
						<h5>Progressive Web Apps and the biggest browser you’ve probably never thought of</h5>
					</td>
				</tr>
				<tr>
					<td>
						8:00pm
					</td>
					<td>
						A short presentation from Code Club
					</td>
				</tr>
				<tr>
					<td>
						8:15pm
					</td>
					<td>
						Break
					</td>
				</tr>
				<tr class="keynote">
					<td>
						8:30pm
					</td>
					<td>
						<h4>Lisa Freeman</h4>
						<h5>Regulation and privacy: what might be coming?</h5>
					</td>
				</tr>
				<tr class="keynote">
					<td>
						9:00pm
					</td>
					<td>
						<h4>Mike Street</h4>
						<h5>The Digital Bucket List for People in the Web</h5>
					</td>
				</tr>
				<tr>
					<td>
						9:30pm
					</td>
					<td>
						Break
					</td>
				</tr>
				<tr class="keynote">
					<td>
						9:45pm
					</td>
					<td>
						<h4>Graeme Robinson</h4>
						<h5>Autism and The Web</h5>
					</td>
				</tr>
				<tr>
					<td>
						10:15pm
					</td>
					<td>
						Raffle!
					</td>
				</tr>
				<tr>
					<td>
						11:00pm
					</td>
					<td>
						Doors close
					</td>
				</tr>
			</table>
		</section>
<?php include 'includes/map.php'; ?>
		<section id="partners">
			<h2>With thanks to...</h2>
			<ul class="partners">
				<li>
					<a rel="nofollow" href="http://www.bedlambrewery.co.uk/"><img src="/assets/bytes/img/partners/bedlam-brewery.png" alt="Bedlam Brewery"></a>
				</li>
				<li>
					<a rel="nofollow" href="http://bluebirdteaco.com/uk_en/"><img src="/assets/bytes/img/partners/bluebird.jpg" alt="Bluebird Tea"></a>
				</li>
				<li>
					<a rel="nofollow" href="http://www.pharmacie.coffee/"><img src="/assets/bytes/img/partners/pharmacie.png" alt="Pharmacie"></a>
				</li>
				<li>
					<a rel="nofollow" href="https://sugru.com/"><img src="/assets/bytes/img/partners/sugru.png" alt="Sugru"></a>
				</li>
				<li>
					<a rel="nofollow" href="http://www.tengreenbottles.com/"><img src="/assets/bytes/img/partners/ten-green-bottles.png" alt="Ten Green Bottles"></a>
				</li>
			</ul>
			<ul class="partners">
				<li>
					<a rel="nofollow" href="https://abookapart.com/"><img src="/assets/bytes/img/partners/a-book-apart.svg" alt="A Book Apart"></a>
				</li>
				<li>
					<a rel="nofollow" href="http://www.liquidlight.co.uk/"><img src="/assets/bytes/img/partners/liquid-light.png" alt="Liquid Light"></a>
				</li>
				<li>
					<a rel="nofollow" href="http://www.sitepoint.com/"><img src="/assets/bytes/img/partners/sitepoint.png" alt="Sitepoint"></a>
				</li>
				<li>
					<a rel="nofollow" href="https://www.smashingmagazine.com/"><img src="/assets/bytes/img/partners/smashing-mag.png" alt="Smashing Magazine"></a>
				</li>
			</ul>
		</section>
	</main>
<?php include 'includes/footer.php';
