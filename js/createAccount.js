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

  // If it's a user, check the batch
  if (document.getElementById("user").checked) {
    var batch = document.getElementById("batch").value;
    if (batch === "") {
      errorMessage += "Batch is required for users.<br>";
    }
  }
  console.log("hello");
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

// Get radio buttons
const userTypeRadio = document.querySelectorAll('input[name="user-type"]');

// Attach a change event listener to the radio buttons
userTypeRadio.forEach(radio => {
  radio.addEventListener('change', toggleForm);
});

function toggleForm() {
  const selectedType = document.querySelector('input[name="user-type"]:checked').value;
  const batchField = document.querySelector('input[name="batch"]');
  const batchlabel = document.querySelector('label[for="batch"]');

  // If selectedType is "mentor," hide the batch field, else show it.
  batchField.style.display = selectedType === 'mentor' ? 'none' : 'block';
  batchlabel.style.display = selectedType === 'mentor' ? 'none' : 'block';
}

// Initialize the form based on the default selected radio button
toggleForm();
