// Get the submit button
let submitButton = document.getElementById('button-submit');

// Add event listener for the click event
submitButton.addEventListener('click', executeButtonSubmit);

// Function to handle submit button click
function executeButtonSubmit(e) {
    console.log("Submit button clicked!");

    // Prevent the default form submission behavior
    e.preventDefault();

    // validate form
    // Check if all inputs are filled
    if (!validateInputs())
    {
        return; // Return early if inputs are not valid
    }

    // Save user data in session storage
    save_name();

    // save data on database
    document.getElementById('form_inquiry').submit();

    console.log("Form submitted!");
}

// Function to validate inputs
function validateInputs() {
    // Get input values
    let name = document.getElementById('name').value.trim();
    let email = document.getElementById('email').value.trim();
    let subject = document.getElementById('subject').value.trim();
    let content = document.getElementById('content').value.trim();

    // Check if any input is empty
    if (name === '' || email === '' || subject === '' || content === '') {
        alert("Please fill in all required fields.");
        return false; // At least one input is empty
    }
    
    // Email regex pattern
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if (!emailPattern.test(email))
    {
        alert("Invalid Email Address. Please enter a valid email address.");
        return false; // Email is not valid
    }

    return true; // All inputs are filled
}

// Function to save user data in session storage
function save_name() {
    // Get user input
    let name = document.getElementById('name').value.trim();

    // Save name in session storage
    sessionStorage.setItem('name', name);
}

