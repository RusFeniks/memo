<?php
	require_once 'core.php';

	$memos = [
		new Memo("Hello world!"),
		new Memo("Hello another!!!"),
		new Memo("Я не такая как все!", "#C6EFF1"),
		new Memo("Новая заметка", "#6A8AAE"),
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
<?
	foreach ($memos as $memo) {
		$memo->draw();
	}
?>
</div>
</body>
</html>