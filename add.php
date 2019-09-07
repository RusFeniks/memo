<?
	require_once 'core.php';

	if($_POST[Title])
	{
		$Title = $_POST[Title];
		$Text = $_POST[Text];
		$Color = $_POST[Color] ? $_POST[Color] : $settings['memoColor'];
		$Date = date("Y-m-d H:i:s");
		$db->query("INSERT INTO list VALUES (NULL, '$Title', '$Text', '$Date', '$Color')");
	}
	header('Location: /');

?>