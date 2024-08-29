// Save session data
function save_session_data() {
    console.log("Saving data session!");

    // Get input values
    let title = document.getElementById('title-input').value.trim();
    let text = document.getElementById('text-input').value.trim();

    // Save input values to session storage
    sessionStorage.setItem('title', title);
    sessionStorage.setItem('text', text);

    return;
}