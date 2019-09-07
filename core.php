<?php

	require_once 'objects/memo.php';

	$settings = [
		"mainCSS" => "css/main.css",
		"memoClass" => "memo",
        "memoColor" => "#ffffcc",
        "db_host" => "localhost",
        "db_user" => "root",
        "db_pass" => "",
        "db_name" => "memo",
	];

	$db = new mysqli($settings["db_host"], $settings["db_user"], $settings["db_pass"]);

	$db->query("CREATE DATABASE IF NOT EXISTS $settings[db_name]");
	$db->select_db($settings[db_name]);

	$db->query("CREATE TABLE IF NOT EXISTS list (
		Id INT NOT NULL AUTO_INCREMENT,
		Title VARCHAR(35) NOT NULL,
		Text TEXT,
		Date DATETIME NOT NULL,
		Color VARCHAR(7) NOT NULL,
		PRIMARY KEY(Id)
	)");

?>