<?php

$keyword = $_POST['keyword'];
$apikey = "6A5E0383706DC7B0B3B05FBDEB330543";  /* put your API key here */ 
$apiparse= "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=";
$idparse= "&steamids=";

/* 6A5E0383706DC7B0B3B05FBDEB330543 */

echo'<h3>Get a summary of the user</h3>';
echo'<a href=http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=' .$apikey. '&steamids=' .$keyword.  '>Click for Query</a>';


echo'<h3>Get a users friend list</h3>';
echo'<a href=http://api.steampowered.com/ISteamUser/GetFriendList/v0001/?key=' .$apikey. '&steamid=' .$keyword. '&relationship=friend>Click for Query</a>';

echo'<h3>Get a players achievements</h3>';
echo'<a href=http://api.steampowered.com/ISteamUserStats/GetPlayerAchievements/v0001/?appid=440&key=' .$apikey. '&steamid=' .$keyword. '>Click for Query</a>';
?>

