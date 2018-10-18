// 'use strict';

const triggers = document.querySelectorAll('.speakerTrigger'),
	panels = document.querySelectorAll('.speakerPanelInner'),
	panelContent = document.querySelector('.jsSpeakerDetails'),
	scheduleLinks = document.querySelectorAll('.jsLinkToSpeaker');


/**
 * Injects speaker content in panel
 * @param {Object} panel - Speaker content
 */
function injectContent(panel) {
	panelContent.innerHTML = panel.innerHTML;
}

/**
 * Update URL
 * @param {String} title
 * @param {String} url
 */
function updateURL(title, url) {
	history.pushState({}, title, url);
}

/**
 * Get the content from cached panels
 * @param {String} speaker name
 * @param {Boolean} update Wether it should update URL or not
 */
function getContent(name, update = true) {
	for (const panel of panels) {
		const panelName = panel.dataset.speakerContent;

		if (name === panelName) {
			injectContent(panel);

			if (update) {
				updateURL('Speakers', `/#${name}`);
			}

			return;
		}
	}
}

/**
 * Smooth scroll
 * @param {Object} element - scrolling to element
 */
function scrollIt(element) {
	window.scrollTo({
		'behavior': 'smooth',
		'left': 0,
		'top': element.offsetTop
	});
}

function setActive(el) {

	for (const speakerTrigger of triggers) {
		speakerTrigger.classList.remove('isActive');
	}

	el.classList.add('isActive');
}

/**
 * Click on speakers grid
 */
for(const speakerTrigger of triggers) {

	speakerTrigger.addEventListener('click', function() {
		const name = speakerTrigger.id;

		if (name === 'undefined') {
			console.warn('data-speaker-name not set!');
			return;
		}

		setActive(speakerTrigger);
		getContent(name);
	});
}

/**
 * Click on speakers on schedule
 */
for (const link of scheduleLinks) {
	link.addEventListener('click', e => {
		e.preventDefault();
		const speaker = link.dataset.speaker,
			el = document.getElementById(speaker);

		getContent(speaker);
		setActive(el);
		scrollIt(el);
	});
}


document.addEventListener('DOMContentLoaded', function() {

	// Set first speaker as active
	const speaker = triggers[0].id;
	setActive(triggers[0]);
	getContent(speaker, false);

	// Scroll to speaker if exists
	for (const speaker of triggers) {
		if (window.location.hash.indexOf(speaker.id) > -1) {
			const el = document.getElementById(speaker.id);
			if (el) {
				getContent(speaker.id);
				setActive(el);
				scrollIt(el);
			}
		}
	}
});