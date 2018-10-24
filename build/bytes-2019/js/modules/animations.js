import anime from '../libs/anime';
import Splitting from "../libs/splitting";
import ScrollReveal from '../../../../../../../../../usr/local/share/typo3/8.7/typo3/ext/ll_fe/Library/ScrollReveal/4.x/js/core';

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
	const target = document.querySelectorAll('.jsHeading');
	const results = Splitting({
		target: target,
		by: 'words'
	});

	/**
	 * Scroll Reveal Options
	 */
	const srOptions = {
		mobile: false,
		origin: 'bottom',
		distance: '2rem',
		duration: 350,
		delay: 100,
		scale: 1,
		easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)'
	};

	const animatedElements = {
		// Boxes
		'.jsHeading': {
			delay: 200,
			distance: 0,
			beforeReveal: el => el.classList.add('isVisible')
		}
	};

	for (const element of Object.keys(animatedElements)) {
		ScrollReveal(srOptions).reveal(element, animatedElements[element]);
	}

})();