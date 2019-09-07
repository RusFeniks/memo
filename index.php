<?php require_once 'core.php'; include 'select.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Заметки</title>
	<link rel="stylesheet" type="text/css" href="<? echo $settings[mainCSS]; ?>">
</head>
<body>
<div class="mainGrid">
	<div class="memoGrid">
		<? Memo::Draw(); ?>
	</div>
	<div class="formBlock">
		<form method="post" action="add.php">
			<div><input type="text" name="Title"></div>
			<div><textarea name="Text"></textarea></div>
			<div><input type="color" name="Color" value="<? echo $settings[memoColor]; ?>"></div>
			<div><input type="submit" name=""></div>
		</form>
	</div>
</div>
</body>
</html>