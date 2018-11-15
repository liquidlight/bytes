/**
 * Lazy load
 */

export default (() => {

	// Get all of the images that are marked up to lazy load
	const images = document.querySelectorAll('.jsLazyImage');

	const config = {
		// If the image gets within 50px in the Y axis, start the download.
		rootMargin: '50px 0px',
		threshold: 0.01
	};

	/**
	 * Replace the data-src attribute with the value of the data-src attribute
	 * @param {Object} image
	 */
	let preloadImage = (element) => {
		if (element.dataset && element.dataset.src) {
			element.src = element.dataset.src;
		}
		if (element.dataset && element.dataset.srcset) {
			element.srcset = element.dataset.srcset;
		}
	};

	/**
	 * Intersection Observer API
	 */

	function onIntersection(entries) {

		// Loop through the entries
		entries.forEach(entry => {

			// Are we in viewport?
			if (entry.intersectionRatio > 0) {
				// Stop watching and load the image
				preloadImage(entry.target);
				imageObserver.unobserve(entry.target);
			}
		});
	}

	// The observer for the images on the page
	let imageObserver = new IntersectionObserver(onIntersection, config);

	images.forEach(image => imageObserver.observe(image));

})();
