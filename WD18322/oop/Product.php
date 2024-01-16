<?php

class Product
{ // Đặt tên theo kiểu PascalCase
    public function __construct(
        public int $id,
        public string $name,
        public float $price,
        public DateTime $ngayTao,
        public string|null $image = null,
        public string|null $description = null
    ) {
        
    }

    public function add()
    {
        echo "Thêm sản phẩm thành công!";
    }
}

echo "<pre>";

// camelCase
$product = new Product(1, 'Dầu gội', 500000, new DateTime('now'));
$product2 = new Product(2, 'Dầu gội 2', 1000000, new DateTime('now'));

print_r($product);
print_r($product2);