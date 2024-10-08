
// Function to validate mobile number format
function validatePhoneNumber(mobilenumber) {
    var phoneNumberPattern = /^\d{10}$/;
    return phoneNumberPattern.test(mobilenumber);
}

// Function to display mobile number validation error
function displayPhoneNumberError() {
    var phoneNumberInput = document.getElementById('mobilenumber');
    var phoneNumberError = document.getElementById('mobilenumberError');
    // Check if mobile number is empty
    if (!phoneNumberInput.value.trim()) {
        phoneNumberError.textContent = 'Mobile number is required.';
    }
    else if (!validatePhoneNumber(phoneNumberInput.value)) {
        phoneNumberError.textContent = 'Please enter a valid 10-digit phone number.';
    } else {
        phoneNumberError.textContent = '';
    }
}

// Attach event listener for keyboard input on mobile number field
document.getElementById('mobilenumber').addEventListener('input', displayPhoneNumberError);
// Function to validate email format
function validateEmail(email) {
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}

// Function to display email validation error
function displayEmailError() {
    var emailInput = document.getElementById('email');
    var emailError = document.getElementById('emailError');
    if (!emailInput.value.trim()) {
        emailError.textContent = 'Email is required.';
    }
    else if (!validateEmail(emailInput.value)) {
        emailError.textContent = 'Please enter a valid email address.';
    } else {
        emailError.textContent = '';
    }
}

// Attach event listener for keyboard input on email field
document.getElementById('email').addEventListener('input', displayEmailError);

// Function to validate password format
function validatePassword(password) {
    if (!password) {
        return "Password is required."; // Display error if password is empty
    }
    else if (password.length < 6) {
        return "Password must be at least 6 characters long.";
    } else if (password.length > 15) {
        return "Password must not exceed 15 characters.";
    }
    return ""; // Return empty string if password is within the acceptable range
}

// Function to display password validation error
function displayPasswordError() {
    var passwordInput = document.getElementById('password');
    var passwordError = document.getElementById('passwordError');
    var errorMessage = validatePassword(passwordInput.value);
    passwordError.textContent = errorMessage;
}

// Attach event listener for keyboard input on password field
document.getElementById('password').addEventListener('input', displayPasswordError);

// Automatically hide error message after 5 seconds
setTimeout(function () {
    var errorMessage = document.getElementById('errorMessage');
    if (errorMessage) {
        errorMessage.style.display = 'none';
    }
}, 5000); // 5000 milliseconds = 5 seconds
