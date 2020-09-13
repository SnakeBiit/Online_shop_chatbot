if (document.readyState == "loading") {
  document.addEventListener("DOMContentLoaded", ready);
} else {
  ready();
}

function ready() {
  /*for (var i = 0; i < localStorage.length; i++) {
    var key = localStorage.key(i);
    var item = JSON.parse(localStorage.getItem(key));
    var cartRow = document.createElement("div");
    cartRow.classList.add("cart-row");
    var cartItems = document.getElementsByClassName("cart-items")[0];
    var cartRowContent = `
              <div class="cart-item cart-column" >
                  <img class="cart-item-image" src=${item[2]} />
                  <span class="cart-item-title">${item[0]}</span>
                </div>
                <span class="cart-price cart-column">${item[1]}</span>
                <div class="cart-quantity cart-column" id=${key}>
                  <input class="cart-quantity-input" type="number" value="1" />
                  <button class="btn btn-danger" type="button" onClick="window.location.reload();">REMOVE</button>
                </div>`;
    cartRow.innerHTML = cartRowContent;
    cartItems.append(cartRow);
    updateCartTotal(); //AJAX
  }*/

  var removeCartItemButtons = document.getElementsByClassName("btn-danger");
  for (var i = 0; i < removeCartItemButtons.length; i++) {
    var button = removeCartItemButtons[i];
    button.addEventListener("click", removeCartItem);
  }

  var quantityInputs = document.getElementsByClassName("cart-quantity-input");
  for (var i = 0; i < quantityInputs.length; i++) {
    var input = quantityInputs[i];
    input.addEventListener("change", quantityChanged);
  }

  var addToCartButtons = document.getElementsByClassName("addToCart");
  for (var i = 0; i < addToCartButtons.length; i++) {
    var button = addToCartButtons[i];
    button.addEventListener("click", addToCartClicked);
  }

  document
    .getElementsByClassName("btn-purchase")[0]
    .addEventListener("click", purchaseClicked);
}

function purchaseClicked() {
  alert("Thank you for your purchase");
  var cartItems = document.getElementsByClassName("cart-items")[0];
  while (cartItems.hasChildNodes()) {
    cartItems.removeChild(cartItems.firstChild);
  }
  updateCartTotal();
}

function removeCartItem(event) {
  var buttonClicked = event.target;
  var searchId = buttonClicked.parentElement;
  var id = searchId.id;
  console.log(id);
  localStorage.removeItem(id);
  updateCartTotal();
}

function quantityChanged(event) {
  var input = event.target;
  if (isNaN(input.value) || input.value <= 0) {
    input.value = 1;
  }
  updateCartTotal();
}

function addToCartClicked(event) {
  var button = event.target;
  var shopItem = button.parentElement.parentElement;

  var title = shopItem.getElementsByClassName("featured-heading1")[0].innerText;
  var price = shopItem.getElementsByClassName("pret")[0].innerText;
  var imageSrc = shopItem.getElementsByClassName("featured-image")[0].src;
  var id = shopItem.id;

  addItemToLocalStorage(title, price, imageSrc, id);

  updateCartTotal();
}

function addItemToLocalStorage(title, price, imageSrc, id) {
  var arr = [];
  arr.push(title);
  arr.push(price);
  arr.push(imageSrc);

  var x = false;
  for (var i = 0; i < localStorage.length; i++) {
    var key = localStorage.key(i);
    if (id == key) {
      x = true;
    }
  }

  if (x) {
    alert("Elementul este deja in lista!");
  } else {
    localStorage.setItem(id, JSON.stringify(arr));
  }
}

function updateCartTotal() {
  var cartItemContainer = document.getElementsByClassName("cart-items")[0];
  var cartRows = cartItemContainer.getElementsByClassName("cart-row");
  var total = 0;
  for (var i = 0; i < cartRows.length; i++) {
    var cartRow = cartRows[i];
    var priceElement = cartRow.getElementsByClassName("cart-price")[0];
    var quantityElement = cartRow.getElementsByClassName(
      "cart-quantity-input"
    )[0];
    var price = parseFloat(priceElement.innerText.replace("$", ""));
    var quantity = quantityElement.value;
    total = total + price * quantity;
  }
  total = Math.round(total * 100) / 100;

  document.getElementsByClassName("cart-total-price")[0].innerText =
    "$" + total;
}
