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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</head>
<body>

    <!-- Header Section -->
    <header>
      
  <div class="container-fluid">
    <div class="row py-3 border-bottom">
      <div class="col-sm-4 col-lg-2 text-center text-sm-start d-flex gap-3 justify-content-center justify-content-md-start">
        <div class="d-flex align-items-center my-3 my-sm-0">
          <a href="index.html">
            <img src="images/logoShef.png" width="100" height="100" alt="logo" >
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
      <div class="custom-dropdown">
        <select class="form-select category-select">
          <option value="#">Choose a Category</option>
          <option value="category1.php">Fruits & Veggies</option>
          <option value="category2.php">Breads & Sweets</option>
          <option value="category3.php">Beverages</option>
          <option value="category4.php">Meat Products</option>
          <option value="category5.php">Grains</option>
        </select>
      </div>
    </div>
    <div class="col-11 col-md-7">
      <form id="search-form" class="text-center" action="index.html" method="post">
        <input type="text" class="form-control search-input" placeholder="Search for more than 20,000 products">
      </form>
    </div>
    <div class="col-1">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path fill="currentColor" d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z"/>
      </svg>
    </div>
  </div>
</div>


      <div class="col-lg-4">
  <ul class="navbar-nav list-unstyled d-flex flex-row gap-3 gap-lg-5 justify-content-center flex-wrap align-items-center mb-0 fw-bold text-uppercase text-dark">
    
    <!-- Home Link -->
    <li class="nav-item active">
      <a href="index.html" class="nav-link">Home</a>
    </li>

    <!-- Dropdown Menu Next to Home and Cart -->
    <li class="nav-item">
      <div class="custom-dropdown">
        <select id="pageSelect" onchange="window.location.href=this.value;">
          <option value="/about-us">About Us</option>
          <option value="/shop">Shop</option>
          <option value="/single-product">Single Product</option>
          <option value="/cart">Cart</option>
          <option value="/checkout">Checkout</option>
          <option value="/blog">Blog</option>
          <option value="/single-post">Single Post</option>
          <option value="/styles">Styles</option>
          <option value="/contact">Contact</option>
          <option value="/thank-you">Thank You</option>
          <option value="/my-account">My Account</option>
          <option value="/404-error">404 Error</option>
        </select>
      </div>
    </li>

    <!-- Cart Icon -->
    <li class="nav-item">
      <a href="addtocart.php" class="nav-link d-flex align-items-center">
        <i class="fas fa-shopping-basket"></i>
        <span class="ms-2">Cart</span>
        <svg width="16" height="16" class="ms-2"><use xlink:href="#arrow-right"></use></svg>
      </a>
    </li>

  </ul>
</div>

<!-- Custom CSS for Styling -->
<style>
  .custom-dropdown select {
    padding: 5px 10px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  .navbar-nav .nav-item {
    display: flex;
    align-items: center;
  }

  .navbar-nav .nav-item + .nav-item {
    margin-left: 10px;  /* Space between items */
  }

  .navbar-nav .nav-item .custom-dropdown {
    margin-top: 0; /* Remove extra margin if needed */
  }
</style>


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
        </ul>
      </div>
    </div>
  </div>
</header>


    <!-- Market Products Section -->
    <main>
    <section class="pb-5">
        <div class="container-lg">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header d-flex flex-wrap justify-content-between my-4">
                        <h2 class="section-title">All Products</h2>
                        <div class="d-flex align-items-center">
                        <form action="searchh.php" method="GET" class="d-flex align-items-center me-3" style="margin-right: 20px;">
                                <input type="text" name="query" class="form-control rounded-1" placeholder="Search for a product..." style="width: 250px;">
                                <button type="submit" class="btn btn-primary ms-2">Search</button>
                            </form>
                            <a href="#" class="btn btn-primary rounded-1">View All</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container py-5">
                <h1 class="text-center mb-5">All Products</h1>
                <div class="row gy-4"> <!-- Adjusted column layout -->
                    <?php if (!empty($products)): ?>
                        <?php foreach ($products as $product): ?>
                            <!-- Check if the product category is 'fruits_veggies' -->
                            
                                <div class="col-lg-3 col-md-4 col-sm-6"> <!-- Adjusted column layout -->
                                    <div class="product-item card p-3 h-100"> <!-- Optional: Card for styling -->
                                        <figure class="mb-3">
                                            <a href="productDetail.php?id=<?= htmlspecialchars($product['id']); ?>" title="<?= htmlspecialchars($product['name']); ?>">
                                                <img src="../BackOffice/<?= htmlspecialchars($product['picture']); ?>" 
                                                     alt="<?= htmlspecialchars($product['name']); ?>" class="img-fluid" style="height: 200px; object-fit: cover;">
                                            </a>
                                        </figure>
                                        <div class="d-flex flex-column text-center mt-3">
                                            <h3 class="fs-6 fw-normal"><?= htmlspecialchars($product['name']); ?></h3>
                                            <p class="text-muted"><?= htmlspecialchars($product['description']); ?></p>
                                            <p class="text-muted"><strong>Category:</strong> <?= htmlspecialchars($product['category']); ?></p>
                                            <p class="text-muted"><strong>Stock:</strong> <?= htmlspecialchars($product['stock']); ?></p>
                                            <div class="d-flex justify-content-center align-items-center gap-2 mt-2">
                                                <span class="text-dark fw-semibold"><?= htmlspecialchars($product['price']); ?> TD</span>
                                            </div>
                                            
                                            <!-- Buttons -->
                                            <div class="button-area mt-3">
                                                <div class="d-flex align-items-center gap-2">
                                                    <!-- Adjust input and button size -->
                                                    <input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1" min="1" />
                                                    <button class="btn btn-success add-to-cart-btn"
                                                          data-id="<?= $product['id']; ?>"
                                                          data-name="<?= $product['name']; ?>"
                                                          data-price="<?= $product['price']; ?>"
                                                          data-quantity="1" style="flex-grow: 1;">
                                                      <i class="fas fa-shopping-cart"></i> Add to Cart
                                                  </button>

                                                </div>
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>
                           
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-center">No products available.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>


    <!-- Footer Section -->
    <footer class="py-5">
      <div class="container-lg">
        <div class="row">

          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer-menu">
              <img src="images/logoShef.png" width="250" height="250" alt="logo">
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
document.querySelectorAll('.add-to-cart-btn').forEach((button) => {
    button.addEventListener('click', function () {
        // Get product details from button attributes
        const productId = this.dataset.id;
        const productName = this.dataset.name;
        const productPrice = parseFloat(this.dataset.price);
        const quantityInput = this.parentElement.querySelector('.quantity');
        const quantity = parseInt(quantityInput.value) || 1; // Default to 1 if invalid

        // Calculate total price
        const totalPrice = productPrice * quantity;

        // Create product object
        const product = {
            id: productId,
            name: productName,
            price: productPrice,
            quantity: quantity,
            totalPrice: totalPrice
        };

        // Get the cart from localStorage or initialize an empty array
        const cart = JSON.parse(localStorage.getItem('cart')) || [];

        // Check if the product is already in the cart
        const existingProductIndex = cart.findIndex((item) => item.id === product.id);
        if (existingProductIndex !== -1) {
            // Update quantity and total price of the existing product
            cart[existingProductIndex].quantity += quantity;
            cart[existingProductIndex].totalPrice = cart[existingProductIndex].price * cart[existingProductIndex].quantity;
        } else {
            // Add the new product to the cart
            cart.push(product);
        }

        // Save the updated cart to localStorage
        localStorage.setItem('cart', JSON.stringify(cart));

        // Redirect to the cart page or display a message
        alert('Product added to cart!');
        window.location.href = 'addtocart.php';
    });
});

document.querySelector('.form-select').addEventListener('change', function() {
  const value = this.value;
  if (value) {
    window.location.href = value + '';  // Redirect to the corresponding page
  }
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
