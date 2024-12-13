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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="assets/vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/vertical-light-layout/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item navbar-brand-mini-wrapper">
              <a class="nav-link navbar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
            </li>
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Bouallegui Souhaib</p>
                  <p class="designation">Administrator</p>
                </div>
                <div class="icon-container">
                  <i class="icon-bubbles"></i>
                  <div class="dot-indicator bg-danger"></div>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">UI Elements</span></li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Products</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                      <a class="nav-link" href="ProductList.php">All Products</a>
                      <!-- Dropdown or Accordion for Categories -->
                      <ul class="nav flex-column sub-menu" style="list-style: none; padding-left: 20px;">
                          <li class="nav-item"><a class="nav-link" href="fruits.php">Fruits & Veggies</a></li>
                          <li class="nav-item"><a class="nav-link" href="breads.php">Breads & Sweets</a></li>
                          <li class="nav-item"><a class="nav-link" href="beverages.php">Beverages</a></li>
                          <li class="nav-item"><a class="nav-link" href="meat.php">Meat</a></li>
                          <li class="nav-item"><a class="nav-link" href="Grains.php">Grains</a></li>
                      </ul>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="adddproduct.php">Add Product</a></li>
                  <li class="nav-item"><a class="nav-link" href="ProductList.php">Delete Product</a></li>
              </ul>
              </div>
            </li>
            <li class="nav-item">
                  <a class="nav-link" href="Purchases.php">
                      <span class="menu-title">Purchases</span>
                      <i class="icon-globe menu-icon"></i>
                  </a>
              </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="forms">
                <span class="menu-title">Forms</span>
                <i class="icon-book-open menu-icon"></i>
              </a>
              <div class="collapse" id="forms">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/forms/basic_elements.html">Form Elements</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <span class="menu-title">Charts</span>
                <i class="icon-chart menu-icon"></i>
              </a>
              <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <span class="menu-title">Tables</span>
                <i class="icon-grid menu-icon"></i>
              </a>
              <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic Table</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Extra Pages</span></li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">User Pages</span>
                <i class="icon-disc menu-icon"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Help</span></li>
            <li class="nav-item">
              <a class="nav-link" href="../../docs/documentation.html" target="_blank">
                <span class="menu-title">Documentation</span>
                <i class="icon-folder-alt menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- product listttt -->
        
        <div class="container py-5">
    <h1 class="text-center mb-5">Meat Products</h1>
    <div class="row gy-4">
    <?php if (!empty($products)): ?>
    <?php foreach ($products as $product): ?>
        <!-- Check if the product category is 'Meat' -->
        <?php if ($product['category'] === 'meat'): ?>
        <div class="col-md-4 col-sm-6">
            <div class="product-item">
                <figure>
                    <a href="productDetail.php?id=<?= htmlspecialchars($product['id']); ?>" title="<?= htmlspecialchars($product['name']); ?>">
                        <img src="<?= htmlspecialchars($product['picture']); ?>" 
                             alt="<?= htmlspecialchars($product['name']); ?>" 
                             class="tab-image img-fluid">
                    </a>
                </figure>
                <div class="d-flex flex-column text-center mt-3">
                    <!-- Product Name -->
                    <h3 class="fs-6 fw-normal"><?= htmlspecialchars($product['name']); ?></h3>

                    <!-- Product Description -->
                    <p class="text-muted"><?= htmlspecialchars($product['description']); ?></p>

                    <!-- Product Category -->
                    <p class="text-muted"><strong>Category:</strong> <?= htmlspecialchars($product['category']); ?></p>

                    <!-- Product Stock -->
                    <p class="text-muted"><strong>Stock:</strong> <?= htmlspecialchars($product['stock']); ?></p>

                    <!-- Price and Discount -->
                    <div class="d-flex justify-content-center align-items-center gap-2 mt-2">
                        <span class="text-dark fw-semibold"><?= htmlspecialchars($product['price']); ?> TD</span>
                    </div>

                    <!-- Add to Cart Section -->
                    <div class="button-area p-3 pt-0">
                        <div class="row g-1 mt-2">
                            <div class="col-3">
                                <input type="number" name="quantity" 
                                       class="form-control border-dark-subtle input-number quantity" 
                                       value="1" min="1">
                            </div>
                            <div class="col-7">
                                <a href="UpdateProduct.php?id=<?= $product['id']; ?>" class="btn btn-success rounded-1 p-2 fs-7 btn-update-product">
                                    <i class="fas fa-pen"></i> Update
                                </a>
                            </div>

                            <div class="col-2">
                                <!-- Delete Product Form -->
                                <form action="DeleteProduct.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                    <input type="hidden" name="id" value="<?= $product['id']; ?>">
                                    <button type="submit" class="btn btn-outline-dark rounded-1 p-2 fs-6">
                                        <i class="fas fa-trash-alt"></i> <!-- Trash Icon for Delete -->
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?> <!-- End of 'Meat' category check -->
    <?php endforeach; ?>
<?php else: ?>
    <p class="text-center">No products available.</p>
<?php endif; ?>

    </div>
</div>






    
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/chart.umd.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendors/moment/moment.min.js"></script>
    <script src="assets/vendors/daterangepicker/daterangepicker.js"></script>
    <script src="assets/vendors/chartist/chartist.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/js/jquery.cookie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>