<!-- Luke Smotherman lds6427    Abner Koffi ack7403 -->
<?php
require './database.php';
require './item.php';

class Service
{
    function fetchAllItems()
    {
        $dbObject = new Database();
        $conn = $dbObject->getDatabaseConnection();

        $sql = "SELECT * FROM item";

        $stmt = $conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "Item");

        if($stmt->execute())
        {
            return $stmt->fetchAll();
        }
        else
        {
            return "nuh uh";
        }
    }

    function addItem()
    {
        $iName = $_POST["iName"];
        $sPrice = $_POST["sPrice"];
        
        $dbObject = new Database();
        $conn = $dbObject->getDatabaseConnection();


        $sql = "INSERT INTO item (`iName`,`sPrice`) VALUES (?,?)";

        $stmt = $conn->prepare($sql);

        if($stmt->execute([$iName, $sPrice])){}
        else
        {
            echo "add failed!!";
        }
    }

    function updateItem()
    {
        $iId = $_POST["iId"];
        $iName = $_POST["iName"];
        $sPrice = $_POST["sPrice"];

        $dbObject = new Database();
        $conn = $dbObject->getDatabaseConnection();

        $sql = "UPDATE item SET iName=?, sPrice=? WHERE iId=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$iName, $sPrice, $iId,]);
    }

    function deleteItem()
    {
        $iId = $_POST["iId"];
        
        $dbObject = new Database();
        $conn = $dbObject->getDatabaseConnection();

        $sql = "DELETE FROM item WHERE `iId` = ?";

        $stmt = $conn->prepare($sql);
        if($stmt->execute([$iId])){

        }
        else
        {
            return "fail";
        }
        
        
    }

}