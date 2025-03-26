function getArrays() {
  const allKeys = Object.keys(localStorage);
  const idKeys = allKeys.filter(key => key.startsWith('id_'));
  const allArrays = [];

  idKeys.forEach(key => {
    try {
      const storedArray = JSON.parse(localStorage.getItem(key));
      if (Array.isArray(storedArray)) {
        allArrays.push(storedArray);
      } else {
        console.warn(`Value for key '${key}' is not an array.`);
      }
    } catch (error) {
      console.error(`Error parsing value for key '${key}':`, error);
    }
  });

  return allArrays;
}

// Get the array of all arrays
const arrayOfArrays = getArrays();
console.log(arrayOfArrays);



// Establishing where to find the elements to write to
const products = document.getElementById("purchaseList");
const item = document.getElementById("purchaseCard");


// For loop repeats for all items in array, copying the template and modifying the contents of the HTML elements to display information from the array. 
for (var i = 0; i < arrayOfArrays.length; i++) {
  var itemCopy = item.cloneNode(true);
  products.appendChild(itemCopy);
  var value = "item" + i;
  itemCopy.id = value;
  itemCopy.querySelector('.cartItemColor').innerHTML = arrayOfArrays[i][1];
  itemCopy.querySelector('.cartItemName').innerHTML = arrayOfArrays[i][0];
  itemCopy.querySelector('.cartItemPrice').innerHTML = arrayOfArrays[i][2];
  itemCopy.querySelector('.cartItemImage').src = arrayOfArrays[i][3];
};

// Hides the template
item.style.display = "none";

var orderCost = 0.00;
var itemCost = 0.00;
for (var i = 0; i < arrayOfArrays.length; i++) {
  console.log(arrayOfArrays[i][2]);
  if (arrayOfArrays[i][2].startsWith(" £")) {
    itemCost = parseFloat(arrayOfArrays[i][2].substring(2));
    console.log(itemCost);
  }
  orderCost += itemCost;
}

var totalCost = orderCost + 5.99;

document.getElementById('orderCost').innerHTML = 'Cost of items: £' + orderCost.toFixed(2);
document.getElementById('totalCost').innerHTML = 'Total cost: £' + totalCost.toFixed(2);

checkoutButton.addEventListener('click', () => {
  localStorage.clear();
  window.location.reload();
});