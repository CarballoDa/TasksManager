<div class="block categories">
    <p><a href="newCategory">Add New</a></p>
    <h1>Categories List</h1>
    <ol>
        <?php foreach($cats as $cat): ?>
            <li>
                <b><?=$cat['name']?></b> : <?=$cat['description']?> 
                <a href="showCategory?id=<?=$cat['id']?>">View</a>
                <a href="editCategory?id=<?=$cat['id']?>">Edit</a>
                <a href="delCategory?id=<?=$cat['id']?>">Delete</a>
        </li>
        <?php endforeach; ?>
    </ol>
</div>