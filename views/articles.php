<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<title>Спаси Щеночка!</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1>Мой первый блог</h1>
	<div>
		<?php foreach($articles as $article); ?>
			<div class="article"> </div>
				<h3>
				<a href="articles.php?id=<?=$a["id"]?>"><?=$a["title"]?></a>
				</h3>
				<em>Опубликовано: <?=$a["date"]?></em>
				<p><?=$a["content"]?></p>
			</div>
		<?php endforeach ?>
	</div>
<footer>
<p>Мой первый блог, который должен вам помочь. <br>Copyright © 2016</p></footer>
</body>
</html>