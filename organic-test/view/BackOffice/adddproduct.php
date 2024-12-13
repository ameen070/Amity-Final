<?php
// Include configuration and product controller
include(__DIR__ . '/../../controller/ProductController.php');

$error = "";

$product= null;
// create an instance of the controller
$ProductController = new ProductController();


if (isset($_POST["name"]) && $_POST["price"] && $_POST["description"] && $_POST["category"] && $_POST["stock"] && $_FILES["picture"]) {
    if (!empty($_POST["name"]) && !empty($_POST["price"]) && !empty($_POST["description"]) && !empty($_POST["category"]) && !empty($_POST["stock"]) && !empty($_FILES["picture"]["name"])) {
        // Extract only the file name from $_FILES['picture']
        $fileName = $_FILES['picture']['name']; 
        $product = new Product(null, $_POST['name'], $_POST['price'], $_POST['description'], $_POST['category'], $_POST['stock'], $fileName);
        
        // Define upload directory and file path
        $uploadDir = '';
        $uploadFile = $uploadDir . basename($fileName);
        // Move uploaded file to designated directory
        if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadFile)) {
            // Call addProduct method with the product object
            $ProductController->addProduct($product);
            header('Location:ProductList.php');
            exit(); // Always exit after header redirection
        } else {
            $error = "Failed to upload picture.";
        }
    } else {
        $error = "Missing information";
    }
}?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
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
        <form id="addProductForm" action="adddProduct.php" method="POST" enctype="multipart/form-data">
    <label for="name">Name:</label><br>
    <input class="form-control form-control-user" type="text" id="name" name="name">
    <span id="name_error"></span><br>

    <label for="price">Price:</label><br>
    <input class="form-control form-control-user" type="number" id="price" name="price">
    <span id="price_error"></span><br>

    <label for="description">Description:</label><br>
    <input class="form-control form-control-user" type="text" id="description" name="description">
    <span id="description_error"></span><br>

    <label for="category">Category:</label><br>
    <select class="form-control form-control-user" id="category" name="category">
        <option value="">Select a Category</option>
        <option value="fruits_veggies">Fruits & Veggies</option>
        <option value="breads_sweets">Breads & Sweets</option>
        <option value="beverages">Beverages</option>
        <option value="meat">Meat</option>
        <option value="grains">Grains</option>
    </select>
    <span id="category_error"></span><br>

    <label for="stock">Stock:</label><br>
    <input class="form-control form-control-user" type="number" id="stock" name="stock">
    <span id="stock_error"></span><br>

    <label class="form-label">Picture:</label>
    <input type="file" class="form-control" id="picture" name="picture" accept="image/*">
    <span id="image_error"></span><br><br>

    <button type="submit" class="btn btn-primary btn-user btn-block">Add Product</button>
</form>




<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("addProductForm");

        // Field Elements
        const nameField = document.getElementById("name");
        const priceField = document.getElementById("price");
        const descriptionField = document.getElementById("description");
        const categoryField = document.getElementById("category");
        const stockField = document.getElementById("stock");
        const pictureField = document.getElementById("picture");

        // Error Spans
        const nameError = document.getElementById("name_error");
        const priceError = document.getElementById("price_error");
        const descriptionError = document.getElementById("description_error");
        const categoryError = document.getElementById("category_error");
        const stockError = document.getElementById("stock_error");
        const imageError = document.getElementById("image_error");

        // Event Listeners
        nameField.addEventListener("keyup", function () {
            if (nameField.value.length < 3) {
                nameError.textContent = "Name must be at least 3 characters.";
                nameError.style.color = "red";
            } else {
                nameError.textContent = "Correct";
                nameError.style.color = "green";
            }
        });

        priceField.addEventListener("keyup", function () {
            if (priceField.value <= 0) {
                priceError.textContent = "Price must be greater than 0.";
                priceError.style.color = "red";
            } else {
                priceError.textContent = "Correct";
                priceError.style.color = "green";
            }
        });

        descriptionField.addEventListener("keyup", function () {
            if (descriptionField.value.length < 10) {
                descriptionError.textContent = "Description must be at least 10 characters.";
                descriptionError.style.color = "red";
            } else {
                descriptionError.textContent = "Correct";
                descriptionError.style.color = "green";
            }
        });

        categoryField.addEventListener("change", function () {
            if (categoryField.value === "") {
                categoryError.textContent = "Please select a category.";
                categoryError.style.color = "red";
            } else {
                categoryError.textContent = "Correct";
                categoryError.style.color = "green";
            }
        });

        stockField.addEventListener("keyup", function () {
            if (stockField.value <= 0) {
                stockError.textContent = "Stock must be greater than 0.";
                stockError.style.color = "red";
            } else {
                stockError.textContent = "Correct";
                stockError.style.color = "green";
            }
        });

        pictureField.addEventListener("change", function () {
            if (!pictureField.value) {
                imageError.textContent = "Please upload an image.";
                imageError.style.color = "red";
            } else {
                imageError.textContent = "Correct";
                imageError.style.color = "green";
            }
        });

        // Prevent submission if errors exist
        form.addEventListener("submit", function (e) {
            if (
                nameField.value.length < 3 ||
                priceField.value <= 0 ||
                descriptionField.value.length < 10 ||
                categoryField.value === "" ||
                stockField.value <= 0 ||
                !pictureField.value
            ) {
                e.preventDefault(); // Stop form submission
                alert("Please fix the errors before submitting.");
            }
        }); 
    });
</script>

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