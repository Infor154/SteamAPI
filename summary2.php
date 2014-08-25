<?php

$keyword = $_POST['$keyword'];
$apikey = "6A5E0383706DC7B0B3B05FBDEB330543";  /* put your API key here */ 
$apiparse= "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=";

$url= "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $apikey .  '&steamids=76561198000900511&format=xml'; //.$keyword;

$profilexml = simplexml_load_file($url);

echo $profilexml->players[0]->steamid;
?>