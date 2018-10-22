import anime from '../libs/anime';
import Splitting from "../libs/splitting";
// import Rellax from "../libs/rellax";
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
		round: 1,
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

	/**
	 * Splitting
	 */
	const target = document.querySelectorAll('.jsHeading');
	const results = Splitting({
		target: target,
		by: 'words'
	});

	/**
	 * Rellax
	 */

	// const rellax = new Rellax('figure img', {
	// 	speed: 0.5,
	// 	center: true,
	// 	wrapper: null,
	// 	round: true,
	// 	vertical: true,
	// 	horizontal: false
	// });

	// new Rellax('.figureShadow', {
	// 	speed: 0.5,
	// 	center: true,
	// 	wrapper: null,
	// 	round: true,
	// 	vertical: true,
	// 	horizontal: false
	// });

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