// Get the add button
let goButton = document.getElementById('button-go');

// Add event listener for the click event
goButton.addEventListener('click', executeButtonGo);

// Function to handle preview button click
function executeButtonGo(e) {
    // Redirect to another HTML page
    window.location.href = './php/blog.php';
}