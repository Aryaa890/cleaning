document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('submit-btn').addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the default form submission behavior

        var form = document.getElementById('pickup-form');
        var formData = new FormData(form);

        fetch(baseUrl + 'Home/order', {
            method: 'POST',
            body: formData
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json(); // Parse the JSON response
            })
            .then(data => {
                if (data.status === 'success') {
                    // Show success popup
                    document.getElementById('success-popup').style.display = 'block';
                    // Optionally clear the form fields
                    form.reset();
                    // Optionally hide the form
                    // form.style.display = 'none';
                } else {
                    throw new Error(data.message || 'Something went wrong');
                }
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
            });
    });

    // Close popup when close button is clicked
    document.querySelector('.popup .close').addEventListener('click', function () {
        document.getElementById('success-popup').style.display = 'none';
    });
});