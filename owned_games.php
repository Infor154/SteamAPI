<?		session_start();
?>
<!DOCTYPE html>
<html data-wf-site="53eb9e82a6f42a2f6a367254" data-wf-page="53f7a74550dd597647b874b6">
<head>
  <meta charset="utf-8">
  <title>What do you want to know?</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/webflow.css">
  <link rel="stylesheet" type="text/css" href="css/steam-api.webflow.css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Petit Formal Script:regular"]
      }
    });
  </script>
  <script type="text/javascript" src="js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
  <div class="w-clearfix bars-wrapper">
    <div class="bar"></div>
    <div class="bar _2"></div>
    <div class="bar _3"></div>
    <div class="bar _4"></div>
    <div class="bar _5"></div>
    <div class="bar _6"></div>
    <div class="bar"></div>
  </div>
  <div class="header-section">
    <div class="w-container container">
      <h1 data-ix="new-interaction">Steam API&nbsp;Interaction</h1>
      <p class="subtitle"></p>
	  
			<?php
			session_start();
			$keyword = $_SESSION['idofuser'];
			$apikey = "6A5E0383706DC7B0B3B05FBDEB330543";  /* put your API key here */ 

			$profile = file_get_contents('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=' .$apikey. '&steamids='.$keyword);
			$arra= $profile->players;
			$json = json_decode($profile);
			
			// $opts = array('http'=>array('games' => "User-Agent:MyAgent/1.0\r\n"));
			// $context = stream_context_create($opts);
			// $games = file_get_contents('http://api.steampowered.com/IPlayerService/GetOwnedGames/v0001/?key=' .$apikey. '&steamids='.$keyword,false,$context);

			$games = file_get_contents('http://api.steampowered.com/IPlayerService/GetOwnedGames/v0001/?key=' .$apikey. '&steamid='.$keyword);
			//$arra2= $games->game_count;
			$json2 = json_decode($games);
			$totalnumberofgames=$json2->response->game_count;
			$profilepic=$json->response->players[0]->avatarfull;
			$name=$json->response->players[0]->realname;



			echo '<center><p><img src ="'.$profilepic.'">';
			echo '<center><h1>'.$name.'</h1>';
			echo '<center><h2>Number of Games: '.$totalnumberofgames.'<h2>';
		
		?>
			

      </div>
      <div class="image-crop">
        <img src="images/steam.png" alt="53eb9f9dcf6ba7c144ec5c62_steam.png">
      </div>
    </div>
  </div>
  <div class="social-section">
    <div class="w-container">
      <h2>Search for Friends</h2>
      <div class="refer">Find your steam friends</div>
    </div>
  </div>
  <div class="footer-section">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-6 w-col-small-6">
          <div class="copyright">©&nbsp;Tola, Shaun, Runhong, Alexa</div>
        </div>
        <div class="w-col w-col-6 w-col-small-6 align-right"></div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/webflow.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>