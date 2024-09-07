<!-- Luke Smotherman lds6427    Abner Koffi ack7403 -->
<?php
    require './service.php';
    include("header.php");
    $service = new Service();

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $result = $service->addItem();
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
    <p>Hmm, I guess you can add some items. I trust you! Just don't put me out of business!</p>
    <form action="add.php" method="POST">
        <label for="iName">Name:</label><br>
        <input type="text" id="iName" name="iName"><br>
        <label for="sPrice">Price:</label><br>
        <input type="number" min="0" step="0.01" id="sPrice" name="sPrice"><br><br>
        <input type="submit" value="Add!" style="background-color:#7c8f6b; border-radius:5px;
        border-width:2px;border-color:#556347;color:#403221;">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        echo "Thanks! I went ahead and added the {$_POST["iName"]}. :)";
    }
?>
