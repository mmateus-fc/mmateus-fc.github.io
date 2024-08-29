// Function to validate inputs
function validateInputs() {
    // Get input values
    let title = document.getElementById('title-input').value.trim();
    let text = document.getElementById('text-input').value.trim();

    // Check if any input is empty
    if (title === '' || text === '') {
        alert("Please fill in all required fields.");

        // Change border color and thickness of empty inputs
        if (title === '') {
            document.getElementById('title-input').style.borderColor = 'red';
            document.getElementById('title-input').style.borderWidth = '4px';
        }
        if (text === '') {
            document.getElementById('text-input').style.borderColor = 'red';
            document.getElementById('text-input').style.borderWidth = '4px';
        }

        return false; // At least one input is empty
    }
    
    return true; // All inputs are filled
}