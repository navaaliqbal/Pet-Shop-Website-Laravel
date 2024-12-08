document.addEventListener("DOMContentLoaded", () => {
    // Buttons
    const changeBgButton = document.getElementById("change-bg-btn");
    const changeTextStyleButton = document.getElementById("change-text-style-btn");
    const resetTextStyleButton = document.getElementById("reset-text-style-btn");
    const showDetailsButton = document.getElementById("show-details-btn");
    const hideDetailsButton = document.getElementById("hide-details-btn");

    // Elements to Modify
    const header = document.querySelector(".header");
    const description = document.getElementById("description");
    const cityDetails = document.querySelectorAll(".city-details");

    // Event Listeners
    // Change Background Color
    changeBgButton.addEventListener("click", () => {
        header.style.backgroundColor = "#203547"; 
    });

    // Change Text Style
    changeTextStyleButton.addEventListener("click", () => {
        description.style.fontFamily = "Courier New, Courier, monospace";
        description.style.color = "#333";
        description.style.fontSize = "18px";
    });

    // Reset Text Style
    resetTextStyleButton.addEventListener("click", () => {
        description.style.fontFamily = ""; // Reset to default
        description.style.color = ""; // Reset to default
        description.style.fontSize = ""; // Reset to default
    });

    // Show Details
    showDetailsButton.addEventListener("click", () => {
        cityDetails.forEach(detail => {
            detail.style.display = "block"; // Show all city details
        });
    });

    // Hide Details
    hideDetailsButton.addEventListener("click", () => {
        cityDetails.forEach(detail => {
            detail.style.display = "none"; // Hide all city details
        });
    });
});
