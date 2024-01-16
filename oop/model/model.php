<?php 
    class Model{
        protected string $tableName;
        protected PDO|null $conn;

        public function __construct() {
            try {
                $this->conn = new PDO("mysql:host=localhost;dbname=wd18321", 'root', '');
    
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $PDOException) {
                echo "Kết nối thất bại: " . $PDOException->getMessage();
                die;
            }
        }
    
        public function __destruct() {
            $this->conn = null;
        }
        public function getAll(){
            try {        
                $sql = "SELECT * FROM {$this->tableName}";
    
                $stmt = $this->conn->prepare($sql);
            
                $stmt->execute();
            
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $e) {
                echo 'ERROR: ' . $e->getMessage();
                die;
            }
        }
    }
?>
