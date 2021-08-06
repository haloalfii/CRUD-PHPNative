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

    public function GetByIdData($CustomerID)
    {
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT * FROM customer WHERE CustomerID = '" . $CustomerID . "'";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function AddData($CustomerID, $Name, $Address, $City, $PostCode, $Country)
    {
        $sql = $this->pdo->prepare("INSERT INTO customer (CustomerID, Name, Address, City, PostCode, Country)
            VALUES (?, ?, ?, ?, ?, ?) 
            ON DUPLICATE KEY UPDATE CustomerID = VALUES(CustomerID), Name = VALUES(Name), Address = VALUES(Address), 
            City = VALUES(City), PostCode = VALUES(PostCode), Country = VALUES(Country)");

        $sql->bindParam(1, $CustomerID);
        $sql->bindParam(2, $Name);
        $sql->bindParam(3, $Address);
        $sql->bindParam(4, $City);
        $sql->bindParam(5, $PostCode);
        $sql->bindParam(6, $Country);

        $sql->execute();
        return $sql->rowCount();
    }

    public function UpdateData($CustomerID, $Name, $Address, $City, $PostCode, $Country)
    {
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "INSERT INTO customer (CustomerID, Name, Address, City, PostCode, Country) VALUES ('" . $CustomerID . "', '" . $Name . "','" . $Address . "','" . $City . "', '" . $PostCode . "', '" . $Country . "')
            ON DUPLICATE KEY UPDATE CustomerID=VALUES(CustomerID), Name=VALUES(Name), Address=VALUES(Address), City=VALUES(City), PostCode=VALUES(PostCode), Country=VALUES(Country)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function DeleteData($CustomerID)
    {
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "DELETE FROM customer WHERE CustomerID ='" . $CustomerID . "'";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();
    }
}
?>