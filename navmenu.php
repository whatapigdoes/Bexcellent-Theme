<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" type="text/css" href="css/menu.css">
    </head>
    <body>
		<ul id="super">
			<li id="superli">
				<ul class="sub">
					<li><a target="_parent" href="/">Home</a></li>
					<li><a target="_parent" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL']; ?>/ageselect">Age</a>
					</li>
					<li><a target="_parent" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL']; ?>/news">News</a></li>
					<li><a target="_parent" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL']; ?>/gallery">Gallery</a>
					</li>
					<li><a target="_parent" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL']; ?>/articles">Articles</a></li>
					<li><a target="_parent" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL']; ?>/games">Games</a></li>
					<li><a target="_parent" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL']; ?>/parents">Parents</a></li>
					<li><a target="_parent" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL']; ?>/about">About</a></li>
				</ul>
			</li>
		</ul>
	</body>
</html>
