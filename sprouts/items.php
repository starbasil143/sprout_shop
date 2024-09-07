<!-- Luke Smotherman lds6427    Abner Koffi ack7403 -->
<?php
    require './service.php';
    include("header.php");
    $service = new Service();
    $items = $service->fetchAllItems();
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
    <p>Come learn about my items! There's at least a few of them!</p>
    <form action="items.php" method="POST">
        <label for="id">Enter an item ID!</label><br>
        <input type="number" id="id" name="id">
        <input type="submit" for="id" value="Search" style="background-color:#7c8f6b; border-radius:5px;
        border-width:2px;border-color:#556347;color:#403221;">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //i apologize for this horrid implementation
        $foundit = false;
        foreach ($items as $item)
        {
            if($item->iId == $_POST["id"])
            {
                echo "Ah, yes! These are {$item->iName}! Their ID is {$item->iId} and they cost \${$item->sPrice} each.";
                $foundit = true;
            }
        }
        if($foundit == false)
        {
            echo "Hmm, I couldn't find that one. Try another?";
        }
    }
?>