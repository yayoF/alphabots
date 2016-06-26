<?php

	$botToken = "116742563:AAGE8AXH9uIW91YSkc0lZg2V51ZIyDhQrR4";
	$website = "https://api.telegram.org/bot".$botToken;

	$update = file_get_contents($website."/getupdates");

	$updateArray = json_decode($update, TRUE);

	$text = $updateArray["result"][0]["message"]["text"];

	print_r($text);
?>