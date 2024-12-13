<?php
// Include configuration and product controller
include(__DIR__ . '/../../controller/ProductController.php');

// Fetch products from the database
$productController = new ProductController();
$products = $productController->listProduct();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>Market - Organic Grocery Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <!-- Header Section -->
    <header>
        <div class="container-fluid">
          <div class="row py-3 border-bottom">
            
            <div class="col-sm-4 col-lg-2 text-center text-sm-start d-flex gap-3 justify-content-center justify-content-md-start">
              <div class="d-flex align-items-center my-3 my-sm-0">
                <a href="index.html">
                  <img src="images/logo.svg" alt="logo" class="img-fluid">
                </a>
              </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#menu"></use></svg>
              </button>
            </div>
            
            <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-4">
              <div class="search-bar row bg-light p-2 rounded-4">
                <div class="col-md-4 d-none d-md-block">
                  <select class="form-select border-0 bg-transparent">
                    <option>Fruits & Vegas</option>
                    <option>Breads & Sweets</option>
                    <option>Bevarages</option>
                    <option>Meat Products</option>
                    <option>Grains</option>
                  </select>
                </div>
                <div class="col-11 col-md-7">
                  <form id="search-form" class="text-center" action="index.html" method="post">
                    <input type="text" class="form-control border-0 bg-transparent" placeholder="Search for more than 20,000 products">
                  </form>
                </div>
                <div class="col-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z"/></svg>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4">
              <ul class="navbar-nav list-unstyled d-flex flex-row gap-3 gap-lg-5 justify-content-center flex-wrap align-items-center mb-0 fw-bold text-uppercase text-dark">
                <li class="nav-item active">
                  <a href="index.html" class="nav-link">Home</a>
                </li>
                
              </ul>
            </div>
            
            <div class="col-sm-8 col-lg-2 d-flex gap-5 align-items-center justify-content-center justify-content-sm-end">
              <ul class="d-flex justify-content-end list-unstyled m-0">
                <li>
                  <a href="#" class="p-2 mx-1">
                    <svg width="24" height="24"><use xlink:href="#user"></use></svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="p-2 mx-1">
                    <svg width="24" height="24"><use xlink:href="#wishlist"></use></svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="p-2 mx-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                    <svg width="24" height="24"><use xlink:href="#shopping-bag"></use></svg>
                  </a>
                </li>
              </ul>
            </div>
  
          </div>
        </div>
      </header>

    <!-- Market Products Section -->
    <div class="container">
    <h1>Your Cart</h1>

    <!-- Table to display cart items -->
    <table class="table">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>
                <th>Action</th> <!-- New Action column -->
            </tr>
        </thead>
        <tbody id="cart-table-body">
            <!-- Cart items will be dynamically inserted here -->
        </tbody>
    </table>

    <!-- Buttons below the table -->
    <div class="d-flex justify-content-center gap-2 mt-4">
    <a href="category1.php" class="btn btn-secondary btn-lg">Continue Shopping</a>
    <button id="checkout-btn" class="btn btn-primary btn-lg">Continue to Checkout</button>
</div>

</div>



    <!-- Footer Section -->
    <footer class="py-5">
      <div class="container-lg">
        <div class="row">

          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer-menu">
              <img src="images/logo.svg" width="240" height="70" alt="logo">
              <div class="social-links mt-3">
                <ul class="d-flex list-unstyled gap-2">
                  <li>
                    <a href="#" class="btn btn-outline-light">
                      <svg width="16" height="16"><use xlink:href="#facebook"></use></svg>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="btn btn-outline-light">
                      <svg width="16" height="16"><use xlink:href="#twitter"></use></svg>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="btn btn-outline-light">
                      <svg width="16" height="16"><use xlink:href="#youtube"></use></svg>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="btn btn-outline-light">
                      <svg width="16" height="16"><use xlink:href="#instagram"></use></svg>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="btn btn-outline-light">
                      <svg width="16" height="16"><use xlink:href="#amazon"></use></svg>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-2 col-sm-6">
            <div class="footer-menu">
              <h5 class="widget-title">Organic</h5>
              <ul class="menu-list list-unstyled">
                <li class="menu-item">
                  <a href="#" class="nav-link">About us</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Conditions </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Our Journals</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Careers</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Affiliate Programme</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Ultras Press</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 col-sm-6">
            <div class="footer-menu">
              <h5 class="widget-title">Quick Links</h5>
              <ul class="menu-list list-unstyled">
                <li class="menu-item">
                  <a href="#" class="nav-link">Offers</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Discount Coupons</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Stores</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Track Order</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Shop</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Info</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 col-sm-6">
            <div class="footer-menu">
              <h5 class="widget-title">Customer Service</h5>
              <ul class="menu-list list-unstyled">
                <li class="menu-item">
                  <a href="#" class="nav-link">FAQ</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Contact</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Privacy Policy</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Returns & Refunds</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Cookie Guidelines</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Delivery Information</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer-menu">
              <h5 class="widget-title">Subscribe Us</h5>
              <p>Subscribe to our newsletter to get updates about our grand offers.</p>
              <form class="d-flex mt-3 gap-0" action="index.html">
                <input class="form-control rounded-start rounded-0 bg-light" type="email" placeholder="Email Address" aria-label="Email Address">
                <button class="btn btn-dark rounded-end rounded-0" type="submit">Subscribe</button>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
    
          
    <!-- Optional JavaScript -->
    <script>
window.onload = function () {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartTableBody = document.getElementById('cart-table-body');

    // If cart is empty, display a message
    if (cart.length === 0) {
        cartTableBody.innerHTML = '<tr><td colspan="5" class="text-center">Your cart is empty.</td></tr>';
    } else {
        cart.forEach((product, index) => {
            // Ensure price and totalPrice exist and are valid numbers
            const price = product.price || 0; // Default to 0 if undefined
            const totalPrice = product.totalPrice || 0; // Default to 0 if undefined

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${product.name || 'Unknown Product'}</td>
                <td>${product.quantity || 1}</td>
                <td>$${price.toFixed(2)}</td>
                <td>$${totalPrice.toFixed(2)}</td>
                <td>
                    <input type="number" class="form-control update-quantity-input" min="1" value="${product.quantity}" style="width: 70px; display: inline-block;" />
                    <button class="btn btn-primary btn-sm update-quantity-btn" data-index="${index}">Update Quantity</button>
                    <button class="btn btn-danger btn-sm delete-btn" data-index="${index}">Delete</button>
                </td>
            `;
            cartTableBody.appendChild(row);
        });

        // Add event listeners to the update buttons
        document.querySelectorAll('.update-quantity-btn').forEach((button) => {
            button.addEventListener('click', function () {
                const index = parseInt(this.dataset.index, 10); // Get the product index
                const newQuantityInput = this.previousElementSibling; // Get the associated input field
                const newQuantity = parseInt(newQuantityInput.value, 10);

                if (isNaN(newQuantity) || newQuantity <= 0) {
                    alert('Please enter a valid quantity.');
                    return;
                }

                // Update the product's quantity and total price in the cart
                cart[index].quantity = newQuantity;
                cart[index].totalPrice = cart[index].price * newQuantity;

                // Save the updated cart back to localStorage
                localStorage.setItem('cart', JSON.stringify(cart));

                // Reload the page to reflect updated data
                location.reload();
            });
        });

        // Add event listeners to the delete buttons
        document.querySelectorAll('.delete-btn').forEach((button) => {
    button.addEventListener('click', function () {
        const index = parseInt(this.dataset.index, 10); // Get the product index
        
        // Show a confirmation alert
        const confirmation = confirm("Are you sure you want to delete this product from your cart?");
        
        if (confirmation) {
            // Remove the product from the cart array
            cart.splice(index, 1);

            // Save the updated cart back to localStorage
            localStorage.setItem('cart', JSON.stringify(cart));

            // Reload the page to reflect updated data
            location.reload();
        }
    });
});

    }
};


</script>

<script>
    document.getElementById('checkout-btn').addEventListener('click', function () {
        // Get the cart data from localStorage
        const cart = JSON.parse(localStorage.getItem('cart')) || [];

        if (cart.length === 0) {
            alert("Your cart is empty!");
            return;
        }

        // Send the cart data to the server via a POST request
        fetch('checkout.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ cart: cart })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert("Purchase completed successfully!");
                localStorage.removeItem('cart'); // Clear the cart
                window.location.href = "category1.php"; // Redirect to a thank-you page
            } else {
                alert("Error: " + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert("An error occurred while processing your checkout.");
        });
    });
</script>

    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
