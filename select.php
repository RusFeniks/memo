<?
	$list = $db->query("SELECT * FROM list");
	while ($row = $list->fetch_assoc())
	{
		Memo::Add($row['Id'], $row['Title'], $row['Text'], $row['Color'], $row['Date']);
	}
?>