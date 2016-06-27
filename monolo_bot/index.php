<?php

/*
* This file is part of GeeksWeb Bot (GWB).
*
* GeeksWeb Bot (GWB) is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License version 3
* as published by the Free Software Foundation.
* 
* GeeksWeb Bot (GWB) is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.  <http://www.gnu.org/licenses/>
*
* Author(s):
*
* © 2015 Kasra Madadipouya <kasra@madadipouya.com>
*
*/
require 'vendor/autoload.php';
require_once 'yay/BotOperate.php';

$client = new Zelenin\Telegram\Bot\Api('232355392:AAG9qESNa-8w4Iz7fAwp1HlWeHcJEAK0C2I'); // Set your access token
$yayOperate = new BotOperate();
$update = json_decode(file_get_contents('php://input'));

//your app
try {

    if($update->message->text == '/email')
    {
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
        	'chat_id' => $update->message->chat->id,
        	'text' => "You can send email to : yayo.zip@gmail.com"
     	]);
    }
    else if($update->message->text == '/help')
    {
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "List of commands :\n /email -> Get email address of the developer
             /chikicalc [operation] -> Chiki performs fast calculations
             /help -> Shows list of available commands"
    		]);

    }
    else if(substr($update->message->text,0,10) === "/chikicalc")
    {
            $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

            $operationString = substr($update->message->text, 10);
            $chikicalcResult = $yayOperate->chikicalc($operationString);
            $response = $client->sendMessage([
                    'chat_id' => $update->message->chat->id,
                    'text' => $chikicalcResult
                ]);
    }
    else
    {
        
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Invalid command, please use /help to get list of available commands"
    		]);
            
    }

} catch (\Zelenin\Telegram\Bot\NotOkException $e) {

    //echo error message ot log it
    //echo $e->getMessage();

}
echo "
    <meta charset=\"utf-8\">
    <div style=\"font-family: 'Courier New', Courier, 'Lucida Sans Typewriter', 'Lucida Typewriter', monospace;
                left: 0;line-height: 200px;margin-top: -100px;position: absolute;text-align: center;top: 50%;width: 100%;\">
        bien csm
    </div>
";


