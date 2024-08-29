// loading local storage
let name = sessionStorage.getItem('name');

// create image
let image = document.createElement('img');

// get elements
let div = document.getElementById('user-message');

// Create h1 elements
let h1_1 = document.createElement('h1');
let h1_2 = document.createElement('h1');
let h1_3 = document.createElement('h1');
let h1_4 = document.createElement('h1');

// Set the text content of the h1 elements 
if (name == null)
{
    h1_1.textContent = ("Hello!");
}
else
{
    h1_1.textContent = ("Hello, " + name + "!");
}

h1_2.textContent = ("Your email has been sent successfully!");
h1_3.textContent = ("Thank you for contacting me!");
h1_4.textContent = ("I will get back to you as soon as possible!");

// set image
image.className = 'image-email-sent';
image.src = './Images/email-sent.jpg';

// Append the h1 element to the div element
div.appendChild(h1_1);
div.appendChild(h1_2);
div.appendChild(h1_3);
div.appendChild(h1_4);
div.appendChild(image);

/*
// clear local storage
clear_local();

function clear_local() {
    sessionStorage.removeItem('name');
}
*/

