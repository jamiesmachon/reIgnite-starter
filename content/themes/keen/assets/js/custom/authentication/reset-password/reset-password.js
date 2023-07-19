"use strict";

// Class Definition
var KTAuthResetPassword = function() {
    // Elements
    var form;
    var submitButton;
	var validator;

    var handleValidation = function(e) {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validator = FormValidation.formValidation(
			form,
			{
				fields: {
					'user_email': {
                        validators: {
                            regexp: {
                                regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                                message: 'The value is not a valid email address',
                            },
							notEmpty: {
								message: 'Email address is required'
							}
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
						eleInvalidClass: '',  // comment to enable invalid state icons
                        eleValidClass: '' // comment to enable valid state icons
                    })
				}
			}
		);
    }

	// Handle Ajax submission
	var handleSubmitAjax = function(e) {
		// Handle form submit
		submitButton.addEventListener('click', function (e) {
			// Prevent button default action
			e.preventDefault();

			// Validate form
			validator.validate().then(function (status) {
				if (status == 'Valid') {
					// Hide loading indication
					submitButton.removeAttribute('data-kt-indicator');

					// Enable button
					submitButton.disabled = false;

					// Check axios library docs: https://axios-http.com/docs/intro
					axios.post('/your/ajax/forgot-password/url', {
						email: form.querySelector('[name="user_email"]').value,
					}).then(function (response) {
						if (response) {
							// Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
							Swal.fire({
								text: "We have send a password reset link to your email.",
								icon: "success",
								buttonsStyling: false,
								confirmButtonText: "Ok, got it!",
								customClass: {
									confirmButton: "btn btn-primary"
								}
							}).then(function (result) {
								if (result.isConfirmed) {
									form.querySelector('[name="user_email"]').value= "";

									var redirectUrl = form.getAttribute('data-kt-redirect-url');
									if (redirectUrl) {
										location.href = redirectUrl;
									}
								}
							});
						} else {
							// Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
							Swal.fire({
								text: "Sorry, the email is incorrect, please try again.",
								icon: "error",
								buttonsStyling: false,
								confirmButtonText: "Ok, got it!",
								customClass: {
									confirmButton: "btn btn-primary"
								}
							});
						}
					}).catch(function (error) {
						Swal.fire({
							text: "Sorry, looks like there are some errors detected, please try again.",
							icon: "error",
							buttonsStyling: false,
							confirmButtonText: "Ok, got it!",
							customClass: {
								confirmButton: "btn btn-primary"
							}
						});
					});
				} else {
					// Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
					Swal.fire({
						text: "Sorry, looks like there are some errors detected, please try again.",
						icon: "error",
						buttonsStyling: false,
						confirmButtonText: "Ok, got it!",
						customClass: {
							confirmButton: "btn btn-primary"
						}
					});
				}
			});
		});
	}

	// Handle DOM for serverside submission
	var handleSubmit = function ( e ) {
		submitButton.addEventListener('click', function (e) {
			// Show loading indication
			submitButton.setAttribute('data-kt-indicator', 'on');

			// Disable button to avoid multiple click
			submitButton.disabled = true;
		});
	}

    // Public Functions
    return {
        // public functions
        init: function() {
            form = document.querySelector('#kt_password_reset_form');
            submitButton = document.querySelector('#kt_password_reset_submit');

	        handleValidation();
	        // handleSubmitAjax(); // use for ajax submit
	        handleSubmit(); // user for server side submission
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTAuthResetPassword.init();
});
