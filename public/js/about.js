 // Object to store initial styles
 const initialStyles = new Map();
        
 // Function to save the initial styles of elements
 function saveInitialStyles() {
     const elements = document.querySelectorAll('.about-section h1');
     elements.forEach(element => {
         const computedStyle = window.getComputedStyle(element);
         initialStyles.set(element, {
             fontStyle: computedStyle.fontStyle,
             fontWeight: computedStyle.fontWeight,
             color: computedStyle.color
         });
     });
 }

 // Function to change the text style
 function changeTextStyle() {
     const textElements = document.querySelectorAll('.about-section h1');
     textElements.forEach(element => {
         element.style.fontStyle = 'italic';
         element.style.fontWeight = 'bold';
         element.style.color = '#AD1457'; // Dark pink color
     });
 }

 // Function to reset the text style to original
 function resetTextStyle() {
     initialStyles.forEach((styles, element) => {
         element.style.fontStyle = styles.fontStyle;
         element.style.fontWeight = styles.fontWeight;
         element.style.color = styles.color;
     });
 }

 // Save initial styles when the page loads
 window.addEventListener('DOMContentLoaded', saveInitialStyles);

 // References to buttons and sections
 const showDetailsBtn = document.getElementById("showDetailsBtn");
 const hideDetailsBtn = document.getElementById("hideDetailsBtn");
 const changeBgColorBtn = document.getElementById("changeBgColorBtn");
 const hiddenDetails = document.getElementById("hiddenDetails");
 const gallerySection = document.querySelector(".gallery");

 // Show details button functionality
 showDetailsBtn.addEventListener("click", () => {
     const hiddenDetails = document.querySelectorAll(".team-member p");
     hiddenDetails.forEach(detail =>{
         detail.style.display="block";
     })

 });

 // Hide details button functionality
 hideDetailsBtn.addEventListener("click", () => {
     const hiddenDetails = document.querySelectorAll(".team-member p");
     hiddenDetails.forEach(detail =>{
         detail.style.display="none";
     })
 });

 // Change background color functionality
 changeBgColorBtn.addEventListener("click", () => {
 const colors = ["#e3f2fd", "#e8f5e9", "#fbe9e7", "#ede7f6", "#fffde7", "white"];
 const randomColor = colors[Math.floor(Math.random() * colors.length)];
 
 // Select all sections and apply the background color
 const sections = document.querySelectorAll("section");
 sections.forEach(section => {
     section.style.backgroundColor = randomColor;
 });

 const divs = document.querySelectorAll(".mission-section,.team-section,.how-it-works-section");
 divs.forEach(section => {
     section.style.backgroundColor = randomColor;
 });

});



 // Attach functionality to buttons for font change and reset
 document.getElementById("change-font-btn").addEventListener("click", changeTextStyle);
 document.getElementById("reset-font-btn").addEventListener("click", resetTextStyle);