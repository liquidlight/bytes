import anime from '../libs/anime';
import Splitting from "../libs/splitting";


var morphing = anime({
	targets: '.boxPolygon',
	points: [
		{ value: '316 102 665 78 731 381 268 328' },
		{ value: '220 116 863 87 917 381 124 361' },
		{ value: '102 38 933 57 985 425 46 425' }
	],
	easing: 'easeOutElastic',
	duration: 1200,
	elasticity: 300,
	// loop: true,
	round: 1,
	// autoplay: false
});

const target = document.querySelector('#target');
const results = Splitting({
	target: target,
	by: 'words'
});