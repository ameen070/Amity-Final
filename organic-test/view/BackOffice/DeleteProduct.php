<?php
include '../../controller/ProductController.php'; // Include your controller

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the 'id' is provided
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $productId = $_POST['id'];  // Get the product ID from the form

        // Create an instance of your ProductController
        $Product = new ProductController();
        
        // Call the deleteProduct function and pass the product ID
        $Product->deleteProduct($productId);

        // Redirect back to the product list page after deletion
        header('Location: ProductList.php?message=Product deleted successfully');
        exit;  // Make sure the script stops here after redirection
    } else {
        echo "No product ID provided.";  // In case no ID was provided
    }
}
?>
