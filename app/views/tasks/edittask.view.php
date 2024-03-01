<div class="block categories">
    <!--<p><a href="showTasks">Back to List</a></p>-->
    <p><a href="/">Back to List</a></p>
    <h1>Edit Task</h1>
    <form action="/pushTask" method="get">
        <legend>Name : </legend><input name="name" type="text" value="<?=$task['name']?>"/>
        <legend>Description : </legend><input name="desc" type="text" value="<?=$task['description']?>"/>
        <legend>Category : </legend>
        <select name="category_id">
            <?php
            foreach($cats as $cat){
                $isSelected = ($cat['id'] == $task['category_id']) ? "selected" : "";
            ?>
                <option <?=$isSelected?> value="<?=$cat['id']?>"><?=$cat['name']?></option>
            <?php
            }
            ?>
        </select>
        <div class="r30">
            <legend>Created : </legend>
            <input type="date" name="created" value="<?=date($task['created'])?>">
        </div>
        <div class="r30">
            <legend>Timelimit : </legend>
            <input type="date" name="executed" value="<?=date($task['executed'])?>">
        </div>
        <div class="r30">
            <legend>State : </legend>
            <select name="state">
                <?php
                if($task['state'] == 0){
                ?>
                <option selected value="0">Waiting</option>
                <option value="1">Done</option>
                <?php 
                }else{
                ?>
                <option value="0">Waiting</option>
                <option selected value="1">Done</option>
                <?php 
                }
                ?>
            </select>
        </div>
        <input type="hidden" name="id" value="<?=$task['id']?>"> 
        <button type="submit">Apply Changes</button>
    </form>
</div>