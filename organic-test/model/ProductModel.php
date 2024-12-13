    <?php

    class Product {
        private ?int $id;
        private ?string $name;
        private ?float $price;
        private ?string $description;
        private ?string $category;
        private ?int $stock;
        private ?string $picture;

        // Constructor
        public function __construct(?int $id, ?string $name, ?float $price, ?string $description, ?string $category, ?int $stock, ?string $picture) {
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->description = $description;
            $this->category = $category;
            $this->stock = $stock;
            $this->picture = $picture;
        }

        // Getters and Setters

        public function getId(): ?int {
            return $this->id;
        }

        public function setId(?int $id): void {
            $this->id = $id;
        }

        public function getName(): ?string {
            return $this->name;
        }

        public function setName(?string $name): void {
            $this->name = $name;
        }

        public function getPrice(): ?float {
            return $this->price;
        }

        public function setPrice(?float $price): void {
            $this->price = $price;
        }

        public function getDescription(): ?string {
            return $this->description;
        }

        public function setDescription(?string $description): void {
            $this->description = $description;
        }

        public function getCategory(): ?string {
            return $this->category;
        }

        public function setCategory(?string $category): void {
            $this->category = $category;
        }

        public function getStock(): ?int {
            return $this->stock;
        }

        public function setStock(int $stock): void {
            $this->stock = $stock;
        }


        public function getPicture(): string {
            return $this->picture;
        }

        public function setPicture(string $picture): void {
            $this->picture = $picture;
        }
    }

    ?>
