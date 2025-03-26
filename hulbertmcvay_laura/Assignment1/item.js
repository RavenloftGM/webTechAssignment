console.log(sessionStorage.getItem("index"));

window.onload = function () {
    document.getElementById('itemImage').src = sessionStorage.getItem("src");
    document.getElementById('itemName').innerHTML = sessionStorage.getItem("name");
    document.getElementById('itemColor').innerHTML = sessionStorage.getItem("color");
    document.getElementById('itemDescription').innerHTML = sessionStorage.getItem("description");
    document.getElementById('itemPrice').innerHTML = sessionStorage.getItem("price");
};

// array of info about the current item
var productToAdd = [];

// on button click, do
addToCartButton.addEventListener('click', () => {
    // checks for index, initalises currentIndex to 0 if one doesn't exist
    let currentIndex = parseInt(localStorage.getItem('index')) || 0;
    // set the value of the array to be info from the current item open
    productToAdd = [sessionStorage.getItem("name"), sessionStorage.getItem("color"), sessionStorage.getItem("price"), sessionStorage.getItem("src")]
    // stringify the array:
    var itemInfo = JSON.stringify(productToAdd);
    // creating the key:
    var itemKey = "id_" + currentIndex;
    // put it in a local storage item with a unique identifier
    localStorage.setItem(itemKey, itemInfo);
    // add one to the index
    currentIndex++;
    // set the localStorage index to be the same
    localStorage.setItem('index', currentIndex);
})
