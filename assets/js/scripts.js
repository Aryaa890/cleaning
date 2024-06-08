document.addEventListener('DOMContentLoaded', function () {
    const formBox = document.getElementById('formBox');
    const successPopup = document.getElementById('successPopup');
    const closeSuccessPopupButton = document.getElementById('closeSuccessPopup');
    const pickupForm = document.getElementById('pickupForm');

    pickupForm.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent default form submission

        // Add your form submission logic here (e.g., AJAX request)
        // Assuming the submission is successful, do the following:

        // Close the form box
        formBox.style.display = 'none';

        // Show the success popup
        successPopup.style.display = 'block';

        // Reset the form fields
        pickupForm.reset();
    });

    closeSuccessPopupButton.addEventListener('click', function () {
        // Hide the success popup
        successPopup.style.display = 'none';
    });
});
