// Function to validate the form
function validateForm() {
  // Get form input values
  var username = document.getElementById("username").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  // Regular expressions for validation
  var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  var passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

  // Initialize error message
  var errorMessage = "";

  // Check username
  if (username === "") {
    errorMessage += "Username is required.<br>";
  }

  // Check email
  if (!email.match(emailPattern)) {
    errorMessage += "Invalid email address.<br>";
  }

  // Check password
  if (!password.match(passwordPattern)) {
    errorMessage +=
      "Password must be at least 8 characters long, contain at least one digit, one lowercase letter, and one uppercase letter.<br>";
  }

  // // If it's a user, check the batch
  // if (document.getElementById("user").checked) {
  //   var batch = document.getElementById("batch").value;
  //   if (batch === "") {
  //     errorMessage += "Batch is required for users.<br>";
  //   }
  // }
  // console.log("hello");
  // Display error message or submit the form
  var errorDiv = document.getElementById("error-messages");
  if (errorMessage !== "") {
    errorDiv.innerHTML = errorMessage;
    return false; // Prevent form submission
  } else {
    errorDiv.innerHTML = ""; // Clear any previous error messages
    return true; // Allow form submission
  }
}

document.getElementById('show-password').addEventListener('click', function() {
  var passwordInput = document.getElementById('password');
  passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
});

            // Get references to the images
            var visibleImage = document.querySelector('.visible');
            var nonVisibleImage = document.querySelector('.non-visible');

            // Get reference to the div
            var showPasswordDiv = document.getElementById('show-password');

            // Add click event listener to the div
            showPasswordDiv.addEventListener('click', function() {
                // Toggle visibility of the images
                visibleImage.classList.toggle('non-visible');
                nonVisibleImage.classList.toggle('non-visible');
            });
