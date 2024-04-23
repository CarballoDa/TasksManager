<!DOCTYPE html>
<!-- adding a comment -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="app/public/css/style.css">    
    <title>Tasks Manager 0.1</title>
</head>
<body>

<div class="header">
	<h1>Tasks Manager 0.1</h1>
	<p>Easy Life Productions :)</p>
	<p>Probando estados de archivo en GIT</p>
</div>    
<div class="nav">
    <ul>
    <li><a href="/">Home</a></li>
    <li><a href="/GeneralTasks">Tasks</a></li>
    <li><a href="/GeneralCategories">Categories</a></li>
    </ul> 
</div>
<div class="content">
    <?php    
        require 'app/routes/routes.php';
    ?>
</div>
<footer>
    <p>&copy; <?=date('Y');?></p>
</footer>
</body>
</html>
