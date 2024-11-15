function addProduct() {
    const name = document.getElementById("product-name").value;
    const price = document.getElementById("price").value;
    const quantity = document.getElementById("quantity").value;
  
    const tableBody = document.getElementById("product-table-body");
    const newRow = tableBody.insertRow();
  
    const cell1 = newRow.insertCell(0);
    const cell2 = newRow.insertCell(1);
    const cell3 = newRow.insertCell(2);
    const cell4 = newRow.insertCell(3);
  
    cell1.textContent = Date.now(); // Simulating unique product ID with timestamp
    cell2.textContent = name;
    cell3.textContent = `$${parseFloat(price).toFixed(2)}`;
    cell4.textContent = quantity;
  
    document.getElementById("product-form").reset(); // Reset form
  
    return false; // Prevent form submission for demo purposes
  }
  