<?php
    include('header.php');
    require './service.php';
    $service = new Service();


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
    <p>Which one do you want to remove?</p>
    <form action="remove.php" method="POST">
        <label for="iId">Enter an item ID!</label><br>
        <input type="number" id="iId" name="iId">
        <input type="submit" for="iId" value="Remove FOREVER" style="background-color:#7c8f6b; border-radius:5px;
        border-width:2px;border-color:#556347;color:#403221;">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $result = $service->deleteItem();
        echo "Alright, it's gone!";
    }
?>