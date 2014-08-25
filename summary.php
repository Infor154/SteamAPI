<?php

// $keyword = $_POST['$keyword'];
$apikey = "6A5E0383706DC7B0B3B05FBDEB330543";  /* put your API key here */ 


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



//IGNORE BELOW THIS LINE  KEPT FOR RECORDS

// $keyword = $_POST['$keyword'];
// $apikey = "6A5E0383706DC7B0B3B05FBDEB330543";  /* put your API key here */ 
// $apiparse= "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=";
// $idparse= "&steamids=";

// $url= "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $apikey .  '&steamids=76561198000900511'; //.$keyword;
// //$string=file_get_contents($url);
// $string='{
	// "response": {
		// "players": [
			// {
				// "steamid": "76561198000900511",
				// "communityvisibilitystate": 3,
				// "profilestate": 1,
				// "personaname": "Snipes12",
				// "lastlogoff": 1408931840,
				// "profileurl": "http://steamcommunity.com/id/Snipes12/",
				// "avatar": "http://media.steampowered.com/steamcommunity/public/images/avatars/fc/fc1c1ea007c2d6d6967d2c622df119bdce4fb456.jpg",
				// "avatarmedium": "http://media.steampowered.com/steamcommunity/public/images/avatars/fc/fc1c1ea007c2d6d6967d2c622df119bdce4fb456_medium.jpg",
				// "avatarfull": "http://media.steampowered.com/steamcommunity/public/images/avatars/fc/fc1c1ea007c2d6d6967d2c622df119bdce4fb456_full.jpg",
				// "personastate": 1,
				// "realname": "Shaun",
				// "primaryclanid": "103582791433647924",
				// "timecreated": 1220224746,
				// "personastateflags": 0,
				// "gameextrainfo": "Counter-Strike: Global Offensive",
				// "gameid": "730",
				// "loccountrycode": "US",
				// "locstatecode": "PA",
				// "loccityid": 3299
			// }
		// ]
		
	// }
// }';
// //echo ''.$string.'';
// //echo ''.$url.'';

// $json_a=json_decode($string,true);

// $json_o=json_decode($string);
// //$picture=$json_a[avatarfull];

// //echo '<img src="http://wizardchan.org/test/src/1shuu4q3.wizardchan.test.png" border=0>';
// //echo '<img src="'.$json_o->avatarfull.'"/>';
// //echo'Profile Picture: <img src="'.$picture.'">';
// //echo'<img src"http://wizardchan.org/test/src/1shuu4q3.wizardchan.test.png">';

// echo json_o->"response"->"players"->"steamid";

// // array method
// /*foreach($json_a[response] as $p)
// {
// echo '
// <p>
// Name: '.$p[steamid].'
// ';
// }
// // object method
// /*foreach($json_o->person as $p)
// {
// echo '

// <p>
// Name: '.$p->name->first.' '.$p->name->last.'

// Age: '.$p->age.'

// ';
// }
// */
// ?>

