<!-- Luke Smotherman lds6427    Abner Koffi ack7403 -->
<?php
    include('header.php');
    require './service.php';
    $service = new Service();

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $result = $service->updateItem();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprouts</title>
</head>
<body style="background-color:#a8bf93;">
<br>
    <p>Edit my store? But... this is my life's work... Just kidding! This place pales in comparison to 
        my many other accomplishments, and thus means relatively little to me. Change whatever you like!
    </p>
    <form action="update.php" method="POST">
        
        <label for="iId">ID:</label><br>
        <input type="text" id="iId" name="iId"><br>
        <label for="iName">New name:</label><br>
        <input type="text" id="iName" name="iName"><br>
        <label for="sPrice">New price:</label><br>
        <input type="number" min="0" step="0.01" id="sPrice" name="sPrice"><br><br>
        <input type="submit" value="Update!" style="background-color:#7c8f6b; border-radius:5px;
        border-width:2px;border-color:#556347;color:#403221;">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        echo "Alright, I trust you. Change made!";
    }
?>
