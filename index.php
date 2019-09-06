<?php
	require_once 'core.php';

	$memos = [
		new Memo("Hello world!"),
		new Memo("Hello another!!!"),
		new Memo("Я не такая как все!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus euismod maximus erat, eleifend ornare ipsum fermentum non. Morbi ut porta tortor. Vivamus dapibus orci enim. Aliquam id tristique velit, vel sagittis mi.", "#C6EFF1"),
		new Memo("Новая заметка", "#6A8AAE"),
		new Memo($_GET[Title], $_GET[Text], $_GET[Color]),
	];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Заметки</title>
	<link rel="stylesheet" type="text/css" href="<? echo $settings[mainCSS] ?>">
</head>
<body>
<div class="mainGrid">
	<div class="memoGrid">
<?
	foreach ($memos as $memo) {
		$memo->draw();
	}
?>
	</div>
	<div class="formBlock">
		<form action="/" method="GET">
		<table>
			<tr><td>Название:</td><td><input type="text" name="Title"></td></tr>
			<tr><td>Текст:</td><td><textarea name="Text"></textarea></td></tr>
			<tr><td>Цвет:</td><td><input type="color" name="Color" value="<? echo $settings['memoColor'] ?>"></td></tr>
			<tr><td><input type="submit" name="Submit" value="Добавить"></td><td></td></tr>
		</table>
		</form>
	</div>
</div>
</body>
</html>