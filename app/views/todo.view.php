<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/main.css">
    <title>TODOS</title>
</head>
<body>
    <a href="/about">About page</a>
    <ol>
        <?php foreach ($table as $row):?>
            <div class="todoRow">
                <?php if ($row->completed):?>
                    <li id=<?=$row->id?>><strike><?=$row->description?></strike></li>
                <?php else:?>
                    <li id=<?=$row->id?>><?=$row->description?></li>
                <?php endif;?>
                <button value="del"></button>
            </div>
        <?php endforeach;?>
    </ol>

    <form action="store">
        <input type="text" name="description">
        <input type="submit" value="Send">
    </form>
    <p>добавить кнопку удаления, редактирования, и перебрать views - добавить темплейты</p>


</body>
</html>
