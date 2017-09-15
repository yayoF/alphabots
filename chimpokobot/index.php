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

$client = new Zelenin\Telegram\Bot\Api('449617644:AAEvA4IZ1t8mw7tQ4qGgj2pkQIP_hf7sa0Q'); // Set your access token
$update = json_decode(file_get_contents('php://input'));
$yayOperate = new BotOperate();

//your app
try {

    if($update->message->text == '/email')
    {
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
        	'chat_id' => $update->message->chat->id,
        	'text' => "You can send an email to : su_morenito19@latinmail.com"
     	]);
    }
    else if($update->message->text == '/help')
    {
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "List of commands :\n/email -> Get email address of the creator\n/quesomos -> Talk to Chimpokobot\nDile 'chimpo' o menciónale a Eli a ver qué pasa ;)"
    		]);

    }
    else if($update->message->text == '/quesomos')
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
            'chat_id' => $update->message->chat->id,
            'text' => $yayOperate->getQueSomos()
            ]);

    }
    //look for a word within the string
    else if( strpos($yayOperate->sanitizeStringPeruvian($update->message->text), 'chimpo') !== false)
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
            'chat_id' => $update->message->chat->id,
            'text' => 'Me hablas a mí?'
            ]);

    }
    //look for a word within the string
    else if( strpos($yayOperate->sanitizeStringPeruvian($update->message->text), 'pubg') !== false)
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
            'chat_id' => $update->message->chat->id,
            'text' => 'Pugg go, pero llama a Master'
            ]);

    }
    //look for a word within the string
    else if( strpos($yayOperate->sanitizeStringPeruvian($update->message->text)), 'eli' ) !== false)
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
            'chat_id' => $update->message->chat->id,
            'text' => $yayOperate->getEliResponses()
            ]);

    }
    else if($yayOperate->sanitizeStringPeruvian($update->message->text) == 'qué pasa chimpo?')
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
            'chat_id' => $update->message->chat->id,
            'text' => 'Me llegan al pincho todos'
            ]);

    }
    else if($yayOperate->sanitizeStringPeruvian($update->message->text) == 'qué quieres?')
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
            'chat_id' => $update->message->chat->id,
            'text' => 'follarte'
            ]);

    }
    else if($yayOperate->sanitizeStringPeruvian($update->message->text) == 'qué ha pasado?')
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
            'chat_id' => $update->message->chat->id,
            'text' => 'No quiero bajar a silver :('
            ]);

    }


} catch (\Zelenin\Telegram\Bot\NotOkException $e) {

    //echo error message ot log it
    //echo $e->getMessage();

}

//playground

//end playground

echo "
    <meta charset=\"utf-8\">
    <div style=\"font-family: 'Courier New', Courier, 'Lucida Sans Typewriter', 'Lucida Typewriter', monospace;
                left: 0;line-height: 200px;margin-top: -100px;position: absolute;text-align: center;top: 50%;width: 100%;\">
        Qué somos? Leones o huevones?
    </div>
";


