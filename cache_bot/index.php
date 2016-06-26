<?php

	$botToken = "116742563:AAGE8AXH9uIW91YSkc0lZg2V51ZIyDhQrR4";
	$website = "https://api.telegram.org/bot".$botToken;

	$update = file_get_contents("php://input");
	$updateArray = json_decode($update, TRUE);

	$chatId = $updateArray["result"][0]["message"]["chat"]["id"];

	file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=test");
?>