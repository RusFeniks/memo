<?
	require_once 'core.php';

	if($_GET['id'])
	{
		$db->query("DELETE FROM list WHERE Id = $_GET[id]");
		header('Location: /');
	}
?>