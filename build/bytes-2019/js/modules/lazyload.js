/**
 * Image Lazy load
 */

export default (() => {

	// Get all of the images that are marked up to lazy load
	let imageObserver;

	const images = document.querySelectorAll('.jsLazyImage');

	if(!images.length) {
		return;
	}

	const config = {
		// If the image gets within 50px in the Y axis, start the download.
		rootMargin: '50px 0px',
		threshold: 0.01
	};

	// Replace the data-src attribute with the value of the data-src attribute
	let preloadImage = (element) => {
		if (element.dataset && element.dataset.src) {
			element.src = element.dataset.src;
		}
		if (element.dataset && element.dataset.srcset) {
			element.srcset = element.dataset.srcset;
		}
	};

	let onIntersection = (entries) => {
		// Loop through the entries
		entries.forEach(entry => {
			// Are we in viewport?
			if (entry.intersectionRatio > 0) {
				// Stop watching and load the image
				preloadImage(entry.target);
				imageObserver.unobserve(entry.target);
			}
		});
	};

	// eslint-disable-next-line no-negated-condition
	if (!('IntersectionObserver' in window)) {
		Array.from(images).forEach(image => preloadImage(image));
	} else {
		// The observer for the images on the page
		imageObserver = new IntersectionObserver(onIntersection, config);
		images.forEach(image => imageObserver.observe(image));
	}

})();
