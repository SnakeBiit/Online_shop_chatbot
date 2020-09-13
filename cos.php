<?php include 'includes/head.php'?>
<?php include 'includes/header.php'?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cart</title>
      
  </head>
  <style>
    .purchase {
        width: 20%;
        border: none;
        outline: 0;
        padding: 12px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        font-size: 18px;
        border-radius: 25px;
        display:block;
        margin-left:40%;
        margin-top:1%;
        margin-bottom:2%;
}
      .cart-item-image{
        width:25rem;
      }
      .cart-total{
         margin-left:40%;
      }
      .btn-danger{
        width: 7%;
        border: none;
        outline: 0;
        padding: 10px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        font-size: 15px;
        border-radius: 25px;
        display:block;
        margin-left:53%;
        margin-top:1%;
        margin-bottom:2%;
      }
      .cart-quantity-input{
        color:black;
        width:3%;
        margin-left:40%;
      }
      .quantitytext{
        margin-left:40%;
        margin-bottom:0;
        margin-top:0;
      }
      .cart-price{
        margin-left:40%;
        margin-bottom:0;
      }
      .cart-item-title{
         margin-left:40%;
      }
      .cart-item-image{
        margin-left:35%;
      }
      .section-header{
         margin-left:47%;
      }
  </style>
  <body>
    <section class="container content-section">
      <h2 class="section-header" style="color:#41c0cc;">CART</h2>
      
      <div class="cart-items"></div>
     
     
      <div class="cart-total">
          <strong class="cart-total-title">Total</strong>
          <span  class="cart-total-price">$0</span>
      </div>
       
      <button onclick="window.localStorage.clear();" class="purchase"><a style="color:white; text-decoration: none;"  href="./Pay/pay.php">Purchase</a></button>
    
    </section>
    <script>
      for (var i = 0; i < localStorage.length; i++) {
        
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
                          <p class = "quantitytext">Quantity</p>
                          <input class="cart-quantity-input" type="number" value="1" />
                          <button class="btn btn-danger" type="button" onClick="window.location.reload();">REMOVE</button>
                        </div>`;
                cartRow.innerHTML = cartRowContent;
                cartItems.append(cartRow);
                updateCartTotal(); 
      }
    </script>
    
  </body>
   
</html>
