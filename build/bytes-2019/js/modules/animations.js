import anime from '../libs/anime';
import Splitting from '../libs/splitting';

(() => {

	/**
	 * Anime
	 */
	let boxPolygon = anime({
		targets: '.boxPolygon',
		points: [
			{ value: '316 102 665 78 731 381 268 328' },
			{ value: '220 116 863 87 917 381 124 361' },
			{ value: '102 38 933 57 985 425 46 425' }
		],
		easing: 'easeOutElastic',
		duration: 1200,
		elasticity: 300,
		opacity: [0,1],
		round: 1,
		delay: 1200
	});

	let calloutPolygon = anime({
		targets: '.calloutPolygon',
		points: [
			{ value: '489 73 622 313 456 427 215 409 177 140' },
			{ value: '350 22 617 226 594 378 291 403 164 192' },
			{ value: '177 58 553 110 724 318 366 425 68 227' }
		],
		easing: 'easeOutElastic',
		duration: 2500,
		elasticity: 300,
		round: 1,
	});


	var logoTimeLine = anime.timeline({
		easing: 'easeOutExpo',
		duration: 1200,
		delay: 1000
	});

	logoTimeLine
		.add({
			targets: '.logoWordBytes',
			translateX: [20, 0],
			opacity: [0, 1]
		})
		.add({
			targets: '.logoWordConf',
			translateX: [50, 77],
			offset: 100,
			opacity: 1
		})
		.add({
			targets: '.logoDot',
			scale: 1,
			opacity: 1,
			offset: '-=500'
		})
		.add({
			targets: '.logoFgShape',
			points: [
				{ value: '0 59 0 6 216 6 216 59' },
				{ value: '0 59 13 6 203 6 216 61' }
			],
			offset: 200,
			easing: 'easeOutElastic',
			elasticity: 400,
			opacity: [0, 1],
			scaleX: [0.7, 1]
		})
		.add({
			targets: '.logoBgShape',
			rotate: [{ value: '6deg' }, { value: 0 }],
			scale: [{ value: 0.6 }, { value: 1 }],
			opacity: [
				{
					value: 0
				}, {
					value: 1,
					duration: 300,
					easing: 'linear',
					delay: 50
				}
			],
			offset: 300,
			easing: 'easeOutElastic',
		});

	const logo = document.querySelector('.jsLogo')

	function animateLogo(el, rotation) {
		anime.remove(el);
		anime({
			targets: el,
			rotate: rotation
		});
	}

	logo.addEventListener('mouseenter', () => {
		animateLogo('.logoFgShape', '2deg');
		animateLogo('.logoBgShape', '-2deg');
	}, false);

	logo.addEventListener('mouseleave', () => {
		animateLogo('.logoFgShape', '0');
		animateLogo('.logoBgShape', '0');
	}, false);

	/**
	 * Splitting
	 */
	const headings = document.querySelectorAll('.jsHeading');
	const results = Splitting({
		target: headings,
		by: 'words'
	});

	/**
	 * Heading reveal
	 */
	let headingObserver;

	const config = {
		// If the image gets within 50px in the Y axis, start the download.
		rootMargin: '0px 0px',
		threshold: 0.01
	};

	// Add isVisible class to element
	let showHeading = element => element.classList.add('isVisible');

	let onHeadingIntersection = (entries) => {
		// Loop through the entries
		entries.forEach(entry => {
			// Are we in viewport?
			if (entry.intersectionRatio > 0) {
				// Stop watching and load the image
				showHeading(entry.target);
				headingObserver.unobserve(entry.target);
			}
		});
	}

	// eslint-disable-next-line no-negated-condition
	if (!('IntersectionObserver' in window)) {
		// Adds isVisible class straight away
		Array.from(headings).forEach(el => showHeading(el));
	} else {
		// The observer for the headings on the page
		headingObserver = new IntersectionObserver(onHeadingIntersection, config);
		headings.forEach(heading => headingObserver.observe(heading));
	}


})();