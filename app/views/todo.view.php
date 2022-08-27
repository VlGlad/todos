<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODOS</title>
</head>
<body>
    <a href="/about">About page</a>
    <ul>
        <?php foreach ($table as $row):?>
            <?php if ($row->completed):?>
                <li><strike><?=$row->description?></strike></li>
            <?php else:?>
                <li><?=$row->description?></li>
            <?php endif;?>
        <?php endforeach;?>
    </ul>

    <form action="storeTask@store">
        <input type="text" name="description">
        <input type="submit" value="Send">
    </form>
    


</body>
</html>
