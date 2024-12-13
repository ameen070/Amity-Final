<?php
include(__DIR__ . '/../config.php');
include(__DIR__ . '/../Model/PurchaseModel.php');

class PurchasesController
{
    private $pdo;

    // List all purchases
    public function listPurchases()
    {
        $sql = "SELECT * FROM purchasess";  // Make sure the table name is correct
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    // Delete a purchase by ID
    public function deletePurchase($id)
    {
        $sql = "DELETE FROM purchasess WHERE id = :id";  // Correct table name (Check your table name)
        $db = config::getConnexion();
    
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':id', $id, PDO::PARAM_INT);  // Binding as integer
            $result = $req->execute();
    
            if ($result) {
                return true; // Successfully deleted
            } else {
                return false; // Deletion failed
            }
        } catch (Exception $e) {
            error_log("Error deleting purchase: " . $e->getMessage());
            return false;  // Return false on failure
        }
    }

    // Add a new purchase
    public function addPurchase($purchase)
    {
        $sql = "INSERT INTO purchasess (product_id, user_id, quantity, total_price, purchase_date)  
                VALUES (:product_id, :user_id, :quantity, :total_price, :purchase_date)";
        $db = config::getConnexion();
    
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'product_id' => $purchase->getProductId(),
                'user_id' => $purchase->getUserId(),
                'quantity' => $purchase->getQuantity(),
                'total_price' => $purchase->getTotalPrice(),
                'purchase_date' => $purchase->getPurchaseDate(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    

    // Update an existing purchase
    public function updatePurchase($purchase, $id)
    {
        try {
            $db = config::getConnexion();
    
            $query = $db->prepare(
                'UPDATE purchasess SET 
                    product_id = :product_id,
                    user_id = :user_id,
                    quantity = :quantity,
                    total_price = :total_price,
                    purchase_date = :purchase_date
                WHERE id = :id'
            );
    
            $query->execute([
                'id' => $id,
                'product_id' => $purchase->getProductId(),
                'user_id' => $purchase->getUserId(),
                'quantity' => $purchase->getQuantity(),
                'total_price' => $purchase->getTotalPrice(),
                'purchase_date' => $purchase->getPurchaseDate(),
            ]);
    
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // Fetch a purchase by ID
    public function getPurchaseById($id)
    {
        $sql = "SELECT * FROM purchasess WHERE id = :id";
        $db = config::getConnexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $purchase = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($purchase) {
                return new Purchase(
                    $purchase['id'],
                    $purchase['product_id'],
                    $purchase['user_id'],
                    $purchase['quantity'],
                    $purchase['total_price'],
                    $purchase['purchase_date']
                );
            }
            return null;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    // Show a purchase by ID
    public function showPurchase($id)
    {
        $sql = "SELECT * from purchasess WHERE id = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            $query->execute();

            $purchase = $query->fetch();
            return $purchase;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
?>
