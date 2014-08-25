<?php

// $keyword = $_POST['$keyword'];
$apikey = "6A5E0383706DC7B0B3B05FBDEB330543";  /* put your API key here */ 
// $apiparse= "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=";

// $url= "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $apikey .  '&steamids=76561198000900511&format=xml'; //.$keyword;

// $profilexml = simplexml_load_file($url);

// echo $profilexml->players[0]->steamid;




// $api = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=6A5E0383706DC7B0B3B05FBDEB330543&steamids=76561198000900511&language=en_US&format=json";

// $json = file_get_contents($api);

// $schema = json_decode($json);

// //print var_dump($schema);

// $test = $schema->response->players->steamid;

// echo $test;

$profile = file_get_contents('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=' .$apikey. '&steamids=76561198000900511');
$arra= $profile->players;
$json = json_decode($profile);
$run=$json->response->players[0]->steamid;
$profilepic=$json->response->players[0]->avatarfull;
$country=$json->response->players[0]->loccountrycode;
$name=$json->response->players[0]->realname;
$state=$json->response->players[0]->locstatecode;


echo '<center><p><img src ="'.$profilepic.'">';
echo '<center><h1>'.$name.'</h1>';
echo '<center><h2> Country:'.$country.'<br> State:'.$state.'<h2>';

?>
