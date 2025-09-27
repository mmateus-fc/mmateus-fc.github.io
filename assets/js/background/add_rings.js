// add_rings.js
function addRings() {
    const homeSection = document.getElementById('home');
    if (!homeSection) return;

    const ringContainer = document.createElement('div');
    ringContainer.className = 'ring-container';
    
    // Set container styles for background positioning
    ringContainer.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        z-index: -1;
        pointer-events: none;
    `;
    
    // Create three rings
    for (let i = 0; i < 3; i++) {
        const ring = document.createElement('div');
        ring.className = 'ring';
        ringContainer.appendChild(ring);
    }

    // Insert before first child to be in background
    homeSection.insertBefore(ringContainer, homeSection.firstChild);
}

document.addEventListener('DOMContentLoaded', addRings);