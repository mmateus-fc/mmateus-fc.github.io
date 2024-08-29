// Get the submit preview
let previewButton = document.getElementById('button-preview');

// Get the add button
let addButton = document.getElementById('button-add');

// Get the add button
let clearButton = document.getElementById('button-clear');

// Add event listener for the click event
previewButton.addEventListener('click', executeButtonPreview);

addButton.addEventListener('click', executeButtonAdd);

clearButton.addEventListener('click', executeButtonClear);

// Function to handle preview button click
function executeButtonPreview(e) {
    console.log("Preview button clicked!");

    // Prevent the default form submission behavior
    e.preventDefault();

    // Check if all inputs are filled
    if (!validateInputs())
    {
        return; // Return early if inputs are not valid
    }

    // Save session storage
    save_session_data();

    // Redirect to another HTML page
    window.location.href = "add-post-preview.html";

    return;
}

// Function to handle add button click
function executeButtonAdd(e) {
    console.log("Add button clicked!");

    // Prevent the default form submission behavior
    e.preventDefault();

    // Check if all inputs are filled
    if (!validateInputs()) // another script
    {
        return; // Return early if inputs are not valid
    }

    // Save session storage
    save_session_data();

    // execute php and submit the form
    document.getElementById('add-post-form').submit();

    console.log("Form submitted!");
    return;
}

// Function to handle clear button click
function executeButtonClear(e) {
    console.log("Clear button clicked!");

    // Prevent the default form submission behavior
    e.preventDefault();

    // Check if all inputs are filled
    if (!validateInputs())
    {
        return; // Return early if inputs are not valid
    }

    // Ask for confirmation
    let confirmed = confirm("Are you sure you want to clear all input fields?");

    // If user confirms, clear the input fields
    if (confirmed) {
        document.getElementById('title-input').value = '';
        document.getElementById('text-input').value = '';
        document.getElementById('image-input').value = '';
    }

    // Clear session storage
    clear_session_data();
    return;
}

// Add event listeners to input fields to reset border properties when typing
document.getElementById('title-input').addEventListener('input', function() {
    this.style.borderColor = ''; // Reset border color
    this.style.borderWidth = ''; // Reset border width
});

document.getElementById('text-input').addEventListener('input', function() {
    this.style.borderColor = ''; // Reset border color
    this.style.borderWidth = ''; // Reset border width
});

document.getElementById('image-input').addEventListener('change', function() {
    //console.log(this.files);

    const reader = new FileReader();

    reader.addEventListener('load', () => {
        //console.log(reader.result);
        
        sessionStorage.setItem('image', reader.result);
    });

    reader.readAsDataURL(this.files[0]);
})