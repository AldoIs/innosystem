<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use LeagueWrap\Api;
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;

/* $myKey = "6b358a5a-85ca-49d1-92d4-b148e1344e2c";

	/* TABLA MYSQL
	id
	region 1 2 3 4 5
	id_user
	summoner_id
	summoner_name
	summoner_level
	profile_icon
	has_been_updated
	update_automatically
	time_created
	time_updated */

	/*$api      = new Api($myKey);            
	$api->setRegion('lan');
	$summoner = $api->summoner();           
	$bakasan  = $summoner->info('stinson'); 
	echo $bakasan->id . " ///";                      
	echo $bakasan->name;                    
	echo $bakasan->summonerLevel;           
	echo $bakasan->profileIconId;           
	echo $bakasan->revisionDate. "<br>";

$matchlistapi = $api->matchlist() ;
echo $matchlist = $matchlist->matchlist($bakasan->id). "<br>";
echo $numberOfplayedGames = $matchlist->totalGames. "<br>";
echo $roleInGame = $matchlist->match(0)->role. "<br>"; */           

?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>
