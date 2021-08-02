<?php
class CRUD
{
    public $proses;
    public $pdo;

    public function __construct()
    {
        $host = "localhost";
        $database = "crud_php";
        $user = "root";
        $password = "";
        $this->pdo = new PDO("mysql:host={$host};dbname={$database}", $user, $password);
    }

    public function GetData() {
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM customer";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}
?>