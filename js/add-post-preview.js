// Loading data from session storage
let title = sessionStorage.getItem('title');
let text = sessionStorage.getItem('text');
let image = sessionStorage.getItem('image');

console.log("RELOAD IMAGE: " + image);

// Get elements
let h1_title = document.getElementById('h1-title');
let p_text = document.getElementById('p-text');
let img_image = document.getElementById('img-image');

// Set content
h1_title.textContent = title;
p_text.textContent = text;

// Check if the imageURL exists
if (image) {
    // Set the src attribute of the <img> element to the image URL
    img_image.src = image;
    
} else {
    console.log("No image URL found in session storage.");
    // Remove the <div> element and its child elements
    let imageDiv = document.getElementById('image');
    if (imageDiv) {
        imageDiv.parentNode.removeChild(imageDiv);
    }
}

// buttons
// Get the return button
let editButton = document.getElementById('button-edit');

// Add event listener for the click event
editButton.addEventListener('click', executeButtonEdit);

function executeButtonEdit(e) {
    // Go back to the previous page
    window.history.back();
}

