<?php

include(__DIR__ . '/../../controller/PurchaseController.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Decode the JSON cart data from the request
    $cartData = json_decode(file_get_contents('php://input'), true);

    if (!isset($cartData['cart']) || empty($cartData['cart'])) {
        echo json_encode(['success' => false, 'message' => 'Cart is empty.']);
        exit;
    }

    $cart = $cartData['cart'];
    $purchaseController = new PurchasesController();

    try {
        foreach ($cart as $item) {
            // Create a new PurchaseModel object for each item in the cart
            $purchase = new Purchase(
                null,                     // ID (auto-incremented by the database)
                $item['id'],              // product_id
                1,                        // user_id (replace with actual user ID)
                $item['quantity'],        // quantity
                $item['totalPrice'],      // total_price
                date('Y-m-d H:i:s')       // purchase_date
            );

            // Add the purchase to the database
            $purchaseController->addPurchase($purchase);
        }

        echo json_encode(['success' => true]);
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}
?>
