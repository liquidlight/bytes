/**
 * Image Lazy load
 */

export default (() => {

	/**
	 * Mailchimp
	 */

	const form = document.querySelector('#signup form'),
		inputFields = document.querySelectorAll('#signup form .field input'),
		emailField = document.querySelector('#signup input[type="email"]'),
		nameField = document.querySelector('#signup input[type="text"][name="name"]'),
		submitBtn = document.querySelector('#signup button[type="submit"]'),
		submitBtnInner = document.querySelector('#signup button[type="submit"] .btnText'),
		msgEl = document.querySelector('.jsformMessage');

	let addError = function (message) {
		msgEl.classList.add('isVisible');
		msgEl.innerText = message;
	};

	form.addEventListener('submit', e => {

		e.preventDefault();

		// Serialize form
		const formData = {
			name: nameField.value,
			email: emailField.value
		};

		submitBtn.classList.add('disabled');
		submitBtnInner.innerText = 'Loading...';

		if (!emailField.value.length) {
			addError('Please enter an e-mail address 🙄');
			submitBtn.classList.remove('disabled');
			submitBtnInner.innerText = 'Subscribe';
			return false;
		}

		if (!nameField.value.length) {
			addError('Please enter your name 🤦‍♂️');
			submitBtn.classList.remove('disabled');
			submitBtnInner.innerText = 'Subscribe';
			return false;
		}

		fetch(e.target.action, {
				method: 'post',
				body: JSON.stringify(formData)
			})
			.then(response => response.json())
			.then(response => {
				if (response.success) {
					msgEl.innerText = '👏 Yes! Thanks for signing up to the newsletter 🤜💥🤛';
					msgEl.classList.add('success');
					submitBtnInner.innerText = 'Subscribed!';
				} else {
					msgEl.innerText = `🙈 ${response.error}`;
					submitBtnInner.innerText = 'Subscribe';
				}
			})
			.catch(err => console.log(err))

	});


	/**
	 * Show/Hide input labels
	 */
	for (const field of inputFields) {

		field.addEventListener("blur", e => {

			if (e.target.value.trim().length > 0) {
				field.classList.add('inputFilled')
			} else {
				field.classList.remove('inputFilled')
			}

		}, true);
	}


})();
