<div class="block categories">
    <!--<p><a href="showCategories">Back to List</a></p>-->
    <p><a href="/">Back to List</a></p>
    <h1>Edit Category</h1>
    <form action="/pushCategory" method="get">
        <legend>Name : </legend><input name="name" type="text" value="<?=$cat['name']?>"/>
        <legend>Desc : </legend><input name="desc" type="text" value="<?=$cat['description']?>"/>
        <input type="hidden" name="id" value="<?=$cat['id']?>"> 
        <button type="submit">Add Changes</button>
    </form>
</div>