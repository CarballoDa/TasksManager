<div class="block categories">
    <p><a href="newTask">Add New</a></p>
    <h1>Tasks List</h1>
    <ol>
        <?php foreach($tasks as $task): ?>
            <li><b><?=$task['name']?></b> : <?=$task['description']?> | Category : <?=$task['category_name']?> | Actions 
                <a href="showTask?id=<?=$task['id']?>">View</a>
                <a href="editTask?id=<?=$task['id']?>">Edit</a>
                <a href="delTask?id=<?=$task['id']?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ol>
</div>