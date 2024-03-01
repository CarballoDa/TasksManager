<div class="block categories">
    <!--<p><a href="showTasks">Back to List</a></p>-->
    <p><a href="/">Back to List</a></p>
    <h1>New Task</h1>
    <form action="/addTask" method="get">
        <legend>Name : </legend><input name="name" type="text" />
        <legend>Description : </legend><input name="desc" type="text" />
        <legend>Category : </legend>
        <select name="category_id">
            <?php
            foreach($cats as $cat){
            ?>
                <option value="<?=$cat['id']?>"><?=$cat['name']?></option>
            <?php
            }
            ?>
        </select>
        <div class="r30">
            <legend>Created : </legend>
            <input type="date" name="created" value="<?=date('Y-m-d')?>">
        </div>
        <div class="r30">
            <legend>Timelimit : </legend>
            <input type="date" name="executed" value="">
        </div>
        <div class="r30">
            <legend>State : </legend>
            <select name="state">
                <option selected value="0">Waiting</option>
                <option value="1">Done</option>
            </select>
        </div>
        <button type="submit">Add New</button>
    </form>
</div>