<?php

class Purchase {
    private ?int $id;
    private ?int $product_id;
    private ?int $user_id;
    private ?int $quantity;
    private ?float $total_price;
    private ?string $purchase_date;

    // Constructor
    public function __construct(?int $id, ?int $product_id, ?int $user_id, ?int $quantity, ?float $total_price, ?string $purchase_date) {
        $this->id = $id;
        $this->product_id = $product_id;
        $this->user_id = $user_id;
        $this->quantity = $quantity;
        $this->total_price = $total_price;
        $this->purchase_date = $purchase_date;
    }

    // Getters and Setters

    public function getId(): ?int {
        return $this->id;
    }

    public function setId(?int $id): void {
        $this->id = $id;
    }

    public function getProductId(): ?int {
        return $this->product_id;
    }

    public function setProductId(?int $product_id): void {
        $this->product_id = $product_id;
    }

    public function getUserId(): ?int {
        return $this->user_id;
    }

    public function setUserId(?int $user_id): void {
        $this->user_id = $user_id;
    }

    public function getQuantity(): ?int {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): void {
        $this->quantity = $quantity;
    }

    public function getTotalPrice(): ?float {
        return $this->total_price;
    }

    public function setTotalPrice(?float $total_price): void {
        $this->total_price = $total_price;
    }

    public function getPurchaseDate(): ?string {
        return $this->purchase_date;
    }

    public function setPurchaseDate(?string $purchase_date): void {
        $this->purchase_date = $purchase_date;
    }
}

?>
