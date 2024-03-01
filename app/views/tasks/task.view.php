<div class="block categories">    
    <!--<p><a href="showTasks">Back to List</a></p>-->
    <p><a href="/">Back to List</a></p>
    <h1>Task name : <?=$task['name']?></h1>
    <p>Task Description : <?=$task['description']?></p>
    <p>In Category : <?=$task['category_name']?></p>
    <p>Created : <?=$task['created']?> | Timelimit : <?=$task['executed']?> | State : <?=($task['state'] == 0) ? 'Waiting' : 'Done'?></p>
</div>