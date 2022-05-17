(() => {

	/**
	 * Splitting
	 */
	const headings = document.querySelectorAll('.jsHeading');

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
	};

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