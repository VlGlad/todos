<?php require('partials/head.php');?>

<form action="store">
    <input type="text" name="description">
    <input type="submit" value="Send">
</form>

<ul>
    <?php foreach ($table as $row):?>
        <div class="todoRow">
            <button id=<?=$row->id?> class="todoRowButton" type="button">del</button>
            <?php if ($row->completed):?>
                <li><strike><?=$row->description?></strike></li>
            <?php else:?>
                <li><?=$row->description?></li>
            <?php endif;?>
            
        </div>
    <?php endforeach;?>
</ul>

<?php require('partials/footer.php');?>
