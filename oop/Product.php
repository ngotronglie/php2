<?php
    echo '<pre>';

    class Product{
        public int  $id;
        public string  $name;
        public float  $price;
        public string  $img;
        public string  $description;
        public DateTime  $ngaytao;
        public function __construct
        (
             int $id,
             string $name,
             float $price,
             string  $img, 
             string $description,
             DateTime $ngaytao
            ){ // là hàm chạy đầu tiên khi khởi tạo đối tượng
            $this->id = $id; 
            $this->name = $name; 
            $this->price = $price; 
            $this->img = $img; 
            $this->description = $description; 
            $this->ngaytao = $ngaytao;
        }

        public function add(){
            echo 'add product successfully';
        }
        public function del(){

        }
    }

    $product = new Product(1,'sanr phaamr 1', 2000, 'hello.png','$description', new DateTime('now'));  // khởi tạo đối tượng sản phẩm
    $product->id = 2; // truyền id vào đối tượng product
    $product->name ='san pham 2'; // truyền id vào đối tượng product
    $product->price = 20000; // truyền id vào đối tượng product
    $product->img = 'hello.png'; // truyền id vào đối tượng product
    $product->description = 'hihi mọi người, sp tốt'; // truyền id vào đối tượng product
    $product->ngaytao = new DateTime('now');
    print_r($product);
    $product->add();

?>