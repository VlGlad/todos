<?php require('partials/head.php');?>

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

<?php require('partials/footer.php');?>
