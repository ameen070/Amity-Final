<?php
// Include necessary files
include(__DIR__ . '../../../controller/ProductController.php');

// Get the search query from the URL parameter
$query = isset($_GET['query']) ? $_GET['query'] : '';

// Instantiate the controller
$productController = new ProductController();

// If the query is not empty, perform the search
if (!empty($query)) {
    $products = $productController->searchProduct($query);
} else {
    // If no query, you can fetch all products or show a default message
    $products = [];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Search Results</title>
</head>
<body>
    <h1>Search Results for "<?php echo htmlspecialchars($query); ?>"</h1>

    <?php if (!empty($products)): ?>
    <?php foreach ($products as $product): ?>
        <!-- Check the category of the product and display accordingly -->
        <?php if ($product['category'] === 'fruits_veggies'): ?>
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
        <?php elseif ($product['category'] === 'breads_sweets'): ?>
            <!-- Similar block for 'breads_sweets' category -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-item card p-3 h-100">
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
                        
                        <!-- Add to Cart Button -->
                        <div class="button-area mt-3">
                            <div class="d-flex align-items-center gap-2">
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
        <?php endif; ?>
        <!-- Repeat for other categories (e.g., Beverages, Meat Products, etc.) -->
    <?php endforeach; ?>
<?php else: ?>
    <p class="text-center">No products available.</p>
<?php endif; ?>

</body>
</html>
