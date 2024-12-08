 // Ensure the script runs only after the DOM is fully loaded
 document.addEventListener('DOMContentLoaded', function () {
    const changeFontBtn = document.getElementById('change-font-btn');
    const resetFontBtn = document.getElementById('reset-font-btn');
    const bodyElement = document.body;

    if (changeFontBtn && resetFontBtn) {
        console.log("Buttons found!");

        // Function to change the font style
        changeFontBtn.addEventListener('click', function () {
            // Change .text-content h2 styles
document.querySelectorAll('.text-content h2').forEach((element) => {
element.style.fontStyle = 'italic';
element.style.color = '#c70c50';
});

// Change .text-content p styles
document.querySelectorAll('.text-content p').forEach((element) => {
element.style.fontStyle = 'italic';
element.style.fontWeight = 'bold';
element.style.color = '#f5c542';
});

// Change .gallery-item h2 styles
document.querySelectorAll('.gallery-item h2').forEach((element) => {
element.style.fontStyle = 'italic';
element.style.color = '#c70c50';

});

// Change .gallery-item p styles
document.querySelectorAll('.gallery-item p').forEach((element) => {
element.style.fontStyle = 'italic';
element.style.fontWeight = 'bold';
element.style.color = '#f5c542';
});

// Change .hero-section styles
const heroSection = document.querySelector('.hero-section');
if (heroSection) {
heroSection.style.fontStyle = 'italic';
heroSection.style.color = '#f5c542';

}

        });

        // Function to reset the font style to original
        resetFontBtn.addEventListener('click', function () {
             // Change .text-content h2 styles
document.querySelectorAll('.text-content h2').forEach((element) => {
element.style.fontFamily = "Arial, sans-serif";
element.style.fontStyle = 'normal';
element.style.color = '#444';
});

// Change .text-content p styles
document.querySelectorAll('.text-content p').forEach((element) => {
element.style.fontFamily = "Arial, sans-serif";
element.style.fontStyle = 'normal';
element.style.fontWeight = 'normal';
element.style.color = '#666';
});

// Change .gallery-item h2 styles
document.querySelectorAll('.gallery-item h2').forEach((element) => {
element.style.fontFamily = "Arial, sans-serif";
element.style.fontStyle = 'normal';
element.style.color = '#333';

});

// Change .gallery-item p styles
document.querySelectorAll('.gallery-item p').forEach((element) => {
element.style.fontFamily = "Arial, sans-serif";
element.style.fontStyle = 'normal';
element.style.fontWeight = 'normal';
element.style.color = '#666';
});

// Change .hero-section styles
const heroSection = document.querySelector('.hero-section');
if (heroSection) {
heroSection.style.fontFamily = "Arial, sans-serif";
heroSection.style.fontStyle = 'normal';
heroSection.style.color = 'white';
}
        });
    } else {
        console.error("Buttons not found!");
    }
});
// Get references to buttons and the hidden details section
const showDetailsBtn = document.getElementById("showDetailsBtn");
const hideDetailsBtn = document.getElementById("hideDetailsBtn");
const changeBgColorBtn = document.getElementById("changeBgColorBtn");
const hiddenDetails = document.getElementById("hiddenDetails");
const gallerySection = document.querySelector(".gallery");

// Show details button functionality
showDetailsBtn.addEventListener("click", () => {
hiddenDetails.style.display = "block"; // Make hidden section visible
});

// Hide details button functionality
hideDetailsBtn.addEventListener("click", () => {
hiddenDetails.style.display = "none"; // Hide the section again
});

// Change background color functionality
changeBgColorBtn.addEventListener("click", () => {
const colors = ["#e3f2fd", "#e8f5e9", "#fbe9e7", "#ede7f6", "#fffde7","white"];
const randomColor = colors[Math.floor(Math.random() * colors.length)];
gallerySection.style.backgroundColor = randomColor; // Change the background color of the gallery section
});