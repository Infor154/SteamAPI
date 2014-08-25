<?php

$keyword = $_POST['$keyword'];
$apikey = "6A5E0383706DC7B0B3B05FBDEB330543";  /* put your API key here */ 
$apiparse= "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=";
$idparse= "&steamids=";

$url= "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $apikey .  '&steamids=76561198000900511'; //.$keyword;
$string=file_get_contents($url);

//echo ''.$string.'';
//echo ''.$url.'';

$json_a=json_decode($url,true);

$json_o=json_decode($string);
//$picture=$json_a[avatarfull];

//echo '<img src="http://wizardchan.org/test/src/1shuu4q3.wizardchan.test.png" border=0>';
//echo '<img src="'.$json_o->avatarfull.'"/>';
//echo'Profile Picture: <img src="'.$picture.'">';
//echo'<img src"http://wizardchan.org/test/src/1shuu4q3.wizardchan.test.png">';

// array method
foreach($json_a[response] as $p)
{
echo '
<p>
Name: '.$p[response].'
';
}
// object method
/*foreach($json_o->person as $p)
{
echo '

<p>
Name: '.$p->name->first.' '.$p->name->last.'

Age: '.$p->age.'

';
}
*/
?>

