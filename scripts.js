 // JavaScript function to toggle the dark theme
 function toggleDarkTheme() {
           
    const body = document.getElementById('htmlTag');
    
    // Check if the data-bs-theme attribute is already set
    if (!body.hasAttribute('data-bs-theme')) {
        // If it's not set, add it to enable dark theme
        body.setAttribute('data-bs-theme', 'dark');
        content.setAttribute('data-bs-theme', 'dark');
    } else {
        // If it's set, remove it to disable dark theme
        body.removeAttribute('data-bs-theme');
        content.removeAttribute('data-bs-theme');
    }
}
// JavaScript to toggle dark mode
const toggleSwitch = document.getElementById('toggleSwitch');

toggleSwitch.addEventListener('change', function() {
toggleDarkTheme();
});