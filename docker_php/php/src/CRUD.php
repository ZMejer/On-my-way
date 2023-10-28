<?php
class db{
    private $conn;
    public $servername;
    public $username;
    public $password;
    public $database;
    public $tablename;
    
    public function __construct($host="db", $database="mydb", 
                                $username="root", $password="root"){
        $this->host = $host;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;

        try {
            // Tworzenie połączenia
            $this->conn = new mysqli($host, $username, $password, $database);
        } catch (Exception $e) {
            // Sprawdzanie połączenia
            die("Connection failed: " . mysqli_connect_error());
            
        }

        return $this->conn;
    }

    // Wyświetlanie produktów z bazy danych oraz wyszukiwanie po nazwie produktu i kategorii 
    public function getData($query = null, $category = null){
        $this->query = $query;
        $this->category = $category;
        $arg = '';
        if((isset($this->query) && $this->query != '' ) || (isset($this->query) && $this->category != '')){
            $arg = "WHERE p.product_name LIKE '$this->query%' AND p.category_id LIKE '$this->category%'";
        }
        $sql = "SELECT * FROM products p ".$arg;
        $result = mysqli_query($this->conn, $sql);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return json_encode($result);
    }
}
?>