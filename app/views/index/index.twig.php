<!doctype html>
<html lang="ru">
    <head>
    	<meta charset="utf-8">
    	<title>Index page 2</title>
    </head>
    <body>
    <p><?= $name ?></p>
    <ul>
    	<?php foreach ($users as $user) { ?>
    		<li><?= $user ?></li>
    	<?php } ?>
    </ul>
    </body>
</html>