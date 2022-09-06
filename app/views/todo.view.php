<?php require('partials/head.php');?>

<a href="/about">About page</a>
<ol>
    <?php foreach ($table as $row):?>
        <div class="todoRow">
            <?php if ($row->completed):?>
                <li><strike><?=$row->description?></strike></li>
            <?php else:?>
                <li><?=$row->description?></li>
            <?php endif;?>
            <button id=<?=$row->id?> class="todoRowButton" type="button">del</button>
        </div>
    <?php endforeach;?>
</ol>

<form action="store">
    <input type="text" name="description">
    <input type="submit" value="Send">
</form>
<p>добавить кнопку удаления, редактирования, и перебрать views - добавить темплейты</p>

<?php require('partials/footer.php');?>
