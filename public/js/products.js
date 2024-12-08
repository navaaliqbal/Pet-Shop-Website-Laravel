const initialStyles = new Map();

// Function to save the initial styles of elements
function saveInitialStyles() {
    const elements = document.querySelectorAll('.dynamicTable tr');
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
    const textElements = document.querySelectorAll('.dynamicTable tr');
    textElements.forEach(element => {
        element.style.fontStyle = 'italic';
        element.style.fontWeight = 'normal';
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
          hiddenDetails.style.display = "block"; // Make hidden section visible
      });
  
      // Hide details button functionality
      hideDetailsBtn.addEventListener("click", () => {
          hiddenDetails.style.display = "none"; // Hide the section
      });
  
      // Change background color functionality
      changeBgColorBtn.addEventListener("click", () => {
    const colors = ["#e3f2fd", "#e8f5e9", "#fbe9e7", "#ede7f6", "#fffde7", "white"];
    const randomColor = colors[Math.floor(Math.random() * colors.length)];
    
    // Select all sections and apply the background color
    const sections = document.querySelectorAll("section, .table-container,.containerTable");
    sections.forEach(section => {
        section.style.backgroundColor = randomColor;
    });
    const pricing = document.querySelectorAll(".pricing-table");
    pricing.forEach(section => {
        section.style.backgroundColor = randomColor;
    });
});
  
      // Attach functionality to buttons for font change and reset
      document.getElementById("change-font-btn").addEventListener("click", changeTextStyle);
      document.getElementById("reset-font-btn").addEventListener("click", resetTextStyle);
 
 
 
 // References to key elements
 const addItemBtn = document.getElementById('addItemBtn');
 const removeLastItemBtn = document.getElementById('removeLastItemBtn');
 const itemFormContainer = document.getElementById('itemFormContainer');
 const itemForm = document.getElementById('itemForm');
 const itemType = document.getElementById('itemType');
 const itemName = document.getElementById('itemName');
 const itemDescription = document.getElementById('itemDescription');
 const itemPrice = document.getElementById('itemPrice');
 const priceInput = document.getElementById('priceInput');
 const saveItemBtn = document.getElementById('saveItemBtn');
 const dynamicTable = document.getElementById('dynamicTable').querySelector('tbody');
 
 // Load items from localStorage when the page loads
 document.addEventListener('DOMContentLoaded', loadItemsFromLocalStorage);
 
 // Show/hide price input based on item type
 itemType.addEventListener('change', () => {
     priceInput.style.display = itemType.value === 'pet' ? 'block' : 'none';
 });
 
 // Show form to add items
 addItemBtn.addEventListener('click', () => {
     itemFormContainer.style.display = 'block';
 });
 
 // Save item to the table and localStorage
 saveItemBtn.addEventListener('click', () => {
     const name = itemName.value.trim();
     const description = itemDescription.value.trim();
     const price = itemType.value === 'pet' ? itemPrice.value.trim() : null;
     const category = itemType.value === 'pet' ? 'Pet' : 'DIY Pet Kit';
 
     if (!name || !description || (itemType.value === 'pet' && !price)) {
         alert('Please fill out all required fields.');
         return;
     }
 
     const newItem = { category, name, description, price: price || 'N/A' };
     saveItemToLocalStorage(newItem);  // Save to localStorage
     addItemToTable(newItem);  // Add to table
 
     // Clear form and hide
     itemForm.reset();
     itemFormContainer.style.display = 'none';
 });
 
 // Remove last item from the table and localStorage
 removeLastItemBtn.addEventListener('click', () => {
     const rows = dynamicTable.getElementsByTagName('tr');
     if (rows.length > 0) {
         const lastItemName = rows[rows.length - 1].querySelector('td:nth-child(2)').textContent;
         removeItemFromLocalStorage(lastItemName);  // Remove from localStorage
         dynamicTable.removeChild(rows[rows.length - 1]);
     } else {
         alert('No items to remove.');
     }
 });
 
 // Remove individual item from the table and localStorage
 window.removeItem = (button) => {
     const row = button.closest('tr');
     const itemName = row.querySelector('td:nth-child(2)').textContent;
     removeItemFromLocalStorage(itemName);  // Remove from localStorage
     dynamicTable.removeChild(row);
 };
 
 // Load items from localStorage and display them in the table
 function loadItemsFromLocalStorage() {
     const items = JSON.parse(localStorage.getItem('items')) || [];
     items.forEach(item => addItemToTable(item));
 }
 
 // Save a new item to localStorage
 function saveItemToLocalStorage(item) {
     const items = JSON.parse(localStorage.getItem('items')) || [];
     items.push(item);
     localStorage.setItem('items', JSON.stringify(items));
 }
 
 // Remove item from localStorage
 function removeItemFromLocalStorage(itemName) {
     let items = JSON.parse(localStorage.getItem('items')) || [];
     items = items.filter(item => item.name !== itemName);
     localStorage.setItem('items', JSON.stringify(items));
 }
 
 // Add item to the table
 function addItemToTable(item) {
     const newRow = document.createElement('tr');
     newRow.innerHTML = `
         <td>${item.category}</td>
         <td>${item.name}</td>
         <td>${item.description}</td>
         <td>${item.price}</td>
         <td><button style="font-size: 14px; padding: 5px 10px;" onclick="removeItem(this)">Remove</button></td>
     `;
     dynamicTable.appendChild(newRow);
 }
 document.getElementById('addProductButton').addEventListener('click', function() {
    $('#productModal').modal('show');
});
