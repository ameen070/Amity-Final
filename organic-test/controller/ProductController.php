<?php
include(__DIR__ . '/../config.php');
include(__DIR__ . '/../Model/ProductModel.php');

class ProductController
{
    private $pdo;
    
    public function listProduct()
    {
        $sql = "SELECT * FROM productss";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteProduct($id)
    {
        // Correct table name (Check your table name)
        $sql = "DELETE FROM productss WHERE id = :id"; 
    
        // Get database connection
        $db = config::getConnexion();
    
        try {
            // Prepare the SQL query
            $req = $db->prepare($sql);
    
            // Bind the ID parameter
            $req->bindValue(':id', $id, PDO::PARAM_INT);  // Binding as integer
    
            // Execute the query
            $result = $req->execute();
    
            if ($result) {
                return true; // Successfully deleted
            } else {
                return false; // Deletion failed
            }
        } catch (Exception $e) {
            // Log or display error in production (do not use die() in production)
            error_log("Error deleting product: " . $e->getMessage());
            return false;  // Return false on failure
        }
    }
    

    function addProduct($product)
    {   var_dump($product);
        $sql = "INSERT INTO productss  
        VALUES (NULL, :name,:price, :description,:category, :stock, :picture)";
        $db = config::getConnexion();
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'name' => $product->getName(),
                'price' => $product->getPrice(),
                'description' => $product->getDescription(),
                'category' => $product->getCategory(),
                'stock' => $product->getStock(),
                'picture' => $product->getPicture(), 
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateProduct($product, $id)
    {
        var_dump($product);  // Debugging to ensure the product is correct
        try {
            $db = config::getConnexion();
    
            $query = $db->prepare(
                'UPDATE productss SET 
                    name = :name,
                    price = :price,
                    description = :description,
                    category = :category,
                    stock = :stock,
                    picture = :picture
                WHERE id = :id'
            );
    
            $query->execute([
                'id' => $id,
                'name' => $product->getName(),
                'price' => $product->getPrice(),
                'description' => $product->getDescription(),
                'category' => $product->getCategory(),
                'stock' => $product->getStock(),
                'picture' => $product->getPicture(),
            ]);
    
            echo $query->rowCount() . " records UPDATED successfully <br>";  // This will show if the update was successful
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    

    // Fetch product by ID
    public function getProductById($id) {
        // SQL query to fetch the product by ID
        $sql = "SELECT * FROM productss WHERE id = :id";
        $db = config::getConnexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $product = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($product) {
                return new Product(
                    $product['id'],
                    $product['name'],
                    $product['price'],
                    $product['description'],
                    $product['category'],
                    $product['stock'],
                    $product['picture']
                );
            }
            return null;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    
    
    

    // Update product method (you can keep your existing code for updating products)
    function showProduct($id)
    {
        $sql = "SELECT * from productss where id = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $offer = $query->fetch();
            return $offer;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function searchProduct($query)
    {
        $sql = "SELECT * FROM productss WHERE name LIKE :query";
        $db = config::getConnexion();
        
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':query', '%' . $query . '%', PDO::PARAM_STR); // Bind the search query
            $stmt->execute();
            
            $products = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch matching products
            return $products;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
