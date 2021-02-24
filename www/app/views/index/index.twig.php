<!doctype html>
<html lang="ru">
    <head>
    	<meta charset="utf-8">
    	<title>Index page</title>
    </head>
    <body>

    <p><?= $authTitle ?></p>
    <p><?= $name ?></p>
    <ul>
    	<?php foreach ($users as $user) { ?>
    		<li><?= $user ?></li>
    	<?php } ?>
    </ul>
    </body>
</html>