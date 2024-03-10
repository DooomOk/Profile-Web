function toggleMenu() {
    const menu = document.querySelector(".menu-links");
    const icon = document.querySelector(".hamburger-icon");
    menu.classList.toggle("open");
    icon.classList.toggle("open");
}



$(document).ready(function() {
    // Define your handlers
    var my_handlers = {
        // Fill cities based on the selected province
        fill_cities: function() {
            var province_code = $(this).val();
            var dropdown = $('#city');
            dropdown.empty();
            dropdown.append('<option selected="true" disabled>Choose city/municipality</option>');
            dropdown.prop('selectedIndex', 0);

            // Load city data
            var url = 'city.json';
            $.getJSON(url, function(data) {
                var result = data.filter(function(value) {
                    return value.province_code == province_code;
                });
                result.sort(function(a, b) {
                    return a.city_name.localeCompare(b.city_name);
                });
                $.each(result, function(key, entry) {
                    dropdown.append($('<option></option>').attr('value', entry.city_code).text(entry.city_name));
                });
            });
        },
        // Fill barangays based on the selected city
        fill_barangays: function() {
            var city_code = $(this).val();
            var dropdown = $('#baranagay'); // Corrected ID here
            dropdown.empty();
            dropdown.append('<option selected="true" disabled>Choose baranagay</option>');
            dropdown.prop('selectedIndex', 0);
        
            // Load barangay data
            var url = 'barangay.json';
            $.getJSON(url, function(data) {
                var result = data.filter(function(value) {
                    return value.city_code == city_code;
                });
                result.sort(function(a, b) {
                    return a.brgy_name.localeCompare(b.brgy_name);
                });
                $.each(result, function(key, entry) {
                    dropdown.append($('<option></option>').attr('value', entry.brgy_code).text(entry.brgy_name));
                });
            });
        },
        // Handle barangay selection change
        onchange_barangay: function() {
            var barangay_text = $(this).find("option:selected").text();
            $('#barangay-text').val(barangay_text);
        },
    };

    // Attach event listeners
    $('#province').on('change', my_handlers.fill_cities);
    $('#city').on('change', my_handlers.fill_barangays);
    $('#barangay').on('change', my_handlers.onchange_barangay);

    // Load provinces
    var dropdown = $('#province');
    dropdown.empty();
    dropdown.append('<option selected="true" disabled>Choose Province</option>');
    dropdown.prop('selectedIndex', 0);

    var url = 'province.json';
    $.getJSON(url, function(data) {
        $.each(data, function(key, entry) {
            dropdown.append($('<option></option>').attr('value', entry.province_code).text(entry.province_name));
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const contactNumberInput = document.getElementById('contact_number-text');
    contactNumberInput.addEventListener('input', function() {
        this.value = this.value.replace(/\D/g, '');
    });

    contactNumberInput.addEventListener('input', function() {
        const maxLength = 10; 
        if (this.value.length > maxLength) {
            this.value = this.value.slice(0, maxLength);
        }
    });
});




document.addEventListener('DOMContentLoaded', function() {
    const showMessageBtn = document.getElementById('show-message-btn');
    const messageSection = document.querySelector('.message-section');
    const messageTextarea = document.getElementById('message');
    const sendMessageBtn = document.getElementById('send-message-btn');
    const messagePopup = document.getElementById('message-popup');
    const closePopupBtn = document.getElementById('close-popup-btn');
    const messageButtonContainer = document.getElementById('message-button-container');

    showMessageBtn.addEventListener('click', function() {
        messageSection.classList.remove('hidden');
        messageButtonContainer.classList.add('hidden');
    });

    sendMessageBtn.addEventListener('click', function() {
        const messageContent = messageTextarea.value.trim();
        // Check if the message is not empty
        if (messageContent !== '') {
            checkUserLoggedIn()
                .then(response => {
                    console.log('Login check response:', response); // Log the response for debugging
                    if (response.isLoggedIn) {
                        showMessageSentPopup();
                        // Here you can add the functionality to send the message to the server
                        // For demonstration purposes, I'm just showing the popup
                        messageTextarea.value = '';
                        messageSection.classList.add('hidden');
                        messageButtonContainer.classList.remove('hidden');
                    } else {
                        // Redirect users to the login page if they are not logged in
                        console.log('User not logged in. Redirecting to login page.');
                        window.location.href = 'login.php';
                    }
                })
                .catch(error => {
                    console.error('Error checking login status:', error);
                });
        } else {
            // Show an alert if the message is empty
            alert('Please type a message before sending.');
        }
    });
    

    closePopupBtn.addEventListener('click', function() {
        messagePopup.classList.add('hidden');
    });

    function showMessageSentPopup() {
        messagePopup.classList.remove('hidden');
    }

    function checkUserLoggedIn() {
        return new Promise((resolve, reject) => {
            $.ajax({
                url: 'check_login.php',
                type: 'POST',
                dataType: 'json',
                success: function(response) {
                    console.log('Received response from check_login.php:', response); // Log the response object
                    resolve(response);
                },
                error: function(xhr, status, error) {
                    reject(error);
                }
            });
        });
    }
});




