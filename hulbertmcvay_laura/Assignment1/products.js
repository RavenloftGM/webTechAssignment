// One huge array.. Hoodies renamed for consistency.
var availableProducts = [['UCLan Hoodie', 'Purple', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (1).jpg'],
['UCLan Hoodie', 'Light Blue', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (2).jpg'],
['UCLan Hoodie', 'Green', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (3).jpg'],
['UCLan Hoodie', 'Dark Grey', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (4).jpg'],
['UCLan Hoodie', 'Black', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (5).jpg'],
['UCLan Hoodie', 'Salmon', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (6).jpg'],
['UCLan Hoodie', 'Burgundy', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (7).jpg'],
['UCLan Hoodie', 'Light Grey', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (8).jpg'],
['UCLan Hoodie', 'Slate Blue', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (9).jpg'],
['UCLan Hoodie', 'Orange', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (10).jpg'],
['UCLan Hoodie', 'Teal', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (11).jpg'],
['UCLan Hoodie', 'Navy', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (12).jpg'],
['UCLan Hoodie', 'Orange', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (14).jpg'],
['UCLan Hoodie', 'Creame', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (13).jpg'],
['UCLan Hoodie', 'Lime', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (15).jpg'],
['UCLan Hoodie', 'Off Blue', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (16).jpg'],
['UCLan Hoodie', 'Red', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (17).jpg'],
['UCLan Hoodie', 'Charcoal', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (18).jpg'],
['UCLan Hoodie', 'Navy Blue', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (19).jpg'],
['UCLan Hoodie', 'Lighter Grey', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (20).jpg'],
['UCLan Hoodie', 'New Blue', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (22).jpg'],
['UCLan Hoodie', 'Forest Green', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (21).jpg'],
['UCLan Hoodie', 'Ocean Blue', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (23).jpg'],
['UCLan Hoodie', 'Pink', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (24).jpg'],
['UCLan Hoodie', 'Orange New', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (25).jpg'],
['UCLan Hoodie', 'Black', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (26).jpg'],
['UCLan Hoodie', 'Light Off Grey', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (27).jpg'],
['UCLan Hoodie', 'Rusty Red', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (28).jpg'],
['UCLan Hoodie', 'Slate Grey', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (29).jpg'],
['UCLan Hoodie', 'Bright Green', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (30).jpg'],
['UCLan Hoodie', 'Bright Pink', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (31).jpg'],
['UCLan Hoodie', 'Burgundy New', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (32).jpg'],
['UCLan Hoodie', 'Navy New', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (33).jpg'],
['UCLan Hoodie', 'Bright Green', 'cotton authentic character and practicality are combined in this comfy  warm and luxury hoodie for students that goes with everything to create casual looks', ' £39.99', 'images/hoodies/hoodie (34).jpg'],
['UCLan Logo Jumper', 'Purple', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (1).jpg'],
['UCLan Logo Jumper', 'Rusty Red', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (2).jpg'],
['UCLan Logo Jumper', 'Water Blue', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (3).jpg'],
['UCLan Logo Jumper', 'White', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (4).jpg'],
['UCLan Logo Jumper', 'Pink', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (5).jpg'],
['UCLan Logo Jumper', 'Black', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (6).jpg'],
['UCLan Logo Jumper', 'Old Blue', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (7).jpg'],
['UCLan Logo Jumper', 'Dark Grey ', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (8).jpg'],
['UCLan Logo Jumper', 'Red', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (9).jpg'],
['UCLan Logo Jumper', 'Brown', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (10).jpg'],
['UCLan Logo Jumper', 'Green', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (11).jpg'],
['UCLan Logo Jumper', 'Dark Red', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (12).jpg'],
['UCLan Logo Jumper', 'Yellow', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (13).jpg'],
['UCLan Logo Jumper', 'Light Grey', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (14).jpg'],
['UCLan Logo Jumper', 'Light Green', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (15).jpg'],
['UCLan Logo Jumper', 'Old Red', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (16).jpg'],
['UCLan Logo Jumper', 'Light Purple', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (17).jpg'],
['UCLan Logo Jumper', 'Slate Blue', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (18).jpg'],
['UCLan Logo Jumper', 'Real Red', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (19).jpg'],
['UCLan Logo Jumper', 'Old Pink', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (20).jpg'],
['UCLan Logo Jumper', 'Slate Grey', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (21).jpg'],
['UCLan Logo Jumper', 'Bright Green', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (22).jpg'],
['UCLan Logo Jumper', 'Teal', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (23).jpg'],
['UCLan Logo Jumper', 'Sky Blue', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (24).jpg'],
['UCLan Logo Jumper', 'Sunshine Pink', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (25).jpg'],
['UCLan Logo Jumper', 'Bronze', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (26).jpg'],
['UCLan Logo Jumper', 'Olive Green', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (27).jpg'],
['UCLan Logo Jumper', 'Bright White Green', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (28).jpg'],
['UCLan Logo Jumper', 'Navy Blue', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (29).jpg'],
['UCLan Logo Jumper', 'Rusty Orange', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (30).jpg'],
['UCLan Logo Jumper', 'Bright Orange', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (31).jpg'],
['UCLan Logo Jumper', 'Sky Purple', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (32).jpg'],
['UCLan Logo Jumper', 'Really Red', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (33).jpg'],
['UCLan Logo Jumper', 'Plum Purple', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (34).jpg'],
['UCLan Logo Jumper', 'Dark Purple', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (35).jpg'],
['UCLan Logo Jumper', 'Vibrant Red', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (36).jpg'],
['UCLan Logo Jumper', 'Ocean Blue', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (37).jpg'],
['UCLan Logo Jumper', 'Creame', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (38).jpg'],
['UCLan Logo Jumper', 'Lighter Blue', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (39).jpg'],
['UCLan Logo Jumper', 'Light Grey', 'cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks', ' £29.99', 'images/jumpers/jumper (40).jpg'],
['UCLan Logo Tshirt', 'Navy Blue New', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (1).jpg'],
['UCLan Logo Tshirt', 'Rusty Red New', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (2).jpg'],
['UCLan Logo Tshirt', 'Burgundy', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (3).jpg'],
['UCLan Logo Tshirt', 'Pink', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (4).jpg'],
['UCLan Logo Tshirt', 'Teal', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (5).jpg'],
['UCLan Logo Tshirt', 'Black', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (6).jpg'],
['UCLan Logo Tshirt', 'Old Red', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (7).jpg'],
['UCLan Logo Tshirt', 'Grey', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (8).jpg'],
['UCLan Logo Tshirt', 'Red', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (9).jpg'],
['UCLan Logo Tshirt', 'Brown', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (10).jpg'],
['UCLan Logo Tshirt', 'Dark Purple', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (11).jpg'],
['UCLan Logo Tshirt', 'Yellow', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (12).jpg'],
['UCLan Logo Tshirt', 'Mustard Yellow', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (13).jpg'],
['UCLan Logo Tshirt', 'Dark Grey', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (14).jpg'],
['UCLan Logo Tshirt', 'Dark Green', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (15).jpg'],
['UCLan Logo Tshirt', 'Bright Green', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (16).jpg'],
['UCLan Logo Tshirt', 'Olive Green', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (17).jpg'],
['UCLan Logo Tshirt', 'Dark Grey', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (18).jpg'],
['UCLan Logo Tshirt', 'Orange', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (19).jpg'],
['UCLan Logo Tshirt', 'Purple', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (20).jpg'],
['UCLan Logo Tshirt', 'Slate Blue', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (21).jpg'],
['UCLan Logo Tshirt', 'Bright Pink', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (22).jpg'],
['UCLan Logo Tshirt', 'Brightly Green', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (23).jpg'],
['UCLan Logo Tshirt', 'Lime Green', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (24).jpg'],
['UCLan Logo Tshirt', 'Ocean Blue', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (25).jpg'],
['UCLan Logo Tshirt', 'Dark Red', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (26).jpg'],
['UCLan Logo Tshirt', 'Another Green', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (27).jpg'],
['UCLan Logo Tshirt', 'Slate Grey', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (28).jpg'],
['UCLan Logo Tshirt', 'Bright Orange', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (29).jpg'],
['UCLan Logo Tshirt', 'Another Purple', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (30).jpg'],
['UCLan Logo Tshirt', 'Real Red', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (31).jpg'],
['UCLan Logo Tshirt', 'Brilliant Blue', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (32).jpg'],
['UCLan Logo Tshirt', 'Creame', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (33).jpg'],
['UCLan Logo Tshirt', 'Teal Blue', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (34).jpg'],
['UCLan Logo Tshirt', 'White', 'cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days', ' £19.99', 'images/tshirts/tshirt (35).jpg']];

// Establishing where to find the elements to write to
const products = document.getElementById("productsList");
const item = document.getElementById("itemCard");


// For loop repeats for all items in array, copying the template and modifying the contents of the HTML elements to display information from the array. 
for (var i = 0; i < availableProducts.length; i++) {
    var itemCopy = item.cloneNode(true);
    products.appendChild(itemCopy);
    var value = "item" + i;
    itemCopy.id = value;
    itemCopy.querySelector('.itemName').innerHTML = availableProducts[i][0];
    itemCopy.querySelector('.itemPrice').innerHTML = availableProducts[i][3];
    itemCopy.querySelector('.src').innerHTML = "<img class='itemImage'src='" + availableProducts[i][4] + "'>";
    document.getElementById(value).onclick = webapi(i);
};

// Hides the template
item.style.display = "none";


function webapi(item) {
    return function () {
        sessionStorage.setItem('index', item);
        sessionStorage.setItem('name', availableProducts[item][0]);
        sessionStorage.setItem('color', availableProducts[item][1]);
        sessionStorage.setItem('description', availableProducts[item][2]);
        sessionStorage.setItem('price', availableProducts[item][3]);
        sessionStorage.setItem('src', availableProducts[item][4]);
    }
};
